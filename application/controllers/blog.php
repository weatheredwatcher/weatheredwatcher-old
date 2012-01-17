<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		$this->load->helper('inflector');
		
		
		$this->load->model('Blog_model', 'blog');
		$data['entries'] = $this->blog->get_last_ten_entries();
		$this->load->view('blog/blog_main', $data);
		
	
	}
	
	function page()
	{
	
		$slug = $this->uri->segment(3);
		$this->load->model('Blog_model', 'blog');
		$data['entries'] = $this->blog->get_entry_by_slug($slug);
		$this->load->view('blog/blog_page', $data);
	
	
	
	}
}