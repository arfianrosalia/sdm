<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_access extends CI_Model {

	public function p($x=null){
		$data = $this->db->select('username,password')->get_where('personalia_pegawai',array('id_token'=>$x));

		if($data->num_rows()>0){
			
		}else{
			return null;
		}

	}
}