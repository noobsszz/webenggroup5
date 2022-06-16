<!DOCTYPE html>

<head>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        padding: 10px 10px;
    }

    table {
        margin-left: auto;
        margin-right: auto;
    }

    th {
        background-color: skyblue;
    }

    .sidebar
			{   
				margin-top:-22px;
				height:50%;
				width: 200px;
				background-color:#89CFF0;
				padding-top: 0px;
				font-size:14px;
				color:black;
				text-align:center;
				position:fixed;
			}
    </style>
</head>

<div class="sidebar">
			<h2 style="color:black">Menu</h2>
            <a href="hometech.php"  style="color:black;text-decoration:none;">Home</a>
			<br><br><br>
			<a href="displaydata.php"  style="color:black;text-decoration:none;">Technician Task Done</a>
			<br><br><br>
			<a href="infoDisplay.php"  style="color:black;text-decoration:none;">Index Viewing</a>
			<br><br><br>
			<a href="EnterData.php"  style="color:black;text-decoration:none;">Manage Task</a>
			<br><br><br>
            <a href="/System/M5/displayComplaint.php" style="color:black;text-decoration:none;">Complaint Status</a>
            <br><br><br>
			<a href="/System/Module-2/readfrom.php"  style="color:black;text-decoration:none;">Logout</a>
		</div>


<body bgcolor="#FFFFFF" text="#000000">
<div class="center">
	<center><img src="image/FK1.jpg" alt="centered image" > </center>
    
	<div style="width:30%;height:20%;text-align:center">
        </div>   
<form action="" method="post">
    <br><div class="infotech" style="width:100%;">
    <br><p style="font-family:Arial;color:black;text-align:center;font-size:110%; background-color:aquamarine;"><b>Technician THINGS-TO-DO</b></p><br>
    <br>
</div>
</form>
<div style="font-family:Arial;color:black;text-align:center;font-size:110%; background-color:aquamarine;">
<?php
include("dbaseModule.php");

echo "<br>".'<p style="text-align:center;font-family:Courier New;font-size:150%;">'."<b>".""."</b>"."</p>";

echo "<table>";
        echo "<tr>" . "<th>No.</th>" . "<th>Location</th>" . "<th>Status</th>". "<th>Task</th>". "<th>Total</th>"."</tr>";

        $query="SELECT * FROM inffo WHERE Location='Seminor Room' AND status='Assigned' ";
	    $result1 = mysqli_query($conn, $query);
	
    if (mysqli_num_rows($result1) >= 0)
	{  
		echo "<tr>".'<td rowspan="2">'."1."."</td>".
                '<td rowspan="2">'."Seminor Room"."</td>".
			    "<td>"."Assigned"."</td>".
                "<td>".mysqli_num_rows($result1)."</td>";               

    }

    $query="SELECT * FROM inffo WHERE Location='Seminor Room'";
	$result2=mysqli_query($conn, $query);
	if (mysqli_num_rows($result2) >= 0)
	{
		echo '<td rowspan="2">'.mysqli_num_rows($result2)."</td>"."</tr>";

    }

    $query="SELECT * FROM inffo WHERE Location='Seminor Room' AND status='Ready' ";
	$result3=mysqli_query($conn, $query);
	if (mysqli_num_rows($result3) >= 0)
	{
		echo "<tr>"."<td>"."Ready"."</td>"."<td>".mysqli_num_rows($result3)."</td>"."</tr>";
    }

    $query="SELECT * FROM inffo WHERE Location='Cafeteria' AND status='Assigned' ";
    $result4 = mysqli_query($conn, $query);

    if (mysqli_num_rows($result4) >= 0)
    {  
    echo "<tr>".'<td rowspan="2">'."2."."</td>".
            '<td rowspan="2">'."Cafeteria"."</td>".
            "<td>"."Assigned"."</td>".
            "<td>".mysqli_num_rows($result4)."</td>";               

    }

    $query="SELECT * FROM inffo WHERE Location='Cafeteria'";
	$result5=mysqli_query($conn, $query);
	if (mysqli_num_rows($result5) >= 0)
	{
		echo '<td rowspan="2">'.mysqli_num_rows($result5)."</td>"."</tr>";

    }

    $query="SELECT * FROM inffo WHERE Location='Cafeteria' AND status='Ready' ";
	$result6=mysqli_query($conn, $query);
	if (mysqli_num_rows($result6) >= 0)
	{
		echo "<tr>"."<td>"."Ready"."</td>"."<td>".mysqli_num_rows($result6)."</td>"."</tr>";
    }

    $query="SELECT * FROM inffo WHERE Location='Discussion Room' AND status='Assigned' ";
    $result7 = mysqli_query($conn, $query);

    if (mysqli_num_rows($result7) >= 0)
    {  
    echo "<tr>".'<td rowspan="2">'."3."."</td>".
            '<td rowspan="2">'."Discussion Room"."</td>".
            "<td>"."Assigned"."</td>".
            "<td>".mysqli_num_rows($result7)."</td>";               

    }

    $query="SELECT * FROM inffo WHERE Location='Discussion Room'";
	$result8=mysqli_query($conn, $query);
	if (mysqli_num_rows($result8) >= 0)
	{
		echo '<td rowspan="2">'.mysqli_num_rows($result8)."</td>"."</tr>";

    }

    $query="SELECT * FROM inffo WHERE Location='Discussion Room' AND status='Ready' ";
	$result9=mysqli_query($conn, $query);
	if (mysqli_num_rows($result9) >= 0)
	{
		echo "<tr>"."<td>"."Ready"."</td>"."<td>".mysqli_num_rows($result9)."</td>"."</tr>";
    }

echo "</table>";


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

</ol>

</body>
</html>

  



  


