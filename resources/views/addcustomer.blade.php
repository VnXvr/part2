<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Customer</title>
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
    <link rel="icon" type="images/x-icon" href="https://icon-library.com/images/add-person-icon/add-person-icon-17.jpg"alt="Customer" width="150" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body style="background: linear-gradient(to right, #868f96 0%, #596164 100%);">
<div class="container">
    
  <h1 class="my-4" > <img src="https://icon-library.com/images/add-person-icon/add-person-icon-17.jpg" alt="Customer" width="100" > ADD Customer  </h1>

  <form action="add" method="POST">
    @csrf


<div class="form-group" >
    <b><label for="firstName" >First Name: </label></b>
    <input type="text" class="form-control" id="firstName" name="firstName" 
</div>

<div class="form-group">
<b> <label for="lastName">Last Name:</label></b>
    <input type="text" class="form-control" id="lastName" name="lastName">
</div>

<div class="form-group">
<b><label for="email">Email:</label></b>
    <input type="email" class="form-control" id="email" name="email" >
</div>

<div class="form-group">
<b><label for="contactNumber">Contact Number:</label></b>
    <input type="text" class="form-control" id="contactNumber" name="contactNumber" 
</div>

<div class="form-group">
   <b> <label for="address">Address:</label></b>
    <input type="address" class="form-control" id="address" name="address" 
</div>
<br>
<button type="submit" class="btn btn-primary">
  <span>Add</span>
</button>

</form>
</body>

<div class="policy">
<footer>
<p>&copy; Creadted by VINCE MICKLAY: 2023 Your Company BENCE. All Rights Reserved. <a href="/policy">Privacy Policy</a></p>
</footer>
</div>

</html>

