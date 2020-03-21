<?php 

	require_once("db_connect.php");

//gets information from input for updating table row

	if($_POST)
	{
		$id = $_POST["id"];
		$title= $_POST["title"];
		$imagelink= $_POST["imagelink"];
		$author= $_POST["author"];
		$description= $_POST["description"];
		$publishdate= $_POST["publishdate"];
		$publisher= $_POST["publisher"];
		$type= $_POST["type"];

		$sql = "
				UPDATE `media` SET `Title`='$title',`imagelink`='$imagelink',`Author`='$author',`description`='$description',`publishdate`='$publishdate',`publisher`='$publisher',`type`='$type' 
				WHERE id = $id;
				";

		if(mysqli_query($conn, $sql))
		{
			//echo "success <br> <a href ='index.php'>Back Home</a>";
			header('Location: index.php');
		}
		else
		{
			echo "error";
		}
	}

	// closing connection 
	mysqli_close($conn);
?>