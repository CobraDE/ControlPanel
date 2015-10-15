<?php

class config{
	
	//////////////////////
	// variable			//
	//////////////////////
	
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "vio_extended";
	
	//////////////////////
	// functions		//
	//////////////////////
	
	function getMysqlHost(){
		return $this->host;
	}
	
	function getMysqlUser(){
		return $this->user;
	}
	
	function getMysqlPassword(){
		return $this->password;
	}
	
	function getMysqlDatabase(){
		return $this->database;
	}

}

?>