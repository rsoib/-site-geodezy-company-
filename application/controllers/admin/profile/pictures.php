<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pictures extends Admin_Controller
{

	public function index()
	{
		$data['page_title'] = "Расмҳо";

		$this->load->model('pictures_model');
		$data['pictures'] = $this->pictures_model->getPictures();
		$this->load->view('admin/pictures/picture_index',$data);
	}


	function add()
	{
		$data['page_title'] = "Илова намудани расм";
		

		if (isset($_POST['go'])) 
		{
			$config = array(
            				'upload_path' => './assets/img/pictures',
            				'allowed_types' => 'gif|jpg|png|',
            				'max_size' => '6208',
            				'encrypt_name'=>TRUE
              				);
					$date = date("Y-m-d");
					$this->load->library('upload',$config);

					$this->upload->do_upload();
					$image_data = $this->upload->data();
					$add['images'] = $image_data['file_name'];

					$data = array('pict_name'=>$add['images'],
						  	      'pict_date'=>$date,
						  	 	 );
					$this->db->insert('pictures',$data);
					$this->session->set_flashdata('message','Расм бо мувафаққият дохил карда шуд!');
					redirect('/admin/profile/pictures');
		}else
		{
			$this->load->view('admin/pictures/picture_add',$data);
		}
	}


	function edit($pict_id)
	{

		$data['page_title'] = "Тағйир додани расм";
		
		$item = $this->db->select('*')
            ->from('pictures')
            ->where('pict_id',$pict_id)
            ->get()->row();

        $this->load->library('form_validation');

        $data['item'] = $item;

		if (isset($_POST['go'])) 
		{
			$config = array(
            				'upload_path' => './assets/img/pictures',
            				'allowed_types' => 'gif|jpg|png|',
            				'max_size' => '2048',
            				'encrypt_name'=>TRUE
              				);
					$date = date("Y-m-d");
					$this->load->library('upload',$config);

					$this->upload->do_upload();
					$image_data = $this->upload->data();
					$add['images'] = $image_data['file_name'];

					$data = array('pict_name'=>$add['images'],
						  	      'pict_date'=>$date,
						  	 	 );

					$this->db->where('pict_id',$pict_id);
					$this->db->update('pictures',$data);
					$this->session->set_flashdata('message','Расм бо мувафаққият тағйир дода шуд!');
					redirect('/admin/profile/pictures');
		}else
		{
			$this->load->view('admin/pictures/picture_edit',$data);
		}
	}

	function delete($pict_id)
	{
		$this->db->where('pict_id',$pict_id);
		$this->db->delete('pictures');
		$this->session->set_flashdata('message','Расм бо мувафаққият нест карда шуд!');
		redirect('/admin/profile/pictures');
	}

}