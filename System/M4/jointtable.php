
<html>
    <head> 
        <style>

.sidebar
			{   
				margin-top:-22px;
				height:100%;
				width: 200px;
				background-color:#99ccff;
				padding-top: 0px;
				font-size:14px;
				color:black;
				text-align:center;
				position:fixed;
			}

    .h3 {
        width: 100%;
        text-align: center;
        font-size:150%;
    }

</style>
</head>
<body>
<div class="sidebar">
			<h2 style="color:black">Menu</h2>
			<a href="Booking.php"  style="color:black;text-decoration:none;">Booking Pages</a
			<a href="List.php"  style="color:black;text-decoration:none;">List Pages</a>
			<br><br><br>
			<a href="jointtable.php"  style="color:black;text-decoration:none;">Over View</a>
			<br><br><br>
			
			<a href="/UMP Parcel/M1/staff/logout.php"  style="color:black;text-decoration:none;">Logout</a>
		</div>
<br>
<h3>FKOM BOOKING</h3>
<center><img src="image/FK1.jpg" alt="centered image" > </center>
    
<div class="center">
<h1 align="center">Over View</h1>
    
<?php
include("dbase.php");


$query = "SELECT * FROM booking t1 inner join inffo t2 on t1.Cid=t2.customer_id";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
	$id = $row["id"];
	$date = $row["date"];
	$time = $row["time"];
	$customer_id = $row["customer_id"];
    $Location = $row["Location"];
	$ADate = $row["ADate"];
	$ATime = $row["ATime"];
	$TDays = $row["TDays"];
	$status = $row["status"];
	$name = $row["name"];
    $category = $row["category"];
	?>
</div>

    <div style="font-family:Arial;color:black;text-align:center;font-size:110%; background-color:aquamarine;">
    <table>
	
        <tr>
	 <th> Customer ID :</th> 
	 <th> Accomodation Location :</th> 
     <th> Accomodation Date :</th>
	 <th> Accomodation Time :</th>
	 <th> Accomodation Status :</th>
	 <th> Setup Requirements : </th>
     <th> Category :</th>
     <th> Action : </th>
        </tr>
        <tr>
     <td><?php echo $customer_id; ?></td>
     <td><?php echo $Location; ?></td>
     <td><?php echo $ADate; ?></td>
     <td><?php echo $ATime; ?></td>
     <td><?php echo $status; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $category; ?></td>
     <td><a class="btn active" href="updateStatusTech.php?id=<?php echo $id ; ?>"> Update Status</a></td>
    </tr>
<br>

    </table>
    </div>
	<?php
    }
} else {
    echo "0 results";

}

?>
    
</div>
</body>
</html>