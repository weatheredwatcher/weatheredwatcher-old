<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feed  extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}
		
	function index()
	{
		$this->load->helper('inflector');
	    $this->load->helper('xml');  
		$this->load->helper('text');  
		$this->load->model('Blog_model', 'blog');    
		
		$data['entries'] = $this->blog->get_last_ten_entries();
		$this->load->view('rss', $data);
		
		     
	}
	
}

?>