@extends('layouts.app')

@section('title') The Medicine @endsection

@section('content')
<div class="show">
  <div class="pt-4 ps-4  ">
   <h2> The Medicine</h2>
  </div>
  <div class="card-body">
  <p class="mt-4 ">
    <h6 class="inline-title">Name:</h6> {{$infoMedicine->title}}
</p>
     <p class="mt-4">
     <h6 class="inline-title">Category:</h6> {{$infoMedicine->category}}</p>
    <p class="mt-4"> <h6 class="inline-title"> Price(DZD):</h6> {{$infoMedicine->price}}</p>
    <p class="mt-4">  <h6 class="inline-title">Description:</h6> {{$infoMedicine->description}}</p>
  </div>
  </div>
@endsection