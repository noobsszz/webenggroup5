<!DOCTYPE>
<html>
	<head>
		<title>UMP  COMPLAIN</title>
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

		
		<div class="header">
			<h1>UMP COMPLAINT CENTRE<h1>
		<div>
	</head>
	
	<body>
	<div class="sidebar">
			<h2 style="color:white">Menu</h2>
            <a href="homeComplain.php"  style="color:black;text-decoration:none;">Home</a>
			<br><br><br>
			<a href="displayComplaint.php"  style="color:black;text-decoration:none;">Complains Display</a>
			<br><br><br>
			<a href="entercomplain.php"  style="color:black;text-decoration:none;">Enter New Complaint</a>
			<br><br><br>
			<a href="/UMP Parcel/M1/staff/logout.php"  style="color:black;text-decoration:none;">Logout</a>
		</div>
        <div class="main"> 
			<p class="double"> Add Your Complaint</p>
            <form name="myform" method="post" action="enterprocess.php">
			
				<table style="width:100%; text-align:left; margin-left:10px">
					<tr>
						<th>Customer_id:</th>
						<th><input type="text" name= "Customer_id" id="Customer_id"></th>
						<th>&emsp;</th>
						<th>Customer_name:</th>
						<th><input type="text" name="Customer_name" id="Customer_name"></th>
					</tr>
			
					
					
					<th>&nbsp;</th>
					<th>&nbsp;</th>
	
					
					<tr>
						<th>Complaint Information:</th>
						<th colspan="4"><textarea cols="78" rows="10" name="cinfo" id="cinfo">Describe your complaint</textarea></th>
					</tr>
					
					<th>&nbsp;</th>
					<th>&nbsp;</th>
	
					
					<tr>
						
						<th>Complaint type:</th>
						<th>
							<input type="radio" id="LateReady" name="ctype" value="LateReady">
							<label for="LateReady">LateReady</label><br>
							<input type="radio" id="Wrong Location" name="ctype" value="Wrong Location">
							<label for="Wrong Location">Wrong Location</label><br>
						</th>
					</tr>
					
					
					<th>&nbsp;</th>
					<th>&nbsp;</th>
	
					
					<tr>
						<th>Complaint Status:</th>
						<th><select name="cstatus" id="cstatus">
                                <option value="IN-INVESTIGATION">Event</option>
                                <option value="RESOLVED" >Lecture</option>
                            </select> 
                        </th>
						
						
					</tr>
					
				</table>
			
			
			
				<div class="button">
				<input type="submit" name="Submit" id="Submit" value="Submit">
			
				</div>
			</form>
		</div>
		
	</body>
	
	<footer>
		UMP COMPLAINT MODULE
	</footer>
</html>