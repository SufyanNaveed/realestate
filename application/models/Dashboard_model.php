<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
		date_default_timezone_set("Asia/Karachi");
		
    }
	
	public function get_quota()
	{
		$this->db->select('*');
		$this->db->from('listing_quota');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$result = $this->db->get()->row_array();
		return $result;
	}
	
	public function get_country()
	{
		$this->db->select('*');
		$this->db->from('country');
		$result = $this->db->get()->result_array();
		return $result;
	}
	
	public function get_city()
	{
		$this->db->select('*');
		$this->db->from('city');
		$this->db->where('country_id',1);
		$result = $this->db->get()->result_array();
		return $result;
	}
	
	public function get_phase_id()
	{
		$this->db->select('*');
		$this->db->from('city');
		$this->db->where('country_id',1);
		$result = $this->db->get()->result_array();
		return $result;
	}
	
	public function fetech_location_id($city_id)
	{
		$this->db->select('*');
		$this->db->from('society');
		$this->db->where('city_id',$city_id);
		$this->db->where('parent_location',0);
		$result = $this->db->get()->result_array();
		return $result;
	}
	
	public function fetech_sub_location_id($location_id)
	{
		$this->db->select('*');
		$this->db->from('location');
		$this->db->where('parent_location',$location_id);
		$result = $this->db->get()->result_array();
		return $result;
	}
	
	public function get_profile()
	{
		$this->db->select('*');
		$this->db->from('user u');
		$this->db->join('country c','u.country = c.country_id','left');
		$this->db->join('city ci','u.city = ci.city_id','left');
		$this->db->where('u.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function change_password($array,$current_pass)
	{
		$this->db->where('password',md5($current_pass));
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$res = $this->db->update('user',$array);
		return $res;
	}
	
	public function get_agents()
	{
		$this->db->select('*');
		$this->db->from('user u');
		$this->db->join('country c','u.country = c.country_id','left');
		$this->db->where('u.user_role !=',0);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_agent_id($id)
	{
		$this->db->select('*');
		$this->db->from('user u');
		$this->db->join('country c','u.country = c.country_id','left');
		$this->db->where('u.user_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function insert_post_listing($array)
	{
		$this->db->select('*');
		$this->db->from('listing_quota');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$result = $this->db->get()->row_array();
		
		if($result['listing_quota'] > $result['used_listing_quota'])
		{
			$res = $this->db->insert('post_ads',$array);
			if($res)
			{
				$get_used = $result['used_listing_quota'] + 1;
				$array1 = array('used_listing_quota' => $get_used,);
				$this->db->where('listing_quota_id',$result['listing_quota_id']);
				$this->db->where('user_id',$this->session->userdata('user_id'));
				$ress = $this->db->update('listing_quota',$array1);
				return $ress;
			}
			else
			{
				return false;
			}
		}
		else
		{
			$this->session->set_flashdata('error',"Sorry! Listing Quota Finished");
			redirect('dashboard/post_listing');
		}
	}
	
	public function get_post_ads()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$this->db->order_by('p.post_ads_id','desc');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function update_post_ads_type($id,$array)
	{
		$this->db->where('post_ads_id',$id);
		$res = $this->db->update('post_ads',$array);
		return $res;
	}
	
	public function update_profile($array)
	{
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$res = $this->db->update('user',$array);
		return $res;
	}
	
	public function update_hot_ads_type($id,$array)
	{
		$this->db->select('*');
		$this->db->from('listing_quota');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$result = $this->db->get()->row_array();
		
		if($result['hot_credit'] >= $result['used_hot_credit'])
		{
			$this->db->where('post_ads_id',$id);
			$res = $this->db->update('post_ads',$array);
			if($res)
			{
				$get_used = $result['used_hot_credit'] + 1;
				$array1 = array('used_hot_credit' => $get_used,);
				$this->db->where('listing_quota_id',$result['listing_quota_id']);
				$this->db->where('user_id',$this->session->userdata('user_id'));
				$ress = $this->db->update('listing_quota',$array1);
				return $ress;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	
	public function update_superhot_ads_type($id,$array)
	{
		$this->db->select('*');
		$this->db->from('listing_quota');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$result = $this->db->get()->row_array();
		
		if($result['superhot_credit'] >= $result['used_superhot_credit'])
		{
			$this->db->where('post_ads_id',$id);
			$res = $this->db->update('post_ads',$array);
			if($res)
			{
				$get_used = $result['used_superhot_credit'] + 1;
				$array1 = array('used_superhot_credit' => $get_used,);
				$this->db->where('listing_quota_id',$result['listing_quota_id']);
				$this->db->where('user_id',$this->session->userdata('user_id'));
				$ress = $this->db->update('listing_quota',$array1);
				return $ress;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	
	public function update_refresh_ads_type($id,$array)
	{
		$this->db->select('*');
		$this->db->from('listing_quota');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$result = $this->db->get()->row_array();
		
		if($result['refresh_credit'] >= $result['used_refresh_credit'])
		{
			$this->db->where('post_ads_id',$id);
			$res = $this->db->update('post_ads',$array);
			if($res)
			{
				$get_used = $result['refresh_credit'] + 1;
				$array1 = array('refresh_credit' => $get_used,);
				$this->db->where('listing_quota_id',$result['listing_quota_id']);
				$this->db->where('user_id',$this->session->userdata('user_id'));
				$ress = $this->db->update('listing_quota',$array1);
				return $ress;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	
	public function delete_ads($id)
	{
		$this->db->where('post_ads_id',$id);
		$this->db->delete('post_ads'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('dashboard');
			return TRUE;
		}        
	}
	
	public function get_post_ads_id($id)
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$this->db->where('p.post_ads_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function get_sale_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$this->db->where('p.purpose =','Sale');
		$this->db->where('p.status =',1);
		$this->db->where('p.deleted =',0);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_rent_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$this->db->where('p.purpose =','Rent');
		$this->db->where('p.status =',1);
		$this->db->where('p.deleted =',0);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_wanted_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$this->db->where('p.purpose =','Wanted');
		$this->db->where('p.status =',1);
		$this->db->where('p.deleted =',0);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_hot_property_management()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$this->db->where('p.hot_ads_type =',1);
		$this->db->where('p.status =',1);
		$this->db->where('p.deleted =',0);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_superhot_property_management()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$this->db->where('p.superhot_ads_type =',1);
		$this->db->where('p.status =',1);
		$this->db->where('p.deleted =',0);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_edit_sale_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$this->db->where('p.purpose =','Sale');
		$this->db->where('p.edited =',1);
		$this->db->where('p.deleted =',0);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_edit_rent_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Rent');
		$this->db->where('p.edited =',1);
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_edit_wanted_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Wanted');
		$this->db->where('p.edited =',1);
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_pending_sale_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Sale');
		$this->db->where('p.status =',0);
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_pending_rent_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Rent');
		$this->db->where('p.status =',0);
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_pending_wanted_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Wanted');
		$this->db->where('p.status =',0);
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_expired_sale_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Sale');
		$this->db->where('p.post_ads_created_date <=',date('Y-m-d',strtotime("-6 month")));
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_expired_rent_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Rent');
		$this->db->where('p.post_ads_created_date <=',date('Y-m-d',strtotime("-6 month")));
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_expired_wanted_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Wanted');
		$this->db->where('p.post_ads_created_date <=',date('Y-m-d',strtotime("-6 month")));
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_deleted_sale_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Sale');
		$this->db->where('p.deleted =',1);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_deleted_rent_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Rent');
		$this->db->where('p.deleted =',1);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_deleted_wanted_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Wanted');
		$this->db->where('p.deleted =',1);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_rejected_sale_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Sale');
		$this->db->where('p.status =',2);
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_rejected_rent_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Rent');
		$this->db->where('p.status =',2);
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_rejected_wanted_listing()
	{
		$this->db->select('*');
		$this->db->from('post_ads p');
		$this->db->join('city c','p.city = c.city_id','left');
		$this->db->join('society so','p.society = so.society_id','left');
		$this->db->join('phase ph','p.phase = ph.phase_id','left');
		$this->db->join('sector se','p.sector = se.sector_id','left');
		$this->db->join('user u','p.list_owner = u.user_id','left');
		$this->db->where('p.purpose =','Wanted');
		$this->db->where('p.status =',2);
		$this->db->where('p.deleted =',0);
		$this->db->where('p.user_id',$this->session->userdata('user_id'));
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_user_roles($id)
	{
		$this->db->select('roles');
		$this->db->from('roles');
		$this->db->where('user_id',$id);
		$result = $this->db->get()->row_array();
		// echo '<pre>'; print_r($result);exit;
		$res = $result ? explode(',',$result['roles']) : '';
		return $res;
	}
	
	public function insert_user_roles($id,$array)
	{
		$this->db->select('*');
		$this->db->from('roles');
		$this->db->where('user_id',$id);
		$res = $this->db->get()->row_array();
		if($res)
		{
			$this->db->where('user_id',$id);
			$result = $this->db->update('roles',$array);
			return $result;
		}
		else
		{
			$result = $this->db->insert('roles',$array);
			return $result;
		}
	}
	
	public function get_countries()
	{
		$this->db->select('*');
		$this->db->from('country');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function insert_countries($array)
	{
		$res = $this->db->insert('country',$array);
		return $res;
	}
	
	public function delete_countries($id)
	{
		$this->db->where('country_id',$id);
		$this->db->delete('country'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard/countries/'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('dashboard/countries');
			return TRUE;
		}        
	}
	
	public function get_cities()
	{
		$this->db->select('*');
		$this->db->from('city ci');
		$this->db->join('country co','ci.country_id = co.country_id','left');
		$this->db->order_by('city_name','asc');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function insert_cities($array)
	{
		$res = $this->db->insert('city',$array);
		return $res;
	}
	
	public function delete_cities($id)
	{
		$this->db->where('city_id',$id);
		$this->db->delete('city'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard/cities/'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('dashboard/cities');
			return TRUE;
		}        
	}
	
	public function get_society()
	{
		$this->db->select('*');
		$this->db->from('society s');
		$this->db->join('city ci','ci.city_id = s.city_id','left');
		$this->db->join('country co','s.country_id = co.country_id','left');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function insert_society($array)
	{
		$res = $this->db->insert('society',$array);
		return $res;
	}
	
	public function get_cities_id($id)
	{
		$this->db->select('*');
		$this->db->from('city');
		$this->db->where('country_id',$id);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_phase_ids($id)
	{
		$this->db->select('*');
		$this->db->from('phase');
		$this->db->where('society_id',$id);
		$this->db->order_by('phase_name','asc');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_society_id($id)
	{
		$this->db->select('*');
		$this->db->from('society');
		$this->db->where('city_id',$id);
		$this->db->order_by('society_name','asc');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function delete_society($id)
	{
		$this->db->where('society_id',$id);
		$this->db->delete('society'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard/society/'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('dashboard/society');
			return TRUE;
		}        
	}
	
	public function insert_phase($array)
	{
		$res = $this->db->insert('phase',$array);
		return $res;
	}
	
	public function update_phase($id,$array)
	{
		$this->db->where('phase_id',$id);
		$res = $this->db->update('phase',$array);
		return $res;
	}
	
	public function get_phase()
	{
		$this->db->select('*');
		$this->db->from('phase p');
		$this->db->join('society s','p.society_id = s.society_id','left');
		$this->db->join('city ci','ci.city_id = p.city_id','left');
		$this->db->join('country co','p.country_id = co.country_id','left');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_phase_against_id($id)
	{
		$this->db->select('*');
		$this->db->from('phase p');
		$this->db->join('society s','p.society_id = s.society_id','left');
		$this->db->join('city ci','ci.city_id = p.city_id','left');
		$this->db->join('country co','p.country_id = co.country_id','left');
		$this->db->where('p.phase_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function delete_phase($id)
	{
		$this->db->where('phase_id',$id);
		$this->db->delete('phase'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard/phase/'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('dashboard/phase');
			return TRUE;
		}        
	}
	
	public function get_sector()
	{
		$this->db->select('*');
		$this->db->from('sector se');
		$this->db->join('phase p','p.phase_id = se.phase_id','left'); 
		$this->db->join('society s','se.society_id = s.society_id','left');
		$this->db->join('city ci','ci.city_id = se.city_id','left');
		$this->db->join('country co','se.country_id = co.country_id','left');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_sector_against_id($id)
	{
		$this->db->select('*');
		$this->db->from('sector se');
		$this->db->join('phase p','p.phase_id = se.phase_id','left'); 
		$this->db->join('society s','se.society_id = s.society_id','left');
		$this->db->join('city ci','ci.city_id = se.city_id','left');
		$this->db->join('country co','se.country_id = co.country_id','left');
		$this->db->where('se.sector_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function get_sector_id($id)
	{
		$this->db->select('*');
		$this->db->from('sector');
		$this->db->where('phase_id',$id);
		$this->db->order_by('sector_name','asc');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function insert_sector($array)
	{
		//echo '<pre>'; print_r($array);exit;
		$res = $this->db->insert('sector',$array);
		return $res;
	}
	
	public function update_sector($id,$array)
	{
		$this->db->where('sector_id',$id);
		$res = $this->db->update('sector',$array);
		return $res;
	}
	
	public function delete_sector($id)
	{
		$this->db->where('sector_id',$id);
		$this->db->delete('sector'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard/sector/'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('dashboard/sector');
			return TRUE;
		}        
	}
	
	public function get_blog_home()
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by('blog_id','desc');
		$this->db->limit(10);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_blog_limited()
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by('blog_id','desc');
		$this->db->limit(4);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_blog()
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by('blog_id','desc');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function delete_blogs($id)
	{
		$this->db->where('blog_id',$id);
		$this->db->delete('blog'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard/view_blogs/'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('dashboard/view_blogs');
			return TRUE;
		}        
	}
	
	public function get_blog_limit()
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by('blog_id','desc');
		$this->db->limit(1);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function get_blog_id($id)
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where('blog_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function insert_blog($array)
	{
		$this->db->insert('blog',$array);
		return $this->db->insert_id();
	}
	
	public function insert_assessment($array)
	{
		$res = $this->db->insert('assessment',$array);
		return $res;
	}
	
	public function insert_investment($array)
	{
		$res = $this->db->insert('investment',$array);
		return $res;
	}
	
	public function insert_purchaser_guide($array)
	{
		$res = $this->db->insert('purchaser_guide',$array);
		return $res;
	}
	
	public function get_assesments()
	{
		$this->db->select('*');
		$this->db->from('assessment a');
		$this->db->join('city c','a.city = c.city_id','left');
		$this->db->join('society s','a.society = s.society_id','left');
		$this->db->join('phase p','a.phase = p.phase_id','left');
		$this->db->join('sector se','a.sector = se.sector_id','left');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_assesments_id($id)
	{
		$this->db->select('*');
		$this->db->from('assessment a');
		$this->db->join('city c','a.city = c.city_id','left');
		$this->db->join('society s','a.society = s.society_id','left');
		$this->db->join('phase p','a.phase = p.phase_id','left');
		$this->db->join('sector se','a.sector = se.sector_id','left');
		$this->db->where('a.assessment_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function get_purchaser_guide()
	{
		$this->db->select('*');
		$this->db->from('purchaser_guide pg');
		$this->db->join('city c','pg.city = c.city_id','left');
		$this->db->join('society s','pg.society = s.society_id','left');
		$this->db->join('phase p','pg.phase = p.phase_id','left');
		$this->db->join('sector se','pg.sector = se.sector_id','left');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_purchaser_guide_id($id)
	{
		$this->db->select('*');
		$this->db->from('purchaser_guide pg');
		$this->db->join('city c','pg.city = c.city_id','left');
		$this->db->join('society s','pg.society = s.society_id','left');
		$this->db->join('phase p','pg.phase = p.phase_id','left');
		$this->db->join('sector se','pg.sector = se.sector_id','left');
		$this->db->where('pg.purchaser_guide_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function get_investment_guide()
	{
		$this->db->select('*');
		$this->db->from('investment i');
		$this->db->join('city c','i.city = c.city_id','left');
		$this->db->join('society s','i.society = s.society_id','left');
		$this->db->join('phase p','i.phase = p.phase_id','left');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_investment_guide_id($id)
	{
		$this->db->select('*');
		$this->db->from('investment i');
		$this->db->join('city c','i.city = c.city_id','left');
		$this->db->join('society s','i.society = s.society_id','left');
		$this->db->join('phase p','i.phase = p.phase_id','left');
		$this->db->where('i.investment_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	
	public function insert_map($array)
	{
		$res = $this->db->insert('maps',$array);
		return $res;
	}
	
	public function update_map($array,$id)
	{
		$this->db->where('map_id',$id);
		$res = $this->db->update('maps',$array);
		return $res;
	}
	
	public function get_maps()
	{
		$this->db->select('*');
		$this->db->from('maps m');
		$this->db->join('city c','c.city_id = m.city_id','left');
		$this->db->join('society s','s.society_id = m.society_id','left');
		$this->db->join('phase p','p.phase_id = m.phase_id','left');
		$this->db->join('sector se','se.sector_id = m.sector_id','left');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_maps_id($id)
	{
		$this->db->select('m.*,c.*,s.*,p.*,se.*,m.city_id as map_city,m.society_id as map_society,m.phase_id as map_phase,m.sector_id as map_sector,');
		$this->db->from('maps m');
		$this->db->join('city c','c.city_id = m.city_id','left');
		$this->db->join('society s','s.society_id = m.society_id','left');
		$this->db->join('phase p','p.phase_id = m.phase_id','left');
		$this->db->join('sector se','se.sector_id = m.sector_id','left');
		$this->db->where('map_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function delete_map($id)
	{
		$this->db->where('map_id',$id);
		$this->db->delete('maps'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard/maps/'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Map Delete Successfully');
			redirect('dashboard/maps');
			return TRUE;
		}        
	}

	public function get_maps_limited()
	{
		$this->db->select('*');
		$this->db->from('maps m');
		$this->db->join('city c','c.city_id = m.city_id','left');
		$this->db->join('society s','s.society_id = m.society_id','left');
		$this->db->order_by('m.map_id','desc');
		$this->db->limit(10);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_map_society($id)
	{
		$this->db->select('*');
		$this->db->from('maps m');
		$this->db->join('city c','c.city_id = m.city_id','left');
		$this->db->join('society s','s.society_id = m.society_id','left');
		$this->db->where('m.society_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}

	public function get_map_phase($id)
	{
		$this->db->select('*');
		$this->db->from('maps m');
		$this->db->join('city c','c.city_id = m.city_id','left');
		$this->db->join('society s','s.society_id = m.society_id','left');
		$this->db->join('phase p','p.phase_id = m.phase_id','left');
		$this->db->where('m.phase_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function get_map_sector($id)
	{
		$this->db->select('*');
		$this->db->from('maps m');
		$this->db->join('city c','c.city_id = m.city_id','left');
		$this->db->join('society s','s.society_id = m.society_id','left');
		$this->db->join('phase p','p.phase_id = m.phase_id','left');
		$this->db->where('m.sector_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function insert_market_updates($array)
	{
		$res = $this->db->insert('market_updates',$array);
		return $res;
	}
	
	public function get_market_updates()
	{
		$this->db->select('*');
		$this->db->from('market_updates m');
		$this->db->join('user u','u.user_id = m.user_id','left');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_market_updates_limit()
	{
		$this->db->select('*');
		$this->db->from('market_updates');
		$this->db->order_by('market_update_id','desc');
		$this->db->limit(1);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function get_market_updates_limited()
	{
		$this->db->select('*');
		$this->db->from('market_updates');
		$this->db->order_by('market_update_id','desc');
		$this->db->limit(4);
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_market_updates_id($id)
	{
		$this->db->select('*');
		$this->db->from('market_updates');
		$this->db->where('market_update_id',$id);
		$res = $this->db->get()->row_array();
		return $res;
	}
	
	public function delete_market_updates($id)
	{
		$this->db->where('market_update_id',$id);
		$this->db->delete('market_updates'); 
		if ($this->db->affected_rows() == 0) 
		{
			$this->session->set_flashdata('error',"Delete Failed! Something went wrong.");
			redirect('dashboard/market_updates'.$id);
			return FALSE;
		}
		else
		{
			$this->session->set_flashdata('success', 'Delete Successfully');
			redirect('dashboard/market_updates');
			return TRUE;
		}        
	}

	public function get_contact_us()
	{
		$this->db->select('*');
		$this->db->from('contact_us');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	public function get_blog_subscribe()
	{
		$this->db->select('*');
		$this->db->from('blog_subscribe');
		$res = $this->db->get()->result_array();
		return $res;
	}
	
	
	
}