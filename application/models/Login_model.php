<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	
	public function user_login($email,$password)
	{
		$this->db->select('*');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$res=$this->db->get('user')->row_array();
		return $res;
	}
	
}