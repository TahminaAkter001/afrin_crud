@extends('admin.master')
@section('content')
<div class="text-center fw-bold">
<h1>Organizer List</h1>
</div>

<table class="table">
 <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      
    </tr>
  </thead>
<tbody>
  <tr>
      <td>{{$organizers->organizer_name}}</td>
      <td>{{$organizers->contact_info}}</td>
 </tr>
</tbody>

</table>
@endsection