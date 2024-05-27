<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Models extends CI_Model
{
	public function Get_All($table, $select)
	{
		$select;
		$query = $this->db->get($table);
		return $query->result();
	}

	public function Get_Where($table, $where)
	{
		$query = $this->db->get_where($table, $where);
		return $query->row();
	}
	public function Get_All_Where($table, $where)
	{
		$query = $this->db->get_where($table, $where);
		return $query->result();
	}
	function Save($data, $table)
	{
		$result = $this->db->insert($table, $data);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}
	function Update($where, $data, $table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}
	function Update_All($data, $table)
	{
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}
	function Delete($table, $where)
	{
		$result = $this->db->delete($table, $where);
		return $result;
	}
}
