<?php  

//connecting to database

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cr10_jonathan_biglibrary";

	$conn = mysqli_connect($hostname, $username, $password, $dbname);

	if(!$conn)
	{
		echo "error";
	}



?>