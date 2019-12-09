<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller 
{

	public function index()
	{
		$data['page_title'] = 'Хабархо';

		$this->load->model('news_model');
		$data['news'] = $this->news_model->getNews4();

		$this->load->view('header',$data);
 		$this->load->view('info/news_index',$data);
	}


	function content($news_id)
	{
		$data['page_title'] = "Хабархо";
		
		$this->load->model('news_model');
		$data['news'] = $this->news_model->getNews4();

		
		$item = $this->db->select('*')
            ->from('news')
            ->where('news_id',$news_id)
            ->get()->row(); 

        $data['item'] = $item;


		$this->load->view('info/news_content',$data);
	}
}