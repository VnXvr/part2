<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Product</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" type="images/x-icon" href="https://cdn-icons-png.flaticon.com/512/4129/4129571.png"alt="Product" width="150" />
</head>

<style>
        .policy p {
        color: white;
        text-align:center;
        position:absolute; 
        bottom:0; 
        left:0; 
        right:0;
        }

        .policy a {
        color: red;
        }
    </style>

<body style="background: linear-gradient(to right, #868f96 0%, #596164 100%);">
<div class="container">
    
  <h1 class="my-4" > <img src="https://cdn-icons-png.flaticon.com/512/4129/4129571.png" alt="Customer" width="100" > Edit Product  </h1>

  <form action="/editproducts" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$products['id']}}">
    

<div class="form-group" >
    <b><label for="description" >Description: </label></b>
    <input type="text" class="form-control" id="description" name="description" value="{{$products['description']}}">
</div>


<div class="form-group">
<b> <label for="quantity">Quantity:</label></b>
    <input type="number" class="form-control" id="quantity" name="quantity" value="{{$products['quantity']}}">
</div>

<div class="form-group">
<b><label for="price">Price:</label></b>
    <input type="text" class="form-control" id="price" name="price" value="{{$products['price']}}">
</div>


<button type="submit" class="btn btn-primary">
  <span>Save</span>
</button>



</form>

<div class="policy">
<footer>
<p>&copy; Creadted by VINCE MICKLAY: 2023 Your Company BENCE. All Rights Reserved. <a href="/policy">Privacy Policy</a></p>
</footer>
</div>
    
</body>
</html>

