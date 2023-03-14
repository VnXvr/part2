<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Customer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body style="background: linear-gradient(to right, #868f96 0%, #596164 100%);">
<div class="container">
    
  <h1 class="my-4" > <img src="https://www.pngplay.com/wp-content/uploads/7/Customer-Logo-Transparent-PNG.png" alt="Customer" width="100" > Edit Customer  </h1>

  <form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$customers['id']}}">
    

<div class="form-group" >
    <b><label for="firstName" >First Name: </label></b>
    <input type="text" class="form-control" id="firstName" name="firstName" value="{{$customers['firstName']}}">
</div>

<div class="form-group">
<b> <label for="lastName">Last Name:</label></b>
    <input type="text" class="form-control" id="lastName" name="lastName" value="{{$customers['lastName']}}">
</div>

<div class="form-group">
<b><label for="email">Email:</label></b>
    <input type="email" class="form-control" id="email" name="email" value="{{$customers['email']}}">
</div>

<div class="form-group">
<b><label for="contactNumber">Contact Number:</label></b>
    <input type="text" class="form-control" id="contactNumber" name="contactNumber" value="{{$customers['contactNumber']}}">
</div>

<div class="form-group">
   <b> <label for="address">address:</label></b>
    <input type="address" class="form-control" id="address" name="address" value="{{$customers['address']}}">
</div>
<button type="submit" class="btn btn-primary">
  <span>Save</span>
</button>

</form>
    
</body>
</html>

