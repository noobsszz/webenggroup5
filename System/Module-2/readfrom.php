
<?php include 'db.php'; ?>
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
        <style>
          .container table td {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
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
                                <li class="nav-item"><a class="nav-link" href="index.php">Insert Accommodation</a></li>
                                <li class="nav-item active"><a class="nav-link" href="readfrom.php">View Accommodations</a></li>
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
                <div class="container">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Customer_id</th>
                      <th scope="col">Accommodation Name</th>
                      <th scope="col">Accommodation Location</th>
                      <th scope="col" colspan="2">Accommodation Date&Time</th>
                      <th scope="col">Accommodation Category</th>
                      <th scope="col">Accommodation Status</th>
                      <th scope="col" colspan="3">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                <?php
                    $sql = "SELECT * FROM `inffo`";
                    $result = mysqli_query($con,$sql);
                    if($result){
                      while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $customer_id=$row['customer_id'];
                        $name=$row['name'];
                        $Location=$row['Location'];
                        $date=$row['date'];
                        $time=$row['time'];
                        $category=$row['category'];
                        $status=$row['status'];
                        echo'
                        <tr>
                                  <th scope="row">'.$id.'</th>
                                  <th scope="row">'.$customer_id.'</th>
                                  <th scope="row">'.$name.'</th>
                                  <td>'.$Location.'</td>
                                  <td>'.$date.'</td>
                                  <td>'.$time.'</td>
                                  <td>'.$category.'</td>
                                  <td>'.$status.'</td>
                                  <td>
                                      <button class="btn btn-primary "><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                                      <button class="btn btn-danger"><a class="text-light" href="db.php?deleteid='.$id.'">Delete</a></button> <br><br>
                                      <button class="btn btn-secondary"><a class="text-light" href="updatestatu.php?updateid='.$id.'">Update Status</a></button>
                                  </td>
                                </tr>
                        ';

                      }
                }
            ?>
                    
                  </tbody>
                </table>
      </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
    </body>
</html>
