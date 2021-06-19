<?php 
   
    class Home extends CI_Controller
	{
		function __construct() 
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('dashboard_model');
			$this->load->helper('text');
        }
	    
		public function index()
	    {
	        $data['cities'] = $this->dashboard_model->get_cities();
	        $data['market_updates'] = $this->dashboard_model->get_market_updates_limited();
	        $data['blogs'] = $this->dashboard_model->get_blog_limited();
	       // print_r($data['cities']);exit;
			$this->load->view('frontend/index',$data);
	    }
		
		public function plots()
	    {
	        $data['blogs'] = $this->dashboard_model->get_blog_limited();
	        $data['market_updates'] = $this->dashboard_model->get_market_updates_limited();
	        $data['cities'] = $this->dashboard_model->get_cities();
			$this->load->view('frontend/plots',$data);
	    }
		
		public function commercial()
	    {
	        $data['cities'] = $this->dashboard_model->get_cities();
			$data['market_updates'] = $this->dashboard_model->get_market_updates_limited();
	        $data['blogs'] = $this->dashboard_model->get_blog_limited();
			$this->load->view('frontend/commercial',$data);
	    }
		
		public function rent()
	    {
	        $data['cities'] = $this->dashboard_model->get_cities();
			$data['market_updates'] = $this->dashboard_model->get_market_updates_limited();
	        $data['blogs'] = $this->dashboard_model->get_blog_limited();
			$this->load->view('frontend/rent',$data);
	    }
		
		public function city_posts_sale($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Sale');
			$this->db->where('p.city',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function city_posts_home($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Homes');
			$this->db->where('p.city',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function city_posts_plot($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Plots');
			$this->db->where('p.city',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function city_posts_commercial($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Commercial');
			$this->db->where('p.city',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function city_posts_rent($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			$this->db->where('p.city',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function society_posts_home($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Homes');
			$this->db->where('p.society',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/society_posts',$data);	
		}
		
		public function society_posts_plot($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Plots');
			$this->db->where('p.society',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/society_posts',$data);	
		}
		
		public function society_posts_commercial($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Commercial');
			$this->db->where('p.society',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/society_posts',$data);	
		}
		
		public function society_posts_rent($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			$this->db->where('p.society',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/society_posts',$data);	
		}
		
		public function phase_posts_home($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Homes');
			$this->db->where('p.phase',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/phase_posts',$data);	
		}
		
		public function phase_posts_plot($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Plots');
			$this->db->where('p.phase',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/phase_posts',$data);	
		}
		
		public function phase_posts_commercial($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Commercial');
			$this->db->where('p.phase',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/phase_posts',$data);	
		}
		
		public function phase_posts_rent($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			$this->db->where('p.phase',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/phase_posts',$data);	
		}
		
		public function sector_posts_home($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Homes');
			$this->db->where('p.sector',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/sector_posts',$data);	
		}
		
		public function sector_posts_plot($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Plots');
			$this->db->where('p.sector',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/sector_posts',$data);	
		}
		
		public function sector_posts_commercial($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.property_type','Commercial');
			$this->db->where('p.sector',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/sector_posts',$data);	
		}
		
		public function sector_posts_rent($id)
		{
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			$this->db->where('p.sector',$id);
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/sector_posts',$data);	
		}
		
		public function home_buy()
		{
			$city = $this->input->post('city');
			$type = $this->input->post('type');
			$bedroom = $this->input->post('bedroom');
			$price_from = $this->input->post('price_from');
			$price_to = $this->input->post('price_to');
			$land_area = $this->input->post('land_area');
			$land_from = $this->input->post('land_from');
			$land_to = $this->input->post('land_to');
			$society = $this->input->post('society');
			$phase = $this->input->post('phase');
			$sector = $this->input->post('sector');
			
			
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Sale');
			$this->db->where('p.property_type','Homes');
			if($city){ $this->db->where('p.city',$city); }
			if($society){ $this->db->where('p.society',$society); }
			if($phase){ $this->db->where('p.phase',$phase); }
			if($sector){ $this->db->where('p.sector',$sector); }
			if($type){ $this->db->where('p.frst_option',$type); }
			else if($type){ $this->db->where('p.scnd_option',$type); }
			else if($type){ $this->db->where('p.thrd_option',$type); } 
			else{ $this->db->where('p.property_type','Homes');}
			if($bedroom){ $this->db->where('p.bedroom',$bedroom); }
			if($price_from){ $this->db->where('p.all_inclusive >=',$price_from); }
			if($price_to){ $this->db->where('p.all_inclusive <=',$price_to); }
			if($land_from){ $this->db->where('p.land_area >=',$land_from.$land_area); }
			if($land_to){ $this->db->where('p.land_area <= ',$land_to.$land_area); }
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function home_rent()
		{
			$city = $this->input->post('city');
			$type = $this->input->post('type');
			$bedroom = $this->input->post('bedroom');
			$price_from = $this->input->post('price_from');
			$price_to = $this->input->post('price_to');
			$land_area = $this->input->post('land_area');
			$land_from = $this->input->post('land_from');
			$land_to = $this->input->post('land_to');
			$society = $this->input->post('society');
			$phase = $this->input->post('phase');
			$sector = $this->input->post('sector');
			
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			$this->db->where('p.property_type','Homes');
			if($city){ $this->db->where('p.city',$city); }
			if($society){ $this->db->where('p.society',$society); }
			if($phase){ $this->db->where('p.phase',$phase); }
			if($sector){ $this->db->where('p.sector',$sector); }
			if($type){ $this->db->where('frst_option',$type); } 
			else if($type){ $this->db->where('scnd_option',$type); }
			else if($type){ $this->db->where('thrd_option',$type); }
			if($bedroom){ $this->db->where('bedroom',$bedroom); } else{ $this->db->where('property_type','Homes');}
			if($price_from){ $this->db->where('all_inclusive >=',$price_from); }
			if($price_to){ $this->db->where('all_inclusive <=',$price_to); }
			if($land_from){ $this->db->where('land_area >=',$land_from.$land_area); }
			if($land_to){ $this->db->where('land_area <= ',$land_to.$land_area); }
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function plot_buy()
		{
			$city = $this->input->post('city');
			$type = $this->input->post('type');
			$bedroom = $this->input->post('bedroom');
			$price_from = $this->input->post('price_from');
			$price_to = $this->input->post('price_to');
			$land_area = $this->input->post('land_area');
			$land_from = $this->input->post('land_from');
			$land_to = $this->input->post('land_to');
			$society = $this->input->post('society');
			$phase = $this->input->post('phase');
			$sector = $this->input->post('sector');
			
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Sale');
			$this->db->where('p.property_type','Plots');
			if($city){ $this->db->where('p.city',$city); }
			if($society){ $this->db->where('p.society',$society); }
			if($phase){ $this->db->where('p.phase',$phase); }
			if($sector){ $this->db->where('p.sector',$sector); }
			if($type){ $this->db->where('frst_option',$type); } 
			else if($type){ $this->db->where('scnd_option',$type); }
			else if($type){ $this->db->where('thrd_option',$type); }
			if($bedroom){ $this->db->where('bedroom',$bedroom); } else{ $this->db->where('property_type','Plots');}
			if($price_from){ $this->db->where('all_inclusive >=',$price_from); }
			if($price_to){ $this->db->where('all_inclusive <=',$price_to); }
			if($land_from){ $this->db->where('land_area >=',$land_from.$land_area); }
			if($land_to){ $this->db->where('land_area <= ',$land_to.$land_area); }
			$this->db->order_by('p.post_ads_id','desc');
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function plot_rent()
		{
			$city = $this->input->post('city');
			$type = $this->input->post('type');
			$bedroom = $this->input->post('bedroom');
			$price_from = $this->input->post('price_from');
			$price_to = $this->input->post('price_to');
			$land_area = $this->input->post('land_area');
			$land_from = $this->input->post('land_from');
			$land_to = $this->input->post('land_to');
			$society = $this->input->post('society');
			$phase = $this->input->post('phase');
			$sector = $this->input->post('sector');
			
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			$this->db->where('p.property_type','Plots');
			if($city){ $this->db->where('p.city',$city); }
			if($society){ $this->db->where('p.society',$society); }
			if($phase){ $this->db->where('p.phase',$phase); }
			if($sector){ $this->db->where('p.sector',$sector); }
			if($type){ $this->db->where('frst_option',$type); } 
			else if($type){ $this->db->where('scnd_option',$type); }
			else if($type){ $this->db->where('thrd_option',$type); }
			if($bedroom){ $this->db->where('bedroom',$bedroom); } else{ $this->db->where('property_type','Plots');}
			if($price_from){ $this->db->where('all_inclusive >=',$price_from); }
			if($price_to){ $this->db->where('all_inclusive <=',$price_to); }
			if($land_from){ $this->db->where('land_area >=',$land_from.$land_area); }
			if($land_to){ $this->db->where('land_area <= ',$land_to.$land_area); }
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function commercial_buy()
		{
			$city = $this->input->post('city');
			$type = $this->input->post('type');
			$bedroom = $this->input->post('bedroom');
			$price_from = $this->input->post('price_from');
			$price_to = $this->input->post('price_to');
			$land_area = $this->input->post('land_area');
			$land_from = $this->input->post('land_from');
			$land_to = $this->input->post('land_to');
			$society = $this->input->post('society');
			$phase = $this->input->post('phase');
			$sector = $this->input->post('sector');
			
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Sale');
			$this->db->where('p.property_type','Commercial');
			if($city){ $this->db->where('p.city',$city); }
			if($society){ $this->db->where('p.society',$society); }
			if($phase){ $this->db->where('p.phase',$phase); }
			if($sector){ $this->db->where('p.sector',$sector); }
			if($type){ $this->db->where('frst_option',$type); } 
			else if($type){ $this->db->where('scnd_option',$type); }
			else if($type){ $this->db->where('thrd_option',$type); }
			if($bedroom){ $this->db->where('bedroom',$bedroom); } 
			else{ $this->db->where('property_type','Commercial');}
			if($price_from){ $this->db->where('all_inclusive >=',$price_from); }
			if($price_to){ $this->db->where('all_inclusive <=',$price_to); }
			if($land_from){ $this->db->where('land_area >=',$land_from.$land_area); }
			if($land_to){ $this->db->where('land_area <= ',$land_to.$land_area); }
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function commercial_rent()
		{
			$city = $this->input->post('city');
			$type = $this->input->post('type');
			$bedroom = $this->input->post('bedroom');
			$price_from = $this->input->post('price_from');
			$price_to = $this->input->post('price_to');
			$land_area = $this->input->post('land_area');
			$land_from = $this->input->post('land_from');
			$land_to = $this->input->post('land_to');
			$society = $this->input->post('society');
			$phase = $this->input->post('phase');
			$sector = $this->input->post('sector');
			
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			$this->db->where('p.property_type','Commercial');
			if($city){ $this->db->where('p.city',$city); }
			if($society){ $this->db->where('p.society',$society); }
			if($phase){ $this->db->where('p.phase',$phase); }
			if($sector){ $this->db->where('p.sector',$sector); }
			if($type){ $this->db->where('frst_option',$type); } 
			else if($type){ $this->db->where('scnd_option',$type); }
			else if($type){ $this->db->where('thrd_option',$type); }
			if($bedroom){ $this->db->where('bedroom',$bedroom); } else{ $this->db->where('property_type','Commercial');}
			if($price_from){ $this->db->where('all_inclusive >=',$price_from); }
			if($price_to){ $this->db->where('all_inclusive <=',$price_to); }
			if($land_from){ $this->db->where('land_area >=',$land_from.$land_area); }
			if($land_to){ $this->db->where('land_area <= ',$land_to.$land_area); }
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function search_rent()
		{
			$city = $this->input->post('city');
			$type = $this->input->post('type');
			$bedroom = $this->input->post('bedroom');
			$price_from = $this->input->post('price_from');
			$price_to = $this->input->post('price_to');
			$land_area = $this->input->post('land_area');
			$land_from = $this->input->post('land_from');
			$land_to = $this->input->post('land_to');
			$society = $this->input->post('society');
			$phase = $this->input->post('phase');
			$sector = $this->input->post('sector');
			
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			if($city){ $this->db->where('p.city',$city); }
			if($society){ $this->db->where('p.society',$society); }
			if($phase){ $this->db->where('p.phase',$phase); }
			if($sector){ $this->db->where('p.sector',$sector); }
			if($type){ $this->db->where('frst_option',$type); } 
			else if($type){ $this->db->where('scnd_option',$type); }
			else if($type){ $this->db->where('thrd_option',$type); }
			if($bedroom){ $this->db->where('bedroom',$bedroom); } 
			if($price_from){ $this->db->where('all_inclusive >=',$price_from); }
			if($price_to){ $this->db->where('all_inclusive <=',$price_to); }
			if($land_from){ $this->db->where('land_area >=',$land_from.$land_area); }
			if($land_to){ $this->db->where('land_area <= ',$land_to.$land_area); }
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function rent_buy()
		{
			$city = $this->input->post('city');
			$type = $this->input->post('type');
			$bedroom = $this->input->post('bedroom');
			$price_from = $this->input->post('price_from');
			$price_to = $this->input->post('price_to');
			$land_area = $this->input->post('land_area');
			$land_from = $this->input->post('land_from');
			$land_to = $this->input->post('land_to');
			$society = $this->input->post('society');
			$phase = $this->input->post('phase');
			$sector = $this->input->post('sector');
			
			$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.purpose','Rent');
			if($city){ $this->db->where('p.city',$city); }
			if($society){ $this->db->where('p.society',$society); }
			if($phase){ $this->db->where('p.phase',$phase); }
			if($sector){ $this->db->where('p.sector',$sector); }
			if($type){ $this->db->where('frst_option',$type); } 
			else if($type){ $this->db->where('scnd_option',$type); }
			else if($type){ $this->db->where('thrd_option',$type); }
			if($bedroom){ $this->db->where('bedroom',$bedroom); } 
			if($price_from){ $this->db->where('all_inclusive >=',$price_from); }
			if($price_to){ $this->db->where('all_inclusive <=',$price_to); }
			if($land_from){ $this->db->where('land_area >=',$land_from.$land_area); }
			if($land_to){ $this->db->where('land_area <= ',$land_to.$land_area); }
			$data['posts'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/search',$data);	
		}
		
		public function search_post_property_id()
	    {
	        $id = $this->input->post('search');
			if($id)
			{
				$this->post_detail($id);
			}
			/*$this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->where('p.post_ads_id',$id);
			$data['posts'] = $this->db->get('')->row_array();
			
			$this->load->view('frontend/post_detail',$data);*/
	    }
		
		public function post_detail($id)
	    {
	        $this->db->select('*,u.phone as user_phone,p.phone as post_phone,p.cell as post_cell,u.cell as user_cell,');
			$this->db->from('post_ads p');
			$this->db->join('user u','p.user_id = u.user_id','left');
			$this->db->join('city c','c.city_id = p.city','left');
			$this->db->join('society so','p.society = so.society_id','left');
			$this->db->join('phase ph','p.phase = ph.phase_id','left');
			$this->db->join('sector se','p.sector = se.sector_id','left');
			$this->db->where('p.post_ads_id',$id);
			$data['posts'] = $this->db->get('')->row_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			
			$this->load->view('frontend/post_detail',$data);
	    }
		
		public function agents()
	    {
	        $data['cities'] = $this->dashboard_model->get_cities();
	        $this->load->view('frontend/agents',$data);
	    }
		
		public function agent_detail($id)
	    {
	        $this->db->from('user u');
			$this->db->join('city c','c.city_id = u.city','left');
			$this->db->where('u.user_id',$id);
			$data['agents'] = $this->db->get('')->row_array();
			//echo '<pre>'; print_r($data['agents']);exit;
			$this->load->view('frontend/agent_detail',$data);
	    }
		
		public function city_posts_agent($id)
		{
			$this->db->select('*');
			$this->db->from('user u');
			$this->db->join('city c','c.city_id = u.city','left');
			$this->db->where('u.city',$id);
			$this->db->where('u.user_role',1);
			$data['agents'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/agent_search',$data);	
		}
		
		public function agent_search()
		{
			$city = $this->input->post('city');
			$estate_name = $this->input->post('estate_name');
			
			$this->db->select('*');
			$this->db->from('user u');
			$this->db->join('city c','c.city_id = u.city','left');
			if($city){ $this->db->where('city',$city); }
			if($estate_name){ $this->db->where('estate_name',$estate_name); }
			$this->db->where('u.user_role',1);
			$data['agents'] = $this->db->get('')->result_array();
			//echo '<pre>'; print_r($data['posts']);exit; 
			$this->load->view('frontend/agent_search',$data);	
		}
		
		public function blogs()
	    {
	        $data['blog'] = $this->dashboard_model->get_blog_limit();
	        $data['blogs'] = $this->dashboard_model->get_blog_home();
			$this->load->view('frontend/blogs',$data);
	    }
		
		public function detail_blog($id)
	    {
	        $data['blog'] = $this->dashboard_model->get_blog_id($id);
			$data['blogs'] = $this->dashboard_model->get_blog_home();
			$this->load->view('frontend/detail_blog',$data);
	    }
		
		public function new_project()
	    {
	        $this->load->view('frontend/new_project');
	    }
		
		public function society_map()
	    {
	        $data['city'] = $this->dashboard_model->get_city();
			$data['maps'] = $this->dashboard_model->get_maps_limited();
			$this->load->view('frontend/society_maps',$data);
	    }
		
		public function society_maps($id)
	    {
	       	$this->db->select('city_name');
	       	$this->db->where('city_id',$id);
	        $data['city']= $this->db->get('city')->row_array();
         	//print_r($data);exit;
	        
	       	$this->db->select('m.society_id,s.society_name');
			$this->db->distinct();
			$this->db->from('maps m');
			$this->db->join('city c','c.city_id = m.city_id','left');
	        $this->db->join('society s','s.society_id = m.society_id','left');
	        $this->db->where('m.city_id',$id);
	        $data['society']= $this->db->get()->result_array();
			//echo '<pre>'; print_r($data['society']);exit;

	       	/*$this->db->select('*');
			//$this->db->group_by('name');
 			$this->db->group_by('maps.society_id');
	        //$this->db->select('*');
	        $this->db->from('maps m');
	        //$this->db->group_by('m.society_id');
	        $this->db->join('city c','c.city_id = m.city_id','left');
	        $this->db->join('society s','s.society_id = m.society_id','left');
	        $this->db->where('m.city_id',$id);
	        $data['society']= $this->db->get()->result_array();*/
	       	//echo '<pre>'; print_r($data);exit;
	        //$data['society'] = $this->dashboard_model->get_society_id($id);
	        $this->load->view('frontend/societies_map',$data);
	    }
		
		public function phase_maps($id)
	    {
	       	$this->db->select('m.phase_id,p.phase_name,m.title');
			$this->db->distinct();
			$this->db->from('maps m');
			$this->db->join('city c','c.city_id = m.city_id','left');
	        $this->db->join('society s','s.society_id = m.society_id','left');
	        $this->db->join('phase p','p.phase_id = m.phase_id','left');
	        $this->db->where('m.society_id',$id);
	        $data['phase']= $this->db->get()->result_array();
	       // echo '<pre>'; print_r($data);exit;
	        /*
	        //$this->db->group_by('m.phase_id');
	        $this->db->from('maps m');
	        $this->db->join('city c','c.city_id = m.city_id','left');
	        $this->db->join('society s','s.society_id = m.society_id','left');
	        $this->db->join('phase p','p.phase_id = m.phase_id','left');
	        $this->db->where('m.society_id',$id);
	        $data['phase']= $this->db->get()->result_array();*/

	       	if($data['phase'][0]['phase_id'])
	        {
	        	$this->db->where('society_id',$id);
        		$data['society']= $this->db->get('society')->row_array();

				$this->load->view('frontend/phases_map',$data);
	        }
			else
	        {
        	    $data['maps'] = $this->dashboard_model->get_map_society($id);
				//echo '<pre>'; print_r($data);exit;
				$this->load->view('frontend/view_map',$data);
	        }
	    }


		public function sector_maps($id)
	    {
	       	$this->db->select('m.sector_id,se.sector_name,m.title');
			$this->db->distinct();
			$this->db->from('maps m');
			$this->db->join('city c','c.city_id = m.city_id','left');
	        $this->db->join('society s','s.society_id = m.society_id','left');
	        $this->db->join('phase p','p.phase_id = m.phase_id','left');
	        $this->db->join('sector se','se.sector_id = m.sector_id','left');
	        $this->db->where('m.phase_id',$id);
	        $data['sector']= $this->db->get()->result_array();


	        /*$this->db->from('maps m');
	        $this->db->join('city c','c.city_id = m.city_id','left');
	        $this->db->join('society s','s.society_id = m.society_id','left');
	        $this->db->join('phase p','p.phase_id = m.phase_id','left');
	        $this->db->join('sector se','se.sector_id = m.sector_id','left');
	        $this->db->where('m.phase_id',$id);
	        $data['sector']= $this->db->get()->result_array();*/
			//echo '<pre>'; print_r($data['sector'][0]['sector_id']);exit;
	       	if($data['sector'][0]['sector_id'])
	        {
	        	$this->db->where('phase_id',$id);
        		$data['phase']= $this->db->get('phase')->row_array();

				$this->load->view('frontend/sectors_map',$data);
	        }
			else
	        {
        	    $data['maps'] = $this->dashboard_model->get_map_phase($id);
				//echo '<pre>'; print_r($data);exit;
				$this->load->view('frontend/view_map',$data);
	        }
	    }
		
		public function view_maps($id)
	    {
	        $data['maps'] = $this->dashboard_model->get_map_sector($id);
			//echo '<pre>'; print_r($data);exit;
			$this->load->view('frontend/view_map',$data);
	    }
		
		public function assessment()
	    {
	        $data['city'] = $this->dashboard_model->get_city();
			$this->load->view('frontend/assessment',$data);
	    }
		
		public function insert_assessment()
		{
			$size = $this->input->post('size');
			$units = $this->input->post('units');
			$sizeunit = $size.''.$units;
			$array = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'contact' => $this->input->post('contact'),
			'min' => $this->input->post('min'),
			'max' => $this->input->post('max'),
			'type' => $this->input->post('type'),
			'size' => $sizeunit,
			'city' => $this->input->post('city'),
			'society' => $this->input->post('society'),
			'phase' => $this->input->post('phase'),
			'sector' => $this->input->post('sector'),
			'street' => $this->input->post('street'),
			'plot' => $this->input->post('plot'),
			'description' => $this->input->post('description'),
			'purpose' => $this->input->post('purpose'),
			);
			
			$res = $this->dashboard_model->insert_assessment($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Submitted Successfully! And You will get reply in 48 hours via Call & Email.');
				redirect('home/assessment');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('home/assessment');
			}
		}
		
		public function investment()
	    {
	        $data['city'] = $this->dashboard_model->get_city();
			$this->load->view('frontend/invest',$data);
	    }
		
		public function insert_investment()
		{
			$array = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'contact' => $this->input->post('contact'),
			'min' => $this->input->post('min'),
			'max' => $this->input->post('max'),
			'type' => $this->input->post('type'),
			'city' => $this->input->post('city'),
			'society' => $this->input->post('society'),
			'phase' => $this->input->post('phase'),
			'description' => $this->input->post('description'),
			'time_period' => $this->input->post('time_period'),
			);
			
			$res = $this->dashboard_model->insert_investment($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Submitted Successfully! And You will get reply in 48 hours via Call & Email.');
				redirect('home/investment');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('home/investment');
			}
		}
		
		public function purchaser_guide()
	    {
	        $data['city'] = $this->dashboard_model->get_city();
			$this->load->view('frontend/purchaser_guide',$data);
	    }
		
		public function insert_purchaser_guide()
		{
			$size = $this->input->post('size');
			$units = $this->input->post('units');
			$sizeunit = $size.''.$units;

			$array = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'contact' => $this->input->post('contact'),
			'min' => $this->input->post('min'),
			'max' => $this->input->post('max'),
			'type' => $this->input->post('type'),
			'size' => $sizeunit,
			'city' => $this->input->post('city'),
			'society' => $this->input->post('society'),
			'phase' => $this->input->post('phase'),
			'sector' => $this->input->post('sector'),
			'street' => $this->input->post('street'),
			'plot' => $this->input->post('plot'),
			'description' => $this->input->post('description'),
			);
			
			$res = $this->dashboard_model->insert_purchaser_guide($array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Submitted Successfully! And You will get reply in 48 hours via Call & Email.');
				redirect('home/purchaser_guide');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('home/purchaser_guide');
			}
		}
		
		public function email()
		{
			$id = 0;
			if($this->input->post('post_id'))
			{
				$id = $this->input->post('post_id');
			}
			$array = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'phone' => $this->input->post('phone'),
			'message' => $this->input->post('message'),
			'am_direct' => $this->input->post('am_direct'),
			'post_id' => $id,
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->db->insert('inbox',$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Email Send Successfully');
				redirect('home/post_detail/'.$id);
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('home/post_detail/'.$id);
			}
		}
		
		public function agent_email()
		{
			$city = $this->input->post('city');
			
			$array = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'phone' => $this->input->post('phone'),
			'message' => $this->input->post('message'),
			'am_direct' => $this->input->post('am_direct'),
			'post_id' => 0,
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->db->insert('inbox',$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Email Send Successfully');
				redirect('home/city_posts_agent/'.$city);
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('home/city_posts_agent/'.$city);
			}
		}
		
		public function fetech_society()
		{
			$city_id = $this->input->post('city_id');
			$society = $this->dashboard_model->get_society_id($city_id);
			if($society)
			{
				$soc='<option value="">Please Select</option>';
				foreach($society as $row)
				{
					$soc.='<option value='.$row['society_id'].'>'.$row['society_name'].'</option>';
				}
				echo $soc;
				exit;
			}else{
				echo 'empty';
				exit;
			}
		}
		
		public function fetech_phase()
		{
			$society_id = $this->input->post('society_id');
			$phase = $this->dashboard_model->get_phase_ids($society_id);
			if($phase)
			{
				$pro='<option value="">Please Select</option>';
				foreach($phase as $row)
				{
					$pro.='<option value='.$row['phase_id'].'>'.$row['phase_name'].'</option>';
				}
				echo $pro;
				exit;
			}else{
				echo 'empty';
				exit;
			}
		}
		
		public function fetech_sector()
		{
			$phase_id = $this->input->post('phase_id');
			$sector = $this->dashboard_model->get_sector_id($phase_id);
			if($sector)
			{
				$pro='<option value="">Please Select</option>';
				foreach($sector as $row)
				{
					$pro.='<option value='.$row['sector_id'].'>'.$row['sector_name'].'</option>';
				}
				echo $pro;
				exit;
			}else{
				echo 'empty';
				exit;
			}
		}
		
		public function market_updates()
	    {
	        $data['market_update'] = $this->dashboard_model->get_market_updates_limit();
	        $data['market_updates'] = $this->dashboard_model->get_market_updates();
			$this->load->view('frontend/market_updates',$data);
	    }
		
		public function detail_market_update($id)
	    {
	        $data['market_update'] = $this->dashboard_model->get_market_updates_id($id);
	        $this->load->view('frontend/detail_market_updates',$data);
	    }
		
		public function contact_us()
	    {
	        $this->load->view('frontend/contact_us');
	    }
		

	    public function insert_contact_us()
		{
			$array = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'contact' => $this->input->post('contact'),
			'message' => $this->input->post('message'),
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->db->insert('contact_us',$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Your detail submit successfully');
				redirect('home/contact_us');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('home/contact_us');
			}
		}

		public function email_subscribe()
		{
			$array = array(
			'email' => $this->input->post('email'),
			);
			//echo '<pre>'; print_r($array);exit;
			$res = $this->db->insert('blog_subscribe',$array);
			if($res)
			{
				$this->session->set_flashdata('success', 'Subscription successfully');
				redirect('home/blogs');
			}
			else
			{
				$this->session->set_flashdata('error',"Error! Something went wrong.");
				redirect('home/blogs');
			}
		}
		
	}
	
	
	
	
	
	
	