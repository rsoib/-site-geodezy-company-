<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller 
{

	public function index()
	{
		$data['page_title'] = "Сохтор";
		$this->load->view('info/personal_index',$data);
	}


}