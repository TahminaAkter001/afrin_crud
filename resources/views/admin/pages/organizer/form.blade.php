@extends('admin.master')
@section('content')
<form action="{{route('organizer.store')}}"method="post" enctype="multipart/form-data">
    @csrf


<div class="form-group">
    <label for=""> Organizer Name</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="form-group">
  <label for=""> Contact</label>
   <input type="text" class="form-control" name="content" id="" cols="30" rows="10"></textarea>
  </div>
    
  <button type="submit" class="btn-info bg-info btn-primary">Submit</button>
  
</form>
@endsection
