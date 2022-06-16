<?php

include("dbaseModule.php");


extract( $_POST );
$date = date("d-m-Y", time());
$time = date("H:i:s", time());
$query = "INSERT INTO book (cust_id,task,location,Category,tools,other,ADate,ATime) VALUES('$cust_id','$task','$location','$Category', '$tools', '$other', '$ADate', '$ATime')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='displaydata.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>
