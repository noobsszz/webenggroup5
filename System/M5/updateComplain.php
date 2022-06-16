

<?php
include("dbase.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM complaint WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in changeData.php");
$row = mysqli_fetch_assoc($result);



//@mysql_free_result($result);
?>
<html>
<head>
<title>Data Change</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<style>
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

			h1
			{
				font-size:40px;
				color:white;
				font-family:Arial;
				text-align:center;
				
			}
			
			.header
			{
				background-color:#00b0a8;
				height:100px;
				width:100%;
				position:fixed;
			}
			
			.sidebar
			{   
				margin-top:-22px;
				height:100%;
				width: 200px;
				background-color:#005aad;
				padding-top: 0px;
				font-size:14px;
				color:black;
				text-align:center;
				position:fixed;
			}
			
			.main 
			{   
				height: 535px;
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
			
			.btn
			{
				border: none;
				margin-top:-20px;
				margin-bottom: 20px;
				background-color: inherit;
				padding: 16px 28px;
				font-size: 15px;
				cursor: pointer;
				display: inline-block;
			}
			
			

            .active, .btn:hover
			{
				background-color: #b4d463;
				color: white;
            }
		</style>


<body >
<div class="sidebar">
			<h2 style="color:black">Menu</h2>
            <a href="homeComplain.php"  style="color:black;text-decoration:none;">Home</a>
			<br><br><br>
			<a href="displaydata.php"  style="color:black;text-decoration:none;">Technician Task Done</a>
			<br><br><br>
			<a href="infoDisplay.php"  style="color:black;text-decoration:none;">Index Viewing</a>
			<br><br><br>
			<a href="EnterData.php"  style="color:black;text-decoration:none;">Manage Task</a>
			<br><br><br>
			<a href="/System/Module-2/readfrom.php"  style="color:black;text-decoration:none;">Logout</a>
		</div>

        <div class="main">
<center><img src="image/FK1.jpg" alt="centered image" > </center>
<br>
<h1 align="center">Change Data Page</h1>
<br>
<form method="post" action="updatprocess.php">
Customer id :
<input type="text" name="Customer_id" size="40">
<br><br>
Customer name:
<input type="text" name="Customer_name" size="25" >
<br><br>
<label for="cinfo">cinfo : </label> 
<textarea cols="78" rows="10" name="cinfo" id="cinfo">Describe your complaint</textarea>
<br><br>
<label for="ctype">Type : </label> 
                                <br>
                            <input type="radio" id="LateReady" name="ctype" value="LateReady" >
							<label for="LateReady">LateReady</label><br>
							<input type="radio" id="Wrong Location" name="ctype" value="Wrong Location">
							<label for="Wrong Location">Wrong Location</label><br>
<br><br>
Status :
<select name="cstatus" id="cstatus" value="<?php echo $cstatus;?>">
                            <option value="IN-INVESTIGATION">IN-INVESTIGATION</option>
                            <option value="RESOLVED" >RESOLVED</option>
                            </select> 
<br><br>
Technician Remark : 
<input type="text" name="tech_remark" size="40" value="<?php echo $tech_remark; ?>">

<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
<input type ="submit" value="Update">
<input type ="reset" value="reset">
</div>
</form>


<hr>
</body>
</html>