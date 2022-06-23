<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> History</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>
    h1 {
        background-color:grey;
    }
    body {background-color: hsla(89, 43%, 51%, 0.3);
    }
</style>
<?php

// database connection
$mysqli = new mysqli("localhost","root","","salesproject");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// echo "success"

$fromDate= $_POST['fromDate'];

$toDate = $_POST['toDate'];
// $saleDate = $_POST['salesDate'];

// echo $fromDate.$toDate;

$sql = "select * from sales  WHERE CAST(saleDate AS DATE) between '$fromDate' and '$toDate'";
$result = $mysqli->query($sql);
// print_r($result);
if($result){
 if ($result->num_rows > 0){
 	?>
     <br><br>
     <h1> Sales Record For Reference!!</h1>
 	<table class="table table-dark table-striped table-md">
 			<tr>
                 <th>id</th>
 				<th>productId</th>
 				<th>customerName</th>
 				<th>salesDate</th>
                 <th>customerAddress</th>
                 <th>invoiceNo</th>
                 <th>quantity</th>
                 <th>price</th>
                 <th>discount</th>
                 <th>finalPrice</th>
 				
 			</tr>

 	<?php
 	// print_r($result);
 	while($row = $result->fetch_assoc()) {
 		?>
 		<tr>
 			<td><?php echo  $row["id"]  ?></td>
 			<td><?php echo $row["productId"]  ?></td>
 			<td><?php echo $row["customerName"]  ?></td>
 			<td><?php echo $row["saleDate"]  ?></td>
             <td><?php echo $row["customerAddress"]  ?></td>
             <td><?php echo $row["invoiceNo"]  ?></td>
             <td><?php echo $row["quantity"]  ?></td>
             <td><?php echo $row["price"]  ?></td>
             <td><?php echo $row["discount"]  ?></td>
             <td><?php echo $row["finalPrice"]  ?></td>
 		</tr>
	    
  		<?php
  	}
  	?>
  	</table>
  	<?php
 }}
 else{
    echo "no data found";
 }
 $sql = "select * from purchase  WHERE CAST(purchaseDate AS DATE) between '$fromDate' and '$toDate'";
$result = $mysqli->query($sql);
// print_r($result);
if($result){
 if ($result->num_rows > 0){
 	?>
     <br><br>
     <h1> Purchase Record For Reference!!</h1>
 	<table class="table table-dark table-striped table-md">
     <tr>
                 <th>id</th>
 				<th>productId</th>
 				<th>firmName</th>
 				<th>purchaseDate</th>
                 <th>address</th>
                 <th>invoiceNo</th>
                 <th>quantity</th>
                 <th>price</th>
                 <th>discount</th>
                 <th>finalPrice</th>
 				
 			</tr>

 	<?php
 	// print_r($result);
 	while($row = $result->fetch_assoc()) {
 		?>
 		<tr>
 			<td><?php echo  $row["id"]  ?></td>
 			<td><?php echo $row["productId"]  ?></td>
 			<td><?php echo $row["firmName"]  ?></td>
 			<td><?php echo $row["purchaseDate"]  ?></td>
             <td><?php echo $row["address"]  ?></td>
             <td><?php echo $row["invoiceNo"]  ?></td>
             <td><?php echo $row["quantity"]  ?></td>
             <td><?php echo $row["price"]  ?></td>
             <td><?php echo $row["discount"]  ?></td>
             <td><?php echo $row["finalPrice"]  ?></td>
 		</tr>
	    
  		<?php
  	}
  	?>
  	</table>
  	<?php
 }}
 else{
    echo "no data found";
 }
 ?>
<form action="sales.php" method="post" class="text-center">
    <br><br>
<input type="submit" value="Go back to Home!" class=" btn btn-primary btn-lg col-6">
</form>
</body>
</html> 
