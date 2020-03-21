<!DOCTYPE html>
<html>
<head>
	<title>CodeReview 10</title>
</head>
<body>
	<?php  
	//includes connect file

		include("db_connect.php");

	//getting data from database

		$sql = "SELECT * FROM media";

	//saving queryresult in a variable

		$result = mysqli_query($conn, $sql);

	//looping through data & and displaying data on website

		if($result->num_rows == 0)
		{
			echo "No Entries";
		}
		elseif($result->num_rows == 1)
		{
			$row = $result->fetch_assoc();
			
			// $img=$row["imagelink"];
			// $imgdata = base64_encode(file_get_contents($img));

			echo $row["id"]." | ". $row["type"]." | ". $row["Author"] ."<br>"."<img style='width: 100px' src ='".$row["imagelink"]."'>  "."<br>"."<a href ='update.php?id=".$row["id"]."'>Change</a><br>"."<a href ='delete.php?id=".$row["id"]."'>Delete</a><br>"."<hr>";
		}
		else
		{
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value) 
			{

			//for trying to display images better from imagelink (didnt work)

				// $image = $value["imagelink"];
				// $imagedata = base64_encode(file_get_contents($image));

				echo $value["id"]." | ". $value["type"]." | ".$value["Title"]." by ". $value["Author"] ."<br><br>"."<img style='width: 100px' src ='".$value["imagelink"]."'>  ". "<br>"."<a href ='update.php?id=".$value["id"]."'>Change</a><br>"."<a href ='delete.php?id=".$value["id"]."'>Delete</a><br>"."<hr>";
			}
		}


	?>
</body>
</html>