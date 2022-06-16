<!--kemaskini.php-->
<!--To update data of ubah.php into database.-->
<?php
include ("dbaseModule.php");

extract ($_POST);

//Dapatkan Tarikh Dan Masa Masuk
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());

$query = "UPDATE book SET cust_id = '$cust_id', task = '$task', location = '$location', Category = '$Category', tools = '$tools', other = '$other', ADate = '$ADate', ATime = '$ATime' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in changeData.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='displaydata.php' </script>";
}
?>