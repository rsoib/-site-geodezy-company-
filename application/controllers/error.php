<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller 
{

	public function index()
	{
		$data['page_title'] = "404";
		$this->load->view('error_index',$data);
	}

}