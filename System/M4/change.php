<!-- ubah.php -->
<!-- Interface of update data. -->
<style> 

h1 {
    padding: 10px;
    border: 5px solid rgb(193, 135, 98);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body {
    background-image: url("image/FK.png"), url("image/FK.png");
    background-repeat: repeat-y;
    background-position: right, left;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background-size: 270px 200px;
}

.center {
    width: 500px;
    margin: 0 auto;
    padding: 50px;
    background-color: rgb(214, 221, 222)
}

img {
    width: 600px;
    height: 100px;
}
</style>
<?php
include("dbase.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM booking WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in change.php");
$row = mysqli_fetch_assoc($result);
$Cid = $row['Cid'];
$category = $row['category'];
$ALocation = $row['ALocation'];
$ADate = $row['ADate'];
$ATime = $row['ATime'];
$SRequire=$row['SRequire'];
//@mysql_free_result($result);
?>
<html>
<head>
<title>Booking</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
    <?php include 'C:\xampp\htdocs\Booking\change.css'; ?>
</style>
</head>

<body>
   <center><img src="image/FK1.jpg" > </center>

<div class="center">
    <h1 align="center">Change Page</h1>
    <hr>
<form method="post" action="update.php">
Customer ID:
<input type ="text" name="Cid" size="40" value="<?php echo $Cid; ?>">
<br>

Accomodation Location:
<select name="ALocation" id="ALocation">
    <option value="Default">Default </option>
    <option value="Seminor">Seminor Room</option>
    <option value="Discussion">Discussion Room</option>
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
  <?php
    if(isset($_POST['submit'])) {
        $ALocation = $_POST['ALocation'];
        $category = $_POST['category'];
            if(!empty($ALocation) && !empty($category)) {
                $query = "Insert into booking (ALocation, category) VALUES('$ALocation', '$category')";
                    $result = $conn->query($query);
                        if($result) {
                            echo "Task completed";
                        }
            
            }
    }
    

        
    ?>
    <br>

Accomodation Date:
<input type ="date" name="ADate" size="40" value="<?php echo $ADate; ?>">
<br>
Accomodation Time:
<input type ="time" name="ATime" size="40" value="<?php echo $ATime; ?>">
<br>
<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
    <br>
    Setup Requirements : <br>
<textarea name="SRequire" cols="30" rows="8"></textarea>
<br>
<button onclick="myfunction()">Change</button>
<input type ="reset" value="reset">
<script>
function myfunction()
{
    alert("Do you sure want to change data?");
    
}
</script>
    
</script>
</form>
<hr>
<a href="booking.php">Back to Booking Page</a> |
<a href="list.php">Back to List Page</a>  </div>
</div>

</body>
</html>