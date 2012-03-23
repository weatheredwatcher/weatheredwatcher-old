<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	 function record_count() {
	        return $this->db->count_all('blog');
	    }
	    
	    	
	function get_entries($limit, $start)
	    {
	        $this->db->order_by('timestamp', 'desc');
	        $this->db->limit($limit, $start);
	        $query = $this->db->get('blog');

				if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
                }

	        return $data;
	        }
	        return false;
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
			$this->slug = strip_quotes(underscore($this->input->post('title')));
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
	
		function get_entry_by_slug($slug)
		{
			
		
		$this->db->where('slug', $slug);
		$query = $this->db->get('blog');
		return $query->result();
		
		
		}
	
}