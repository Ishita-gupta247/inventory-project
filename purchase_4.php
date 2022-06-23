<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> importlist</title>
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
if($_POST['firmName']!='')
{
$productId = $_POST['productId'];
$firmName = $_POST['firmName'];
// $purchaseDate = $_POST['purchaseDate'];
$address = $_POST['address'];
$invoiceNo = $_POST['invoiceNo'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$discount= $_POST['discount'];
$finalPrice = ($_POST['price']*$_POST['quantity'])-(($_POST['price']*$_POST['quantity']*$_POST['discount'])/100);

$sql = "INSERT INTO purchase (productId,firmName,address,invoiceNo,quantity,price,discount,finalPrice) VALUES ('$productId','$firmName','$address','$invoiceNo','$quantity','$price','$discount','$finalPrice')";

if ($mysqli->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
if(isset($_POST['submit'])){
$selectsql = "SELECT * FROM purchase ";
$result = $mysqli->query($selectsql);

// print_r($result);



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
//  $sq2="SELECT * FROM user ";

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
else if(isset($_POST['addmoreitems'])){?>
 <div class="container" >
    <h1> <center>   Any current new purchase!!Enter data else direct go to data page!</h1>
    <br><br><br>
    <div class="contaier-2">
          <form action="purchase_4.php" method="post">
<!-- productName: <input type="number" name="productId"><br>
<br> -->
<?php 
            
              $s1="select productName,id from product";?>
              <label for="productId" >productName :</label>
              <select name="productId" id="productId"  >
                  
                <option value="" selected disabled>--</option>
              <?php
              $result = $mysqli->query($s1);
              
                 if ($result->num_rows > 0){
              while($row = $result->fetch_assoc()) {
                // $status = mysqli_fetch_array($row);
                ?>
                
                <option value=<?php $v1=$row["id"];
                 echo htmlspecialchars($v1) ?>><?php echo $row["productName"] ?></option>
              
               
                 <?php
             }
            }
             ?>
            </select>
            
<br><br>

<?php
    $s2="select * from purchase order by id desc limit 1 ";
    $result = $mysqli->query($s2);
   $row = $result->fetch_assoc();?>
  <!-- if(isset($_POST)) 
 else{   -->
    firmName: <input type="text" name="firmName" value=<?php echo  htmlspecialchars($row["firmName"]);?>  id="fn" readonly><br>
<br>
<!-- purchaseDate: <input type="datetime-local" name="purchaseDate"><br><br> -->
address: <input type="text" name="address" value=<?php echo  htmlspecialchars($row["address"]);?>  id="ad" readonly><br><br>    
InvoiceNo: <input type="number" name="invoiceNo" value=<?php echo  htmlspecialchars($row["invoiceNo"]);?>  id="ino" readonly><br>
<br>

quantity: <input type="number" name="quantity"><br><br>
price: <input type="number" name="price"  step=".01"><br><br>
discount: <input type="number" name="discount"  step=".01"><br><br>
<!-- <br>
Quantity: <input type="number" name="name"><br>
<br> -->
<!-- TotalPrice: -->
<div class="row">
        <input type="submit" value="submit" name="submit" class=" btn btn-warning btn-lg col-6">
        <input type="reset" value="reset" class=" btn btn-danger btn-lg col-6">
</div>
<br><br>
<input type="submit" value="add more items" name="addmoreitems" class=" btn btn-danger btn-lg col-12">
<br><br>
    <input type="submit" value="skip" name="submit" class=" btn btn-primary btn-lg col-12">
</form>
</div></div>   



<?php
}
?>
<form action="sales.php" method="post" class="text-center">
    <br><br>
<input type="submit" value="Go back to Home!" class=" btn btn-primary btn-lg col-6">
</form>
</body>
</html> 
