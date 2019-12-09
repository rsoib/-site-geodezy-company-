<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model
{

	function getService()
	{
		$this->db->order_by('service_id','desc');
		$query = $this->db->get('services');
		return $query->result_array();
	}

	function getService3()
	{
		$this->db->order_by('service_id','desc');
		$this->db->limit('3');
		$query = $this->db->get('services');
		return $query->result_array();
	}
	
	public $service_rules = array(

 			array(
 				'field'=>'service_name',
 				'label'=>'Номи хизматрасони',
 				'rules'=>'required|min_length[3]|max_length[150]|trim'
 				),

 			array(
 				'field'=>'service_short',
 				'label'=>'Шарҳ',
 				'rules'=>'required|min_length[10]|trim'
 				),
 				
 				);


}