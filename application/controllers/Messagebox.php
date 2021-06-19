<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Messagebox extends CI_Controller
	{
		function __construct() 
		{
			parent::__construct();
			$this->load->model('messagebox_model');
			$this->load->model('dashboard_model');
			$this->load->library('form_validation');
			$this->load->library('session');
        }
		 
		public function index()
		{
			$this->check_login();
			$data['get_messages'] = $this->messagebox_model->get_messages();
			$data['agents'] = $this->messagebox_model->get_agents();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('message_inbox',$data);
		}
		
		public function sent_message($inbox_id)
		{
			$this->check_login();
			$data['message'] = $this->messagebox_model->get_messages_id($inbox_id);
			$data['get_messages'] = $this->messagebox_model->get_messages();
			$data['agents'] = $this->messagebox_model->get_agents();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('sent_message',$data);
		}
		
		public function delete_message()
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('delete_message',$data);
		}
		
		public function agent_inbox($id)
		{
			$this->check_login();
			$data['messages'] = $this->messagebox_model->get_messages();
			$data['agents'] = $this->messagebox_model->get_agents();
			$data['get_messages'] = $this->messagebox_model->get_agent_message_id($id);
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			//echo '<pre>'; print_r($data['get_messages']);exit;
			$this->load->view('message_inbox',$data);
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