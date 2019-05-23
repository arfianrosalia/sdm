<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
	function __construct() {
	    parent::__construct();

	    $this->load->model('model_access');
	    
	}

	public function index(){

	}

	function _acc(){
		return $this->model_access;
	}

	public function a(){
		$id_token = $this->input->post('token');
		$var['title'] = "HAK AKSES";
		$data = $this->db->select('id')->get_where('personalia_pegawai',array('id_token'=>$id_token));
		if($data->num_rows()>0){
			$ha = $this->db->select('*')->get_where('hak_akses',array('id_pegawai'=>$data->row()->id));
			if($data->num_rows()>0){
				$var['ls_ha'] = $ha->row();
			}else{
				$var['ls_ha'] = null;
			}
		}

		print_r($var['ls_ha']);

		// $var['person'] = $this->_acc()->p($id_token);

		$this->load->view('view-hak_akses',$var);
	}

	public function u(){
		$token = $this->input->post('token');
		$inp = $this->input->post('data');
		$txt = $this->input->post('input');

		$data = $this->db->select('id')->get_where('personalia_pegawai',array('id_token'=>$token));
		

		if($data->num_rows()>0){
			$h = $this->db->select('*')->get_where('hak_akses',array('id_pegawai'=>$data->row()->id));

			if($h->num_rows()>0){
				$this->db->where('id_pegawai',$data->row()->id)->update('hak_akses',(Object)$inp);
			}else{
				$inp['id_pegawai'] = $data->row()->id;
				$this->db->insert('hak_akses',(Object)$inp);
			}
		}

	}
}

