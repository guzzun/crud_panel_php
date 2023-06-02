<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title>
	
	<link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>
<div>
<form class="form-horizontal" action="edit_save.php" method="post">    
<?php
include('conexiune.php');
$id=$_GET['id'];
$result = mysqli_query($conexiune, "SELECT * FROM elevi where id='$id'");
while($row = mysqli_fetch_array($result))
{?>
		
	<div >
	
	<a href="index.php" class="btn_return">Lista elevi</a>
	<h2>Editare elev</h2>
	
	<table>
	
	<tr><td><label for="inputEmail" >Nume</label><td><input name="id[]" type="hidden" value="<?php echo  $row['id'] ?>" />
		<input name="nume[]" type="text" value="<?php echo $row['1'] ?>" /></tr>
	<tr><td><label  for="inputEmail" >Prenume</label><td>
		<input name="prenume[]" type="text" value="<?php echo $row['2'] ?>" /></tr>
	<tr><td><label  for="inputEmail" >Adresa</label><td>
		<input name="adresa[]" type="text"  value="<?php echo $row['3'] ?>" /></tr>
	<tr><td><label  for="inputEmail" >Email</label><td>
		<input name="email[]" type="text"  value="<?php echo $row['4'] ?>" /></tr>
	<tr><td><label for="inputEmail" >Data nașterii</label><td>
		<input name="data_nasterii[]" type="date"  value="<?php echo $row['5'] ?>" /></tr>
	<tr><td><label  for="inputEmail" >Sex</label><td><input name="sex[]" type="text"  value="<?php echo $row['6'] ?>" /></tr>
	<tr><td><label for="inputEmail" >Media Bac</label><td>
		<input name="media_bac[]" type="text"  value="<?php echo $row['7'] ?>" /></tr>
	</table>
		<input name="" class="btn_submit" type="submit" value="Update">
		
	</div>
<?php }?>
</form>
</div>
</body>
</html>