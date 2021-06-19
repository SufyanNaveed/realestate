<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller
	{
		function __construct() 
		{
			parent::__construct();
			$this->load->model('login_model');
			$this->load->library('form_validation');
			$this->load->library('session');
        }
		
		
		public function index()
		{
			$this->load->view('login');
		}
		
		public function signin()
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$res = $this->login_model->user_login($email,$password);
			
			if($res)
			{
				$user_info = array("email" => $res["email"],"user_role" => $res['user_role'],"user_id"=>$res["user_id"],
				"login" => 'logged_in',"phone" => $res["phone"],"username" => $res["username"] );
				$this->session->set_userdata($user_info);
				$this->session->userdata('logged_in',$user_info);
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error','Email or Password incorrect');
				redirect('login');
			}
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
		
		public function logout()
		{
			$this->session->sess_destroy();
			redirect ('login');
		}
		
		
	}		