<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); error_reporting(E_ALL);

	class Mongo_model extends CI_Model {

		// Constructor
	    function __construct(){
	        parent::__construct();
	    }

	    public function connectToDB(){
	    	echo 'In connect to DB<br>';
	    	
	    	$db = $this->cimongo->getDB();

	    	$where = array('userid' => 1);
	    	$cursor = $db->usermails->find($where);

	    	
	        foreach( $cursor as $mail ){
	        	var_dump($mail);
	        }

	        echo 'Exitting connect to DB';
	    }
	}

 ?>