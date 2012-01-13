<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package     EasyAuth
 * @subpackage  Libraries
 * @category    Authentication
 * @author      Wes Edling (joedesigns.com)
 * @copyright   Copyright (c) 2008, joedesigns.com
 * @link 		http://joedesigns.com/labs/EasyAuth
*/

/**
 * Notes: Uses md5 for password encryption
 * You might need to adjust the query to suit your database structure
*/

class Easyauth {
	
	var $connected;
	var $user;
	
	function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->library('session');
		$this->CI->load->helper('url');
		$this->CI->load->database();
		$this->set();
		$this->check();
	}
	
	function clean($s){
		return $this->CI->db->escape($s);
	}
	
	function set(){
		if(isset($_POST['login']['username'])):
			$_SESSION['login']['username'] = $_POST['login']['username'];
		endif;
		if(isset($_POST['login']['password'])):
			$_SESSION['login']['password'] = md5($_POST['login']['password']);
		endif;
	}
	
	function check(){
		
		$this->connected = false;
		
		if(isset($_SESSION['login']['username']) && isset($_SESSION['login']['password'])):
			$chk = $this->CI->db->query("
			select * 
			from users 
			where 
				username = ".$this->clean($_SESSION['login']['username'])." and 
				password = ".$this->clean($_SESSION['login']['password'])."
			limit 1
			");
			if($chk->num_rows() == 1):
				$this->user = $chk->result();
				$this->connected = true;
				return true;
			endif;
		endif;
		
    	if(isset($_SESSION['login'])):
		unset($_SESSION['login']);
		endif;
		
		return false;
		
	}
	
}
?>