
<?php

include ("dbase.php");

$idURL = $_GET['id'];

$query = "DELETE FROM booking WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in change.php");

if($result){
echo "<script type= 'text/javascript'> window.location='list.php'</script>";
}
?>