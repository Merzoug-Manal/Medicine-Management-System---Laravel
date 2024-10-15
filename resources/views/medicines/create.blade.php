@extends('layouts.app')

@section('title') Create @endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('medicines.store')}}" >

@csrf
<div class="form-update">
<div class="mb-3">
  <label  class="form-label">name</label>
  <input name="title" type="text" class="form-control" " value="{{old('title')}}" >
</div>
<div class="mb-3">
  <label  class="form-label">Category</label>
  <select name="category" class="form-control">
    @foreach ($categories as $category)
    <option value="{{$category->id}}"> {{$category->category}}</option>
    @endforeach
  </select>
</div>

<label  class="form-label">Price(DZD)</label>
  <input name="price" type="number" class="form-control" " value="{{old('price')}}"  >

<div class="mb-3">
  <label class="form-label">Description</label>
  <textarea name="description" class="form-control"   rows="3">{{old('description')}}</textarea>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<button class="btn btn-add mt-3 me-md-2 ">Submit</button>
</div>
</div>
</form>
@endsection