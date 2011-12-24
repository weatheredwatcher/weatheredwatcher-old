<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
	//todo will need to add authentication code here.
		
	}
	
	function add_blog_entry()
	{
		//todo need to add code to add blog entry here
	}
	
	function add_dynamic_page()
	{
		
		//code for creating dynamic pages, whose content are located in the database as opposed to the view
		
	}
	
	function auth()
	{
		
		///*
			TODO this is where we will authorize the access to the admin page.  This is going to create a pop
			that will be utillized to authenticate the user.  We will use sessions data to do this
		*/
		
	}
}