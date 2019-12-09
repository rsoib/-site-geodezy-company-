<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person_model extends CI_Model
{
	
	function getPersonals()
	{
		$this->db->order_by('person_id','desc');
		$query = $this->db->get('personals');
		return $query->result_array();
	}

	function getPerson4()
	{
		$this->db->order_by('person_id','desc');
		$this->db->limit('4');
		$query = $this->db->get('personals');
		return $query->result_array();
	}

	public $person_rules = array(

 			array(
 				'field'=>'person_name',
 				'label'=>'Ном ва насаб',
 				'rules'=>'required|min_length[3]|max_length[150]|trim'
 				),

 			array(
 				'field'=>'person_text',
 				'label'=>'Матни кӯтоҳ',
 				'rules'=>'required|min_length[10]|trim'
 				),
 				
 				);


}