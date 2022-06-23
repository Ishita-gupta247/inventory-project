<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>product_form</title>
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
    body {background-color: hsla(89, 43%, 51%, 0.3);
    }
    #container-2{border-style:"solid";
    }
    </style>
    <div class="container" >
    <h1> <center>   Any current new product!!Enter data else direct go to data page!</h1>
    <br><br><br>
    <div class="contaier-2">
          <form action="purchase_2.php" method="post">
<!-- productId: <input type="number" name="productId"><br>
<br> -->
productName: <input type="text" name="productName"><br>
<br>
<!-- category: <input type="text" name="category"><br><br> -->
<label for="category" >Category :</label>
              <select name="category" id="category"  >
                  
                <option value="" selected disabled>chose the category</option>
                <option value="casuals">casuals</option>               
                <option value="ethnic">ethnic</option> 
                <option value="formal">formal</option> 
                <option value="western">western</option>  
                <option value="costumes">costumes</option> 
                <option value="indowestern">indowestern</option>  
  </select><br><br>
<!-- <br>
Quantity: <input type="number" name="name"><br>
<br> -->
salePrice:<input type="number" name="salePrice"><br>
<br>


<div class="row">
        <input type="submit" value="submit" class=" btn btn-warning btn-lg col-6">
        <input type="reset" value="reset" class=" btn btn-danger btn-lg col-6">
</div>
<br><br>
    <input type="submit" value="skip" class=" btn btn-primary btn-lg col-12">
</form>
</div></div>   
  </body>
</html>