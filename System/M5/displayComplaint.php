<!-- paper.phph -->
<!-- To display all information of database. -->
<html>
<head>

		<title>UMP  COMPLAIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

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
			
            .header
			{
				background-color:#00b0a8;
				height:100px;
				width:100%;
				position:fixed;
                text-align: center;
			}
			
		</style>
<div class="header">
			<h1>UMP COMPLAINT CENTRE<h1>
		<div>
<body>


<div class="sidebar">
			<h2 style="color:black">Menu</h2>
			<a href="homeComplain.php"  style="color:black;text-decoration:none;">Home</a>
			<br><br><br>
			<a href="displayComplaint.php"  style="color:black;text-decoration:none;">Complains Display</a>
			<br><br><br>
			<a href="entercomplain.php"  style="color:black;text-decoration:none;">Enter New Complaint</a>
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

$query = "SELECT * FROM complaint";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){

    $id = $row["id"];
	$Customer_id = $row["Customer_id"];
	$Customer_name = $row["Customer_name"];
	$cinfo = $row["cinfo"];
	$ctype = $row["ctype"];
	$cstatus = $row["cstatus"];
    $tech_remark = $row["tech_remark"];

	?>
	<center><table>
			<tr>
			<br>
	<th >Customer id:</th>
	<th>Customer_name :</th>
	<th >cinfo :</th>
	<th >ctype :</th>
	<th >cstatus :</th>
    <th> tech_remark</th>
	<th>Action to be taken :</th>
    </tr>
	<tr>
	<td> <?php echo $Customer_id; ?></td>
	<td> <?php echo $Customer_name; ?></td>
	<td> <?php echo "$cinfo"; ?></td>
	<td> <?php echo "$ctype"; ?></td>
	<td> <?php echo "$cstatus"; ?></td>
    <td><?php echo "$tech_remark"; ?></td>
	<td> <a href="updateComplain.php?id=<?php echo $id; ?>">Update</a> /  <a href="deleteComplain.php?id=<?php echo $id; ?>">Delete Task</a> </td>
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
 





