<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
	<title>CodeReview 10 | Home</title>


</head>
<body>



<div class = "header">
	<p>Welcome to the big library</p>
	<button ><a href='insert.php'>Insert a new Media</a></button>
</div>

<div class = "container">
	
	<div class = "media">
		
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

				echo"<div class = 'onemedia'>". $row["id"]." | ". $row["type"]." | ". $row["Author"] ."<br>"."<img style='width: 100px' src ='".$row["imagelink"]."'>  "."<br>"."<a href ='update.php?id=".$row["id"]."'>Change</a><br>"."<a href ='delete.php?id=".$row["id"]."'>Delete</a><br>"."</div>";
			}
			else
			{
				$rows = $result->fetch_all(MYSQLI_ASSOC);
				foreach ($rows as $key => $value) 
				{

				//for trying to display images better from imagelink (didnt work)

					// $image = $value["imagelink"];
					// $imagedata = base64_encode(file_get_contents($image));

					echo "<div class = 'onemedia'>". $value["id"]." <br> ". $value["type"]." <br> ".$value["Title"]." by ". $value["Author"] ."<br><br>"."<img style='width: 100px' src ='".$value["imagelink"]."'>  ". "<br>"."<a href ='update.php?id=".$value["id"]."'>Change</a> <br> "."<a href ='delete.php?id=".$value["id"]."'>Delete</a>"."</div>";
				}
			}

		// closing connection 
		mysqli_close($conn);


		?>

	</div>

</div>	

</body>
</html>