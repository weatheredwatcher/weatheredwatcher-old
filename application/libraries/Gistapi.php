<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package     GistApi
 * @subpackage  Libraries
 * @category    api
 * @author      David Duggins (weatheredwatcher.com)
 * @copyright   Copyright (c) 2012, Net Studios Inc
 * @link 		http://github.com/weatheredwatcher/gistapi
*/

/**
 * Notes: You can either set the username and password in the constructor 
 * or override it with the set_password method.
*/
class GistApi {

function __construct()
	{
		$this->ch = curl_init();		
		curl_setopt($this->ch, CURLOPT_URL, "https://api.github.com/gists");
		curl_setopt($this->ch, CURLOPT_USERPWD,  "[weatheredwatcher]:[m0rpheus]");

	}


	function set_password($username, $password){

		//This sets the username and password for the api connection
		//Overrides the default
		curl_setopt($this-ch, CURLOPT_USERPWD, "[$this->username]:[$this->password]");

	}

	function get_gists(){

		// grab URL and pass it to the browser
		$this->gists = json_decode(curl_exec($this->ch));

		// close cURL resource, and free up system resources
		curl_close($ch);
		return $this->gists;

	}

}




// set URL and other appropriate options
		
