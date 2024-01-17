<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_models extends CI_Model
{
	public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }
}