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
	
	function write()
	{
		$this->load->model('Users_model', 'users');
		$data['authors'] = $this->users->get_authors();
		$this->load->view('admin/write_view', $data);
	}
	
	function insert_page()
	{
		echo('<h1>Hello World!!</h1>');
		//$this->load->model('Blog_model', 'blog');
		//$this->blog->insert_entry();
		//redirect('admin/manage', 'refresh');
	
		
	}
	
	function manage()
	{
		
		$this->load->model('Blog_model', 'blog');
		$data['entries'] = $this->blog->get_last_ten_entries();
		$this->load->view('admin/manage', $data);
		
	}
	
	function settings()
	{
		
		//custom page settings
		
	}
	
	function users()
	{
		$this->load->model('Users_model', 'users');
		$data['users'] = $this->users->get_users();
		$this->load->view('admin/users_view', $data);
		
	}
	
	
	function auth()
	{
		//TODO this is where we will authorize the access to the admin page.  This is going to create a pop up that will be utillized to authenticate the user.  We will use sessions data to do this
		
		
	}
}