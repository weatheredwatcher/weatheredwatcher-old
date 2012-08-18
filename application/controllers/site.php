<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		
$this->load->view('site_main');
	}
	
	function about(){
		
		$this->load->view('site_about');
	}
	
	function projects(){
		$gists = new GistApi();
		$data['gists'] = $gists::get_gists();
		$this->load->view('site_projects', $data);
	}
	
	function speaking(){
		
		$this->load->view('site_speaking');
	}
	

}