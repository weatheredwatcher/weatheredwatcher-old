<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
	
		if ($this->session->userdata('logged_in') == FALSE)
		{
		     $this->load->view('admin/index_view');
		}
		else
		{
			$this->load->view('admin/manage');
		}
	
	}
	
	function auth()
	{
		
			$this->load->model('Users_model', 'users');
			$this->users->auth();
	}
	
	function write()
	{
		if ($this->session->userdata('logged_in') == FALSE)
		{
		     $this->load->view('admin/index_view');
		}
		else
		{
			$this->load->model('Users_model', 'users');
			$data['authors'] = $this->users->get_authors();
			$this->load->view('admin/write_view', $data);
			
		}
		
		
	}
	
	function insert_page()
	{
		
		if ($this->session->userdata('logged_in') == FALSE)
		{
		     $this->load->view('admin/index_view');
		}
		else
		{
			$this->load->model('Blog_model', 'blog');
			$this->blog->insert_entry();
			redirect('admin/manage', 'refresh');
	
			
		}
		
		
		
	}
	
	function manage()
	{
		
		if ($this->session->userdata('logged_in') == FALSE)
		{
		     $this->load->view('admin/index_view');
		}
		else
		{
			$this->load->model('Blog_model', 'blog');
			$data['entries'] = $this->blog->get_last_ten_entries();
			$this->load->view('admin/manage', $data);
			
			
		}
		
		
		
	}
	
	function settings()
	{
		
		if ($this->session->userdata('logged_in') == FALSE)
		{
		     $this->load->view('admin/index_view');
		}
		else
		{
			$this->load->view('admin/settings_view');
		}
		
		
		
	}
	
	function users()
	{
		
		if ($this->session->userdata('logged_in') == FALSE)
		{
		     $this->load->view('admin/index_view');
		}
		else
		{
			$this->load->model('Users_model', 'users');
			$data['users'] = $this->users->get_users();
			$this->load->view('admin/users_view', $data);
			
		}
		
		
		
	}

}