<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Admin_Controller
{

	public function index()
	{
		$data['page_title'] = "Хизматрасониҳо";

		$this->load->model('service_model');
		$data['services'] = $this->service_model->getService();
		$this->load->view('admin/services/service_index',$data);
	}

	function add()
	{
		$data['page_title'] = "Илова намудани хизматрасонии нав";
		$this->load->library('form_validation');
		if (isset($_POST['go'])) 
		{
			$this->load->model('service_model');
			$this->form_validation->set_rules($this->service_model->service_rules);
			$check = $this->form_validation->run();

			if ($check==true) 
			{
				$service_name = $this->input->post('service_name');
				$service_short = $this->input->post('service_short');
				$service_text = $this->input->post('service_text');
				$config = array(
            					'upload_path' => './assets/img/services',
            					'allowed_types' => 'gif|jpg|png|',
            					'max_size' => '2048',
            					'encrypt_name'=>TRUE
              					);
					$this->load->library('upload',$config);
					$this->upload->do_upload();
					$image_data = $this->upload->data();
					$add['images'] = $image_data['file_name'];

				$data = array('service_name'=>$service_name,
							  'service_short'=>$service_short,
							  'service_image'=>$add['images']);

				$this->db->insert('services',$data);
				$this->session->set_flashdata('message','Хизматрасони бо мувафаққият дохил карда шуд!');
				redirect('/admin/profile/services');

			}else
			{
				$this->load->view('admin/services/service_add',$data);
			}
			
		}else
		{
			$this->load->view('admin/services/service_add',$data);
		}
	}


	function edit($service_id)
	{
		$data['page_title'] = "Тағйир додани хизматрасони";

		$item = $this->db->select('*')
            ->from('services')
            ->where('service_id',$service_id)
            ->get()->row();

        $data['item'] = $item;
        $this->load->library('form_validation');

        if (isset($_POST['go'])) 
        {
        	$this->load->model('service_model');
			$this->form_validation->set_rules($this->service_model->service_rules);
			$check = $this->form_validation->run();

			if ($check==true) 
			{
				$service_name = $this->input->post('service_name');
				$service_short = $this->input->post('service_short');
				$service_text = $this->input->post('service_text');
				$config = array(
            					'upload_path' => './assets/img/services',
            					'allowed_types' => 'gif|jpg|png|',
            					'max_size' => '2048',
            					'encrypt_name'=>TRUE
              					);
					$this->load->library('upload',$config);
					$this->upload->do_upload();
					$image_data = $this->upload->data();
					$add['images'] = $image_data['file_name'];

				$data = array('service_name'=>$service_name,
							  'service_short'=>$service_short,
							  'service_image'=>$add['images']);

				$this->db->where('service_id',$service_id);
				$this->db->update('services',$data);
				$this->session->set_flashdata('message','Хизматрасони бо мувафаққият тағйир дода шуд!');
				redirect('/admin/profile/services');

			}else
			{
				$this->load->view('admin/services/service_edit',$data);
			}
        }else
        {
        	$this->load->view('admin/services/service_edit',$data);
        }
	}


	function delete($service_id)
	{
		$this->db->where('service_id',$service_id);
		$this->db->delete('services');
		$this->session->set_flashdata('message','Хизматрасони бо мувафаққият нест карда шуд!');
		redirect('/admin/profile/services');
	}

}