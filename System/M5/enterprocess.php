
<?php
// database connection code

include 'dbase.php';



// get the post records
     $Customer_id = $_POST['Customer_id'];
	 $Customer_name = $_POST['Customer_name'];
	 $cinfo = $_POST['cinfo'];
	 $ctype = $_POST['ctype'];
	 $cstatus = $_POST['cstatus'];
	 

// database insert SQL code
$sql = "INSERT INTO `complaint` (`Customer_id`, `Customer_name`, `cinfo`, `ctype`, `cstatus`) VALUES ('$Customer_id', '$Customer_name', '$cinfo', '$ctype', '$cstatus')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
			
            
		echo '<script language="javascript">';
	echo 'alert("Complaint Inserted!");';
	echo 'window.location="displayComplaint.php";';
	echo '</script>';

}


?>