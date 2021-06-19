<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Agent_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function get_country()
		{
			$this->db->select('*');
			$this->db->from('country');
			$result = $this->db->get()->result_array();
			return $result;
		}
		
		public function insert_agents($array)
		{
			$result = $this->db->insert('user',$array);
			return $this->db->insert_id();
		}
		
		public function get_agents()
		{
			$this->db->select('u.user_id,u.username,u.email,l.listing_quota,l.used_listing_quota');
			$this->db->from('user u');
			$this->db->join('listing_quota l','u.user_id = l.user_id','left');
			$this->db->where('u.user_role !=',0);
			$result = $this->db->get()->result_array();
			return $result;
		}
		
		public function get_agent_id($id)
		{
			$this->db->select('*');
			$this->db->from('user u');
			$this->db->join('country c','u.country = c.country_id','left');
			$this->db->where('u.user_id',$id);
			$result = $this->db->get()->row_array();
			return $result;
		}
		
		public function update_agent($array,$user_id)
		{
			$this->db->where('user_id',$user_id); 
			$result = $this->db->update('user',$array); 
			return $result;
		}		
		
		public function delete_agents($id)
		{
			$this->db->where('user_id',$id);
			$this->db->delete('user'); 
			if ($this->db->affected_rows() == 0) 
			{
				$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
				redirect('agents'.$id);
				return FALSE;
			}
			else
			{
				$this->session->set_flashdata('success', 'Agent Delete Successfully');
				redirect('agents');
				return TRUE;
			}        
		}
		
		public function insert_listing_quota($array)
		{
			$result = $this->db->insert('listing_quota',$array); 
			return $result;
		}
		
		public function get_listing_quota()
		{
			$this->db->select('*');
			$this->db->from('listing_quota l');
			$this->db->join('user u','u.user_id = l.user_id','left');
			$result = $this->db->get()->result_array();
			return $result;
		}
		
		public function update_lisitng_quota($array,$user_id)
		{
			$this->db->where('user_id',$user_id); 
			$result = $this->db->update('listing_quota',$array); 
			return $result;
		}		
		
		
		
	}