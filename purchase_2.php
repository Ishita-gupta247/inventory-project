<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> productlist</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<h1> Product List For Reference!!</h1>
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
if(($_POST['productName'])!='')
{
// $id = $_POST['productId'];
$productName = $_POST['productName'];
$category = $_POST['category'];
$salePrice=$_POST['salePrice'];
$sql = "INSERT INTO product (productName,category,salePrice) VALUES ('$productName','$category','$salePrice')";

if ($mysqli->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
$selectsql = "SELECT * FROM product ";
$result = $mysqli->query($selectsql);

// print_r($result);



 if ($result->num_rows > 0){
 	?>
     <br><br>
 	<table class="table table-dark table-striped table-md">
 			<tr>
 				<th>productId</th>
 				<th>productName</th>
 				<th>category</th>
                 <th>salePrice</th>
 				
 			</tr>

 	<?php
 	// print_r($result);
 	while($row = $result->fetch_assoc()) {
 		?>
 		<tr>
 			<td><?php echo  $row["id"]  ?></td>
 			<td><?php echo $row["productName"]  ?></td>
 			<td><?php echo $row["category"]  ?></td>
             <td><?php echo $row["salePrice"]?></td>
 			
 		</tr>
	    
  		<?php
  	}
  	?>
  	</table>
  	<?php
 }
//  $sq2="SELECT * FROM user ";

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }







?>
<form action="purchase_3.php" method="post" class="text-center">
    <br><br>
<input type="submit" value="Cick for Purchase" class=" btn btn-primary btn-lg col-6">
</form>
</body>
</html> 
