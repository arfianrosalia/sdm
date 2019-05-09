<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {


	public function master_agama(){
		$this->load->model('model_master');
		$var['js'] = 'js-masterAgama';
		$var['content'] = 'view-agama';
		$var['ls_agama'] = $this->model_master->getListAgama();
		$this->load->view('view-index',$var);
	}
	public function add_agama(){
		$this->load->model('model_master');
		$data = $this->model_master-> add_agama();
		echo json_encode($data);
	}
	public function delete_agama(){
		$this->load->model('model_master');
		$var = $this->model_master->delete_agama($_POST['id']);
		if ($var) {
			echo "1";
		}else{
			echo "0";
		}
	}
	public function get_idAgama(){
		$this->load->model('model_master');
		$data = $this->model_master->get_idAgama($_POST['id']);
		echo json_encode($data);
	}
	public function update_agama(){
		$this->load->model('model_master');
		$data = $this->model_master->update_agama();
		echo json_encode($data);
		
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
	public function get_idDepartment(){
		$this->load->model('model_master');
		$data = $this->model_master->get_idDepartment($_POST['id']);
		echo json_encode($data);
	}
	public function update_department(){
		$this->load->model('model_master');
		$data = $this->model_master->update_department();
		echo json_encode($data);
		
	}
	public function master_jabatan(){
		$this->load->model('model_master');
		$var['js'] = 'js-masterJabatan';
		$var['content'] = 'view-jabatan';
		$var['ls_jabatan'] = $this->model_master->getListJabatan();
		$this->load->view('view-index',$var);
	}
	
	
	public function add_jabatan(){
		$this->load->model('model_master');
		$data = $this->model_master-> add_jabatan();
		echo json_encode($data);
	}
	public function delete_jabatan(){
		$this->load->model('model_master');
		$var = $this->model_master->delete_jabatan($_POST['id']);
		if ($var) {
			echo "1";
		}else{
			echo "0";
		}
	}
	public function get_idJabatan(){
		$this->load->model('model_master');
		$data = $this->model_master->get_idJabatan($_POST['id']);
		echo json_encode($data);
	}
	public function update_jabatan(){
		$this->load->model('model_master');
		$data = $this->model_master->update_jabatan();
		echo json_encode($data);
		
	}
	public function master_StatusKaryawan(){
		$this->load->model('model_master');
		$var['js'] = 'js-masterStatusKaryawan';
		$var['content'] = 'view-statuskaryawan';
		$var['ls_statusKaryawan'] = $this->model_master->getListStatusKaryawan();
		$this->load->view('view-index',$var);
	}
	public function add_StatusKaryawan(){
		$this->load->model('model_master');
		$data = $this->model_master-> add_StatusKaryawan();
		echo json_encode($data);
	}
	public function delete_StatusKaryawan(){
		$this->load->model('model_master');
		$var = $this->model_master->delete_StatusKaryawan($_POST['id']);
		if ($var) {
			echo "1";
		}else{
			echo "0";
		}
	}
	public function get_idStatusKaryawan(){
		$this->load->model('model_master');
		$data = $this->model_master->get_idStatusKaryawan($_POST['id']);
		echo json_encode($data);
	}
	public function update_StatusKaryawan(){
		$this->load->model('model_master');
		$data = $this->model_master->update_StatusKaryawan();
		echo json_encode($data);
		
	}
	
	public function master_pendidikan(){
		$this->load->model('model_master');
		$var['js'] = 'js-master';
		$var['content'] = 'view-pendidikan';
		$var['ls_pendidikan'] = $this->model_master->getListPendidikan();
		$this->load->view('view-index',$var);
	}
	public function add_pendidikan(){
		$this->load->model('model_master');
		$data = $this->model_master-> add_pendidikan();
		echo json_encode($data);
	}
	public function delete_pendidikan(){
		$this->load->model('model_master');
		$var = $this->model_master->delete_pendidikan($_POST['id']);
		if ($var) {
			echo "1";
		}else{
			echo "0";
		}
	}
	public function get_idpendidikan(){
		$this->load->model('model_master');
		$data = $this->model_master->get_idpendidikan($_POST['id']);
		echo json_encode($data);
	}
	public function update_pendidikan(){
		$this->load->model('model_master');
		$data = $this->model_master->update_pendidikan();
		echo json_encode($data);
		
	}
	public function master_agen(){
		$this->load->model('model_master');
		$var['js'] = 'js-masterAgen';
		$var['content'] = 'view-agen';
		$var['ls_agen'] = $this->model_master->getListAgen();
		$this->load->view('view-index',$var);
	}
	
	public function add_agen(){
		$this->load->model('model_master');
		$data = $this->model_master-> add_agen();
		echo json_encode($data);
	}
	public function delete_agen(){
		$this->load->model('model_master');
		$var = $this->model_master->delete_agen($_POST['id']);
		if ($var) {
			echo "1";
		}else{
			echo "0";
		}
	}
	public function get_idAgen(){
		$this->load->model('model_master');
		$data = $this->model_master->get_idAgen($_POST['id']);
		echo json_encode($data);
	}
	public function update_agen(){
		$this->load->model('model_master');
		$data = $this->model_master->update_agen();
		echo json_encode($data);
		
	}
	public function master_StatusPribadi(){
		$this->load->model('model_master');
		$var['js'] = 'js-masterStatuspribadi';
		$var['content'] = 'view-statusPribadi';
		$var['ls_statusPribadi'] = $this->model_master->getListStatusPribadi();
		$this->load->view('view-index',$var);
	}
	public function add_SetatusPribadi(){
		$this->load->model('model_master');
		$data = $this->model_master-> add_SetatusPribadi();
		echo json_encode($data);
	}
	public function delete_SetatusPribadi(){
		$this->load->model('model_master');
		$var = $this->model_master->delete_SetatusPribadi($_POST['id']);
		if ($var) {
			echo "1";
		}else{
			echo "0";
		}
	}
	public function get_idSetatusPribadi(){
		$this->load->model('model_master');
		$data = $this->model_master->get_idSetatusPribadi($_POST['id']);
		echo json_encode($data);
	}
	public function update_SetatusPribadi(){
		$this->load->model('model_master');
		$data = $this->model_master->update_SetatusPribadi();
		echo json_encode($data);
		
	}
	public function master_fungsional(){
		$this->load->model('model_master');
		$var['js'] = 'js-masterFungsional';
		$var['content'] = 'view-fungsional';
		$var['ls_fungsional'] = $this->model_master->getListFungsional();
		$this->load->view('view-index',$var);
	}
	public function add_fungsional(){
		$this->load->model('model_master');
		$data = $this->model_master-> add_fungsional();
		echo json_encode($data);
	}
	public function delete_fungsional(){
		$this->load->model('model_master');
		$var = $this->model_master->delete_fungsional($_POST['id']);
		if ($var) {
			echo "1";
		}else{
			echo "0";
		}
	}
	public function get_idfungsional(){
		$this->load->model('model_master');
		$data = $this->model_master->get_idfungsional($_POST['id']);
		echo json_encode($data);
	}
	public function update_fungsional(){
		$this->load->model('model_master');
		$data = $this->model_master->update_fungsional();
		echo json_encode($data);
		
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


	
}
