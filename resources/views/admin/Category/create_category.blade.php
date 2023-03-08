@extends('admin.master')
@section('contain')
<div class="container p-3">
    <div class="card">
        <div class="card-header">
           <h1>Category</h1>
        </div>
        <form action="{{route('store.category')}}" method="post" enctype="multipart/form-data" >
            @csrf

            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlInput1">Category Name</label>
                <input type="text" name="category_name" class="form-control mt-3" >
            </div>

            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlTextarea1">Category Description</label>
                <textarea class="form-control mt-3 mb-3" name="category_description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>

    </div>
</div>
@endsection

