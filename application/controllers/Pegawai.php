<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

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

	public function list_pegawai(){
		$this->load->model('model_pegawai');
		
		$var['content'] = 'view-pegawai';
		$var['js'] = 'js-pegawai';

		$var['ls_pegawaiTraining'] = $this->model_pegawai->getListPegawaiTraining();
		$var['ls_pegawaiTetap'] = $this->model_pegawai->getListPegawaiTetap();
		$var['ls_pegawaiKontrak'] = $this->model_pegawai->getListPegawaiKontrak();
		$var['ls_pegawai'] = $this->model_pegawai->getListPegawai();


		$var['ls_gelar'] = $this->model_pegawai->getMaster('gelar');
		$var['ls_pendidikan'] = $this->model_pegawai->getMaster('pendidikan');
		$var['ls_agama'] = $this->model_pegawai->getMaster('agama');
		$var['ls_fungsional'] = $this->model_pegawai->getMaster('fungsional');
		$var['ls_department'] = $this->model_pegawai->getMaster('department');
		$var['ls_jabatan'] = $this->model_pegawai->getMaster('jabatan');
		$var['ls_lokasi_agen'] = $this->model_pegawai->getMaster('lokasi_agen');
		$var['ls_status_karyawan'] = $this->model_pegawai->getMaster('status_karyawan');
		$var['ls_status_pribadi'] = $this->model_pegawai->getMaster('status_pribadi');
		$var['ls_atasan'] = $this->model_pegawai->getAtasan();


		$var['ls_provinsi'] = $this->model_pegawai->getProvinsi();
		// $var['ls_kota'] = $this->model_pegawai->getKabupaten();
		// $var['ls_kecamatan'] = $this->model_pegawai->getKecamatan();
		// $var['ls_kelurahan'] = $this->model_pegawai->getKelurahan();




		$this->load->view('view-index',$var);
	}

	public function pegawaiByID(){
		$this->load->model('model_pegawai');	
		$var['ls_pegawai'] = $this->model_pegawai->getListPegawaiByID($this->input->post('token'));

		$kota_kelahiran = $this->model_pegawai->getKotaKelahiran($var['ls_pegawai']->kota_kelahiran);



		if(!empty($var['ls_pegawai'])){
			echo json_encode(array('status'=>1,'message'=>'Data ditemukan','result'=>$var['ls_pegawai']));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data tidak ditemukan','result'=>null));
		}
	}

	public function getImg(){
		$token = $this->input->post('token');
		$img = $this->db->select('foto')->get_where('personalia_pegawai',array('id_token'=>$token));


		if($img->num_rows()>0){
			echo json_encode(array('status'=>1,'message'=>'Data ditemukan','result'=>$img->row()->foto));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data tidak ditemukan','result'=>null));
		}
	}

	public function getProvinsi(){
		$this->load->model('model_pegawai');	
		$var['ls_provinsi'] = $this->model_pegawai->getProvinsi();

		if(!empty($var['ls_provinsi'])){
			echo json_encode(array('status'=>1,'message'=>'Data ditemukan','result'=>$var['ls_provinsi']));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data tidak ditemukan','result'=>null));
		}
	}

	public function getKabupaten(){
		$this->load->model('model_pegawai');	
		$var['ls_kabupaten'] = $this->model_pegawai->getKabupaten();

		if(!empty($var['ls_kabupaten'])){
			echo json_encode(array('status'=>1,'message'=>'Data ditemukan','result'=>$var['ls_kabupaten']));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data tidak ditemukan','result'=>null));
		}
	}

	public function getKecamatan(){
		$this->load->model('model_pegawai');	
		$var['ls_kecamatan'] = $this->model_pegawai->getKecamatan();

		if(!empty($var['ls_kecamatan'])){
			echo json_encode(array('status'=>1,'message'=>'Data ditemukan','result'=>$var['ls_kecamatan']));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data tidak ditemukan','result'=>null));
		}
	}

	public function getKelurahan(){
		$this->load->model('model_pegawai');	
		$var['ls_kelurahan'] = $this->model_pegawai->getKelurahan();

		if(!empty($var['ls_kelurahan'])){
			echo json_encode(array('status'=>1,'message'=>'Data ditemukan','result'=>$var['ls_kelurahan']));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data tidak ditemukan','result'=>null));
		}
	}

	public function getKotaBy(){
		$this->load->model('model_pegawai');	
		
		$id = $this->input->post('x');
		$var['ls_kota'] = $this->model_pegawai->getKabupaten($id);

		if(!empty($var['ls_kota'])){
			echo json_encode(array('status'=>1,'message'=>'Data ditemukan','result'=>$var['ls_kota']));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data tidak ditemukan','result'=>null));
		}
	}

	public function genNIK(){
		$getMax = $this->db
					->select("MAX(CAST(nik AS UNSIGNED)) as LASTNIK")
					->get('personalia_pegawai')
					->row()->LASTNIK;

		if(!empty($getMax)){
			echo json_encode(array('status'=>1,'message'=>'Generated Success','result'=>((int)$getMax+1)));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Error Generated','result'=>null));
		}
	}

	public function insertPegawai(){
		$data = $this->input->post('data');
		$token = md5(sha1($data['c_nik']));
		$history = $this->input->post('his');

		$ck_dup = $this->db->get_where('personalia_pegawai',array('id_token'=>$token));
		if($ck_dup->num_rows()>0){
			echo json_encode(array('status'=>0,'message'=>'Data dengan NIK tersebut sudah ada. Silahkan muat ulang.'));
		}else{
			$fix = (Object)array();
			foreach ($data as $key => $value) {
				$k_fix = str_replace("c_","",$key);
				$fix->$k_fix = $value;
			}

			$fix->id_token = $token;

			$this->his(1,$ck_dup);

			
			$insert = $this->db->insert('personalia_pegawai',$fix);

			echo json_encode(array('status'=>1,'message'=>'Berhasil memasukkan Data.'));
		}
	}

	public function updatePegawai(){
		$token = $this->input->post('token');
		$data = $this->input->post('data');
		$history = $this->input->post('his');
		

		$ck_dup = $this->db->get_where('personalia_pegawai',array('id_token'=>$token));

		if($ck_dup->num_rows()>0){
			

			$fix = (Object)array();
			foreach ($data as $key => $value) {
				$k_fix = str_replace("c_","",$key);
				$fix->$k_fix = $value;
			}

			$this->his($history,2,$ck_dup);

			
			$update = $this->db->where('id_token',$token)->update('personalia_pegawai',$fix);
			

			if($update){
				echo json_encode(array('status'=>1,'message'=>'Berhasil mengubah Data.'));
			}else{
				echo json_encode(array('status'=>0,'message'=>'Gagal mengubah Data.'));
			}

		}else{

		}
	}

	function his($data=null,$type=null,$ck_dup=null){
		// HIS
		$history = $data;
		$c = $ck_dup->row();
		$f_his = Array();

		if(!empty($data)){
			foreach ($history as $key => $value) {
				$k_fix = str_replace("c_","",$key);

				$MaxID = $this->db
								->where('trigger_table','master_'.$k_fix)
								->where('id_pegawai',$c->id)
								->select_max('id')
								->get('history_pegawai')->row()->id;


				$ck_double = $this->db->get_where('history_pegawai',array('id'=>$MaxID));

				if($ck_double->num_rows()>0){
					if($ck_double->row()->trigger_id!=$value){
						array_push($f_his,array(
								'id_pegawai'=>$c->id,
								'trigger_id'=>$value,
								'trigger_table'=>'master_'.$k_fix,
								'trigger_type'=>$type
							)
						);
					}
				}else{
					array_push($f_his,array(
							'id_pegawai'=>$c->id,
							'trigger_id'=>$value,
							'trigger_table'=>'master_'.$k_fix,
							'trigger_type'=>$type
						)
					);
				}

			}

			$insert_his = $this->db->insert_batch('history_pegawai',$f_his);
		}
		// END OF HIS
	}
}
