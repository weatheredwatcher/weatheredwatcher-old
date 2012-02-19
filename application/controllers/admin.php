<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
	
		if($this->session->userdata('logged_in') == true):
			$username = $this->session->userdata('username');
		
		redirect('admin/manage, 'refresh');
		else:
		
		    $this->load->view('admin/index_view');
			
		
		endif;
	
	}
	
	
	function write()
	{
		if($this->session->userdata('logged_in') == true):
		
		
			$this->load->model('Users_model', 'users');
			$data['authors'] = $this->users->get_authors();
			$this->load->view('admin/write_view', $data);
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif;
		
		
		
	}
	
	function insert_page()
	{
		$this->load->helper('string');
		$this->load->helper('inflector');
		
		$this->load->model('Blog_model', 'blog');
		$this->blog->insert_entry();
		redirect('admin/manage', 'refresh');
		
		
	}
	
	function manage()
	{
		
		if($this->session->userdata('logged_in') == true):
		
		
			$this->load->model('Blog_model', 'blog');
			$data['entries'] = $this->blog->get_last_ten_entries();
			$this->load->view('admin/manage', $data);

		     
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif;
		
		
		
		
	}
	
	function settings()
	{
		
		if($this->session->userdata('logged_in') == true):
		
		
		     $this->load->view('admin/settings_view');
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif;
		
		
	}
	
	function users()
	{
		if($this->session->userdata('logged_in') == true):
		
		
		
			$this->load->model('Users_model', 'users');
			$data['users'] = $this->users->get_users();
			$this->load->view('admin/users_view', $data);

		     
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif;
		
		
	}
	
	function logout()
	{
	$this->session->sess_destroy();
	
	redirect('/', 'refresh');
	
	}

}