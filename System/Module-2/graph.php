<?php
$dbUsername = "root";
$dbPassword = "";
$dbName = "module";



$conn = mysqli_connect("localhost", $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error . "\n");

}
      

$sql = "SELECT COUNT(`id`) FROM `inffo` WHERE MONTH(Date)=1";
    $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $mounth1 = $row[0];

$sql = "SELECT COUNT(`id`) FROM `inffo` WHERE MONTH(Date)=2";
    $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $mounth2 = $row[0];

$sql = "SELECT COUNT(`id`) FROM `inffo` WHERE MONTH(Date)=6";
   $result = mysqli_query($conn, $sql);
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
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Accommodation</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Accommodation Page</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Page 2</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Page 3</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Page 4</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Page 5</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Page 6</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="index.php">Insert Accommodation</a></li>
                                <li class="nav-item"><a class="nav-link" href="readfrom.php">View Accommodations</a></li>
                                <li class="nav-item"><a class="nav-link" href="graph.php">Report </a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Logout</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
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
