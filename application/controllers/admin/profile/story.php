<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends Admin_Controller
{

	public function index()
	{
		$data['page_title'] = "Дар бораи мо";

		$this->load->model('story_model');
		$data['story'] = $this->story_model->getStory();

		$this->load->view('admin/story/story_index',$data);
	}


	function add()
	{
		$data['page_title'] = "Илова";
		
		$this->load->library('form_validation');
		if (isset($_POST['go'])) 
		{

			$this->load->model('story_model');
			$this->form_validation->set_rules($this->story_model->story_rules);
			$check = $this->form_validation->run();

			if ($check==true) 
			{
				$history_title = $this->input->post('history_title');
				$history_text = $this->input->post('history_text');

				$data = array('history_title'=>$history_title,'history_text'=>$history_text);

				$this->db->insert('history',$data);
				$this->session->set_flashdata('message','Маълумот бо мувафаққият дохил карда шуд!');
				redirect('/admin/profile/story');
			}else
			{
				$this->load->view('admin/story/story_add',$data);
			}
		}else
		{
			$this->load->view('admin/story/story_add',$data);
		}
	}


	function edit($history_id)
	{
		$data['page_title'] = "Тағйирдиҳии маълумот";
		
		$item = $this->db->select('*')
            ->from('history')
            ->where('history_id',$history_id)
            ->get()->row();

        $data['item'] = $item;

        $this->load->library('form_validation');

		if (isset($_POST['go'])) 
		{

			$this->load->model('story_model');
			$this->form_validation->set_rules($this->story_model->story_rules);
			$check = $this->form_validation->run();

			if ($check==true) 
			{
				$history_title = $this->input->post('history_title');
				$history_text = $this->input->post('history_text');

				$data = array('history_title'=>$history_title,'history_text'=>$history_text);

				$this->db->where('history_id',$history_id);
				$this->db->update('history',$data);
				$this->session->set_flashdata('message','Маълумот бо мувафаққият тағйир дода шуд!');
				redirect('/admin/profile/story');
			}else
			{
				$this->load->view('admin/story/story_edit',$data);
			}
		}else
		{
			$this->load->view('admin/story/story_edit',$data);
		}
	}


	function delete($history_id)
	{
		$this->db->where('history_id',$history_id);
		$this->db->delete('history');
		$this->session->set_flashdata('message','Маълумот бо мувафаққият нест карда шуд!');
		redirect('/admin/profile/story');
	}
}