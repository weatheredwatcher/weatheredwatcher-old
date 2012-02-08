<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
		
	function index()
	{
		$this->load->library('email');

		$this->email->from('noreply@weatheredwatcher.com', 'weatheredwatcher.com');
		$this->email->to('weatheredwatcher@gmail.com');
		
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		
		$this->email->send();

		echo $this->email->print_debugger();
		//$this->load->view('contact_form');
	}
}