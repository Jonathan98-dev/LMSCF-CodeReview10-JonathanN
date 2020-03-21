<?php  
	require_once("db_connect.php");
	
//Coming from post mehtod code wil be run

	if($_POST)
	{

	//saving userinput in variables

		$title= $_POST["title"];
		$imagelink= $_POST["imagelink"];
		$author= $_POST["author"];
		$description= $_POST["description"];
		$publishdate= $_POST["publishdate"];
		$publisher= $_POST["publisher"];
		$type= $_POST["type"];

	//query to insert userinput into table

		$sql = "
				INSERT INTO `media`( `Title`, `imagelink`, `Author`, `description`, `publishdate`, `publisher`, `type`)
				VALUES ('$title','$imagelink','$author','$description','$publishdate','$publisher','$type');
				";

		if(mysqli_query($conn, $sql))
		{
			echo "success <br> <a href ='index.php'>Back Home</a>";
		}
		else
		{
			echo "error";
		}

	}

	// closing connection 
	mysqli_close($conn);
?>