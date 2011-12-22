<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		$this->load->model('Blog_model');
		$query = $this->db->query("SELECT * FROM blog WHERE sort desc");
		$data['entries'] = $query->result();
	  $this->load->view('blog/blog_main', $data);	
	}
}