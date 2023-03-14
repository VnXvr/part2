@include('partial.header')
<x-roomsnav/>
<table class="table table-dark table-striped" >
  <thead>
    <tr  style="background: linear-gradient(to bottom, #28313B 0%, #485461 100%); text-align:center; color:white" font-family:Sans-serif>
            <th scope="col" >RoomID</th>
            <th scope="col">Room Description</th>
            <th scope="col">Room Capacity</th>
            <th scope="col">Date From:</th>
            <th scope="col">Date To:</th>
    </tr>
  </thead>
  <tbody>
 
  @foreach ($rooms as $room)
    <tr style="background: linear-gradient(to bottom, #D7E1EC 0%, #FFFFFF 100%); text-align:center;">
      <td> {{$room->id}} </td>
      <td> {{$room->roomDescription}} </td>
      <td> {{$room->roomCapacity}} </td>
      <td> {{$room->dateFrom}} </td>
      <td> {{$room->dateTo}} </td>

    </tr>
    @endforeach
  </tbody>
</table>
    
</body>
</html>