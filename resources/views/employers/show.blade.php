@extends('layouts.layout')
@section('content')
<div class="card">
  <div class="card-header">Employer lookup Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employers->name ?? 'None'}}</h5>
        <p class="card-text">Email Address : {{ $employers->email ?? 'None' }}</p>
        <p class="card-text">Phone : {{ $employers->mobile ?? 'None' }}</p>
  </div>
      
    </hr>
  
  </div>
</div>