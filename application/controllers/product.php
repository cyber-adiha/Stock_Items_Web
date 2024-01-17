<?php
	class Product extends CI_Controller{
		public function index(){
			$data['product']=$this->model_barang->get_all();
			$this->load->view('data_barang',$data);
		}

		public function search(){
			$keyword = $this->input->post('keyword');
			$data['products']=$this->model_barang->get_product_keyword($keyword);
			$this->load->view('search',$data);
		}
	}