<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
	
	function getNews()
	{
		$this->db->order_by('news_id','desc');
		$query = $this->db->get('news');
		return $query->result_array();
	}

	function getNewsMain()
	{
		$this->db->order_by('news_id','desc');
		$this->db->limit('1');
		$query = $this->db->get('news');
		return $query->result_array();
	}


	function getNews4()
	{
		$this->db->order_by('news_id','desc');
		$this->db->limit('4');
		$query = $this->db->get('news');
		return $query->result_array();
	}




	public $news_rules = array(

 			array(
 				'field'=>'news_title',
 				'label'=>'Сарлавҳа',
 				'rules'=>'required|min_length[3]|max_length[150]|trim'
 				),

 			array(
 				'field'=>'news_short',
 				'label'=>'Матни кӯтоҳ',
 				'rules'=>'required|min_length[10]|trim'
 				),

 			array(
 				'field'=>'news_content',
 				'label'=>'Матни пурра',
 				'rules'=>'required|min_length[20]|trim'
 				),
 				
 				);


}