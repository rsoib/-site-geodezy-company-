<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pictures_model extends CI_Model
{
	
	function getPictures()
	{
		$this->db->order_by('pict_id','desc');
		$query = $this->db->get('pictures');
		return $query->result_array();
	}

	function getPictures8()
	{
		$this->db->order_by('pict_id','desc');
		$this->db->limit('16');
		$query = $this->db->get('pictures');
		return $query->result_array();
	}

	function getPictures4()
	{
		$this->db->order_by('pict_id','desc');
		$this->db->limit('4');
		$query = $this->db->get('pictures');
		return $query->result_array();
	}

}