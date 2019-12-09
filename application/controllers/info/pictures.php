<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pictures extends CI_Controller 
{

	public function index()
	{
		$this->load->model('pictures_model');
		$data['pictures'] = $this->pictures_model->getPictures8();
		$this->load->view('/info/pictures_index',$data);
	}

}