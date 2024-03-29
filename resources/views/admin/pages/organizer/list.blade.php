@extends('admin.master')
@section('content')
<div class="text-center fw-bold">
<h1>Organizer List</h1>
</div>

<a href="{{route('organizer.form')}}" button class="btn btn-primary">Add organizer</a>

<table class="table">

  <thead>
    <tr>
     <th scope="col">Name</th>
      <th scope="col">Contact</th>
       <th scope="col">Action</th>
    </tr>
  </thead>

  
  <tbody>

    @foreach ($organizers as $organizer)
    <tr>
      <td>{{$organizer->organizer_name}}</td>
      <td>{{$organizer->contact_info}}</td>
      
      <td>
      <a class="btn btn-warning" href="{{route('organizer.view',$organizer->id)}}">view</a>
        <a class="btn btn-success" href="{{route('organizer.edit',$organizer->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('organizer.delete',$organizer->id)}}">Delete</a>

      </td>
      
      </td>

    </tr>

    @endforeach

  </tbody>

</table>
@endsection
