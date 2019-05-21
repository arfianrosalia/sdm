<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {
	public function index(){

	}

	public function d(){
		$id = $this->input->post('id');
		$t = $this->input->post('t');
		$this->load->model('model_history');

		switch ($t) {
			case 'd':
				$var['ls_history'] = $this->model_history->x($id,'master_department','department');
				$var['title'] = 'Department';
				break;
			case 'sd':
				$var['ls_history'] = $this->model_history->x($id,'master_department_sub','department_sub');
				$var['title'] = 'Sub Department';
				break;
			case 'j':
				$var['ls_history'] = $this->model_history->x($id,'master_jabatan','jabatan');
				$var['title'] = 'Jabatan';
				break;
			case 's':
				$var['ls_history'] = $this->model_history->x($id,'master_status_karyawan','status_karyawan');
				$var['title'] = 'Status Karyawan';
				break;
			case 'a':
				$var['ls_history'] = $this->model_history->x($id,'master_lokasi_agen','agen');
				$var['title'] = 'Lokasi Agen';
				break;
			
			default:
				# code...
				break;
		}
		
		$this->load->view('view-history',$var);
	}
}

