<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model_master extends CI_Model {

		public function getListAgama(){
			$this->load->database();
			$data=$this->db->get_where('master_agama' ,array('is_delete' => 0));
			return $data->result();
		}
		public function getListDepartment(){
			$this->load->database();
			$data=$this->db->get_where('master_department' ,array('is_delete' => 0));
			return $data->result();
		}
		public function add_department(){
			$data = array(
				'nama_department' => $this->input->post('nama') ,
				'keterangan' => $this->input->post('keterangan'),
				 );
			$result = $this->db->insert('master_department',$data);
			return $result;
		}
		public function delete_department($id=null){
			$this->db->select('id')->where('id',$id)->get('master_department');
			$var = $this->db->where('id',$id)->update('master_department',array('is_delete'=>1,'delete_date'=>date('Y-m-d H:i:s')));
			if($var){
				return true;
			}else{
				return null;
			}
		}
		public function getListJabatan(){
			$data=$this->db->get_where('master_jabatan',array('is_delete'=>0));
			return $data->result();
		}
		public function getListPendidikan(){
			$data=$this->db->get_where('master_pendidikan',array('is_delete'=>0));
			 return $data->result();
		}
		public function getListStatusKaryawan(){
			$data=$this->db->get_where('master_status_karyawan',array('is_delete'=>0));
			return $data->result();
		}
		public function getListStatusPribadi(){
			$data=$this->db->get_where('master_status_pribadi',array('is_delete'=>0));
			return $data->result();
		}
		public function getListAgen(){
			$data=$this->db->get_where('master_agen',array('is_delete'=>0));
			return $data->result();
		}
			public function getListFungsional(){
			$data=$this->db->get_where('master_fungsional',array('is_delete'=>0));
			return $data->result();
		}
		public function getListGelarNama(){
			$data=$this->db->get_where('master_gelar',array('is_delete'=>0));
			return $data->result();
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