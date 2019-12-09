<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{

	public function index()
	{
		$data['page_title'] = 'Асоси';
		$this->load->view('header',$data);

		$this->load->model('service_model');
		$data['services'] = $this->service_model->getService3();

		$this->load->model('news_model');
		$data['news'] = $this->news_model->getNewsMain();

		$this->load->model('pictures_model');
		$data['photos'] = $this->pictures_model->getPictures4();
		$this->load->view('main_index',$data);
	}

	function search()
	{
		$data['page_title'] = "Ҷустуҷӯ";
		if (isset($_POST['search'])) 
		{
			$q = $_POST['search'];
			$item = $this->db->select('*')
            ->from('departments')
            ->where("dep_name LIKE '%".$q."%' OR dep_author LIKE '%".$q."%' ")
            ->get()->row();
            $data['item'] = $item;

            if ($data['item']==true) 
			{
				$this->load->view('search/search_index',$data);
			}else
			{
				$this->load->view('search/search_error',$data);
			}
			
		}else
		{
			redirect('/');
		}
	}
	
}