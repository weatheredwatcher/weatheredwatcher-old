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
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->get_where('users', array('uername' => $username));
		
		foreach ($query->result() as $row)
		{
		    if ($row->password == $password) {
			//this is where we set the session data to logged in
			$loguser = array(
				               'id'        => $row->id,
			                   'username'  => $username,
							   'logged_in' => TRUE
			               );

			$this->session->set_userdata($loguser);
		}
		else {echo 'log in failed!!'; }
	}
		
	}
}