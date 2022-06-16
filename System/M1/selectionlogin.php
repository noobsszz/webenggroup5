<!DOCTYPE>
<html>
<head>

		<title>UMP  COMPLAIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

</head>
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
			
            .header
			{
				background-color:#00b0a8;
				height:100px;
				width:100%;
				position:fixed;
                text-align: center;
			}
			
		</style>
<div class="header">
			<h1>UMP USER CENTRE<h1>
		<div>
<body>


<div class="sidebar">
			<h2 style="color:black">Menu</h2>
			<a href="Admin.php"  style="color:black;text-decoration:none;">Admin Details</a>
			<br><br><br>
			<a href="Techinician.php"  style="color:black;text-decoration:none;">Technician Details</a>
			<br><br><br>
			<a href="Manager.php"  style="color:black;text-decoration:none;">Manager Details</a>
			<br><br><br>
		</div>
		
		 <div class="main">
			<br>
            <form name="frmContact" method="" action="">
			
			<table style="width:100%; text-align:left; margin-left:10px">
			 <center><button type="button" class="btn active" onclick="location.href='./Report.php'">Report</button></center>
		
			
			     <h2>User List Category:</h2>
				<input class="button2"  type="button" value="Admin" onclick="location.href='/System/M4/booking.php'">
				<input class="button2" type="button" value="Manager" onclick="location.href='/System/Module-2/readfrom.php'">
				<input class="button2"  type="button" value="Technician" onclick="location.href='/System/M3/hometech.php'">
				<input class="button2" type="button" value="Complaint"  onclick="location.href='/System/M5/homeComplain.php'">
			</form>	
            
		
		 </div>
		<br>
		<br>
		<br>
  
		

</html>


