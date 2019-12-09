<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class History extends CI_Controller
{

	public function index()
	{
		$data['page_title'] = "Таърихи мо";
		$this->load->view('header',$data);

		$this->load->model('story_model');
		$data['story'] = $this->story_model->getStory1();

		$this->load->model('person_model');
		$data['personals'] = $this->person_model->getPerson4();

		$this->load->view('info/history_index',$data);
	}

}