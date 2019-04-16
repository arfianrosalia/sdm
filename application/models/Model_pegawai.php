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
						nama_status_karyawan as nama_status,
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
						p.*,
						master_gelar.id as gelar,
						nama_fungsional,
						nama_jabatan,
						nama_department,
						master_status_karyawan.id as status_karyawan,
						master_status_pribadi.id as status_pribadi,
						p.no_telepon,
						master_agen.id as nama_agen
					';
			$load = $this->db
					->select($val)
					// ->select('p.nama_singkat,nama_fungsional,nama_department,p.no_telepon')
					->from('personalia_pegawai as p')
					->join('master_fungsional','master_fungsional.id=p.fungsional','left')
					->join('master_gelar','master_gelar.id=p.gelar','left')
					->join('master_department','master_department.id=p.department','left')
					->join('master_jabatan','master_jabatan.id=p.jabatan','left')
					->join('master_status_karyawan','master_status_karyawan.id=p.status_karyawan','left')
					->join('master_status_pribadi','master_status_pribadi.id=p.status_pribadi','left')
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

		public function getMaster($master=null){
			$select = $this->db->get_where('master_'.$master,array('is_delete'=>0));

			if($select->num_rows()>0){
				return $select->result();
			}else{
				return null;
			}
		}

		public function getAtasan(){
			$select = $this->db->select('id,nama_lengkap')->get_where('personalia_pegawai',array('is_delete'=>0));

			if($select->num_rows()>0){
				return $select->result();
			}else{
				return null;
			}
		}

		public function getProvinsi(){
			$select = $this->db->get('wilayah_provinces');

			if($select->num_rows()>0){
				return $select->result();
			}else{
				return null;
			}
		}

		public function getKabupaten($prov=null){
			$select = $this->db->get_where('wilayah_regencies',array('province_id'=>$prov));

			if($select->num_rows()>0){
				return $select->result();
			}else{
				return null;
			}
		}

		public function getKecamatan($kab=null){
			$select = $this->db->get_where('wilayah_districts',array('regency_id'=>$kab));

			if($select->num_rows()>0){
				return $select->result();
			}else{
				return null;
			}
		}

		public function getKelurahan($kec=null){
			$select = $this->db->get_where('wilayah_villages',array('district_id'=>$kec));

			if($select->num_rows()>0){
				return $select->result();
			}else{
				return null;
			}
		}
	}