
@extends('admin.master')
@section('contain')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Add Brand</h1></div>

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group col-3 mt-3">
                    <label for="exampleFormControlInput1">Brand Name</label>
                    <input class="form-control mt-2" type="text">
                </div>

                <div class="form-group col-3 mt-2">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control mt-2 mb-3"   name="subcategory_description" rows="3"></textarea>
                </div>


                <button type="submit" class="btn btn-info">Submit</button>
            </form>


    </div>
</div>

@endsection

