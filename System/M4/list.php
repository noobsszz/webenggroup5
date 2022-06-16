<!-- paper.phph -->
<!-- To display all information of database. -->
<html>
<head>
<title>List</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
        	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  border: 1px solid black;
  width: 50%;}

  td{
  	border: 1px solid blue;
  	border-collapse: collapse;
  	text-align: center;
  	padding: 2px;
  	background-color: white;}
  	th {
  	border: 1px solid black;
  	border-collapse: collapse;
  	text-align: center;
  	padding: 2px;
  	background:black;
	color: white;}
	 body
	 {
		margin:0;
		font-family: Arial, Helvetica, sans-serif;
		background-image:url(parcels.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;  
		background-size: cover;
		background-color: rgba(255,255,255,0.6);
        background-blend-mode: lighten;
	}

			h2
			{
				font-size:40px;
				color:black;
				font-family:Arial;
				text-align:center;
				
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
			
			.main 
			{   
				height: 1000px;
		        width:1000px;
		        margin-left: 500px;
				margin-bottom:45px;
		        background-color: papayawhip;
		        margin-top:50px;
		        border-radius: 30px;
			}
			
            .header
			{
				background-color:#00b0a8;
				height:100px;
				width:100%;
				position:fixed;
                text-align: center;
			}
			
		</style>
</head>
<h1 align="center">List Page</h1>
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
		<div class="main">

<ol>
<?php
include("dbase.php");


$query = "SELECT * FROM booking";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
	$id = $row["id"];
	$date = $row["date"];
	$time = $row["time"];
	$Cid = $row["Cid"];
    $ALocation = $row["ALocation"];
	$category = $row["category"];
	$ADate = $row["ADate"];
	$ATime = $row["ATime"];
	$TDays = $row["TDays"];
	$TStatus = $row["TStatus"];
	$SRequire = $row["SRequire"];
	?>
	<table>
		<tr>
	<th>Customer ID :</th>
	<th>Date / Time : </th>
	<th>Accomodation Location :</th> 
	<th>Accomodation category : </th>
	<th>Accomodation Date : </th>
	<th>Accomodation Time :</th>
	<th>Total Days Left :</th>
	<th>Accomodation Status :</th> 
	<th>Setup Requirements :</th>
	<th>Change : </th>
		</tr>
		<tr>
			<td> <?php echo $Cid; ?> </td>
			<td> <?php echo "$date / $time"; ?></td>
			<td> <?php echo $ALocation; ?></td>
			<td> <?php echo $category; ?> </td>
			<td> <?php echo $ADate; ?></td>
			<td> <?php echo $ATime; ?></td>
			<td> <?php echo $TDays; ?></td>
			<td> <?php echo $TStatus; ?></td>
			<td> <?php echo $SRequire; ?></td>
			<td> <a href="change.php?id=<?php echo $id; ?>">Change</a> /  <a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
		</tr>
	</table>

	

<br>
	<?php
    }
} else {
    echo "0 results";

}
?>
</ol>

</div>

</body>
</html>