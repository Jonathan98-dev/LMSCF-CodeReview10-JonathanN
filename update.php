<?php  
	require_once("db_connect.php");
	echo "<a href='index.php'>Back Home</a><br><br>";
//gets data from database (media) where id = $id

	if($_GET["id"])
	{
		$id = $_GET["id"];

		$sql = "SELECT * FROM media WHERE id = $id";
		$result = mysqli_query($conn, $sql);

	//php formating
		$row = $result->fetch_assoc();

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Media</title>
</head>
<body>

<!-- updating form -->

	<form action="a_update.php" method = "post">
		<input type="hidden" name="id" value="<?php echo $row["id"] ?>">
		<input type="text" name="title" value="<?php echo $row["Title"] ?>"><br>
		<input type="text" name="imagelink" value="<?php echo $row["imagelink"] ?>"><br>
		<input type="text" name="author" value="<?php echo $row["Author"] ?>"><br>
		<input type="text" name="description" value="<?php echo $row["description"] ?>" ><br>
		<input type="date" name="publishdate" value="<?php echo $row["publishdate"] ?>"><br>
		<input type="text" name="publisher" value="<?php echo $row["publisher"] ?>"><br>
		<input type="text" name="type" value="<?php echo $row["type"] ?>"><br>

		<input type="submit" name="submit">		

	</form>

</body>
</html>