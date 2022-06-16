<?php


include("dbaseModule.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM inffo WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in changeData.php");
$row = mysqli_fetch_assoc($result);

$status = isset($row['status']);
        
?>
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
		        width:800px;
		        margin-left: 500px;
				margin-bottom:45px;
		        background-color: papayawhip;
		        margin-top:50px;
		        border-radius: 30px;
			}
			
			footer{
				background-color:#00b0a8;
				margin-left: 200px;
				margin-bottom: 0px;
				padding-top: 30px;
				padding-bottom: 30px;
				color: white;
				text-align: center;
				font-size: 12px;
				position:static;
			}
			
			.button
			{
				text-align:center;
				
			}
			
			
			
		</style>

<html>
<head>
<title>Data Change</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<div class="sidebar">
			<h2 style="color:black">Menu</h2>
            <a href="hometech.php"  style="color:black;text-decoration:none;">Home</a>
			<br><br><br>
			<a href="displaydata.php"  style="color:black;text-decoration:none;">Technician Task Done</a>
			<br><br><br>
			<a href="displaydata.php"  style="color:black;text-decoration:none;">Technician Task Done<</a>
			<br><br><br>
			<a href="infoDisplay.php"  style="color:black;text-decoration:none;">Index Viewing</a>
			<br><br><br>
			<a href="EnterData.php"  style="color:black;text-decoration:none;">Manage Task</a>
			<br><br><br>
			<a href="/System/Module-2/readfrom.php"  style="color:black;text-decoration:none;">Logout</a>
		</div>

<body>
    <div class="main">
<center><img src="image/FK1.jpg" alt="centered image" > </center>
<br>
<h1 align="center">Change Data Page</h1>
<br>
<form method="post" action="statusUpdateTech.php">
    
<label for="TStatus">Accomodation Status : </label> 
<select name="status" id="status">
    <option value="Ready" name="Ready">Ready</option>
</select>
<br><br>
<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
<input type ="submit" value="Update">
<input type ="reset" value="reset">
</form>



</body>

    
   
    
