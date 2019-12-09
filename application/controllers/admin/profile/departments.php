<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departments extends Admin_Controller
{

	function index()
	{
		$data['page_title'] = "Шӯъбаҳо";

		$this->load->model('department_model');
		$data['departments'] = $this->department_model->getDepartment();

		$this->load->view('admin/departments/department_index',$data);
	}


	function add()
	{
		$data['page_title'] = "Илова намудани шӯъба";
		$this->load->library('form_validation');
		if (isset($_POST['go'])) 
		{
			$this->load->model('department_model');
			$this->form_validation->set_rules($this->department_model->department_rules);
			$check = $this->form_validation->run();

			if ($check==true) 
			{
				$dep_name = $this->input->post('dep_name');
				$dep_author = $this->input->post('dep_author');
				$dep_text = $this->input->post('dep_text');
				$data = array('dep_name'=>$dep_name,
							  'dep_author'=>$dep_author,
							  'dep_text'=>$dep_text);
				$this->db->insert('departments',$data);

				$this->session->set_flashdata('message','Шӯъба бо мувафаққият дохил карда шуд!');
				redirect('/admin/profile/departments');
			}else
			{
				$this->load->view('admin/departments/department_add',$data);	
			}

		}else
		{
			$this->load->view('admin/departments/department_add',$data);
		}
	}


	function edit($dep_id)
	{
		$data['page_title'] = "Тағйир додани шӯъба";

		$item = $this->db->select('*')
            ->from('departments')
            ->where('dep_id',$dep_id)
            ->get()->row();

        $this->load->library('form_validation');

        $data['item'] = $item;

        if (isset($_POST['go'])) 
        {
        	$this->load->model('department_model');
			$this->form_validation->set_rules($this->department_model->department_rules);
			$check = $this->form_validation->run();

			if ($check==true) 
			{
				$dep_name = $this->input->post('dep_name');
				$dep_author = $this->input->post('dep_author');
				$dep_text = $this->input->post('dep_text');
				
				$data = array('dep_name'=>$dep_name,
							  'dep_author'=>$dep_author,
							  'dep_text'=>$dep_text);
				$this->db->where('dep_id',$dep_id);
				$this->db->update('departments',$data);

				$this->session->set_flashdata('message','Шӯъба бо мувафаққият тағйир дода шуд!');
				redirect('/admin/profile/departments');
			}else
			{
				$this->load->view('admin/departments/department_edit',$data);	
			}
        }else
        {
        	$this->load->view('admin/departments/department_edit',$data);
        }
	}

	function delete($dep_id)
	{
		$this->db->where('dep_id',$dep_id);
		$this->db->delete('departments');
		$this->session->set_flashdata('message','Шӯъба бо мувафаққият нест карда шуд!');
		redirect('/admin/profile/departments');
	}
}