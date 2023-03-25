@extends('admin.master')
@section('contain')
<div class="container p-3">
    <div class="card">
        <div class="card-header">
           <h1>Add SubCategory</h1>
        </div>

        {{-- Successfully Massage --}}

        @if(Session::has('success'))
        <div class="col-3 mt-2 p-2 text-success" role="alert" >
            {{Session::get('success')}}
        </div>
        @endif

        {{-- Form Start --}}
        <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data" >
            @csrf

            <div class="mb-3 col-3">
                <label for="sub-category_description" class="form-label">Select Category</label>
                <select class="form-control" name="category_id">
                    <option selected>---------------select-----------------</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
            @error('category_name')
            <div class="col-3 p-1 mt-2 text-danger">{{ $message }}</div>
            @enderror


            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlInput1">Select SubCategory</label>
                <input type="text" name="subcategory_name" class="form-control mt-3" >
            </div>
                @error('subcategory_name')
                <div class="col-3 p-1 mt-2 text-danger">{{ $message }}</div>
                @enderror


            {{-- <div class="form-group col-3 mt-2">
                <label for="exampleFormControlInput1">Description</label>
                <input type="text" name="subcategory_description" class="form-control mt-3" >
            </div>
                @error('subcategory_description')
                <div class="col-3 p-1 mt-2 text-danger">{{ $message }}</div>
                @enderror --}}



            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control mt-3 mb-3"   name="subcategory_description" rows="3"></textarea>
            </div>
                @error('subcategory_description')
                <div class="col-3  mt-2 text-danger">{{ $message }}</div>
                @enderror



                <button type="submit" class="btn btn-info">Submit</button>
                <a class="btn btn-danger" href="{{route('subcategory.index')}}">Back</a>


        </form>

    </div>
</div>
@endsection

