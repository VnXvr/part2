<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Products</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .policy p {
        color: black;
        text-align:center;
        position:absolute; 
        bottom:0; 
        left:0; 
        right:0;
        }
    </style>

    <title>EDIT</title>
    <link rel="icon" type="images/x-icon" href="https://cdn-icons-png.flaticon.com/512/9638/9638352.png"alt="Customer" width="150" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body style="background: linear-gradient(to right, #868f96 0%, #596164 100%);">
<div class="container">
    
  <h1 class="my-4" > <img src="https://cdn-icons-png.flaticon.com/512/9638/9638352.png" alt="Customer" width="100" > ADD Product  </h1>

  <form action="addprod" method="POST">
    @csrf


<div class="form-group" >
    <b><label for="description" >Description: </label></b>
    <input type="text" class="form-control" id="description" name="description" 
</div>

<div class="form-group">
<b> <label for="quantity">Quantity:</label></b>
    <input type="number" class="form-control" id="quantity" name="quantity">
</div>

<div class="form-group">
<b><label for="price">Price:</label></b>
    <input type="text" class="form-control" id="price" name="price" >
</div>

<br>
<button type="submit" class="btn btn-primary">
  <span>Add Product</span>
</button>

</form>
</body>

<div class="policy">
<footer>
<p>&copy; Creadted by VINCE MICKLAY: 2023 Your Company BENCE. All Rights Reserved. <a href="/policy">Privacy Policy</a></p>
</footer>
</div>

</html>

