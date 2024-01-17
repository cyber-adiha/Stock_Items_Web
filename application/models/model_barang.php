<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_barang extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('tb_barang');
	}

	public function tambah_barang($data,$table)
	{
		$this->db->insert($table, $data);
	}
	public function edit_barang($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function find($id)
	{
		$result = $this->db->where('id', $id)
					   	   ->limit(1)
					   	   ->get('tb_barang');
		if($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return array();
		}
	}

	public function get_all()
	{
		return $this->db->get('tb_barang')->result();
	}
	public function get_product_keyword($keyword)
	{
			$this->db->select('*');
			$this->db->from('tb_barang');
			$this->db->like('nama_barang',$keyword);
			return $this->db->get()->result();
		}
}
