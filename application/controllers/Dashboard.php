<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller
	{
		function __construct() 
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('dashboard_model');			
        }
		 
		public function index()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			//echo '<pre>'; print_r($data['roles']);exit;
			$this->load->view('dashboard', $data);
		}
		
		public function profile()
		{
			$this->check_login();
			$data['country'] = $this->dashboard_model->get_country();
			$data['cities'] = $this->dashboard_model->get_city();
			$data['profile'] = $this->dashboard_model->get_profile();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('user_profile', $data);
		}
		
		public function update_profile()
		{
			$username = $this->input->post('username');
			$estate_name = $this->input->post('estate_name');
			$phone = $this->input->post('phone');
			$cell = $this->input->post('cell');
			$fax = $this->input->post('fax');
			$address = $this->input->post('address');
			$zip_code = $this->input->post('zip_code');
			$country = $this->input->post('country');
			$city = $this->input->post('city');
			$about_self = $this->input->post('about_self');
			$work_experience = $this->input->post('work_experience');
			$designation = $this->input->post('designation');
						
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
			'estate_name'  =>  $estate_name,
			'phone' => $phone,
			'cell' => $cell,
			'fax' => $fax,
			'address' => $address,
			'zip_code' => $zip_code,
			'country' => 1,
			'city' => $city,
			'about_self' => $about_self,
			'profile_image' => $profile_image,
			'work_experience' => $work_experience,
			'designation' => $designation,
			);
			
			//echo '<pre>'; print_r($array);exit;
			$res = $this->dashboard_model->update_profile($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Profile Update Successfully');
				redirect('dashboard/profile');
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('dashboard/profile');
			}
		}
		
		public function password()
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('change_password');
		}
		
		public function change_password()
		{
			$this->form_validation->set_rules('new_pass', 'New Password', 'required');
			$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[new_pass]');
			
			if ($this->form_validation->run() === TRUE)
			{
				$current_pass = $this->input->post('current_pass');
				$new_pass = $this->input->post('new_pass');
				$confirm_pass = $this->input->post('confirm_pass');
						
				$array = array(
				'password' => md5($new_pass),
				);
			
				//echo '<pre>'; print_r($array);exit;
				$res = $this->dashboard_model->change_password($array,$current_pass);
				if($res)
				{
					$this->session->set_flashdata('success', 'Password Update Successfully.');
					redirect('dashboard/password');
				}
				else
				{
					$this->session->set_flashdata('error',"Invalid Current Password.");
					redirect('dashboard/password');
				}
			}
			else
			{
				$this->session->set_flashdata('error',"New and Confirm Password doesn't Match.");
				redirect('dashboard/password');
			}
		}
		
		public function roles($id)
		{
			$this->check_login();
			$data['roles'] = $this->dashboard_model->get_user_roles($id);
			$data['id'] = $id;
			//echo '<pre>'; print_r($data['roles']);exit;
			$this->load->view('user_roles',$data);
		}
		
		public function insert_user_roles()
		{
			$data = $this->input->post('roles');
			$user_roles = array();
			for($i=1; $i<=21; $i++)
			{
				if(!isset($data[$i]))
				{
					$user_roles[$i] = 0;
				}
				else
				{
					$user_roles[$i] = $data[$i];
				}
			}
			$roles = implode(',',$user_roles);
			$user_id = $this->input->post('user_id');
			
			$array = array(
			'user_id'  =>  $user_id,
			'roles'  =>  $roles,
			);
			
			//echo '<pre>'; print_r($array);exit;
			$res = $this->dashboard_model->insert_user_roles($user_id,$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'User Roles Assigning Successfully');
				redirect('dashboard/roles/'.$user_id);
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('dashboard/roles/'.$user_id);
			}
		}
		
		public function post_listing()
		{
			$this->check_login();
			$data['city'] = $this->dashboard_model->get_city();
			$data['agents'] = $this->dashboard_model->get_agents();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('post_listing',$data);
		}
		
		public function edit_post_listing($id)
		{
			$this->check_login();
			$data['city'] = $this->dashboard_model->get_city();
			$data['agents'] = $this->dashboard_model->get_agents();
			$data['post_listing'] = $this->dashboard_model->get_post_ads_id($id);
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('edit_post_listing',$data);
		}
		
		public function fetech_location()
		{
			$city_id = $this->input->post('id');
			//print_r($city_id);exit;
			$location = $this->dashboard_model->fetech_location_id($city_id);
			if($location)
			{
				$locat='<option value="">Select From List</option>';
				foreach($location as $row)
				{
					$locat.='<option value='.$row['location_id'].'>'.$row['location_name'].'</option>';
				}
				echo $locat;
				exit;
			}
			else
			{
				echo 'empty';
				exit;
			}
		}
		
		public function fetech_sub_location()
		{
			$location_id = $this->input->post('id');
			$location = $this->dashboard_model->fetech_sub_location_id($location_id);
			if($location)
			{
				$locat='<option value="">Any</option>';
				foreach($location as $row)
				{
					$locat.='<option value='.$row['location_id'].'>'.$row['location_name'].'</option>';
				}
				echo $locat;
				exit;
			}
			else
			{
				echo 'empty';
				exit;
			}
		}
		
		public function get_agent_id()
		{
			$agent_id = $this->input->post('id');
			$agents['agent'] = $this->dashboard_model->get_agent_id($agent_id);
			print_r(json_encode($agents['agent']));
		}
		
		public function insert_post_listing()
		{
			
			if($this->input->post('purpose'))
			{
				$purpose = implode(',',$this->input->post('purpose'));
			}
			else{ $purpose = "";}
			
			if($this->input->post('wanted_for'))
			{
				$wanted_for = implode(',',$this->input->post('wanted_for'));
			}else{ $wanted_for = "";}
			
			if($this->input->post('property_type'))
			{
				$property_type = implode(',',$this->input->post('property_type'));
			}else{ $property_type = "";}
			
			if($this->input->post('frst_option'))
			{
				$frst_option = implode(',',$this->input->post('frst_option'));
			}else{ $frst_option = "";}
			
			if($this->input->post('scnd_option'))
			{
				$scnd_option = implode(',',$this->input->post('scnd_option'));
			}else{ $scnd_option = "";}
			
			if($this->input->post('thrd_option'))
			{
				$thrd_option = implode(',',$this->input->post('thrd_option'));
			}else{ $thrd_option = "";}
			
			$city = $this->input->post('city');
			$society = $this->input->post('frst_location');
			$phase = $this->input->post('scnd_location');
			$sector = $this->input->post('thrd_location');
			
			
			$lat_val = $this->input->post('lat_val');
			$long_val = $this->input->post('long_val');
			$property_title = $this->input->post('property_title');
			$description = $this->input->post('description');
			$all_inclusive = $this->input->post('all_inclusive');
			$land_area = $this->input->post('land_area');
			$units = $this->input->post('units');
			$bedroom = $this->input->post('bedroom');
			$bathroom = $this->input->post('bathroom');
			
			$min_contract_period = $this->input->post('min_contract_period');
			$min_contract_duration = $this->input->post('min_contract_duration');
			$rental_price = $this->input->post('rental_price');
			$number_of_cheques = $this->input->post('number_of_cheques');
			
			if($this->input->post('security_deposit'))
			{
				$security_deposit = $this->input->post('security_deposit');
			}
			else
			{
				$security_deposit = $this->input->post('or_security_deposit');
			}
			
			if($this->input->post('agent_commission_tenant'))
			{
				$agent_commission_tenant = $this->input->post('agent_commission_tenant');
			}
			else
			{
				$agent_commission_tenant = $this->input->post('or_agent_commission_tenant');
			}
			
			if($this->input->post('agent_commission_landlord'))
			{
				$agent_commission_landlord = $this->input->post('agent_commission_landlord');
			}
			else
			{
				$agent_commission_landlord = $this->input->post('or_agent_commission_landlord');
			}
			if($this->input->post('advance_rent'))
			{
				$advance_rent = $this->input->post('advance_rent');
			}
			else
			{
				$advance_rent = $this->input->post('or_advance_rent');
			}
			$vacating_notice_period = $this->input->post('vacating_notice_period');
			$pay_maintenance_fee = $this->input->post('pay_maintenance_fee');
			$amount_maintenance_fee = $this->input->post('amount_maintenance_fee');
			$list_owner = $this->input->post('list_owner');
			$contact_person = $this->input->post('contact_person');
			$phone = $this->input->post('phone');
			$cell = $this->input->post('cell');
			$fax = $this->input->post('fax');
			$email = $this->input->post('email');
			
			$f_built_in_year = $this->input->post('f_built_in_year');
			$f_bedrooms = $this->input->post('f_bedrooms');
			$f_view = $this->input->post('f_view');
			$f_bathrooms = $this->input->post('f_bathrooms');
			$f_parking_space = $this->input->post('f_parking_space');
			$f_servant_quarter = $this->input->post('f_servant_quarter');
			$f_double_glazed = $this->input->post('f_double_glazed');
			$f_drwaing_room = $this->input->post('f_drwaing_room');
			$f_central_air_condition = $this->input->post('f_central_air_condition');
			$f_dining_room = $this->input->post('f_dining_room');
			$f_central_heating = $this->input->post('f_central_heating');
			$f_kitchen = $this->input->post('f_kitchen');
			$f_flooring = $this->input->post('f_flooring');
			$f_study_room = $this->input->post('f_study_room');
			$f_electricity_backup = $this->input->post('f_electricity_backup');
			$f_prayer_room = $this->input->post('f_prayer_room');
			$f_waste_disposal = $this->input->post('f_waste_disposal');
			$f_powder_room = $this->input->post('f_powder_room');
			$f_floors = $this->input->post('f_floors');
			$f_gym = $this->input->post('f_gym');
			$f_other_main_features = $this->input->post('f_other_main_features');
			$f_store_rooms = $this->input->post('f_store_rooms');
			$f_furnished = $this->input->post('f_furnished');
			$f_steam_rooms = $this->input->post('f_steam_rooms');
			$f_lounge_sitting_room = $this->input->post('f_lounge_sitting_room');
			$f_laundry_room = $this->input->post('f_laundry_room');
			$f_other_room = $this->input->post('f_other_room');
			$f_broadband_internet = $this->input->post('f_broadband_internet');
			$f_lawn_garden = $this->input->post('f_lawn_garden');
			$f_satellite_cable_tv = $this->input->post('f_satellite_cable_tv');
			$f_swimming_pool = $this->input->post('f_swimming_pool');
			$f_intercome = $this->input->post('f_intercome');
			$f_sauna = $this->input->post('f_sauna');
			$f_other_business_communication = $this->input->post('f_other_business_communication');
			$f_jacuzzi = $this->input->post('f_jacuzzi');
			$f_other_healthcare_recreation = $this->input->post('f_other_healthcare_recreation');
			if($this->input->post('f_nearby_school'))
			{
				$nearby_school = $this->input->post('f_nearby_school');
			}
			else
			{
				$nearby_school = $this->input->post('pf_nearby_school');
			}
			if($this->input->post('f_nearby_hospital'))
			{
				$nearby_hospital = $this->input->post('f_nearby_hospital');
			}
			else
			{
				$nearby_hospital = $this->input->post('pf_nearby_hospital');
			}
			if($this->input->post('f_nearby_shopping_mall'))
			{
				$nearby_shopping_mall = $this->input->post('f_nearby_shopping_mall');
			}
			else
			{
				$nearby_shopping_mall = $this->input->post('pf_nearby_shopping_mall');
			}
			if($this->input->post('f_nearby_restaurants'))
			{
				$nearby_restaurants = $this->input->post('f_nearby_restaurants');
			}
			else
			{
				$nearby_restaurants = $this->input->post('pf_nearby_restaurants');
			}
			if($this->input->post('f_distance_airport'))
			{
				$distance_airport = $this->input->post('f_distance_airport');
			}
			else
			{
				$distance_airport = $this->input->post('pf_distance_airport');
			}
			if($this->input->post('f_public_transport'))
			{
				$nearby_public_transport = $this->input->post('f_public_transport');
			}
			else
			{
				$nearby_public_transport = $this->input->post('pf_nearby_public_transport');
			}
			if($this->input->post('f_other_nearby_places'))
			{
				$other_nearby_places = $this->input->post('f_other_nearby_places');
			}
			else
			{
				$other_nearby_places = $this->input->post('pf_other_nearby_places');
			}
			if($this->input->post('f_security_staff'))
			{
				$security_staff = $this->input->post('f_security_staff');
			}
			else
			{
				$security_staff = $this->input->post('pf_security_staff');
			}
			if($this->input->post('f_other_facilities'))
			{
				$other_facilities = $this->input->post('f_other_facilities');
			}
			else
			{
				$other_facilities = $this->input->post('pf_other_facilities');
			}
			$f_maintenance_staff = $this->input->post('f_maintenance_staff');
			$f_facilities_disabled = $this->input->post('f_facilities_disabled');
			$pf_possesion = $this->input->post('pf_possesion');
			$pf_corner = $this->input->post('pf_corner');
			$pf_park_facing = $this->input->post('pf_park_facing');
			$pf_disputed = $this->input->post('pf_disputed');
			$pf_file = $this->input->post('pf_file');
			$pf_balloted = $this->input->post('pf_balloted');
			$pf_sewerage = $this->input->post('pf_sewerage');
			$pf_electricity = $this->input->post('pf_electricity');
			$pf_water_supply = $this->input->post('pf_water_supply');
			$pf_sui_gas = $this->input->post('pf_sui_gas');
			$pf_boundary_wall = $this->input->post('pf_boundary_wall');
			$pf_other_plot_feature = $this->input->post('pf_other_plot_feature');

			$fileName ="";
			$files = $_FILES;
			$cpt = count($_FILES['files']['name']); 
							
			if($cpt<=20)
			{
				
				$number_of_files = sizeof($_FILES['files']['tmp_name']);
				
				$files = $_FILES['files'];
				$errors = array();
				
				
				for($i=0;$i< ($number_of_files - 1);$i++)
				{
					
					if($_FILES['files']['error'][$i] != 0 ) $errors[$i][] = 'Couldn\'t upload file '.$_FILES['files']['name'][$i];
				}
				
					if(sizeof($errors)==0)
					{
						
						$this->load->library('upload');
						$config['upload_path'] = FCPATH . './assets/frontend/img/';
						$config['allowed_types'] = '*';
						$config['encrypt_name'] = False;  
						$config['max_size'] = 2048000;
						//$config['max_width'] = '1024';
						//$config['max_height'] = '768';

						for ($i = 0; $i < ($number_of_files-1); $i++) {
							
							$_FILES['files']['name'] = $files['name'][$i];
							$_FILES['files']['type'] = $files['type'][$i];
							$_FILES['files']['tmp_name'] = $files['tmp_name'][$i];
							$_FILES['files']['error'] = $files['error'][$i];
							$_FILES['files']['size'] = $files['size'][$i];
							$fileName[] = $_FILES['files']['name'];

						$this->upload->initialize($config);
						if ($this->upload->do_upload('files'))
						{
							$data['uploads'][$i] = $this->upload->data();
						}
						else
						{
							$data['upload_errors'][$i] = $this->upload->display_errors();
						}
					}
				}
			}
			
			$ads_images=implode(",",$fileName);
			//echo '<pre>';print_r($ads_images);exit;
			date_default_timezone_set("Asia/Karachi");
			
			$array = array(
			'user_id'  =>  $this->session->userdata('user_id'),
			'purpose'  =>  $purpose,
			'wanted_for' => $wanted_for,
			'property_type' => $property_type,
			'frst_option' => $frst_option,
			'scnd_option' => $scnd_option,
			'thrd_option' => $thrd_option,
			'city' => $city,
			'society' => $society,
			'phase' => $phase,
			'sector' => $sector,
			'property_title' => $property_title,
			'description' => $description,
			'all_inclusive' => $all_inclusive,
			'land_area' => $land_area.' '.$units,
			'bedroom' => $bedroom,
			'bathroom' => $bathroom,
			'min_contract_period' => $min_contract_period,
			'min_contract_duration' => $min_contract_duration,
			'rental_price' => $rental_price,
			'number_of_cheques' => $number_of_cheques,
			'security_deposit'  =>  $security_deposit,
			'agent_commission_tenant' => $agent_commission_tenant,
			'agent_commission_landlord' => $agent_commission_landlord,
			'advance_rent' => $advance_rent,
			'vacating_notice_period' => $vacating_notice_period,
			'pay_maintenance_fee' => $pay_maintenance_fee,
			'amount_maintenance_fee' => $amount_maintenance_fee,
			'list_owner' => $list_owner,
			'contact_person' => $contact_person,
			'phone' => $phone,
			'cell' => $cell,
			'fax' => $fax,
			'email' => $email,
			'f_built_in_year' => $f_built_in_year,
			'f_bedrooms' => $f_bedrooms,
			'f_view' => $f_view,
			'f_bathrooms' => $f_bathrooms,
			'f_parking_space' => $f_parking_space,
			'f_servant_quarter' => $f_servant_quarter,
			'f_double_glazed' => $f_double_glazed,
			'f_drwaing_room' => $f_drwaing_room,
			'f_central_air_condition' => $f_central_air_condition,
			'f_dining_room' => $f_dining_room,
			'f_central_heating' => $f_central_heating,
			'f_kitchen' => $f_kitchen,
			'f_flooring' => $f_flooring,
			'f_study_room' => $f_study_room,
			'f_electricity_backup' => $f_electricity_backup,
			'f_prayer_room' => $f_prayer_room,
			'f_waste_disposal' => $f_waste_disposal,
			'f_powder_room' => $f_powder_room,
			'f_floors' => $f_floors,
			'f_gym' => $f_gym,
			'f_other_main_features' => $f_other_main_features,
			'f_store_rooms' => $f_store_rooms,
			'f_furnished' => $f_furnished,
			'f_steam_rooms' => $f_steam_rooms,
			'f_lounge_sitting_room' => $f_lounge_sitting_room,
			'f_laundry_room' => $f_laundry_room,
			'f_other_room' => $f_other_room,
			'f_broadband_internet' => $f_broadband_internet,
			'f_lawn_garden' => $f_lawn_garden,
			'f_satellite_cable_tv' => $f_satellite_cable_tv,
			'f_swimming_pool' => $f_swimming_pool,
			'f_intercome' => $f_intercome,
			'f_sauna' => $f_sauna,
			'f_other_business_communication' => $f_other_business_communication,
			'f_jacuzzi' => $f_jacuzzi,
			'f_other_healthcare_recreation' => $f_other_healthcare_recreation,
			'nearby_school' => $nearby_school,
			'nearby_hospital' => $nearby_hospital,
			'nearby_shopping_mall' => $nearby_shopping_mall,
			'nearby_restaurants' => $nearby_restaurants,
			'distance_airport' => $distance_airport,
			'nearby_public_transport' => $nearby_public_transport,
			'other_nearby_places' => $other_nearby_places,
			'security_staff' => $security_staff,
			'other_facilities' => $other_facilities,
			'f_maintenance_staff' => $f_maintenance_staff,
			'f_facilities_disabled' => $f_facilities_disabled,
			'pf_possesion' => $pf_possesion,
			'pf_corner' => $pf_corner,
			'pf_park_facing' => $pf_park_facing,
			'pf_disputed' => $pf_disputed,
			'pf_file' => $pf_file,
			'pf_balloted' => $pf_balloted,
			'pf_sewerage' => $pf_sewerage,
			'pf_electricity' => $pf_electricity,
			'pf_water_supply' => $pf_water_supply,
			'pf_sui_gas' => $pf_sui_gas,
			'pf_boundary_wall' => $pf_boundary_wall,
			'pf_other_plot_feature' => $pf_other_plot_feature,
			'ads_images' => $ads_images,
			'post_ads_created_date' => date('Y-m-d h:i:s'),
			'video_url' => $this->input->post('video_url'),
			'lat_val' => $this->input->post('lat_val'),
			'long_val' => $this->input->post('long_val'),
			);
			
			//echo '<pre>'; print_r($array);exit;
			
			$res = $this->dashboard_model->insert_post_listing($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Your Ads Post Successfully');
				redirect('dashboard/post_listing');
			}
			else
			{
				$this->session->set_flashdata('error',"Insertion Failed! Something went wrong.");
				redirect('dashboard/post_listing');
			}
		}
		
		
		public function update_hot_ads_type($id)
		{
			$array = array(
			'hot_ads_type'  => 1,
			'hot_ads_updated_date'=> date('y-m-d'),
			);
			$res = $this->dashboard_model->update_hot_ads_type($id,$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('dashboard');
			}
		}
		
		public function update_superhot_ads_type($id)
		{
			$array = array(
			'superhot_ads_type'  => 1,
			'superhot_ads_updated_date'=> date('y-m-d'),
			);
			$res = $this->dashboard_model->update_superhot_ads_type($id,$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('dashboard');
			}
		}
		
		public function update_refresh_ads_type($id)
		{
			date_default_timezone_set("Asia/Karachi");
			
			$array = array(
			'post_ads_created_date' => date('Y-m-d h:i:s'),
			'refresh_ads_updated_date'=> date('y-m-d'),
			);
			//echo '<pre>'; print_r($array);exit;
			
			$res = $this->dashboard_model->update_refresh_ads_type($id,$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('dashboard');
			}
		}
		
		public function sold_property($id)
		{
			date_default_timezone_set("Asia/Karachi");
			
			$array = array(
			'sold_out_status'=> 1,
			);
			//echo '<pre>'; print_r($array);exit;
			
			$res = $this->dashboard_model->update_post_ads_type($id,$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('dashboard');
			}
		}
		
		public function delete_ads($id)
		{
			$res = $this->dashboard_model->delete_ads($id);
		}
		
		public function update_post_listing()
		{
			if($this->input->post('purpose'))
			{
				$purpose = implode(',',$this->input->post('purpose'));
			}
			else{ $purpose = "";}
			
			if($this->input->post('wanted_for'))
			{
				$wanted_for = implode(',',$this->input->post('wanted_for'));
			}else{ $wanted_for = "";}
			
			if($this->input->post('property_type'))
			{
				$property_type = implode(',',$this->input->post('property_type'));
			}else{ $property_type = "";}
			
			if($this->input->post('frst_option'))
			{
				$frst_option = implode(',',$this->input->post('frst_option'));
			}else{ $frst_option = "";}
			
			if($this->input->post('scnd_option'))
			{
				$scnd_option = implode(',',$this->input->post('scnd_option'));
			}else{ $scnd_option = "";}
			
			if($this->input->post('thrd_option'))
			{
				$thrd_option = implode(',',$this->input->post('thrd_option'));
			}else{ $thrd_option = "";}
			
			$city = $this->input->post('city');
			$society = $this->input->post('frst_location');
			$phase = $this->input->post('scnd_location');
			$sector = $this->input->post('thrd_location');
			
			
			$lat_val = $this->input->post('lat_val');
			$long_val = $this->input->post('long_val');
			$property_title = $this->input->post('property_title');
			$description = $this->input->post('description');
			$all_inclusive = $this->input->post('all_inclusive');
			$land_area = $this->input->post('land_area');
			$units = $this->input->post('units');
			$bedroom = $this->input->post('bedroom');
			$bathroom = $this->input->post('bathroom');
			
			$min_contract_period = $this->input->post('min_contract_period');
			$min_contract_duration = $this->input->post('min_contract_duration');
			$rental_price = $this->input->post('rental_price');
			$number_of_cheques = $this->input->post('number_of_cheques');
			
			if($this->input->post('security_deposit'))
			{
				$security_deposit = $this->input->post('security_deposit');
			}
			else
			{
				$security_deposit = $this->input->post('or_security_deposit');
			}
			
			if($this->input->post('agent_commission_tenant'))
			{
				$agent_commission_tenant = $this->input->post('agent_commission_tenant');
			}
			else
			{
				$agent_commission_tenant = $this->input->post('or_agent_commission_tenant');
			}
			
			if($this->input->post('agent_commission_landlord'))
			{
				$agent_commission_landlord = $this->input->post('agent_commission_landlord');
			}
			else
			{
				$agent_commission_landlord = $this->input->post('or_agent_commission_landlord');
			}
			if($this->input->post('advance_rent'))
			{
				$advance_rent = $this->input->post('advance_rent');
			}
			else
			{
				$advance_rent = $this->input->post('or_advance_rent');
			}
			$vacating_notice_period = $this->input->post('vacating_notice_period');
			$pay_maintenance_fee = $this->input->post('pay_maintenance_fee');
			$amount_maintenance_fee = $this->input->post('amount_maintenance_fee');
			$list_owner = $this->input->post('list_owner');
			$contact_person = $this->input->post('contact_person');
			$phone = $this->input->post('phone');
			$cell = $this->input->post('cell');
			$fax = $this->input->post('fax');
			$email = $this->input->post('email');
			
			$f_built_in_year = $this->input->post('f_built_in_year');
			$f_bedrooms = $this->input->post('f_bedrooms');
			$f_view = $this->input->post('f_view');
			$f_bathrooms = $this->input->post('f_bathrooms');
			$f_parking_space = $this->input->post('f_parking_space');
			$f_servant_quarter = $this->input->post('f_servant_quarter');
			$f_double_glazed = $this->input->post('f_double_glazed');
			$f_drwaing_room = $this->input->post('f_drwaing_room');
			$f_central_air_condition = $this->input->post('f_central_air_condition');
			$f_dining_room = $this->input->post('f_dining_room');
			$f_central_heating = $this->input->post('f_central_heating');
			$f_kitchen = $this->input->post('f_kitchen');
			$f_flooring = $this->input->post('f_flooring');
			$f_study_room = $this->input->post('f_study_room');
			$f_electricity_backup = $this->input->post('f_electricity_backup');
			$f_prayer_room = $this->input->post('f_prayer_room');
			$f_waste_disposal = $this->input->post('f_waste_disposal');
			$f_powder_room = $this->input->post('f_powder_room');
			$f_floors = $this->input->post('f_floors');
			$f_gym = $this->input->post('f_gym');
			$f_other_main_features = $this->input->post('f_other_main_features');
			$f_store_rooms = $this->input->post('f_store_rooms');
			$f_furnished = $this->input->post('f_furnished');
			$f_steam_rooms = $this->input->post('f_steam_rooms');
			$f_lounge_sitting_room = $this->input->post('f_lounge_sitting_room');
			$f_laundry_room = $this->input->post('f_laundry_room');
			$f_other_room = $this->input->post('f_other_room');
			$f_broadband_internet = $this->input->post('f_broadband_internet');
			$f_lawn_garden = $this->input->post('f_lawn_garden');
			$f_satellite_cable_tv = $this->input->post('f_satellite_cable_tv');
			$f_swimming_pool = $this->input->post('f_swimming_pool');
			$f_intercome = $this->input->post('f_intercome');
			$f_sauna = $this->input->post('f_sauna');
			$f_other_business_communication = $this->input->post('f_other_business_communication');
			$f_jacuzzi = $this->input->post('f_jacuzzi');
			$f_other_healthcare_recreation = $this->input->post('f_other_healthcare_recreation');
			if($this->input->post('f_nearby_school'))
			{
				$nearby_school = $this->input->post('f_nearby_school');
			}
			else
			{
				$nearby_school = $this->input->post('pf_nearby_school');
			}
			if($this->input->post('f_nearby_hospital'))
			{
				$nearby_hospital = $this->input->post('f_nearby_hospital');
			}
			else
			{
				$nearby_hospital = $this->input->post('pf_nearby_hospital');
			}
			if($this->input->post('f_nearby_shopping_mall'))
			{
				$nearby_shopping_mall = $this->input->post('f_nearby_shopping_mall');
			}
			else
			{
				$nearby_shopping_mall = $this->input->post('pf_nearby_shopping_mall');
			}
			if($this->input->post('f_nearby_restaurants'))
			{
				$nearby_restaurants = $this->input->post('f_nearby_restaurants');
			}
			else
			{
				$nearby_restaurants = $this->input->post('pf_nearby_restaurants');
			}
			if($this->input->post('f_distance_airport'))
			{
				$distance_airport = $this->input->post('f_distance_airport');
			}
			else
			{
				$distance_airport = $this->input->post('pf_distance_airport');
			}
			if($this->input->post('f_public_transport'))
			{
				$nearby_public_transport = $this->input->post('f_public_transport');
			}
			else
			{
				$nearby_public_transport = $this->input->post('pf_nearby_public_transport');
			}
			if($this->input->post('f_other_nearby_places'))
			{
				$other_nearby_places = $this->input->post('f_other_nearby_places');
			}
			else
			{
				$other_nearby_places = $this->input->post('pf_other_nearby_places');
			}
			if($this->input->post('f_security_staff'))
			{
				$security_staff = $this->input->post('f_security_staff');
			}
			else
			{
				$security_staff = $this->input->post('pf_security_staff');
			}
			if($this->input->post('f_other_facilities'))
			{
				$other_facilities = $this->input->post('f_other_facilities');
			}
			else
			{
				$other_facilities = $this->input->post('pf_other_facilities');
			}
			$f_maintenance_staff = $this->input->post('f_maintenance_staff');
			$f_facilities_disabled = $this->input->post('f_facilities_disabled');
			$pf_possesion = $this->input->post('pf_possesion');
			$pf_corner = $this->input->post('pf_corner');
			$pf_park_facing = $this->input->post('pf_park_facing');
			$pf_disputed = $this->input->post('pf_disputed');
			$pf_file = $this->input->post('pf_file');
			$pf_balloted = $this->input->post('pf_balloted');
			$pf_sewerage = $this->input->post('pf_sewerage');
			$pf_electricity = $this->input->post('pf_electricity');
			$pf_water_supply = $this->input->post('pf_water_supply');
			$pf_sui_gas = $this->input->post('pf_sui_gas');
			$pf_boundary_wall = $this->input->post('pf_boundary_wall');
			$pf_other_plot_feature = $this->input->post('pf_other_plot_feature');
			
			$post_id = $this->input->post('post_id');

			$fileName = array();
			$files = $_FILES;
			$cpt = count($_FILES['files']['name']); 
			if($cpt<=20 && $cpt > 0)
			{
				
				$number_of_files = sizeof($_FILES['files']['tmp_name']);
				
				$files = $_FILES['files'];
				$errors = array();
				
				
				for($i=0;$i< ($number_of_files - 1);$i++)
				{
					
					if($_FILES['files']['error'][$i] != 0 ) $errors[$i][] = 'Couldn\'t upload file '.$_FILES['files']['name'][$i];
				}
				
					if(sizeof($errors)==0)
					{
						
						$this->load->library('upload');
						$config['upload_path'] = FCPATH . './assets/frontend/img/';
						$config['allowed_types'] = '*';
						$config['encrypt_name'] = False;  
						$config['max_size'] = 102400;
						for ($i = 0; $i < ($number_of_files-1); $i++) {
							
							$_FILES['files']['name'] = $files['name'][$i];
							$_FILES['files']['type'] = $files['type'][$i];
							$_FILES['files']['tmp_name'] = $files['tmp_name'][$i];
							$_FILES['files']['error'] = $files['error'][$i];
							$_FILES['files']['size'] = $files['size'][$i];
							$fileName[] = $_FILES['files']['name'];

						$this->upload->initialize($config);
						if ($this->upload->do_upload('files'))
						{
							$data['uploads'][$i] = $this->upload->data();
						}
						else
						{
							$data['upload_errors'][$i] = $this->upload->display_errors();
						}
					}
				}
			}
			
			$ads_images=implode(",",$fileName);
			if(!$ads_images)
			{
				$ads_images = $this->input->post('old_images');
			}
			
			$array = array(
			'user_id'  =>  $this->session->userdata('user_id'),
			'purpose'  =>  $purpose,
			'wanted_for' => $wanted_for,
			'property_type' => $property_type,
			'frst_option' => $frst_option,
			'scnd_option' => $scnd_option,
			'thrd_option' => $thrd_option,
			'city' => $city,
			'society' => $society,
			'phase' => $phase,
			'sector' => $sector,
			'property_title' => $property_title,
			'description' => $description,
			'all_inclusive' => $all_inclusive,
			'land_area' => $land_area.' '.$units,
			'bedroom' => $bedroom,
			'bathroom' => $bathroom,
			'min_contract_period' => $min_contract_period,
			'min_contract_duration' => $min_contract_duration,
			'rental_price' => $rental_price,
			'number_of_cheques' => $number_of_cheques,
			'security_deposit'  =>  $security_deposit,
			'agent_commission_tenant' => $agent_commission_tenant,
			'agent_commission_landlord' => $agent_commission_landlord,
			'advance_rent' => $advance_rent,
			'vacating_notice_period' => $vacating_notice_period,
			'pay_maintenance_fee' => $pay_maintenance_fee,
			'amount_maintenance_fee' => $amount_maintenance_fee,
			'list_owner' => $list_owner,
			'contact_person' => $contact_person,
			'phone' => $phone,
			'cell' => $cell,
			'fax' => $fax,
			'email' => $email,
			'f_built_in_year' => $f_built_in_year,
			'f_bedrooms' => $f_bedrooms,
			'f_view' => $f_view,
			'f_bathrooms' => $f_bathrooms,
			'f_parking_space' => $f_parking_space,
			'f_servant_quarter' => $f_servant_quarter,
			'f_double_glazed' => $f_double_glazed,
			'f_drwaing_room' => $f_drwaing_room,
			'f_central_air_condition' => $f_central_air_condition,
			'f_dining_room' => $f_dining_room,
			'f_central_heating' => $f_central_heating,
			'f_kitchen' => $f_kitchen,
			'f_flooring' => $f_flooring,
			'f_study_room' => $f_study_room,
			'f_electricity_backup' => $f_electricity_backup,
			'f_prayer_room' => $f_prayer_room,
			'f_waste_disposal' => $f_waste_disposal,
			'f_powder_room' => $f_powder_room,
			'f_floors' => $f_floors,
			'f_gym' => $f_gym,
			'f_other_main_features' => $f_other_main_features,
			'f_store_rooms' => $f_store_rooms,
			'f_furnished' => $f_furnished,
			'f_steam_rooms' => $f_steam_rooms,
			'f_lounge_sitting_room' => $f_lounge_sitting_room,
			'f_laundry_room' => $f_laundry_room,
			'f_other_room' => $f_other_room,
			'f_broadband_internet' => $f_broadband_internet,
			'f_lawn_garden' => $f_lawn_garden,
			'f_satellite_cable_tv' => $f_satellite_cable_tv,
			'f_swimming_pool' => $f_swimming_pool,
			'f_intercome' => $f_intercome,
			'f_sauna' => $f_sauna,
			'f_other_business_communication' => $f_other_business_communication,
			'f_jacuzzi' => $f_jacuzzi,
			'f_other_healthcare_recreation' => $f_other_healthcare_recreation,
			'nearby_school' => $nearby_school,
			'nearby_hospital' => $nearby_hospital,
			'nearby_shopping_mall' => $nearby_shopping_mall,
			'nearby_restaurants' => $nearby_restaurants,
			'distance_airport' => $distance_airport,
			'nearby_public_transport' => $nearby_public_transport,
			'other_nearby_places' => $other_nearby_places,
			'security_staff' => $security_staff,
			'other_facilities' => $other_facilities,
			'f_maintenance_staff' => $f_maintenance_staff,
			'f_facilities_disabled' => $f_facilities_disabled,
			'pf_possesion' => $pf_possesion,
			'pf_corner' => $pf_corner,
			'pf_park_facing' => $pf_park_facing,
			'pf_disputed' => $pf_disputed,
			'pf_file' => $pf_file,
			'pf_balloted' => $pf_balloted,
			'pf_sewerage' => $pf_sewerage,
			'pf_electricity' => $pf_electricity,
			'pf_water_supply' => $pf_water_supply,
			'pf_sui_gas' => $pf_sui_gas,
			'pf_boundary_wall' => $pf_boundary_wall,
			'pf_other_plot_feature' => $pf_other_plot_feature,
			'ads_images' => $ads_images,
			'post_ads_created_date' => date('Y-m-d h:i:s'),
			'video_url' => $this->input->post('video_url'),
			'lat_val' => $this->input->post('lat_val'),
			'long_val' => $this->input->post('long_val'),
			);
			
			//echo '<pre>'; print_r($array);exit;
			
			$res = $this->dashboard_model->update_post_ads_type($post_id,$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Your Ads Post Update Successfully');
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error',"Updation Failed! Something went wrong.");
				redirect('dashboard/edit_post_listing/'.$post_id);
			}
		}
		
		public function active_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			//echo '<pre>'; print_r($data['post_ads']);exit;
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_sale_listing();
			$data['rent_listing'] =$this->dashboard_model->get_rent_listing();
			$data['wanted_listing'] =$this->dashboard_model->get_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('property_managment',$data);
		}
		
		public function active_sale_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_sale_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('sale_property_managment',$data);
		}
		
		public function active_rent_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['rent_listing'] =$this->dashboard_model->get_rent_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('rent_property_managment',$data);
		}
		
		public function active_wanted_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['wanted_listing'] =$this->dashboard_model->get_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('wanted_property_managment',$data);
		}
		
		public function active_hot_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['wanted_listing'] =$this->dashboard_model->get_hot_property_management();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('hot_property_managment',$data);
		}
		
		public function active_superhot_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['wanted_listing'] =$this->dashboard_model->get_superhot_property_management();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('superhot_property_managment',$data);
		}
		
		public function edited_property_management() 
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_edit_sale_listing();
			$data['rent_listing'] =$this->dashboard_model->get_edit_rent_listing();
			$data['wanted_listing'] =$this->dashboard_model->get_edit_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('property_managment',$data);
		}
		
		public function edited_sale_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_edit_sale_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('sale_property_managment',$data);
		}
		
		public function edited_rent_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['rent_listing'] =$this->dashboard_model->get_edit_rent_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('rent_property_managment',$data);
		}
		
		public function edited_wanted_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['wanted_listing'] =$this->dashboard_model->get_edit_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('wanted_property_managment',$data);
		}
		
		public function pending_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_pending_sale_listing();
			$data['rent_listing'] =$this->dashboard_model->get_pending_rent_listing();
			$data['wanted_listing'] =$this->dashboard_model->get_pending_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('property_managment',$data);
		}
		
		public function pending_sale_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_pending_sale_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('sale_property_managment',$data);
		}
		
		public function pending_rent_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['rent_listing'] =$this->dashboard_model->get_pending_rent_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('rent_property_managment',$data);
		}
		
		public function pending_wanted_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['wanted_listing'] =$this->dashboard_model->get_pending_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('wanted_property_managment',$data);
		}
		
		public function expired_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_expired_sale_listing();
			$data['rent_listing'] =$this->dashboard_model->get_expired_rent_listing();
			$data['wanted_listing'] =$this->dashboard_model->get_expired_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('property_managment',$data);
		}
		
		public function expired_sale_property_management()
		{
			$this->check_login();
			$data['sale_listing'] =$this->dashboard_model->get_expired_sale_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('sale_property_managment',$data);
		}
		
		public function expired_rent_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['rent_listing'] =$this->dashboard_model->get_expired_rent_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('rent_property_managment',$data);
		}
		
		public function expired_wanted_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['wanted_listing'] =$this->dashboard_model->get_expired_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('wanted_property_managment',$data);
		}
		
		public function deleted_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_deleted_sale_listing();
			$data['rent_listing'] =$this->dashboard_model->get_deleted_rent_listing();
			$data['wanted_listing'] =$this->dashboard_model->get_deleted_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('property_managment',$data);
		}
		
		public function deleted_sale_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_deleted_sale_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('sale_property_managment',$data);
		}
		
		public function deleted_rent_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['rent_listing'] =$this->dashboard_model->get_deleted_rent_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('rent_property_managment',$data);
		}
		
		public function deleted_wanted_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['wanted_listing'] =$this->dashboard_model->get_deleted_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('wanted_property_managment',$data);
		}
		
		public function rejected_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_rejected_sale_listing();
			$data['rent_listing'] =$this->dashboard_model->get_rejected_rent_listing();
			$data['wanted_listing'] =$this->dashboard_model->get_rejected_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('property_managment',$data);
		}
		
		public function rejected_sale_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['sale_listing'] =$this->dashboard_model->get_rejected_sale_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('sale_property_managment',$data);
		}
		
		public function rejected_rent_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['rent_listing'] =$this->dashboard_model->get_rejected_rent_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('rent_property_managment',$data);
		}
		
		public function rejected_wanted_property_management()
		{
			$this->check_login();
			$data['post_ads'] = $this->dashboard_model->get_post_ads();
			$data['get_quota'] = $this->dashboard_model->get_quota();
			$data['wanted_listing'] =$this->dashboard_model->get_rejected_wanted_listing();
			$data['roles'] = $this->dashboard_model->get_user_roles($this->session->userdata('user_id'));
			$this->load->view('wanted_property_managment',$data);
		}
		
		public function countries()
		{
			$this->check_login();
			$data['countries'] = $this->dashboard_model->get_countries();
			//print_r($data['countries']);exit;
			$this->load->view('countries',$data);
		}
		
		public function add_countries()
		{
			$this->check_login();
			$this->load->view('add_countries');
		}
		
		public function insert_countries()
		{
			$array = array('country_name' => $this->input->post('country_name'));
			
			$res = $this->dashboard_model->insert_countries($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Added Successfully');
				redirect('dashboard/countries');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/add_countries');
			}
		}
		
		public function delete_countries($id)
		{
			$this->check_login();
			$this->dashboard_model->delete_countries($id);
		}
		
		public function cities()
		{
			$this->check_login();
			$data['cities'] = $this->dashboard_model->get_cities();
			$this->load->view('cities',$data);
		}
		
		public function add_cities()
		{
			$this->check_login();
			$data['countries'] = $this->dashboard_model->get_countries();
			$this->load->view('add_cities',$data);
		}
		
		public function insert_cities()
		{
			$array = array(
			'country_id' => $this->input->post('country_id'),
			'city_name' => $this->input->post('city_name')
			);
			
			$res = $this->dashboard_model->insert_cities($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Added Successfully');
				redirect('dashboard/cities');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/add_cities');
			}
		}
		
		public function delete_cities($id)
		{
			$this->check_login();
			$this->dashboard_model->delete_cities($id);
		}
		
		public function society()
		{
			$this->check_login();
			$data['society'] = $this->dashboard_model->get_society();
			$this->load->view('society',$data);
		}
		
		public function add_society()
		{
			$this->check_login();
			$data['countries'] = $this->dashboard_model->get_countries();
			$this->load->view('add_society',$data);
		}
		
		public function fetech_cities()
		{
			$id = $this->input->post('id');
			$cities = $this->dashboard_model->get_cities_id($id);
			if($cities)
			{
				$city='<option value="">Select City</option>';
				foreach($cities as $row)
				{
					$city.='<option value='.$row['city_id'].'>'.$row['city_name'].'</option>';
				}
				echo $city;
				exit;
			}else{
				echo 'empty';
				exit;
			}
		}
		
		public function insert_society()
		{
			$array = array(
			'country_id' => $this->input->post('country_id'),
			'city_id' => $this->input->post('city_id'),
			'society_name' => $this->input->post('society_name')
			);
			
			$res = $this->dashboard_model->insert_society($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Added Successfully');
				redirect('dashboard/society');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/add_society');
			}
		}
		
		public function delete_society($id)
		{
			$this->check_login();
			$this->dashboard_model->delete_society($id);
		}
		
		
		public function phase()
		{
			$this->check_login();
			$data['phase'] = $this->dashboard_model->get_phase();
			//print_r($data['phase']);exit;
			$this->load->view('phase',$data);
		}
		
		public function add_phase()
		{
			$this->check_login();
			$data['countries'] = $this->dashboard_model->get_countries();
			$this->load->view('add_phase',$data);
		}
		
		public function fetech_society()
		{
			$id = $this->input->post('id');
			$society = $this->dashboard_model->get_society_id($id);
			if($society)
			{
				$so='<option value="">Select Society</option>';
				foreach($society as $row)
				{
					$so.='<option value='.$row['society_id'].'>'.$row['society_name'].'</option>';
				}
				echo $so;
				exit;
			}else{
				echo 'empty';
				exit;
			}
		}
		
		public function insert_phase()
		{
			$array = array(
			'country_id' => $this->input->post('country_id'),
			'city_id' => $this->input->post('city_id'),
			'society_id' => $this->input->post('society_id'),
			'phase_name' => $this->input->post('phase_name')
			);
			
			$res = $this->dashboard_model->insert_phase($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Added Successfully');
				redirect('dashboard/phase');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/add_phase');
			}
		}
		
		public function edit_phase($id)
		{
			$this->check_login();
			$data['phase'] = $this->dashboard_model->get_phase_against_id($id);
			$this->load->view('edit_phase',$data);
		}

		public function update_phase()
		{
			$id = $this->input->post('phase_id');

			$array = array(
			'country_id' => $this->input->post('country_id'),
			'city_id' => $this->input->post('city_id'),
			'society_id' => $this->input->post('society_id'),
			'phase_name' => $this->input->post('phase_name')
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->dashboard_model->update_phase($id,$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('dashboard/phase');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/edit_phase/'.$id);
			}
		}
		
		public function delete_phase($id)
		{
			$this->check_login();
			$this->dashboard_model->delete_phase($id);
		}
		
		public function sector()
		{
			$this->check_login();
			$data['sector'] = $this->dashboard_model->get_sector();
			//print_r($data['sector']);exit;
			$this->load->view('sector',$data);
		}
		
		public function add_sector()
		{
			$this->check_login();
			$data['countries'] = $this->dashboard_model->get_countries();
			$this->load->view('add_sector',$data);
		}
		
		public function fetech_phase()
		{
			$id = $this->input->post('id');
			$phase = $this->dashboard_model->get_phase_ids($id);
			if($phase)
			{
				$ph='<option value="">Select Phase</option>';
				foreach($phase as $row)
				{
					$ph.='<option value='.$row['phase_id'].'>'.$row['phase_name'].'</option>';
				}
				echo $ph;
				exit;
			}else{
				echo 'empty';
				exit;
			}
		}
		
		public function insert_sector()
		{
			$array = array(
			'country_id' => $this->input->post('country_id'),
			'city_id' => $this->input->post('city_id'),
			'society_id' => $this->input->post('society_id'),
			'phase_id' => $this->input->post('phase_id'),
			'sector_name' => $this->input->post('sector_name'),
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->dashboard_model->insert_sector($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Added Successfully');
				redirect('dashboard/sector');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/add_sector');
			}
		}
		
		public function edit_sector($id)
		{
			$this->check_login();
			$data['sector'] = $this->dashboard_model->get_sector_against_id($id);
			$this->load->view('edit_sector',$data);
		}

		public function update_sector()
		{
			$id = $this->input->post('sector_id');

			$array = array(
			'country_id' => $this->input->post('country_id'),
			'city_id' => $this->input->post('city_id'),
			'society_id' => $this->input->post('society_id'),
			'phase_id' => $this->input->post('phase_id'),
			'sector_name' => $this->input->post('sector_name'),
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->dashboard_model->update_sector($id,$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('dashboard/sector');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/edit_sector/'.$id);
			}
		}
		
		public function delete_sector($id)
		{
			$this->check_login();
			$this->dashboard_model->delete_sector($id);	
		}
		
		public function fetech_sector()
		{
			$id = $this->input->post('id');
			$sector = $this->dashboard_model->get_sector_id($id);
			if($sector)
			{
				$sec='<option value="">Select Sector</option>';
				foreach($sector as $row)
				{
					$sec.='<option value='.$row['sector_id'].'>'.$row['sector_name'].'</option>';
				}
				echo $sec;
				exit;
			}else{
				echo 'empty';
				exit;
			}
		}
		
		public function add_blog()
		{
			$this->check_login();
			$this->load->view('add_blogs');	
		}
		
		public function insert_blog()
		{
			$config['upload_path'] = './blog_images/';
			$config['allowed_types'] = '*';
			$config['max_size'] = 102400;
			$config['encrypt_name'] = False;  
			$this->load->library('upload', $config);
			
			$userfile ='';
			if(!$this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else 
			{
				$fileData = $this->upload->data();
				$userfile = $fileData['file_name'];
			}
			
			$array = array(
			'category' => implode(',',$this->input->post('category')),
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'blog_image' => $userfile,
			);
			
			$res = $this->dashboard_model->insert_blog($array);
			if($res)
			{
				$blog_subscribe = $this->dashboard_model->get_blog_subscribe();
				foreach ($blog_subscribe as $row) 
				{
					$this->load->library('email');

					$this->email->from('acamusbird@gmail.com');
					$this->email->to($row['email']);
					$this->email->subject('New Blog');
					$this->email->message(
base_url('home/detail_blog/'.$res));
					$this->email->send();
				}
				
				$this->session->set_flashdata('success', 'Added Successfully');
				redirect('dashboard/add_blog');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/add_blog');
			}
		}
		
		public function view_blogs()
		{
			$this->check_login();
			$data['blogs'] = $this->dashboard_model->get_blog();
			$this->load->view('view_blogs',$data);	
		}
		
		public function delete_blogs($id)
		{
			$this->check_login();
			$this->dashboard_model->delete_blogs($id);	
		}
		
		public function assesment()
		{
			$this->check_login();
			$data['assesment'] = $this->dashboard_model->get_assesments();
			$this->load->view('free_assesment',$data);	
		}
		
		public function assesment_detail($id)
		{
			$this->check_login();
			$data['assesment'] = $this->dashboard_model->get_assesments_id($id);
			$this->load->view('free_assesment_detail',$data);	
		}
		
		public function purchaser_guide()
		{
			$this->check_login();
			$data['purchaser_guide'] = $this->dashboard_model->get_purchaser_guide();
			$this->load->view('puchaser_guide',$data);	
		}
		
		public function purchaser_detail($id)
		{
			$this->check_login();
			$data['purchaser_guide'] = $this->dashboard_model->get_purchaser_guide_id($id);
			$this->load->view('purchaser_guide_detail',$data);	
		}
		
		public function investment_guide()
		{
			$this->check_login();
			$data['investment_guide'] = $this->dashboard_model->get_investment_guide();
			$this->load->view('investment_guide',$data);	
		}
		
		public function investment_detail($id)
		{
			$this->check_login();
			$data['investment_guide'] = $this->dashboard_model->get_investment_guide_id($id);
			$this->load->view('investment_detail',$data);	
		}
		
		public function add_map()
		{
			$this->check_login();
			$data['cities'] = $this->dashboard_model->get_cities();
			$this->load->view('add_map',$data);	
		}
		
		public function insert_map()
		{
			$config['upload_path'] = './maps/';
			$config['allowed_types'] = '*';
			$config['max_size'] = 204800;
			$config['encrypt_name'] = False;  
			$this->load->library('upload', $config);
			
			$userfile ='';
			if(!$this->upload->do_upload('map'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else 
			{
				$fileData = $this->upload->data();
				$userfile = $fileData['file_name'];
			}
			
			$array = array(
			'city_id' => $this->input->post('city_id'),
			'society_id' => $this->input->post('society_id'),
			'phase_id' => $this->input->post('phase_id'),
			'sector_id' => $this->input->post('sector_id'),
			'title' => $this->input->post('title'),
			'map_image' => $userfile,
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->dashboard_model->insert_map($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Added Successfully');
				redirect('dashboard/maps');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/add_map');
			}
		}
		
		public function maps()
		{
			$this->check_login();
			$data['maps'] = $this->dashboard_model->get_maps();
			$this->load->view('maps',$data);	
		}
		
		public function edit_map($id)
		{
			$this->check_login();
			$data['cities'] = $this->dashboard_model->get_cities();
			$data['maps'] = $this->dashboard_model->get_maps_id($id);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('edit_map',$data);	
		}
		
		public function update_map()
		{
			$config['upload_path'] = './maps/';
			$config['allowed_types'] = '*';
			$config['max_size'] = 204800;
			$config['encrypt_name'] = False;  
			$this->load->library('upload', $config);
			
			$userfile ='';
			if(!$this->upload->do_upload('map'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else 
			{
				$fileData = $this->upload->data();
				$userfile = $fileData['file_name'];
			}
			
			$id = $this->input->post('map_id');
			if($userfile == "")
			{
				$userfile = $this->input->post('old_map_image');
			}

			$array = array(
			'city_id' => $this->input->post('city_id'),
			'society_id' => $this->input->post('society_id'),
			'phase_id' => $this->input->post('phase_id'),
			'sector_id' => $this->input->post('sector_id'),
			'title' => $this->input->post('title'),
			'map_image' => $userfile,
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->dashboard_model->update_map($array,$id);
			if($res)
			{
				$this->session->set_flashdata('success', 'Update Successfully');
				redirect('dashboard/maps');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/edit_map/'.$id);
			}
		}

		public function delete_map($id)
		{
			$this->check_login();
			$this->dashboard_model->delete_map($id);	
		}
		
		public function add_market_updates()
		{
			$this->check_login();
			$this->load->view('add_market_updates');	
		}
		
		public function insert_market_updates()
		{
			$config['upload_path'] = './market_updates/';
			$config['allowed_types'] = '*';
			$config['max_size'] = 102400;
			$config['encrypt_name'] = False;  
			$this->load->library('upload', $config);
			
			$userfile ='';
			if(!$this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else 
			{
				$fileData = $this->upload->data();
				$userfile = $fileData['file_name'];
			}
			
			$array = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'user_id' => $this->session->userdata('user_id'),
			'mu_image' => $userfile,
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->dashboard_model->insert_market_updates($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Added Successfully');
				redirect('dashboard/market_updates');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('dashboard/add_market_updates');
			}
		}
		
		public function market_updates()
		{
			$this->check_login();
			$data['market_updates'] = $this->dashboard_model->get_market_updates();
			$this->load->view('market_updates',$data);	
		}
		
		public function delete_market_updates($id)
		{
			$this->dashboard_model->delete_market_updates($id);	
		}
		
		public function contact_us()
		{
			$this->check_login();
			$data['contact_us'] = $this->dashboard_model->get_contact_us();
			$this->load->view('contact_us',$data);	
		}
		public function upload(){
			$this->load->view('upload');
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