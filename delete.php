<?php  
	
	require_once("db_connect.php");
	
//delete media
	if($_GET["id"])
	{
		$id = $_GET["id"];

		$sql = "DELETE FROM media WHERE id = $id";


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