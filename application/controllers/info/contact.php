<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller 
{

	public function index()
	{
		$data['page_title'] = 'Алоқа';

		if (isset($_POST['go'])) 
		{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$text = $this->input->post('text');

			$data = array('name'=>$name,
						  'email'=>$email,
						  'phone'=>$phone,
						  'text'=>$text);
			$this->db->insert('messages',$data);
			$this->session->set_flashdata('message','Дархости шумо қабул карда шуд. Бо шумо  ҳатман дар алоқа хоҳем шуд!');
			redirect('/info/contact');

		}else
		{
			$this->load->view('header',$data);
			$this->load->view('/info/contact_index');
		}
		
	}

}