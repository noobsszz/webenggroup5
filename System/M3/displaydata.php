<!-- paper.phph -->
<!-- To display all information of database. -->
<html>
<head>
<title>Technician Job View</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Dashboard</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Admin Stye -->


    <script src="https://cdn.tailwindcss.com"></script>

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
            h1{
                text-align: center;
                font-weight: bold;
                color: lightseagreen;
                font-size: 100px;
                font-family: Arial, Helvetica, sans-serif;
                
            }
			
			
			
		</style>

<h1>UMP TECHNICIAN</h1>

<body>
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
			<a href="/UMP Parcel/M1/staff/logout.php"  style="color:black;text-decoration:none;">Logout</a>
		</div>
	<div class="main">
    <div style="width:50%;height:50%;text-align:center"> 
	<center><img src="image/FK1.jpg" alt="centered image" > </center>
        
       
<ol>
<?php
$host = "localhost";
$dbname = "module";
$user = "root";
$pass = "";
$conn = mysqli_connect($host,$user,$pass,$dbname);

$query = "SELECT * FROM book";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){

    $id = $row["id"];
	$cust_id = $row["cust_id"];
	$task = $row["task"];
	$location = $row["location"];
	$Category = $row["Category"];
	$tools = $row["tools"];
	$other = $row["other"];
	$ADate = $row["ADate"];
	$ATime = $row["ATime"];

	?>
	<center><table>
			<tr>
			<br>
	<th >Customer id :</th>
	<th>Task :</th>
	<th >Location :</th>
	<th >Category :</th>
	<th >Tools :</th>
	<th >Other :</th>
	<th >Date :</th>
	<th >Time :</th>
	<th>Action to be taken :</th>
    </tr>
	<tr>
	<td> <?php echo $cust_id; ?></td>
	<td> <?php echo $task; ?></td>
	<td> <?php echo "$location"; ?></td>
	<td> <?php echo "$Category"; ?></td>
	<td> <?php echo "$tools"; ?></td>
	<td> <?php echo "$other"; ?></td>
	<td> <?php echo "$ADate"; ?></td>
	<td> <?php echo "$ATime"; ?></td>
	<td> <a href="changeData.php?id=<?php echo $id; ?>">Update</a> /  <a href="deleteData.php?id=<?php echo $id; ?>">Delete Task</a></td>
	</tr>
		
	</table></center>
	
	<?php
    }
} else {

    echo "0 results";
	
}
?>
 </div>  
    </div>
</div>
</body>
 
 <?php
 $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
 $query = "SELECT * FROM book WHERE Category = 'Event'";
  
 $query = $dbh->prepare($query);
 $query->execute();
 
 $Event = $query->rowCount();
 
 $query = "SELECT * FROM book WHERE Category = 'Lecture'";
 
 $query = $dbh->prepare($query);
 $query->execute();
 
 $Lecture = $query->rowCount();
 
 $query = "SELECT * FROM book WHERE Category = 'Lab'";
 
 $query = $dbh->prepare($query);
 $query->execute();
 
 $Lab = $query->rowCount();

 ?>
 <div class="md:pl-64 flex flex-col">


<main class="flex-1">

	<div class="py-6">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
			<h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
		</div>

		<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
			<!-- Replace with your content -->
			<!-- This example requires Tailwind CSS v2.0+ -->
			<div>
				<h3 class="text-lg leading-6 font-medium text-gray-900">TASK DONE FOR THE DAY</h3>
				<dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
					<div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
						<dt class="text-sm font-medium text-gray-500 truncate">Event</dt>
						<dd class="mt-1 text-3xl font-semibold text-gray-900"><?php echo $Event ?></dd>
					</div>

					<div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
						<dt class="text-sm font-medium text-gray-500 truncate">Lecture</dt>
						<dd class="mt-1 text-3xl font-semibold text-gray-900"><?php echo $Lecture ?></dd>
					</div>

					<div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
						<dt class="text-sm font-medium text-gray-500 truncate">Lab</dt>
						<dd class="mt-1 text-3xl font-semibold text-gray-900"><?php echo $Lab ?></dd>
					</div>
				</dl>
			</div>
        </div>
    </div>
    
			<br>
</main>



<head>  
<?php 
    $query = "SELECT Category, count(*) as number FROM book GROUP BY Location";  
?>
           <title>Report Diagram</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Category', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Category"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Mail and Parcel',  
                      is3D:true,  
                      //pieHole: 0.5
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  






