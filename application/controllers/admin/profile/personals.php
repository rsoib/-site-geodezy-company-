<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personals extends Admin_Controller
{


		public function index()
		{
			$data['page_title'] = "Кормандон";

			$this->load->model('person_model');
			$data['personals'] = $this->person_model->getPersonals();
			$this->load->view('admin/persons/personal_index',$data);
		}


		function add()
		{
			$data['page_title'] = "Илова намудани корманд";

			$this->load->library('form_validation');


			if (isset($_POST['go'])) 
			{
				$this->load->model('person_model');
				$this->form_validation->set_rules($this->person_model->person_rules);
				$check = $this->form_validation->run();

				if ($check==true) 
				{
					$person_name = $this->input->post('person_name');
					$person_text = $this->input->post('person_text');
					$config = array(
            					'upload_path' => './assets/img/persons',
            					'allowed_types' => 'gif|jpg|png|',
            					'max_size' => '2048',
            					'encrypt_name'=>TRUE
              					);
					$news_date = date("Y-m-d");
					$this->load->library('upload',$config);

					$this->upload->do_upload();
					$image_data = $this->upload->data();
					$add['images'] = $image_data['file_name'];

					$data = array('person_name'=>$person_name,
						 	      'person_image'=>$add['images'],
						  	      'person_text'=>$person_text,
						  	 	 );
					$this->db->insert('personals',$data);
					$this->session->set_flashdata('message','Корманд бо мувафаққият дохил карда шуд!');
					redirect('/admin/profile/personals');
				
				}else
				{
				$this->load->view('admin/persons/personal_add',$data);
				}

			}else
			{
				$this->load->view('admin/persons/personal_add',$data);
			}
	}


	function edit($person_id)
	{
		$data['page_title'] = "Тағйир додани корманд";

		$item = $this->db->select('*')
            ->from('personals')
            ->where('person_id',$person_id)
            ->get()->row();

        $data['item'] = $item;
        $this->load->library('form_validation');

        if (isset($_POST['go'])) 
        {
        		
        		$this->load->model('person_model');
				$this->form_validation->set_rules($this->person_model->person_rules);
				$check = $this->form_validation->run();

				if ($check==true) 
				{
					$person_name = $this->input->post('person_name');
					$person_text = $this->input->post('person_text');
					$config = array(
            					'upload_path' => './assets/img/persons',
            					'allowed_types' => 'gif|jpg|png|',
            					'max_size' => '2048',
            					'encrypt_name'=>TRUE
              					);
					$news_date = date("Y-m-d");
					$this->load->library('upload',$config);

					$this->upload->do_upload();
					$image_data = $this->upload->data();
					$add['images'] = $image_data['file_name'];

					$data = array('person_name'=>$person_name,
						 	      'person_image'=>$add['images'],
						  	      'person_text'=>$person_text,
						  	 	 );
					$this->db->where('person_id',$person_id);
					$this->db->update('personals',$data);
					$this->session->set_flashdata('message','Корманд бо мувафаққият тағйир дода шуд!');
					redirect('/admin/profile/personals');
				
				}else
				{
				$this->load->view('admin/persons/personal_add',$data);
				}
        }else
        {
        	$this->load->view('admin/persons/personal_edit',$data);
        }
	}


	function delete($person_id)
	{
		$this->db->where('person_id',$person_id);
		$this->db->delete('personals');
		$this->session->set_flashdata('message','Корманд бо мувафаққият нест карда шуд!');
		redirect('/admin/profile/personals');
	}
}