<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete</title>
</head>
<body>
	<?php
include('conexiune.php');
if (isset($_GET['id'])){
$id=$_GET['id'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conexiune, "DELETE FROM elevi where id='$id'");
}
header("location: index.php");
}
?>
</body>
</html>