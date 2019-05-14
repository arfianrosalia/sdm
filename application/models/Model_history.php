<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_history extends CI_Model {

	public function x($x=null,$m=null,$n=null){
		$data = $this->db->select('id')->get_where('personalia_pegawai',array('id_token'=>$x));

		if($data->num_rows()>0){
			$tb = $this->db
					->select('d.nama_'.$n.' as n_his,h.insert_date as his_date,h.trigger_type')
					->from('history_pegawai as h')
					->join($m.' as d','h.trigger_id=d.id','letf')
					->where('h.id_pegawai',$data->row()->id)
					->where('h.trigger_table',$m)
					->get();
			if($tb->num_rows()>0){
				return $tb->result();
			}else{
				return null;
			}
		}else{
			return null;
		}

	}
}