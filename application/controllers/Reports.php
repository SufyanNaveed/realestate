<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Reports extends CI_Controller
	{
		function __construct() 
		{
			parent::__construct();
			$this->load->model('dashboard_model');
			$this->load->library('form_validation');
			$this->load->library('session');
        }
		 
		public function index()
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('traffic_reports',$data);
		}
		
		public function leads_summary()
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('leads_summary',$data);
		}
		
		public function phone_leads()
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('phone_leads',$data);
		}
		
		public function email_leads()
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('email_leads',$data);
		}
		
		public function leads_by_location()
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('leads_by_location',$data);
		}
		
		public function leads_by_country()
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('leads_by_country',$data);
		}
		
		public function check_login()
		{
			$user_info = $this->session->all_userdata();
			if($this->session->userdata('user_id'))
			{
				return true;
			}
			else
			{
				redirect ('login');
			}
		}
		
		
	}		