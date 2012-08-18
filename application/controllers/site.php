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
		
		$ch = curl_init();		
		curl_setopt($ch, CURLOPT_URL, "https://api.github.com/gists");
		curl_setopt($ch, CURLOPT_USERPWD,  "[weatheredwatcher]:[m0rpheus]");
		$data['gists'] = json_decode(curl_exec($ch));
		// close cURL resource, and free up system resources
		curl_close($ch);
		$this->load->view('site_projects', $data);
	}
	
	function speaking(){
		
		$this->load->view('site_speaking');
	}
	

}