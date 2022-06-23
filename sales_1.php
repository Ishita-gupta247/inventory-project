<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>sales</title>
  </head>
  <body >
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <style>
    body {background-color: hsla(89, 43%, 51%, 0.3);
    }
    #container-2{border-style:"solid";
    }
    </style>
    <div class="container" >
    <h1> <center>   Any current new sales!!Enter data else direct go to data page!</h1>
    <br><br><br>
    <div class="contaier-2">
          <form action="sales_2.php" method="post">
              <?php 
              $mysqli = new mysqli("localhost","root","","salesproject");

              // Check connection
              if ($mysqli -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
              }
              $s1="select id,productName,salePrice from product";?>
              <label for="productId" >productName:</label>
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
customerName: <input type="text" name="customerName"><br>
<br>
<!-- salesDate: <input type="datetime-local" name="salesDate"><br>
<br> -->
customerAddress: <input type="text" name="customerAddress"><br>
<br>

<?php
    $s2="select * from sales order by id desc limit 1 ";
    $result = $mysqli->query($s2);
   $row = $result->fetch_assoc();?>
  <!-- if(isset($_POST)) 
 else{   -->
InvoiceNo: <input type="number" name="invoiceNo" value=<?php echo  htmlspecialchars($row["invoiceNo"]+1);?>  id="ino" readonly><br>
<br>
quantity: <input type="number" name="quantity" id="qut" ><br>
<br>


        <div class="row">
        <input type="submit" value="submit" name="submit" class=" btn btn-success btn-lg col-6">
        <input type="reset" value="reset" class=" btn btn-warning btn-lg col-6">
        </div> 
<br><br>
<input type="submit" value="addmoreitems" name="addmoreitems"class=" btn btn-danger btn-lg col-12">
</form>

    <form action="sales_2.php" method="post"><br><br>
    <input type="submit" value="skip" name="submit" class=" btn btn-primary btn-lg col-12">
</form> 
  
</div>
<!-- <script>
		function myFunction() {
			var quantity = document.getElementById('qut').value;
			var price = document.getElementById('price').value;
			var result = parseInt(quantity)*parseInt(price);
			console.log(quantity);
			console.log(price);
			console.log(result);

			// alert(result);
			
			// var amount = document.getElementById('amount').value(result);

			document.getElementById('amount').value=result;
		} -->
<!-- 		
	</script> -->
  </body>
</html>

