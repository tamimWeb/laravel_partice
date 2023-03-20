@extends('admin.master')
@section('contain')
<div class="card">
    <h1 class="card-header">Category Page </h1>
    <div class="card-body">
        <h5 class="card-title">Category Name : {{$product->category_name}}</h5>
        <p class="card-text">Category Description : {{$product->category_description}}</p>
    </div>
     <div class="ms-3 mb-3">
        <a href="{{url('list/category')}}" class="btn btn-danger">Back</a>

     </div>

</div>
@endsection

