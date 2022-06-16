<?php
// //$dsn = 'mysql:host=localhost;dbname=readfrom';
// //$username = 'root';
// $password = '';
// $options = [];
// try {
// $connection = new PDO($dsn, $username, $password, $options);
// } catch(PDOException $e) {

// }

?> 
<?php

session_start();

$con =new mysqli('localhost','root','','module');
if(!$con){
    die(mysqli_error($con));
}


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    $sql="DELETE FROM `inffo` WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:readfrom.php');
    }else{
        die(mysqli_error($con));
    }
}
?>