<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model
{


	function getDepartment()
	{
		$this->db->order_by('dep_id','desc');
		$query = $this->db->get('departments');
		return $query->result_array();
	}

	public $department_rules = array(

 			array(
 				'field'=>'dep_name',
 				'label'=>'Номи шӯъба',
 				'rules'=>'required|min_length[3]|max_length[150]|trim'
 				),

 			array(
 				'field'=>'dep_author',
 				'label'=>'Мудири шӯъба',
 				'rules'=>'required|min_length[3]|max_length[150]|trim'
 				),
 			array(
 				'field'=>'dep_text',
 				'label'=>'Шарҳ',
 				'rules'=>'required|min_length[10]|trim'
 				),
 				
 				);


}