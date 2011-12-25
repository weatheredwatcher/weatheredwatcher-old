<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
		
	function get_users()
	    {
	        
	        $query = $this->db->get('users', 5);
	        return $query->result();
	    }
	
	function get_authors()
	{
		
		$this->db->select('username');
		$query = $this->db->get('users');
		return $query->result();
		
	}
	
	function auth()
	{
		//auth function
	}
}