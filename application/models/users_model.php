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
			$this->login = $this->input->post('login');
			$this->password = $this->input->post('password');
			$query = $this->db->get_where('users', array('username' => $this->login));
			foreach ($query->result() as $row)
			{
			    if ($row->password == $this->password) {
				//this is where we set the session data to logged in
				$loguser = array(
					               'id'        => $row->id,
				                   'username'  => $this->login,
								   'name'      => $row->name,
				                   'email'     => $row->email,
				                   'logged_in' => TRUE
				               );

				$this->session->set_userdata($loguser);
				/*
					TODO save session data, ip and date in the profile model.
				*/
				}else {
					   //this is where we redirect back to the login page
					redirect('profile/login', location);
					  }
	}
}