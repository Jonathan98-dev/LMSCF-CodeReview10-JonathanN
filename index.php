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

		//change!!!!
			
			$img=$row["imagelink"];
			$imgdata = base64_encode(file_get_contents($img));
			echo $row["id"]." ".$row["title"]." "."<img style = 'width:50px' src='data:image/jpeg;base64,".$imgdata."'>"."<br>";
		}
		else
		{
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value) 
			{

			//for trying to display images from imagelink

				// $image = $value["imagelink"];
				// $imagedata = base64_encode(file_get_contents($image));

				echo $value["id"]." | ".$value["Title"]." | "."<br>"."<img src ='".$value["imagelink"]."'>  ". "<br>";


			}
		}


	?>
</body>
</html>