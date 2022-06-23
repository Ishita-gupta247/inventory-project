<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> stocks</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<h1> Stock Record For Reference!!</h1>
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

$selectsql = "select p.productId as pid,pr.productName,pr.category,(p.quantity-(select sum(s.quantity) from sales s where s.productId=p.productId group by s.productId )) as stockLeft from purchase p join sales s on p.productId=s.productId join product pr on pr.id=s.productId group by s.productId,pr.productName,pr.category UNION
select p.productId as pid,pr.productName,pr.category,p.quantity as stockLeft from purchase p join product pr on pr.id=p.productId where not EXISTS(select s.productId from sales s where s.productId=p.productId) order by pid ; ";

$result = $mysqli->query($selectsql);
// $sql2="select * from sales";
// $result2=$mysqli->query($sql2);
// print_r($result);



 if ($result->num_rows > 0){
 	?>
     <br><br>
 	<table class="table table-dark table-striped table-md">
 			<tr>
 				<th>productId</th>
                 <th>productName</th>
                <th>category</th>
                 <th>stockLeft</th>
 				
 			</tr>

 	<?php
 	// print_r($result);
 	while($row = $result->fetch_assoc()) {
        //  if($result2->num_rows>0){
        //      while($r2=$result2->fetch_assoc())
        //      {
                //  if($row["productId"]==$r2["productId"]){
                     ?>
                     <tr>
 			<td><?php echo $row["pid"]  ?></td>
             <td><?php echo $row["productName"] ?></td>
             <td><?php echo $row["category"] ?></td>
             <td><?php echo $row["stockLeft"] ?></td>
 		</tr>
                 <?php
                 }
         
 		?>
 		
	    
  		
  	</table>
  	<?php
 }

?>
<form action="sales.php" method="post" class="text-center">
    <br><br>
<input type="submit" value="Go back to Home!" class=" btn btn-primary btn-lg col-6">
</form>
</body>
</html> 
