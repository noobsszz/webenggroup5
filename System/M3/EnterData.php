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
 

?>
<html>
<head>
<title>Technician Job </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<style>
    body {background-image:url("image/FK.png"),url("image/FK.png");}
   body {background-repeat:repeat-y;}
    body {background-position: right,left;}
    body {font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}
    body {background-size:270px 200px;}

    .center {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
  background-color: rgb(214, 221, 222)
}
img{
  width:600px;
  height:100px;

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

<div align="right">
    <span>Date : <?php echo date("d-m-Y"); ?></span>
  </div>
  <div align="right">
          <span>Time : <?php echo date("H:i", time()); ?></span>
      	</div>
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
<center><img src="image/FK1.jpg" alt="centered image" > </center>
<br><br>

 <form method="post" action="InsertData.php">
 <div class="center">
 
 Customer id :
<input type="text" name="cust_id" size="40">
<br><br>
Task:
<input type="text" name="task" size="25">
<br><br>
<label for="location">Booking Location : </label>
<select name="location" id="location">
    <option value="">--Select Location-- </option>
    <option value="Seminor Room">Seminor Room</option>
    <option value="Discussion Room">Discussion Room</option>
    <option value="Cafeteria">Cafeteria</option>
  </select>

</select>
<br><br>
<label for="Category"> Category : </label> 
<select name="Category" id="Category">
    <option value="Event">Event</option>
    <option value="Lecture" >Lecture</option>
    <option value="Lab" >Lab</option>
</select>
<br><br>
<label for="tools">Tools : </label>
<select name="tools" id="tools">
    <option value="Screen">Screen</option>
    <option value="Mic">Mic</option>
    <option value="None">None</option>
    <option value="Other">Other</option>
</select>
<br><br>
Other : <br>
<textarea name="other" cols="30" rows="8"></textarea>
<br><br>

<label for="ADate"> Date : </label> 
  <input type="date" id="ADate" name="ADate">
  <br><br>
  <label for="ATime"> Time : : </label> 
       <input type="time" id="ATime" name="ATime"
       min="08:00" max="18:00" required>
       <br><br>
<br><br>

<label for="TStatus">Task Completed (day) : </label>
<input type="number" id="TDay" name="TDay" min="1">
<br><br>

<label for="TStatusW">Task Completed (week) : </label>
<input type="number" id="TWeek" name="TWeek" min="1">
<br><br>

<input type="submit" value="Sent">
<input type="reset" value="Redo">
<br><br>
<div>
</form>
<hr>

<?php
    if(isset($_POST['sent'])){
        $Category = $_POST['Category'];
        $tools = $_POST['tools'];

            if(!empty($Category) && !empty($tools)){
                $query = "Insert into Book (Category, tools) VALUES('$Category', $tools)";
                    $result = $conn->query($query);

                    if ($result){
                        echo "Task enter succesfully";
                    }
            }
    }
        
    ?>

</body>
</html>