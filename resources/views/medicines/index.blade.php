@extends('layouts.app')

@section('title') index @endsection

@section('content')
<div class="container mt-4">
  
<div id="container" >
    <div class="mt-3">
        <div class="text-center">
            <a href="{{route('medicines.create')}}"  class="btn btn-add">Add Medicine</a>
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Medicine</th>
                <th scope="col">Category</th>
                <th scope="col">Price(DZD)</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicines as $medicine)
            <tr>
                <th scope="row">{{$medicine->id}}</th>
                <td>{{$medicine->title}}</td>
                <td>{{$medicine->category}}</td>
                <td>{{$medicine->price}}</td>
                <td>
                <a href="{{route('medicines.show',$medicine->id)}}" class="btn add-info">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"  stroke-width="2" stroke="currentColor"  style=" width: 1.4em; height: 1.4em;">
  <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
</svg>

                </a>    
                <a href="{{route('medicines.edit',$medicine['id'])}}" class="btn btn-action">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"  stroke-width="2" stroke="currentColor"  style=" width: 1.4em; height: 1.4em;">
  <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
</svg>

                </a>
                <form style="display:inline" method="POST" action="{{route('medicines.destroy',$medicine['id'])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" btn btn-action" >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none"  stroke-width="2" stroke="currentColor"  style=" width: 1.6em; height: 1.6em;">
            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
        </svg>
       
    </button>
                </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection