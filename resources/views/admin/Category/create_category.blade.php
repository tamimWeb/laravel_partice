@extends('admin.master')
@section('contain')
<div class="container p-3">
    <div class="card">
        <div class="card-header">
           <h1>Category</h1>
        </div>

        {{-- Successfully Massage --}}

        @if(Session::has('success'))
        <div class="alert alert-success col-3 mt-2 p-2 text-success" role="alert" >
            {{Session::get('success')}}
        </div>
        @endif

        {{-- Form Start --}}
        <form action="{{route('store.category')}}" method="post" enctype="multipart/form-data" >
            @csrf

            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlInput1">Category Name</label>
                <input type="text" name="category_name" class="form-control mt-3 @error('category_name', 'post') is-invalid @enderror" value="{{ old('category_name') }}" >


            </div>
            @error('category_name')
            <div class="col-3 p-1 mt-2 text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlTextarea1">Category Description</label>
                <textarea class="form-control mt-3 mb-3 @error('category_description', 'post') is-invalid @enderror" value="{{ old('category_description') }}" name="category_description" rows="3"></textarea>
            </div>
            @error('category_description')
            <div class="col-3  mt-2 text-danger">{{ $message }}</div>
            @enderror

            {{-- submit and back Button --}}

            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{url('list/category')}}" class="btn btn-danger">Back</a>
        </form>

    </div>
</div>
@endsection

