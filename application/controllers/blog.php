<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		$this->load->helper('inflector');
		$this->load->library('pagination');
		$this->load->model('Blog_model', 'blog');
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
		$config['base_url'] = 'http://weatheredwatcher.com/blog';
		$config['total_rows'] = $this->db->get('blog')->num_rows();
		$config['per_page'] = 10;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		
		$data['entries'] = $this->db->get('blog', $config['per_page']);
		
		//$data['entries'] = $this->blog->get_last_ten_entries();
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

?>