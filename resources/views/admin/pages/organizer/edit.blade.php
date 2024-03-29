@extends('admin.master')
@section('content')
<form action="{{route('organizer.update',$organizers->id)}}"method="post" >
    @csrf
    @method('put')

<div class="form-group">
    <label for=""> Organizer Name</label>
    <input value="{{$organizers->organizer_name}}"
    required type="text" class="form-control" id="" placeholder="Enter name" name="name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="form-group">
  <label for="">Contact</label>
   <input type="text" class="form-control" name="content" id="" cols="30" rows="10">
  </div>
    
  <button type="submit" class="btn-info bg-info btn-primary">Submit</button>
  
</form>
@endsection
