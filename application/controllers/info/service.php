<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller 
{

	public function index()
	{
		$data['page_title'] = 'Хизматрасонихо';
		$this->load->view('header',$data);
		
		$this->load->model('service_model');
		$data['services'] = $this->service_model->getService();
		$this->load->view('info/service_index',$data);
	}

}