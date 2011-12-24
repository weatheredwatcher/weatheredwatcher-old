<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
		
	function get_last_ten_entries()
	    {
	        $query = $this->db->get('blog', 10);
	       
			$this->db->order_by('timestamp', 'desc';)
	        return $query->result();
	    }

	    function insert_entry()
	    {
	        $this->title   = $_POST['title']; // please read the below note
	        $this->entry = $_POST['entry'];
	        $this->timestamp   = time();

	        $this->db->insert('blog', $this);
	    }

	    function update_entry()
	    {
	        $this->title   = $_POST['title'];
	        $this->entry = $_POST['entry'];
	        $this->timestamp    = time();

	        $this->db->update('blog', $this, array('id' => $_POST['id']));
	    }
	
}