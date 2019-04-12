<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model_pegawai extends CI_Model {

		public function getListPegawai(){
			$load = $this->db
					->select('p.nama_singkat,nama_fungsional,nama_jabatan,nama_department,nama_status,p.no_telepon,pa.nama_singkat as nama_atasan')
					// ->select('p.nama_singkat,nama_fungsional,nama_department,p.no_telepon')
					->from('personalia_pegawai as p')
					->join('master_fungsional','master_fungsional.id=p.fungsional','left')
					->join('master_department','master_department.id=p.department','left')
					->join('master_jabatan','master_jabatan.id=p.jabatan','left')
					->join('master_status_karyawan','master_status_karyawan.id=p.status_karyawan','left')
					->join('personalia_pegawai pa','pa.id=p.atasan','left')
					->get();
			if($load->num_rows()>0){
				return $load->result();
			}else{
				return null;
			}
		}
	}