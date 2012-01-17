<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
		
	function get_last_ten_entries()
	    {
	        $this->db->order_by('timestamp', 'desc');
	        $query = $this->db->get('blog', 10);
	        return $query->result();
	    }
	
	function get_titles()
	{
		$this->db->select('id, title');
		$query = $this->db->get('blog');
		return $query->result();
	}

	function insert_entry()
	    {
	        $this->title = $this->input->post('title'); 
			$this->author = $this->input->post('author');
	        $this->entry = $this->input->post('entry');
	        

	        $this->db->insert('blog', $this);
	    }
 
	    function update_entry()
	    {
	       	$this->title = $this->input->post('title'); 
			$this->author = $this->input->post('author');
	        $this->entry = $this->input->post('entry');
	        

	        $this->db->update('blog', $this, array('id' => $_POST['id']));
	    }
	
		function get_entry_by_slug($slug);
		{
			
		
		$this->db->where('slug', $slug);
		$query = $this->db->get('blog');
		return $query->result();
		
		
		}
	
}