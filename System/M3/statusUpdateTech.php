<!--kemaskini.php-->
<!--To update data of ubah.php into database.-->
<?php
include ("dbaseModule.php");

extract ($_POST);

//Dapatkan Tarikh Dan Masa Masuk
$date = date("d-m-Y", time());
$time = date("H:i:s", time());

$query = "UPDATE inffo SET status = '$status' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in changeData.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='infoDisplay.php' </script>";
}
?>