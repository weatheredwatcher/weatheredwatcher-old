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
		
		$this->load->view('site_projects');
	}
	
	function speaking(){
		
		$this->load->view('site_speaking');
	}
	

}