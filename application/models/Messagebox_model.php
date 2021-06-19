<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Messagebox_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		
		public function get_messages()
		{
			$this->db->select('*');
			$this->db->from('inbox');
			$this->db->where('user_id',$this->session->userdata('user_id'));
			$this->db->where('delete_message !=',1);
			$res = $this->db->get('')->result_array();
			return $res;
		}
		
		public function get_messages_id($inbox_id) 
		{
			$this->db->select('*');
			$this->db->from('inbox');
			$this->db->where('inbox_id',$inbox_id);
			$res = $this->db->get('')->row_array();
			return $res;
		}
		
		public function get_agents() 
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('user_role !=',0);
			$res = $this->db->get('')->result_array();
			return $res;
		}
		
		public function get_agent_message_id($id) 
		{
			$this->db->select('*');
			$this->db->from('inbox');
			$this->db->where('user_id',$id);
			$this->db->where('delete_message !=',1);
			$res = $this->db->get('')->result_array();
			return $res;
		}
		
	}