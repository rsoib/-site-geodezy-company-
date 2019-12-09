<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller 
{

	public function index()
	{
		$data['page_title'] = 'Шӯъбаҳо';
		$this->load->view('header',$data);
		$this->load->model('department_model');
		$data['departments'] = $this->department_model->getDepartment();
		$this->load->view('info/department_index',$data);
	}

}