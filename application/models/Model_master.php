<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Model_master extends CI_Model {

		public function getListAgama(){
			$this->load->database();
			$data=$this->db->get_where('master_agama' ,array('is_delete' => 0));
			return $data->result();
		}
		public function add_agama(){
			$data = array(
				'nama_agama' => $this->input->post('nama') 
				 );
			$result = $this->db->insert('master_agama',$data);
			return $result;
		}
		public function delete_agama($id=null){
			$this->db->select('id')->where('id',$id)->get('master_agama');
			$var = $this->db->where('id',$id)->update('master_agama',array('is_delete'=>1,'delete_date'=>date('Y-m-d H:i:s')));
			if($var){
				return true;
			}else{
				return null;
			}
		}
		public function get_idAgama($id=null){
			$res = $this->db->where('is_delete',0)->where('id',$id)->select('*')->get('master_agama');
			if($res->num_rows()>0){
				return $res->row();
			}else{
				return null;
			}
		}
		public function update_agama(){
			$data = array(
			'nama_agama' => $this->input->post('nama'),
			);
			$result = $this->db->where('id',$this->input->post('id'))->update('master_agama',$data);
			return $result;
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
		public function get_idDepartment($id=null){
			$res = $this->db->where('is_delete',0)->where('id',$id)->select('*')->get('master_department');
			if($res->num_rows()>0){
				return $res->row();
			}else{
				return null;
			}
		}
		public function update_department(){
			$data = array(
			'nama_department' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan')
			);
			$result = $this->db->where('id',$this->input->post('id'))->update('master_department',$data);
			return $result;
		}
		public function getListJabatan(){
			$data=$this->db->get_where('master_jabatan',array('is_delete'=>0));
			return $data->result();
		}
		public function add_jabatan(){
			$data = array(
				'nama_jabatan' => $this->input->post('nama') ,
				'keterangan' => $this->input->post('keterangan'),
				 );
			$result = $this->db->insert('master_jabatan',$data);
			return $result;
		}
		public function delete_jabatan($id=null){
			$this->db->select('id')->where('id',$id)->get('master_jabatan');
			$var = $this->db->where('id',$id)->update('master_jabatan',array('is_delete'=>1,'delete_date'=>date('Y-m-d H:i:s')));
			if($var){
				return true;
			}else{
				return null;
			}
		}
		public function get_idJabatan($id=null){
			$res = $this->db->where('is_delete',0)->where('id',$id)->select('*')->get('master_jabatan');
			if($res->num_rows()>0){
				return $res->row();
			}else{
				return null;
			}
		}
		public function update_jabatan(){
			$data = array(
			'nama_jabatan' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan')
			);
			$result = $this->db->where('id',$this->input->post('id'))->update('master_jabatan',$data);
			return $result;
		}
		public function getListPendidikan(){
			$data=$this->db->get_where('master_pendidikan',array('is_delete'=>0));
			 return $data->result();
		}
		public function getListStatusKaryawan(){
			$data=$this->db->get_where('master_status_karyawan',array('is_delete'=>0));
			return $data->result();
		}
		public function add_StatusKaryawan(){
			$data = array(
				'nama_status_karyawan' => $this->input->post('nama') ,
				'keterangan' => $this->input->post('keterangan'),
				 );
			$result = $this->db->insert('master_status_karyawan',$data);
			return $result;
		}
		public function delete_StatusKaryawan($id=null){
			$this->db->select('id')->where('id',$id)->get('master_status_karyawan');
			$var = $this->db->where('id',$id)->update('master_status_karyawan',array('is_delete'=>1,'delete_date'=>date('Y-m-d H:i:s')));
			if($var){
				return true;
			}else{
				return null;
			}
		}
		public function get_idStatusKaryawan($id=null){
			$res = $this->db->where('is_delete',0)->where('id',$id)->select('*')->get('master_status_karyawan');
			if($res->num_rows()>0){
				return $res->row();
			}else{
				return null;
			}
		}
		public function update_StatusKaryawan(){
			$data = array(
			'nama_StatusKaryawan' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan')
			);
			$result = $this->db->where('id',$this->input->post('id'))->update('master_status_karyawan',$data);
			return $result;
		}
		public function getListStatusPribadi(){
			$data=$this->db->get_where('master_status_pribadi',array('is_delete'=>0));
			return $data->result();
		}
		public function add_SetatusPribadi(){
			$data = array(
				'nama_status_pribadi' => $this->input->post('nama') ,
				'keterangan' => $this->input->post('keterangan'),
				 );
			$result = $this->db->insert('master_status_pribadi',$data);
			return $result;
		}
		public function delete_SetatusPribadi($id=null){
			$this->db->select('id')->where('id',$id)->get('master_status_pribadi');
			$var = $this->db->where('id',$id)->update('master_status_pribadi',array('is_delete'=>1,'delete_date'=>date('Y-m-d H:i:s')));
			if($var){
				return true;
			}else{
				return null;
			}
		}
		public function get_idSetatusPribadi($id=null){
			$res = $this->db->where('is_delete',0)->where('id',$id)->select('*')->get('master_status_pribadi');
			if($res->num_rows()>0){
				return $res->row();
			}else{
				return null;
			}
		}
		public function update_SetatusPribadi(){
			$data = array(
			'nama_status_pribadi' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan')
			);
			$result = $this->db->where('id',$this->input->post('id'))->update('master_status_pribadi',$data);
			return $result;
		}
		public function getListAgen(){
			$data=$this->db->get_where('master_lokasi_agen',array('is_delete'=>0));
			return $data->result();
		}
		public function add_agen(){
			$data = array(
				'nama_agen' => $this->input->post('nama') ,
				'keterangan' => $this->input->post('keterangan'),
				 );
			$result = $this->db->insert('master_lokasi_agen',$data);
			return $result;
		}
		public function delete_agen($id=null){
			$this->db->select('id')->where('id',$id)->get('master_lokasi_agen');
			$var = $this->db->where('id',$id)->update('master_lokasi_agen',array('is_delete'=>1,'delete_date'=>date('Y-m-d H:i:s')));
			if($var){
				return true;
			}else{
				return null;
			}
		}
		public function get_idagen($id=null){
			$res = $this->db->where('is_delete',0)->where('id',$id)->select('*')->get('master_lokasi_agen');
			if($res->num_rows()>0){
				return $res->row();
			}else{
				return null;
			}
		}
		public function update_agen(){
			$data = array(
			'nama_agen' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan')
			);
			$result = $this->db->where('id',$this->input->post('id'))->update('master_lokasi_agen',$data);
			return $result;
		}
			public function getListFungsional(){
			$data=$this->db->get_where('master_fungsional',array('is_delete'=>0));
			return $data->result();
		}
		public function add_Fungsional(){
			$data = array(
				'nama_fungsional' => $this->input->post('nama') ,
				'keterangan' => $this->input->post('keterangan'),
				 );
			$result = $this->db->insert('master_fungsional',$data);
			return $result;
		}
		public function delete_Fungsional($id=null){
			$this->db->select('id')->where('id',$id)->get('master_fungsional');
			$var = $this->db->where('id',$id)->update('master_fungsional',array('is_delete'=>1,'delete_date'=>date('Y-m-d H:i:s')));
			if($var){
				return true;
			}else{
				return null;
			}
		}
		public function get_idFungsional($id=null){
			$res = $this->db->where('is_delete',0)->where('id',$id)->select('*')->get('master_fungsional');
			if($res->num_rows()>0){
				return $res->row();
			}else{
				return null;
			}
		}
		public function update_Fungsional(){
			$data = array(
			'nama_fungsional' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan')
			);
			$result = $this->db->where('id',$this->input->post('id'))->update('master_fungsional',$data);
			return $result;
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