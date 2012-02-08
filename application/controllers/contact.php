<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('email');

	}
		
	function index()
	{
		
		
			$this->load->view('contact_form');

	}
	
	function send_email(){
		
				$from = $this->input->post['from'];
				$subject = $this->input->post['subject'];
				$message = $this->input->post['message'];
							      
				$this->email->from($from);
				$this->email->to("weatheredwatcher@gmail.com");
		
				$this->email->subject($subject);
				$this->email->message($message);
		
				if($this->email->send()):
					$this->load->view('confirmed');
					
					else:
						$this->load->view('email_error');
					endif;
                                		
	}
}