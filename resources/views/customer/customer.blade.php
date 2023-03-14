@include('partial.headercustomer')
<x-customersnav/>
<table  class="table table-dark table-striped">
  <thead>
    <tr style="background: linear-gradient(to bottom, #28313B 0%, #485461 100%); text-align:center; color:white" font-family:Sans-serif>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Address</th>
            <th scope="col"></th>
            <th scope="col"></th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($customers as $customer)
    <tr style="background: linear-gradient(to bottom, #D7E1EC 0%, #FFFFFF 100%); text-align:center;">

      <td> {{$customer->id}} </td>
      <td> {{$customer->firstName}} </td>
      <td> {{$customer->lastName}} </td>
      <td> {{$customer->email}} </td>
      <td> {{$customer->contactNumber}} </td>
      <td> {{$customer->address}} </td>

      <td>
          <form action="edit/{{$customer['id']}}" method="GET">
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
      </td>

      <td>
          <form action="delete/{{$customer['id']}}" method="GET">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
      </td>

    </tr>
    @endforeach
    


  </tbody>
</table>
</body>
</html>
