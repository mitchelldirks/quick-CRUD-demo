<?php
$conn = new mysqli("localhost","root","","ticket");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM ticket";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order List</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		div.card{
			text-align: center;
			position: relative;
			margin-left: 20%;
			margin-right: 20%;
			margin-top: 10%;
		}
		table{			padding: 10px;
		}
	th{
		background-color: #ff9900;
	}
</style>
<body>
	<div class="card">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"	>First</th>
      <th scope="col">Last</th>
      <th scope="col">E-mail</th>
      <th scope="col">Price</th>
	  <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  	<?php
  	 if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_array($result)){
    			echo "<tr>
      			<th scope='row'>".$row['id']."</th><td>".$row['FN']."</td><td>".$row['LN']."</td><td>".$row['email']."</td><td>".$row['ticket']."</td><td><a href='edit.php?id=".$row['id']."' class='btn btn-info'>Edit</a><a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td></tr>";
      		}}}
    ?>
  </tbody>
</table>
</div>
</body>
</html>