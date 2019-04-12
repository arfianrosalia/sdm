<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model_pegawai extends CI_Model {

		public function getListPegawai(){
			$load = $this->db
					// ->select('nama_singkat,nama_fungsional,nama_jabatan,nama_department,nama_status,no_telp,nama_atasan')
					->select('nama_singkat,nama_fungsional,nama_department,no_telepon')
					->from('personalia_pegawai')
					->join('master_fungsional','master_fungsional.id=personalia_pegawai.fungsional','left')
					->join('master_department','master_department.id=personalia_pegawai.department','left')
					->get();
			if($load->num_rows()>0){
				return $load->result();
			}else{
				return null;
			}
		}
	}