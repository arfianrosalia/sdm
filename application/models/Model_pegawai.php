<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model_pegawai extends CI_Model {

		public function getListPegawai(){
			$this->db->get_where('personalia_pegawai',array('is_delete'=>0));
		}
	}