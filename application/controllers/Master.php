<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {


	
	public function master_departemen(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-departemen';
		$var['ls_departement'] = $this->model_master->getListDepartement();
		$this->load->view('view-index',$var);
	}
	public function master_jabatan(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-jabatan';
		$var['ls_jabatan'] = $this->model_master->getListJabatan();
		$this->load->view('view-index',$var);
	}
	public function master_StatusKaryawan(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-statuskaryawan';
		$var['ls_statusKaryawan'] = $this->model_master->getListStatusKaryawan();
		$this->load->view('view-index',$var);
	}
	public function master_GelarNama(){
		$this->load->model('model_master');
		$var['js'] ='js-master';
		$var['content'] = 'view-GelarNama';
		$var['ls_GelarNama'] = $this->model_master->getListGelarNama();
		$this->load->view('view-index',$var);
	}
	public function master_pendidikan(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-pendidikan';
		$var['ls_pendidikan'] = $this->model_master->getListPendidikan();
		$this->load->view('view-index',$var);
	}
	Public function master_wilayahKecamatan(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-wilayahKecamatan';
		$var['ls_wilayahKecamatan'] = $this->model_master->getListWilayahDistricts()->result();
		$this->load->view('view-index',$var);
	}
	Public function master_wilayahProvinsi(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-wilayahProvinsi';
		$var['ls_wilayahProvinsi'] = $this->model_master->getListWilayahProvinces()->result();
		$this->load->view('view-index',$var);
	}
	Public function master_wilayahKabupaten(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-wilayahKabupaten';
		$var['ls_wilayahKabupaten'] = $this->model_master->getListWilayahRegencies()->result();
		$this->load->view('view-index',$var);
	}
	Public function master_wilayahKelurahan(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-wilayahKelurahan';
		$var['ls_wilayahKelurahan'] = $this->model_master->getListWilayahVillages()->result();

		$this->load->view('view-index',$var);
	}

	// public function add(){
	// 	$this->load->database();
	// 	$data = $this->input->post();

	// 	// if ($type=1) {
	// 	// 	$tabel='master_departement';
	// 	// }else ($type=2) {
	// 	// 	$tabel='master_gelar';
	// 	// }else ($type=3) {
	// 	// 	$tabel='master_jabatan';
	// 	// }else ($type=4) {
	// 	// 	$teble='master_pendidikan';
	// 	// }else($type=5) {
	// 	// 	$table='master_status_karyawan';
	// 	// }else ($type=6) {
	// 	// 	$table='master_status_keaktifan';
	// 	// }

	// 	$this->db->insert($table,$data)
		
	// };
	
}
