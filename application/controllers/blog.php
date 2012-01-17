<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		$this->load->helper('inflector');
		
		if (isset($this->uri->segment(2))):
		$slug = $this->uri->segment(2);
		$data['entries'] = $this->blog->get_entry_by_slug($slug);
		$this->load->view('blog/blog_page', $data);
			
			
		else:
		
		
		$this->load->model('Blog_model', 'blog');
		$data['entries'] = $this->blog->get_last_ten_entries();
		$this->load->view('blog/blog_main', $data);
		
	endif;	
	}
}