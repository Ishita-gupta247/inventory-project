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
  <body>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <style>
    body {background-color: hsla(89, 43%, 51%, 0.3);}</style>
    <div class="container ">
    <h1> <center>   Welcome to Dashboard!</h1>
    <br><br><br>
        <div class="row ">
          <form action="sales_1.php" method="post">
        <!-- <div action="sales_1.php" class=" btn btn-primary btn-lg"></div> -->
        <input type="submit" value="sales" class=" btn btn-primary btn-lg col-12">
</form>
<form action="purchase.php" method="post">
        <!-- <div action="sales_1.php" class=" btn btn-primary btn-lg"></div> -->
        <input type="submit" value="purchase" class=" btn btn-warning btn-lg col-12">
        
</form>
<form action="stock.php" method="post">
        <!-- <div action="sales_1.php" class=" btn btn-primary btn-lg"></div> -->
        <input type="submit" value="stock" class=" btn btn-dark btn-lg col-12">
</form>
   
<form action="trace.php" method="post">
        <!-- <div action="sales_1.php" class=" btn btn-primary btn-lg"></div> -->
        <input type="submit" value="history" class=" btn btn-success btn-lg col-12">
</form>     
       
    </div>
  </body>
</html>