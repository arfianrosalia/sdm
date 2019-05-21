<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		
		$var['content'] = 'view-dashboard';

		$this->load->view('view-index',$var);
	}

	public function gen_user(){
		$in = $this->db->get('tmpegawai_copy')->result();
		$toInsert = array();

		foreach ($in as $key => $value) {
			array_push($toInsert,array(
				'id'=>$value->PegawaiID,
				'nik'=>$value->NIK,
				'no_ktp'=>$value->noKtp,
				'nama_lengkap'=>$value->NamaLengkap,
				'nama_singkat'=>$value->NamaSingkat,
				'fungsional'=>$value->Fungsional,
				'tmt'=>$value->TMT,
				'department'=>$value->DepartemenID,
				'lokasi_agen'=>$value->WilayahID,
				'jabatan'=>$value->JabatanID,
				'status_karyawan'=>$value->StatusKaryawanID,
				'gelar'=>$value->GelarID,
				'tanggal_lahir'=>$value->TglLahir,
				'pendidikan'=>$value->PendidikanID,
				'agama'=>$value->AgamaID,
				'kota_kelahiran'=>$value->KotaKelahiran,
				'status_pribadi'=>$value->StatusPribadiID,
				'alamat'=>$value->Alamat,
				'kode_pos'=>$value->KodePos,
				'kewarganegaraan'=>$value->WargaNegaraID,
				'no_telepon'=>$value->NoTelp,
				'catatan'=>$value->Catatan,
				'nama_pasangan'=>$value->NamaIstriSuami,
				'jumlah_anak'=>$value->JumlahAnak,
				'atasan'=>$value->AtasanID,
				'jenis_kelamin'=>$value->Sex,
				'insert_date'=>$value->tglentry,
				'foto'=>null
			));
		}

		$insert_user = $this->db->insert_batch('personalia_pegawai',$toInsert);

		if($insert_user){
			$this->gen_kota_kelahiran();
			$this->gen_token();
		}
	}

	public function gen_token(){
		$p = $this->db->select('id,nik')->get('personalia_pegawai')->result();

		foreach ($p as $key => $value) {
			$this->db->where('id',$value->id)->update('personalia_pegawai',array(
				'id_token'=>md5(sha1($value->nik))
			));
		}
	}

	public function ch_fungsional(){
		$in = $this->db->get('tmpegawai_copy')->result();

		foreach ($in as $key => $value) {
			$id_fungsional = $this	->db
						->get_where('master_fungsional',array('nama_fungsional'=>$value->Fungsional))
						->row()->id;

			$this->db->where('id',$value->PegawaiID)->update('personalia_pegawai',array('fungsional'=>$id_fungsional));
		}
	}

	public function gen_department(){
		function d($x){
			if($x==1){
				return date('Y-m-d H:i:s');
			}
		}
		$in = $this->db->get('tmdepartment')->result();

		foreach ($in as $key => $value) {
			$this->db->insert('master_department',array(
				'id'=>$value->departemenID,
				'nama_department'=>$value->departemen,
				'keterangan'=>$value->keterangan,
				'delete_date'=>d($value->dihapus),
				'is_delete'=>$value->dihapus
			));
		}

		echo "SUKSES";
	}

	public function gen_jabatan(){
		$in = $this->db->get('tmjabatan')->result();
		foreach ($in as $key => $value) {
			$this->db->insert('master_jabatan',array(
				'id'=>$value->jabatanID,
				'nama_jabatan'=>$value->jabatan,
				'keterangan'=>$value->keterangan
			));
		}

		echo "SUKSES";
	}

	public function gen_kota(){
		$in = $this->db->get('tmp_kota')->result();
		foreach ($in as $key => $value) {
			$this->db->where('id',$value->id)->update('personalia_pegawai',array(
				'kota_kelahiran'=>$value->kota
			));
		}

		echo "SUKSES";
	}

	public function gen_kota_kelahiran(){
		$p = $this->db->select('id,kota_kelahiran')->get('personalia_pegawai')->result();

		foreach ($p as $key => $value) {
			$id_kota = $this->db->select('id,name')->like('name',$value->kota_kelahiran,'both')->get('wilayah_regencies');

			if(!empty($value->kota_kelahiran)){
				if($id_kota->num_rows()>0){
					$this->db->where('id',$value->id)->update('personalia_pegawai',array(
						'kota_kelahiran'=>$id_kota->row()->id
					));
				}
			}
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		redirect('login');
	}
}

