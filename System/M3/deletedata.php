<?php

include ("dbaseModule.php");

$idURL = $_GET['id'];

$query = "DELETE FROM book WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in change.php");

if($result){
echo "<script type= 'text/javascript'> window.location='displaydata.php'</script>";
}
if($result){
    echo "<script type= 'text/javascript'> window.location='displaydata.php'</script>";
    }
?>