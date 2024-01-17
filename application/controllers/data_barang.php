<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class data_barang extends CI_Controller{

 	public function __construct()
    {
		parent::__construct();
		$this->load->model("user_models");
		if($this->user_models->isNotLogin()) redirect(site_url('auth'));
	}

 	public function user()
 	{
 		$data['title'] = 'User';
 		$data['type'] = 2;
 		$data['barang'] = $this->model_barang->tampil_data()->result();
 		$this->load->view('data_barang', $data);
 	}

 	public function admin()
 	{
 		$data['title'] = 'Admin';
 		$data['type'] = 1;
 		$data['barang'] = $this->model_barang->tampil_data()->result();
 		$this->load->view('data_barang', $data);
 	}

 	public function tambah_aksi()
 	{
 		$nama_perusahaan= $this->input->post('nama_perusahaan');
 		$nama_barang 	= $this->input->post('nama_barang'); 		
 		$harga 			= $this->input->post('harga');
 		$stok 			= $this->input->post('stok');

 		$data = array(
 			'nama_perusahaan' 		=> $nama_perusahaan,
 			'nama_barang' 	=> $nama_barang,
 			'harga' 		=> $harga,
 			'stok' 			=> $stok, 

 		);
 		$this->model_barang->tambah_barang($data, 'tb_barang');
 		redirect('data_barang/admin');
 	}

 	public function edit($id)
 	{
 		$data['title'] = 'Admin';
 		$where = array('id' => $id);
 		$data['barang'] = $this->model_barang->edit_barang($where,'tb_barang')->result();
 		$this->load->view('edit_barang', $data); 
 	}
 	
 	public function update()
 	{
 		$id 				= $this->input->post('id');
 		$nama_perusahaan	= $this->input->post('nama_perusahaan');
 		$nama_barang 		= $this->input->post('nama_barang'); 		
 		$harga 				= $this->input->post('harga');
 		$stok 				= $this->input->post('stok');

 		$data = array(
 			'nama_perusahaan' 		=> $nama_perusahaan,
 			'nama_barang' 			=> $nama_barang,
 			'harga' 				=> $harga,
 			'stok' 					=> $stok, 
 		);

 		$where = array('id' => $id);
 		$this->model_barang->update_data($where, $data, 'tb_barang');
 		redirect('data_barang/admin');
 	}	

 	public function hapus($id)
 	{
 		$where = array('id' => $id);
 		$this->model_barang->hapus_data($where, 'tb_barang');
 		redirect('data_barang/admin');
 	}

}

