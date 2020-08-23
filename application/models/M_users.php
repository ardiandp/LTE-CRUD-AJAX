<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {


	public function select_all()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$data= $this->db->get();
		return $data->result();
	}


	public function insert ($data)
	{
		$id=date('his');
		$sql = "insert into admin values ('{$id}','".$data['username']."','".$data['password']."',".$data['nama'].")";
		$this->db->query($ql);
		return $this->db->affected_rows();
	}



}

/* End of file M_users.php */
/* Location: ./application/models/M_users.php */