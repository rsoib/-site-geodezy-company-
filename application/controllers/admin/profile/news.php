<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Admin_Controller
{

	function index()
	{
		$data['page_title'] = 'Хабарҳо';

		$this->load->model('news_model');
		$data['news'] = $this->news_model->getNews();
		$this->load->view('admin/news/news_index',$data);
	}

	function add()
	{
		$data['page_title'] = "Илова намудан хабари нав";

		$this->load->library('form_validation');
		if (isset($_POST['go'])) 
		{
			
			$this->load->model('news_model');
			$this->form_validation->set_rules($this->news_model->news_rules);
			$check = $this->form_validation->run();

			if ($check==true) 
			{
				$news_title = $this->input->post('news_title');
				$news_short = $this->input->post('news_short');
				$news_content = $this->input->post('news_content');
				$config = array(
            					'upload_path' => './assets/img/news',
            					'allowed_types' => 'gif|jpg|png|',
            					'max_size' => '2048',
            					'encrypt_name'=>TRUE
              					);
				$news_date = date("Y-m-d");
				$this->load->library('upload',$config);

				$this->upload->do_upload();
				$image_data = $this->upload->data();
				$add['images'] = $image_data['file_name'];

				$data = array('news_title'=>$news_title,
							  'news_short'=>$news_short,
						 	  'news_image'=>$add['images'],
						  	  'news_content'=>$news_content,
						  	  'news_date'=>$news_date);
				$this->db->insert('news',$data);
				$this->session->set_flashdata('message','Хабар бо мувафаққият дохил карда шуд!');
				redirect('/admin/profile/news');
			}else
			{
				$this->load->view('admin/news/news_add',$data);
			}

		}else
		{
			$this->load->view('admin/news/news_add',$data);
		}
	}


	function edit($news_id)
	{
		$data['page_title'] = "Тағйирдиҳии хабар";
		$item = $this->db->select('*')
            ->from('news')
            ->where('news_id',$news_id)
            ->get()->row();

        $this->load->library('form_validation');

        $data['item'] = $item;

        if (isset($_POST['go'])) 
		{
			
			$this->load->model('news_model');
			$this->form_validation->set_rules($this->news_model->news_rules);
			$check = $this->form_validation->run();

			if ($check==true) 
			{
				$news_title = $this->input->post('news_title');
				$news_short = $this->input->post('news_short');
				$news_content = $this->input->post('news_content');
				$config = array(
            					'upload_path' => './assets/img/news',
            					'allowed_types' => 'gif|jpg|png|',
            					'max_size' => '2048',
            					'encrypt_name'=>TRUE
              					);
				$news_date = date("Y-m-d");
				$this->load->library('upload',$config);

				$this->upload->do_upload();
				$image_data = $this->upload->data();
				$add['images'] = $image_data['file_name'];

				$data = array('news_title'=>$news_title,
							  'news_short'=>$news_short,
						 	  'news_image'=>$add['images'],
						  	  'news_content'=>$news_content,
						  	  'news_date'=>$news_date);

				$this->db->where('news_id',$news_id);
				$this->db->update('news',$data);
				$this->session->set_flashdata('message','Хабар бо мувафаққият тағйир дода шуд!');
				redirect('/admin/profile/news');
			}else
			{
				$this->load->view('admin/news/news_edit',$data);
			}

		}else
		{
			$this->load->view('admin/news/news_edit',$data);
		}

        
	}




	function delete($news_id)
	{
		$this->db->where('news_id',$news_id);
		$this->db->delete('news');
		$this->session->set_flashdata('message','Хабар бо мувафаққият   нест карда шуд!');
		redirect('/admin/profile/news');
	}

}