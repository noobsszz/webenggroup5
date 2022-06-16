<!DOCTYPE html>
<html>
  <head>
      <title>Booking</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <style>
h1 {
    padding: 10px;
    border: 5px solid rgb(193, 135, 98);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}



.center {
    width: 500px;
    margin: 0 auto;
    padding: 50px;
    background-color: rgb(214, 221, 222)
}

.time {
    float: right;
    width: 160px;
    text-align: right;
}

img {
    width: 600px;
    height: 100px;
}
.center {
  width: 900px;
  margin: 0 auto;
  padding: 100px;
  background-color: rgb(214, 221, 222)}

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

button {
    font-size: 1.1em;
    background-color: #EBF5FF;
    color: #4312AE;
    border: 2px solid black;
    box-shadow: 4px 4px 4px #999999;
}

</style>
    
  </head>
<body>
<div class="sidebar">
			<h2 style="color:black">Menu</h2>
			<a href="Booking.php"  style="color:black;text-decoration:none;">Booking Pages</a
			<a href="List.php"  style="color:black;text-decoration:none;">List Pages<</a>
			<br><br><br>
			<a href="jointtable.php"  style="color:black;text-decoration:none;">Over View</a>
			<br><br><br>
			
			<a href="/UMP Parcel/M1/staff/logout.php"  style="color:black;text-decoration:none;">Logout</a>
		</div>
<br>
<h3>FKOM BOOKING</h3>

<div STYLE="background-color:#000000; height:3px; width:100%;"></div>
<br>

</header>
<center><img src="image/FK1.jpg" alt="centered image" > </center>
  <div class="center">
<br>

<?php

session_start(); //start the PHP_session function 

if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
 echo 'You are visitor number ' . $_SESSION['page_count'];

?>
<br>
<?php
// Verifying whether a cookie is set or not
if(isset($_COOKIE["username"])){
    echo "Hi " . $_COOKIE["username"];
} else{
    echo "Welcome, please fill in the form!";
}


?>

  <h1 align="center">Booking Page</h1>
  <hr>
  <div class="time" >
    <span>Date : <?php echo date("d-m-Y"); ?></span>
    <br>      
    <span>Time : <?php echo date("H:i", time()); ?></span>
      	</div>
 
  <form method="POST" action="fill.php">
  
  Customer ID : 
  <input type="text" id="Cid" name="Cid">
       <br>

    Accomodation Location :
  <select name="ALocation" id="ALocation">
    <option value="">--Select Location-- </option>
    <option value="Seminor Room">Seminor Room</option>
    <option value="Discussion Room">Discussion Room</option>
    <option value="Cafeteria">Cafeteria</option>
  </select>
<br>
  Accomodation Category :
  <select name="category" id="category">
    <option value="">--Select category</option>
    <option value="Event">Event</option>
    <option value="Lecture">Lecture</option>
    <option value="Lab">Lab</option>
  </select>
  
  <br>
    Accomodation Date:
  <input type="date" id="ADate" name="ADate">
  <br>
    Accomodation Time :
       <input type="time" id="ATime" name="ATime"
       min="08:00" max="18:00" required>
       <br>
       
Setup Requirements : <br>
<textarea name="SRequire" cols="30" rows="8"></textarea>
<br>
<br>
<input type="submit" value="submit">
       <input type="reset" value="reset">
       <br>
    </form>
    <div align="center">[ <a href="list.php">List Page</a> ] 
</div>



</body>
</html>

