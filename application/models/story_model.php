<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story_model extends CI_Model
{
	

	function getStory()
	{
		$this->db->order_by('history_id','desc');
		$query = $this->db->get('history');
		return $query->result_array();
	}

	function getStory1()
	{
		$this->db->order_by('history_id','desc');
		$this->db->limit('1');
		$query = $this->db->get('history');
		return $query->result_array();
	}



	public $story_rules = array(

 			array(
 				'field'=>'history_title',
 				'label'=>'Сарлавҳа',
 				'rules'=>'required|min_length[3]|max_length[150]|trim'
 				),

 			array(
 				'field'=>'history_text',
 				'label'=>'Матни пурра',
 				'rules'=>'required|min_length[20]|trim'
 				),
 				
 				);


}