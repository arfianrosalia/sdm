<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("master_model");
		$this->load->library('form_validation');
	}
	public function index(){
		
		$var['content'] = 'view-dashboard';

		$this->load->view('view-index',$var);
	}

	public function add(){
		$this->load->model('model_master');
		
		$var['content'] = 'view-add-pegawai';
		$var['js'] = 'js-pegawai';
		$var['ls_pegawai'] = $this->model_pegawai->getListPegawai();

		$this->load->view('view-index',$var);
	}
}
