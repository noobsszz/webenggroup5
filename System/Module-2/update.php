<?php
    include 'db.php';

    $id=$_GET['updateid'];
    $sql="SELECT `customer_id`, `name`, `Location`, `date`, `time`, `category`, `status` FROM `inffo` WHERE id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $customer_id=$row['customer_id'];
    $name=$row['name'];
    $Location=$row['Location'];
    $date=$row['date'];
    $time=$row['time'];
    $category=$row['category'];
    $status=$row['status'];

    if(isset($_POST['submit'])){
        $customer_id=$_POST['customer_id'];
        $name=$_POST['name'];
        $Location=$_POST['Location'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $category=$_POST['category'];
        $status=$_POST['status'];
        
        $sql="UPDATE `inffo` SET `id`='$id', `customer_id`='$customer_id', `name`='$name',`Location`='$Location',`date`='$date',`time`='$time',`category`='$category',`status`='$status' WHERE id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
           header('location:readfrom.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Insert Accommodation</a></li>
                                <li class="nav-item"><a class="nav-link" href="readfrom.php">View Accommodations</a></li>
                                <li class="nav-item"><a class="nav-link" href="graph.php">Report </a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
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
                    <h1>Halls Management</h1>
                <form method="POST">
                <div class="form-group">
                        <label for="name">Customer ID</label>
                        <input type="text" class="form-control" name="customer_id" placeholder="Enter Your ID" value="<?php $customer_id ;?>">
                    </div>
                   <div class="form-group">
                        <label for="name">Accommodation Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?php $name ;?>">
                    </div>
                    <div class="form-group">
                        <label for="Location">Accommodation Location</label>
                        <input type="radio" class="form-check-input" name="status" value="Seminor Room">Seminor Room
                        <input type="radio" class="form-check-input" name="status" value="Discussion Room">Discussion Room
                        <input type="radio" class="form-check-input" name="status" value="Cafeteria">Cafeteria
                    </div>
                    <div class="form-group">
                        <label for="Location">Accommodation Date</label>
                        <input type="tex" class="form-control" name="date" placeholder="Enter The Accommodation Date" value="<?php $date ;?>">
                    </div>
                    <div class="form-group">
                        <label for="Location">Accommodation Time</label>
                        <input type="tex" class="form-control" name="time" placeholder="Enter The Accommodation Time" value="<?php $time ;?>"> 
                    </div>
                    <label for="category">Accommodation Category</label>
                    <div class="form-group">
                        <input type="radio" class="form-check-input" name="category" value="Lecture Hall">Lecture Hall
                    </div>
                    <div class="form-group">
                        <input type="radio" class="form-check-input" name="category" value="Lab">Lab
                    </div>
                    <div class="form-group">
                        <input type="radio" class="form-check-input" name="category" value="Meeting Room">Meeting Room
                    </div>
                    <div class="form-group">
                        <label for="statu">Accommodation Statu</label>
                        <input type="radio" class="form-check-input" name="status" value="Available">Available
                        <input type="radio" class="form-check-input" name="status" value="Assigned">Assigned
                        <input type="radio" class="form-check-input" name="status" value="Booked">Booked
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Update">
                    </form>
                   
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
    </body>
</html>
