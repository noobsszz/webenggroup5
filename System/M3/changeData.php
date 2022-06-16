<?php
     setcookie("root", "timeout", time()+ 60,'localhost'); // expires after 60 seconds
?>

<?php
include("dbaseModule.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM book WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in changeData.php");
$row = mysqli_fetch_assoc($result);

$cust_id = $row['cust_id'];
$task = $row['task'];
$location = $row['location'];
$Category = $row['Category'];
$tools = $row['tools'];
$other = $row['other'];
$ADate = $row['ADate'];
$ATime = $row['ATime'];

//@mysql_free_result($result);
?>
<html>
<head>
<title>Data Change</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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


    
    </style>
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

<body>
<div class="main">
<center><img src="image/FK1.jpg" alt="centered image" > </center>
<br>
<h1 align="center">Change Data Page</h1>
<br>
<form method="post" action="updateData.php">
Customer id :
<input type="text" name="cust_id" size="40" value="<?php echo $cust_id; ?>">
<br><br>
Task:
<input type="text" name="task" size="25" value="<?php echo $task; ?>">
<br><br>
<label for="location">Booking Location : </label> 
<select name="location" id="location">
    <option value="">--Select Location-- </option>
    <option value="Seminor Room">Seminor Room</option>
    <option value="Discussion Room">Discussion Room</option>
    <option value="Cafeteria">Cafeteria</option>
  </select>
<br><br>
<label for="Category">Accomodation Category : </label> 
<select name="Category" id="Category" value="<?php echo $Category; ?>">
    <option value="Event">Event</option>
    <option value="Lecture">Lecture</option>
    <option value="Lab">Lab</option>
</select>
<br><br>
<select name="tools" id="tools" value="<?php echo $tools; ?>">
    <option value="Screen">Screen</option>
    <option value="Mic">Mic</option>
    <option value="None">None</option>
    <option value="Other">Other</option>
</select>
<br><br>
Other : <br>
<textarea name="other" cols="30" rows="8">< value="<?php echo $other; ?>"></textarea>
<br><br>
Accomodation Date:
  <input type="date" id="ADate" name="ADate" value="<?php echo $ADate; ?>">
  <br><br>
Accomodation Time :
       <input type="time" id="ATime" name="ATime"
       min="08:00" max="18:00" required value="<?php echo $ATime; ?>">
       <br><br>
<br><br>
<?php
    if(isset($_POST['Update'])){
        $location = $_POST['location'];
        $Category = $_POST['Category'];
        $tools = $_POST['tools'];

            if(!empty($location) && !empty($Category) && !empty($tools) && !empty($TStatus)){
                $query = "Insert into Book (location, Category, tools) VALUES('$location','$Category', $tools)";
                    $result = $conn->query($query);

                    if ($result){
                        echo "Task enter succesfully";
                    }
            }
    }
        
    ?>
<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
<input type ="submit" value="Update">
<input type ="reset" value="reset">
</div>
</form>


<hr>
</body>
</html>