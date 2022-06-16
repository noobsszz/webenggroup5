<?php
$dbUsername = "root";
$dbPassword = "";
$dbName = "module";



$conn = mysqli_connect("localhost", $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error . "\n");

}
      

$query= "SELECT COUNT(`id`) FROM `book` WHERE MONTH(Date)=1";
    $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $mounth1 = $row[0];

$query = "SELECT COUNT(`id`) FROM `book` WHERE MONTH(Date)=2";
    $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $mounth2 = $row[0];

$query = "SELECT COUNT(`id`) FROM `book` WHERE MONTH(Date)=6";
   $result = mysqli_query($conn, $query);
   $row = mysqli_fetch_array($result);
   $mounth6 = $row[0];

  $total = $mounth6 + $mounth1 + $mounth2;

$dataPoints = array(
	array("y" => $mounth1, "label" => "January" ),
    array("y" => $mounth2, "label" => "February" ),
	array("y" => $mounth6, "label" => "June" ),
)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Accommodation Resaurce Manage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <!-- Page content-->
                <div class="container-fluid">
                    
<div class="container-fluid py-4">
<div><strong>Total Bookings  <?php echo $total?></div>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</div>

<script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1",
    title:{
        text: "Booking by month"
},
    data: [{
        type: "column",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

}
</script>

      </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
    </body>
</html>
