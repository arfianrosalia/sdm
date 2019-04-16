<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model_master extends CI_Model {

		public function getListDepartement(){
			$this->db->get_where('master_department',array('is_delete'=>0));
		}
		public function getListJabatan(){
			$this->db->get_where('master_jabatan',array('is_delete'=>0));
		}
		public function getListPendidikan(){
			$this->db->get_where('master_pendidikan',array('is_delete'=>0));
		}
		public function getListStatusKaryawan(){
			$this->db->get_where('master_status_karyawan',array('is_delete'=>0));
		}
		public function getListGelarNama(){
			$this->db->get_where('master_gelar',array('is_delete'=>0));
		}
		public function getListWilayahDistricts(){
			
			$this->db->order_by("id" ,"desc");
			return $this->db->get('wilayah_districts');
		}
		public function getListWilayahProvinces(){
			$this->db->order_by("id" ,"desc");
			return $this->db->get('wilayah_provinces');
		}
		public function getListWilayahRegencies(){
			$this->db->order_by("id" ,"desc");
			return $this->db->get('wilayah_regencies');
		}
		public function getListWilayahVillages(){
			$this->db->order_by("id" ,"desc");
			return $this->db->get('wilayah_villages');
		}
	}