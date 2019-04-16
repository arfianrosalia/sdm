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

		$var['ls_pegawai'] = $this->model_pegawai->getListPegawai();
		$var['ls_gelar'] = $this->model_pegawai->getMaster('gelar');
		$var['ls_pendidikan'] = $this->model_pegawai->getMaster('pendidikan');
		$var['ls_agama'] = $this->model_pegawai->getMaster('agama');
		$var['ls_fungsional'] = $this->model_pegawai->getMaster('fungsional');
		$var['ls_department'] = $this->model_pegawai->getMaster('department');
		$var['ls_jabatan'] = $this->model_pegawai->getMaster('jabatan');
		$var['ls_lokasi_agen'] = $this->model_pegawai->getMaster('agen');
		$var['ls_status_karyawan'] = $this->model_pegawai->getMaster('status_karyawan');
		$var['ls_status_pribadi'] = $this->model_pegawai->getMaster('status_pribadi');
		$var['ls_atasan'] = $this->model_pegawai->getAtasan();

		$var['ls_provinsi'] = $this->model_pegawai->getProvinsi();


		$this->load->view('view-index',$var);
	}

	public function pegawaiByID(){
		$this->load->model('model_pegawai');	
		$var['ls_pegawai'] = $this->model_pegawai->getListPegawaiByID($this->input->post('token'));

		if(!empty($var['ls_pegawai'])){
			echo json_encode(array('status'=>1,'message'=>'Data ditemukan','result'=>$var['ls_pegawai']));
		}else{
			echo json_encode(array('status'=>0,'message'=>'Data tidak ditemukan','result'=>null));
		}
	}
}
