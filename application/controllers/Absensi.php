<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

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
		
		$var['content'] = 'view-absensi';
		$var['js'] = 'js-absensi';

		$this->load->view('view-index',$var);
	}

	public function getBySubDepartment(){
		$inp_user = $this->session->username;
		$inp_pass = md5(sha1($this->session->password));

		
		$pengabsen = $this->db->select('
			id,
			nama_singkat,
			department,
			department_sub
		')->get_where('personalia_pegawai',array('is_delete'=>0,'nik'=>$inp_user,'password'=>$inp_pass));

		if($pengabsen->num_rows()>0){
			$id = $pengabsen->row()->id;
			$dep = $pengabsen->row()->department;
			$sub_dep = $pengabsen->row()->department_sub;

			$hak = $this->db->select('akses_absensi')
							->get_where('hak_akses',array(
								'is_delete'=>0,
								'id_pegawai'=>$id,
								'akses_absensi'=>1
							));

			if($hak->num_rows()>0){
				$users = $this->db->select('
					p.id,
                	p.nik,
                	p.nama_lengkap,
                	p.nama_singkat,
                	d.nama_department,
                	s.nama_department_sub,
                	p.fungsional
                ')
                ->where('p.is_delete',0)
                ->where('p.department',$dep)
                ->where('p.department_sub',$sub_dep)
                ->from('personalia_pegawai p')
                ->join('master_department d','p.department=d.id','left')
                ->join('master_department_sub s','p.department_sub=s.id','left')
                ->get();
				;	

				if($users->num_rows()>0){
					echo json_encode(array('status'=>1,'message'=>'User granted.','result'=>$users->result()));
				}
			}else{
				echo json_encode(array('status'=>0,'message'=>'Anda tidak mempunyai akses Absensi.','result'=>null));
			}

		}else{
			echo json_encode(array('status'=>0,'message'=>'User tidak ditemukan / NIK atau Password salah.','result'=>null));
		}
	}

	public function verifikasi_absensi(){
		$username = $this->session->username;
		$password = md5(sha1($this->session->password));
		$inp = $this->input->post('data');
		$data = $this->db->select('id')->get_where('personalia_pegawai',array('nik'=>$username,'password'=>$password));
		if($data->num_rows()>0){
			foreach ($inp as $key => $value) {
					 $cek = $this->db->get_where('penggajian_absensi',array('pegawai_id'=>$value['id'],'status_kehadiran'=>$value['status_kehadiran']));
					 if ($cek->num_rows()>0){
					 		$this->db->update('penggajian_absensi',array('pegawai_id'=>$value['id'], 'status_kehadiran'=>$value['status_kehadiran']));
					 }else{
					 		$this->db->insert('penggajian_absensi',array('pegawai_id'=>$value['id'], 'status_kehadiran'=>$value['status_kehadiran']));
					 }
				}
		}
	}

	public function getList_Harian(){
		
	}
}

				