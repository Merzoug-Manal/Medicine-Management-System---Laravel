@extends('layouts.app')

@section('title') Update @endsection

@section('content')
<form  method="POST" action="{{route('medicines.update',$medicine->id)}}" >

@csrf
@method('PUT')
<div class="form-update">
<div class="mb-3">
  <label class="form-label ">Name</label>
  <input name="title" type="text" value="{{ $medicine->title }}" class="form-control"  required>

</div>
<div class="mb-3">
  <label  class="form-label">Category</label>
  <select name="category" class="form-control">
  @foreach ($categories as $category)
    <option value="{{$category->category}}"> {{$category->category}}</option>
    @endforeach
  </select>
  </select>
</div>

<label  class="form-label">Price(DZD)</label>
  <input name="price" type="number" value="{{ $medicine->price}}" class="form-control" " >

<div class="mt-3">
  <label class="form-label">Description</label>
  <textarea name="description" class="form-control"   rows="3">{{ $medicine->description }}</textarea>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<button class="btn btn-add mt-3 me-md-2 ">Update</button>
</div>
</div>
</form>
@endsection