<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
	
		if($this->easyauth->connected == true):
		
		     $this->load->view('admin/manage');
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif;
	
	}
	
	function auth()
	{
		$this->easyauth->set;
		$this->easyauth->check;
		redirect('admin/manage', 'refresh');
	
	}
	
	function write()
	{
		if($this->easyauth->connected == true):
		
		     $this->load->view('admin/write_view');
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif
		
		
		
	}
	
	function insert_page()
	{
		
		if($this->easyauth->connected == true):
		
		     $this->load->view('admin/manage');
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif
	
		
		
	}
	
	function manage()
	{
		
		if($this->easyauth->connected == true):
		
		     $this->load->view('admin/manage');
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif
		
		
		
		
	}
	
	function settings()
	{
		
		if($this->easyauth->connected == true):
		
		     $this->load->view('admin/settings_view');
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif
		
		
	}
	
	function users()
	{
		if($this->easyauth->connected == true):
		
		     $this->load->view('admin/users_view');
		
		else:
		
			$this->load->view('admin/index_view');
		
		endif
		
		
	}

}