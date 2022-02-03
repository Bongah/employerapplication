@extends('layouts.layout')
@section('content')
<div class="card">
  <div class="card-header">Update Employer Page</div>
  <div class="card-body">
      
      <form action="{{ url('./employers') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop