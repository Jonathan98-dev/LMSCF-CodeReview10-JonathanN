<!DOCTYPE html>
<html>
<head>
	<title>Insert new Media</title>
<link rel="stylesheet" type="text/css" href="indexstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
</head>
<body>
<div class = "header">
	<p>Welcome to the big library</p>
	<button ><a href='index.php'>Back Home</a></button>
</div>
	

<div class ="formcontainer">
	
	<div class = "innerformcontainer">

		<form action="a_insert.php" method="post">
			<input type="text" name="title" placeholder="Title"><br>
			<input type="text" name="imagelink" placeholder="Image URL"><br>
			<input type="text" name="author" placeholder="Author"><br>
			<input type="text" name="description" placeholder="Description"><br>
			<input type="date" name="publishdate"><br>
			<input type="text" name="publisher" placeholder="Publisher"><br>
			<input type="text" name="type" placeholder="Type"><br>

			<input type="submit" name="submit">
		</form>

	</div>

</div>
</body>
</html>