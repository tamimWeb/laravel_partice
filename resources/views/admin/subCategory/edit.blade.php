@extends('admin.master')
@section('contain')
<div class="container p-3">
    <div class="card">
        <div class="card-header">
           <h1>Update SubCategory</h1>
        </div>

        {{-- Successfully Massage --}}

        @if(Session::has('success'))
        <div class="col-3 mt-2 p-2 text-success" role="alert" >
            {{Session::get('success')}}
        </div>
        @endif

        {{-- Form Start --}}
        <form action="{{route('subcategory.update',$sub_category->id)}}" method="post" enctype="multipart/form-data" >
            @csrf

            <div class="mb-3 col-3">
                <label for="sub-category_description" class="form-label">Select Category</label>
                <select class="form-control" name="category_id">
                    <option selected>---------------select-----------------</option>
                    @foreach($categories as $category)
                        <option @selected($category->id == $sub_category->category_id)
                        value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlInput1">Select SubCategory</label>
                <input type="text" name="subcategory_name" class="form-control mt-3" value="{{$sub_category->subcategory_name}}">
            </div>

            <div class="form-group col-3 mt-2" >
                <label for="exampleFormControlTextarea1" >Description</label>
                <textarea class="form-control mt-3 mb-3"   name="subcategory_description" rows="3" value="{{$sub_category->subcategory_description}}" ></textarea>
            </div>

                <button type="submit" class="btn btn-info">Update</button>

        </form>

    </div>
</div>
@endsection

