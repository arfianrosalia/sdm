<?php
	$CI =& 	get_instance();
	$CI->load->library('session');
	
	if($CI->uri->segment(1)=='loginlogin'){
		if($CI->session->has_userdata('username') && $CI->session->has_userdata('password')){
			if($CI->session->username == 'arfian' && $CI->session->password == 'moch'){
				redirect('pegawai');
			}
		}
	}else{
		if($CI->session->has_userdata('username') && $CI->session->has_userdata('password')){
			if($CI->session->username == 'arfian' && $CI->session->password == 'moch'){
				// redirect('loginlogin');
			}else{
				redirect('loginlogin');
			}
		}else{
			redirect('loginlogin');
		}
	}

