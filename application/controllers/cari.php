<?php
	class cari extends CI_Controller{


		public function admin(){
			$data['type'] = 1;
			$data['title'] = 'Admin';
			$keyword = $this->input->post('keyword');
			$data['barang']=$this->model_barang->get_product_keyword($keyword);
			$this->load->view('data_barang',$data);
		}

		public function user(){
			$data['type'] = 2;
			$data['title'] = 'User';
			$keyword = $this->input->post('keyword');
			$data['barang']=$this->model_barang->get_product_keyword($keyword);
			$this->load->view('data_barang',$data);
		}
	}