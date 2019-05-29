<?php
	$CI =& 	get_instance();
	$CI->load->library('session');
	$CI->load->database();

	// $CI->db->select('id,username,password')->get_where('personalia_pegawai',array('username'=>$u,'password'=>md5(sha1($p))));
	function u($u=null,$p=null,$t=null){
		$user = $t->db->select('id,nik,password')->get_where('personalia_pegawai',array('nik'=>$u,'password'=>md5(sha1($p))));
		if($user->num_rows()>0){
			return $user->row();
		}else{
			return null;
		}
	}

	function hak($i=null){
		$CI =& 	get_instance();
		$h = $CI->db->select('*')->get_where('hak_akses',array('id_pegawai'=>$i));
		if($h->num_rows()>0){
			return $h->row();
		}else{
			return null;
		}
	}

	function unset_session(){
		$CI =& 	get_instance();
		$CI->session->unset_userdata('username');
		$CI->session->unset_userdata('password');
		$CI->session->sess_destroy();
	}

	
	if($CI->uri->segment(1)=='login'){
		if($CI->session->has_userdata('username') && $CI->session->has_userdata('password')){
			$validate = u($CI->session->username,$CI->session->password,$CI);

			if(!empty($validate)){
				if(!empty(hak($validate->id))){
					if(hak($validate->id)->akses_login==1){
						redirect('pegawai');
					}
				}
			}
		}
	}else{
		if($CI->uri->segment(1)=='api'){
			
		}else{
			if($CI->session->has_userdata('username') && $CI->session->has_userdata('password')){
				$validate = u($CI->session->username,$CI->session->password,$CI);
				if(!empty($validate)){

					if(!empty(hak($validate->id))){
						if(hak($validate->id)->akses_login==1){
							
						}else{
							unset_session();
							redirect('login');
							
						}
					}else{
						// unset_session();
						unset_session();
						redirect('login');
						
					}
				}else{
					unset_session();
					redirect('login');
					
				}
			}else{
				unset_session();
				redirect('login');
				
			}
		}
	}
