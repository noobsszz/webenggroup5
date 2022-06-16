<!--kemaskini.php-->
<!--To update data of ubah.php into database.-->
<?php
include ("dbase.php");

extract ($_POST);



$query = "UPDATE complaint SET Customer_id = '$Customer_id', Customer_name = '$Customer_name', cinfo = '$cinfo', ctype = '$ctype', cstatus = '$cstatus', tech_remark = 'tech_remark' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in changeData.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='displayComplaint.php' </script>";
}
?>