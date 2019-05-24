<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		// echo $this->session->username;
		$this->load->view('view-login');
	}

	public function submit(){
		// echo $this->uri->segment(1);
		
		$this->session->set_userdata('username',$this->input->post('username'));
		$this->session->set_userdata('password',$this->input->post('password'));
		redirect('pegawai');
	}
}
