<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<title>Insert</title>
	<link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>

<div>
	<a href="index.php" class="btn_return">Lista elevi</a>
	<form action="create_save.php" method="post">
	
	<div>
	<h2>Adăugare elev</h2>
	<table  >
	<tr><td><label  for="inputEmail" >Nume</label>
		<td><input name="nume"  type="text"/>
	</tr>
	<tr><td><label  for="inputEmail" >Prenume</label>
		<td><input name="prenume"  type="text"/>
	</tr>
	<tr><td><label  for="inputEmail" >Adresa</label>
		<td><input name="adresa"type="text"/>
	</tr>
	<tr><td><label for="inputEmail">Email</label>
		<td><input name="email" type="text"/>
	</tr>
	<tr><td><label  for="inputEmail">Data nașterii</label>
		<td><input name="data_nasterii"  type="date"/>
	</tr>
	<tr><td><label for="inputEmail">Sex</label>
		<td><input name="sex"  type="text"/>
	</tr>
	<tr><td><label for="inputEmail" >Media Bac</label>
		<td><input name="media_bac" type="text"/>
	</tr>
	</table>
		<input name="" class="btn_submit" type="submit" value="Insereaza">
	</div>
</form>
</div>
</body>
</html>