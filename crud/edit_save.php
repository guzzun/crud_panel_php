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

$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conexiune, "UPDATE elevi SET nume='$nume[$i]', prenume='$prenume[$i]', adresa='$adresa[$i]' ,email='$email[$i]' , data_nasterii='$dataN[$i]', sex='$sex[$i]', media_bac='$medBac[$i]'  where id='$id[$i]'")or die(mysqli_error());
}
header("location: index.php");

?>