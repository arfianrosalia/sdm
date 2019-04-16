<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model_pegawai extends CI_Model {

		public function getListPegawai(){
			$val = '	
						p.id_token,
						p.nik,
						p.nama_lengkap,
						nama_fungsional,
						nama_jabatan,
						nama_department,
						nama_status,
						p.no_telepon,
						nama_agen
					';
			$load = $this->db
					->select($val)
					// ->select('p.nama_singkat,nama_fungsional,nama_department,p.no_telepon')
					->from('personalia_pegawai as p')
					->join('master_fungsional','master_fungsional.id=p.fungsional','left')
					->join('master_department','master_department.id=p.department','left')
					->join('master_jabatan','master_jabatan.id=p.jabatan','left')
					->join('master_status_karyawan','master_status_karyawan.id=p.status_karyawan','left')
					->join('personalia_pegawai pa','pa.id=p.atasan','left')
					->join('master_agen','master_agen.id=p.lokasi_agen','left')
					->get();
			if($load->num_rows()>0){
				return $load->result();
			}else{
				return null;
			}
		}

		public function getListPegawaiByID($id=null){
			$val = '
						p.nik,
						p.no_ktp,
						p.nama_singkat,
						p.tanggal_lahir,
						p.jenis_kelamin,
						p.pendidikan,
						p.agama,
						p.fungsional,
						p.tmt,
						p.department,
						p.jabatan,
						p.no_telepon,
						p.kode_pos,
						p.nama_lengkap,
						nama_fungsional,
						nama_jabatan,
						nama_department,
						nama_status,
						p.no_telepon,
						nama_agen
					';
			$load = $this->db
					->select($val)
					// ->select('p.nama_singkat,nama_fungsional,nama_department,p.no_telepon')
					->from('personalia_pegawai as p')
					->join('master_fungsional','master_fungsional.id=p.fungsional','left')
					->join('master_department','master_department.id=p.department','left')
					->join('master_jabatan','master_jabatan.id=p.jabatan','left')
					->join('master_status_karyawan','master_status_karyawan.id=p.status_karyawan','left')
					->join('personalia_pegawai pa','pa.id=p.atasan','left')
					->join('master_agen','master_agen.id=p.lokasi_agen','left')
					->where('p.id_token',$id)
					->get();

			if($load->num_rows()>0){
				return $load->row();
			}else{
				return null;
			}
		}
	}