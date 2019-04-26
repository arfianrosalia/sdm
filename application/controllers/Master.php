<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {


	public function master_agama(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-agama';
		$var['ls_agama'] = $this->model_master->getListAgama();
		$this->load->view('view-index',$var);
	}
	public function master_departmen(){
		$this->load->model('model_master');
		$var['js'] = 'js-masterDepartment';
		$var['content'] = 'view-departmen';
		$var['ls_department'] = $this->model_master->getListDepartment();
		$this->load->view('view-index',$var);
	}
	public function add_department(){
		$this->load->model('model_master');
		$data = $this->model_master-> add_department();
		echo json_encode($data);
	}
	public function delete_department(){
		$this->load->model('model_master');
		$var = $this->model_master->delete_department($_POST['id']);
		if ($var) {
			echo "1";
		}else{
			echo "0";
		}
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
	public function master_agen(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-agen';
		$var['ls_agen'] = $this->model_master->getListAgen();
		$this->load->view('view-index',$var);
	}
	
	
	public function master_StatusPribadi(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-statusPribadi';
		$var['ls_statusPribadi'] = $this->model_master->getListStatusPribadi();
		$this->load->view('view-index',$var);
	}
	public function master_fungsional(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-fungsional';
		$var['ls_fungsional'] = $this->model_master->getListFungsional();
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
