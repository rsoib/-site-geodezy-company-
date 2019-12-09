<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends Admin_Controller
{

	function index()
	{
		$data['page_title'] = "Паёмҳо";

		$this->load->model('messages_model');
		$data['messages'] = $this->messages_model->getMessages();

		$this->load->view('admin/messages/messages_index',$data);
	}


	function show($mess_id)
	{
		$data['page_title'] = "Дидани паём";
		$this->load->model('messages_model');
		$data['show'] = $this->messages_model->getMessagesById($mess_id);
		$this->load->view('admin/messages/show_message',$data);
	}


	function delete($mess_id)
	{
		$this->db->where('mess_id',$mess_id);
		$this->db->delete('messages');
		$this->session->set_flashdata('message','Паём бо мувафаққият нест карда шуд!');
		redirect('/admin/profile/messages');
	}
}