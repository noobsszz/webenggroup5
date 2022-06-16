<?php

include("dbase.php");

//Dapatkan Tarikh Dan Masa Masuk
extract( $_POST );
$date = date("Y-m-d", $date);
$time = date("H:i:s", time());

$diff= strtotime($ADate)-$date;

$TDays=round(((($diff/24)/60)/60)-19158);
$TStatus="Booked";
$query = "INSERT INTO booking (date,time,Cid,ALocation,category,ADate,ATime,TDays,TStatus,SRequire) VALUES('$date','$time','$Cid','$ALocation', '$category','$ADate','$ATime','$TDays','$TStatus','$SRequire')";


if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='list.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>