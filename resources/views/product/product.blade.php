@include('partial.headerproduct')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #36454F;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav img:hover {
  color: #f1f1f1;
}

.navBar span:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.policy p {
  color: black;
  text-align:center;
  position:absolute; 
  bottom:0; 
  left:0; 
  right:0;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav" >
<p style="font-family: Arial, sans-serif; font-weight:bold; background:grey; text-align:center"> <img src="https://cdn-icons-png.flaticon.com/512/552/552486.png" alt="Customer" width="40"> {{$emailof_User}}</p>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <hr style="color:black">

  <a style="font-size:15px;"class="nav-link" href="/rooms"> <img src="https://cdn-icons-png.flaticon.com/512/9540/9540427.png" alt="Customer" width="50"> Rooms</a>
  <hr style="color:black">

  <a style="font-size:15px" class="nav-link" href="/">   <img src="https://icon-library.com/images/customer-service-icon-png/customer-service-icon-png-24.jpg" alt="Customer" width="50"> Customer</a>
  <hr style="color:black">

  <a style="font-size:15px" class="nav-link" href="/add"> <img src="https://icon-library.com/images/add-person-icon/add-person-icon-17.jpg" alt="Customer" width="50"> Add Customer</a>
  <hr style="color:black">

  <a style="font-size:15px" class="nav-link" href="/products"> <img src="https://cdn-icons-png.flaticon.com/512/4129/4129571.png" alt="Product" width="50">  Product</a>
  <hr style="color:black">

  <a style="font-size:15px" class="nav-link" href="/addprod"> <img src="https://cdn-icons-png.flaticon.com/512/9638/9638352.png" alt="Product" width="50"> Add Product</a>
  <hr style="color:black">

  <a  style="font-size:15px" class="nav-link" href={{"/logout"}}> <img src="https://cdn-icons-png.flaticon.com/512/5509/5509597.png" alt="Customer" width="50"> Logout</a>
  <hr style="color:black">

  <footer style="position:absolute; bottom:0; left:0; right:0;">
    <a style="font-family: Arial, sans-serif; font-weight:bold; color:white; background:#24242c;" >Logged in as: {{$nameof_User}}</a>
    
  </footer>

</div>

<div id="main" class="navBar">
<table  class="table table-dark table-striped">
  <thead>
    <tr style="background: linear-gradient(to bottom, #28313B 0%, #485461 100%); text-align:center; color:white" font-family:Sans-serif>
            <th scope="col">Product ID</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
            <th scope="col"></th>
    </tr>
  </thead>

  <tbody>

  @if(Session::has('prodsuccess'))
  {{Session::get('prodsuccess')}}
  
  <script>
    alert('Product has been deleted successfuly!')
  </script>
  @endif


  @if(Session::has('produpdate'))
  {{Session::get('produpdate')}}
  
  <script>
    alert('Product has been updated!')
  </script>
  @endif



  @foreach($products as $product)
    <tr style="background: linear-gradient(to bottom, #D7E1EC 0%, #FFFFFF 100%); text-align:center;">

      <td> {{$product->id}} </td>
      <td> {{$product->description}} </td>
      <td> {{$product->quantity}} </td>
      <td> {{$product->price}} </td>

      <td>
          <form action="editproducts/{{$product['id']}}" method="GET">
            <button type="submit" class="btn btn-primary" >Edit</button>
          </form>
      </td>

      <td>
          <form action="deleteproduct/{{$product['id']}}" method="GET">
            <button type="submit" class="btn btn-danger" >Delete</button>
          </form>
      </td>

    </tr>
    @endforeach

  <span style="font-size:30px;cursor:pointer" onclick="openNav()"> &#9776;</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#36454F";
}
</script>
</head>

<body>
<x-productsnav/>
  </tbody>
</table>
</body>

<div class="policy">
<footer>
<p>&copy; Creadted by VINCE MICKLAY: 2023 Your Company BENCE. All Rights Reserved. <a href="/policy">Privacy Policy</a></p>
</footer>
</div>

</html>
