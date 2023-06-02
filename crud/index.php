<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="https://kit.fontawesome.com/1e6645046b.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>List</title>
</head>
<body>
  <div>
    
    <a href="create.php" class="add">Adaugă elev</a>
</div> 
 <?php
  include ("conexiune.php");
  $sql=mysqli_query($conexiune, "SELECT * FROM elevi");
 echo "<table class='elev' border= 2>";
    echo "";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nume</th>";
            echo "<th>Prenume</th>";
            echo "<th>Adresa</th>";
            echo "<th>Email</th>";
            echo "<th>Data nașterii</th>";
            echo "<th>Sex</th>";
            echo "<th>Media BAC</th>";
            echo "<th>Acțiune</th>";
        echo "</tr>";
    echo "";
  while ($row=mysqli_fetch_assoc($sql)) {
  echo  "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nume'] . "</td>";
        echo "<td>" . $row['prenume'] . "</td>";
        echo "<td>" . $row['adresa'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['data_nasterii'] . "</td>";
        echo "<td>" . $row['sex'] . "</td>";
        echo "<td>" . $row['media_bac'] . "</td>";
  echo "<td>";
      echo "<a href='edit.php?id=". $row['id'] ."' title='Editează' data-toggle='tooltip'><i class='fas fa-user-edit'></i></a>";
      echo "<a href='delete.php?id=". $row['id'] ."' title='Șterge' data-toggle='tooltip'><i class='fas fa-ban'></i></a>";
  echo "</td>";
  echo "</tr>";
  }
  echo "</table>";
  mysqli_close($conexiune);
  ?>
</body>
</html>

