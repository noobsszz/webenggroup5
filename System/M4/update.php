<?php
include ("dbase.php");

extract ($_POST);

//Dapatkan Tarikh Dan Masa Masuk
$date = date("Y-m-d", $date);
$time = date("H:i:s", time());
$TDays=$ADate-$date;

$diff= strtotime($ADate)-$date;

$TDays=round(((($diff/24)/60)/60)-19158);

$TStatus="Booked";

$query = "UPDATE booking SET Cid = '$Cid',ALocation = '$ALocation', category = '$category', ADate = '$ADate', ATime = '$ATime', TDays = '$TDays',SRequire = '$SRequire' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in change.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='list.php' </script>";
}
?>