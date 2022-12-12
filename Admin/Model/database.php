<?php
$host	= "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "donnerdb1";
	
    
	


	function getConnection(){
		global $host,  $dbuser, $dbpass, $dbname ;
	
		$conn = mysqli_connect($host,  $dbuser, $dbpass, $dbname);
		return $conn;
		if (!$conn/*->connect_error*/) {
			die("Connection failed: " . /*$conn->*/mysqli_connect_error());
		  }
		  echo "Connected successfully";
	}

?>