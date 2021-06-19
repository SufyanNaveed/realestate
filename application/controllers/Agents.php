<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Agents extends CI_Controller
	{
		function __construct() 
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('agent_model');
			$this->load->model('dashboard_model');
		}
		 
		public function index()
		{
			$this->check_login();
			$data['agent'] = $this->agent_model->get_agents(); 
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('agents_view', $data);
		}
		
		public function add_agents()
		{
			$this->check_login();
			$data['country'] = $this->agent_model->get_country(); 
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('add_agents',$data);
		}
		
		public function insert_agents()
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
			
			if ($this->form_validation->run() === TRUE)
			{
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$phone = $this->input->post('phone');
				$cell = $this->input->post('cell');
				$fax = $this->input->post('fax');
				$address = $this->input->post('address');
				$zip_code = $this->input->post('zip_code');
				$country = $this->input->post('country');
				$listing_quota = $this->input->post('listing_quota');
				$hot_credit = $this->input->post('hot_credit');
				$superhot_credit = $this->input->post('superhot_credit');
				$refresh_credit = $this->input->post('refresh_credit');
							
				$array = array(
				'username'  =>  $username,
				'email'  =>  $email,
				'password'  => md5($password),
				'phone' => $phone,
				'cell' => $cell,
				'fax' => $fax,
				'address' => $address,
				'zip_code' => $zip_code,
				'country' => $country,
				);
				$user_id = $this->agent_model->insert_agents($array);
				
				$array1 = array(
				'user_id' =>  $user_id,
				'listing_quota' =>  $listing_quota,				
				'hot_credit' =>  $hot_credit,				
				'superhot_credit' =>  $superhot_credit,				
				'refresh_credit' =>  $refresh_credit,				
				);
				
				//echo '<pre>'; print_r($array);exit;
				$res = $this->agent_model->insert_listing_quota($array1);
				if($res)
				{
					$this->session->set_flashdata('success', 'Agent Created Successfully');
					redirect('agents/add_agents');
				}
				else
				{
					$this->session->set_flashdata('error',"Failed! Something went wrong.");
					redirect('agents/add_agents');
				}
			}
			else
			{
				$this->session->set_flashdata('error',"Please enter unique email address.");
				redirect('agents/add_agents');
			}
		}
		
		public function edit_agents($id)
		{
			$this->check_login();
			$data['agent'] = $this->agent_model->get_agent_id($id); 
			$data['country'] = $this->agent_model->get_country(); 
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('edit_agents', $data);
		}
		
		public function delete_agents($id)
		{
			$this->agent_model->delete_agents($id);
		}
		
		public function update_agents()
		{
			$username = $this->input->post('username');
			$phone = $this->input->post('phone');
			$cell = $this->input->post('cell');
			$fax = $this->input->post('fax');
			$address = $this->input->post('address');
			$zip_code = $this->input->post('zip_code');
			$country = $this->input->post('country');
			$about_self = $this->input->post('about_self');
			$user_id = $this->input->post('user_id');
						
			$config['upload_path'] = './profile_images/';
			$config['allowed_types'] = '*';
			$config['max_size'] = 102400;
			$config['encrypt_name'] = False;  
			$this->load->library('upload', $config);
			if($this->upload->do_upload('myFile'))
			{
				$fileData = $this->upload->data();
				$profile_image = $fileData['file_name'];
			}
			else
			{
				$profile_image = $this->input->post('current_profile_image');
			}
			
	
			$array = array(
			'username'  =>  $username,
			'phone' => $phone,
			'cell' => $cell,
			'fax' => $fax,
			'address' => $address,
			'zip_code' => $zip_code,
			'country' => $country,
			'about_self' => $about_self,
			'profile_image' => $profile_image,
			);
			
			//echo '<pre>'; print_r($array);exit;
			$res = $this->agent_model->update_agent($array,$user_id);
			if($res)
			{
				$this->session->set_flashdata('success', 'Agent Update Successfully');
				redirect('agents');
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('agents/edit_agents/'.$user_id);
			}
		}
		
		public function listing_quota()
		{
			$this->check_login();
			$data['listing_quota'] = $this->agent_model->get_listing_quota(); 
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('listing_quota', $data);
		}
		
		public function update_lisitng_quota()
		{
			$user_id = $this->input->post('user_id');
			$listing_quota = $this->input->post('listing_quota');
			$superhot_credit = $this->input->post('superhot_credit');
			$hot_credit = $this->input->post('hot_credit');
			$refresh_credit = $this->input->post('refresh_credit');
			
			$array = array(
			'listing_quota'  =>  $listing_quota,
			'superhot_credit' => $superhot_credit,
			'hot_credit' => $hot_credit,
			'refresh_credit' => $refresh_credit,
			);
			
			//echo '<pre>'; print_r($array);exit;
			$res = $this->agent_model->update_lisitng_quota($array,$user_id);
			if($res)
			{
				$this->session->set_flashdata('success', 'Listing Quota Update Successfully');
				redirect('agents/listing_quota');
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('agents/listing_quota');
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
		
		
	}		