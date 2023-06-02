<?php
include('conexiune.php');
$id=$_POST['id'];
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$adresa=$_POST['adresa'];
$email=$_POST['email'];
$dataN=$_POST['data_nasterii'];
$sex=$_POST['sex'];
$medBac=$_POST['media_bac'];
$query="INSERT INTO elevi (nume, prenume, adresa, email, data_nasterii, sex, media_bac) VALUES ('$nume','$prenume', '$adresa','$email', '$dataN','$sex', '$medBac')";
if (!mysqli_query($conexiune, $query)) {
die(mysqli_error());
} else {
echo "Datele au fost introduse";
}
mysqli_close($conexiune);
header("location: index.php");

?>