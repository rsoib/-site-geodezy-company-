<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model
{
	
		function getMessages()
		{
			$this->db->order_by('mess_id','desc');
			$query = $this->db->get('messages');
			return $query->result_array();
		}

		function getMessagesById($mess_id)
		{
			$this->db->where('mess_id',$mess_id);
			$query  = $this->db->get('messages');
			return $query->result_array();
		}

		function getNewMessage()
		{
			$this->db->order_by('mess_id','desc');
			$this->db->limit('1');
			$query = $this->db->get('messages');
			return $query->result_array();

		}
}