@extends('admin.master')
@section('contain')


<div class="card mb-4">
    <div class="card-header">
        <h2>Sub-Category List</h2>

        <div style="float: right" class="p-20" >
            <a class="btn btn-info " href="{{route('subcategory.create')}}"> Add SubCategory</a>
        </div>

        @if(Session::has('success'))
        <div class="col-3 mt-2 p-2 text-danger" role="alert" >
            {{Session::get('success')}}
        </div>
        @endif

    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sub_cat as $key => $data)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$data->category->category_name}}</td>
                        <td>{{$data->subcategory_name}}</td>
                        <td>{{$data->subcategory_description}}</td>
                      <td>
                            <a href="{{route('delete.subcategory',$data->id)}}" class="btn btn-danger"> Delete </a>
                            <a href="{{route('subcategory.edit',$data->id)}}" class="btn btn-info">Edit</a>
                            {{-- <i class="fa-solid fa-trash">Delete</i> --}}



                       </td>
                    </tr>
					@endforeach
					</tbody>
            </tbody>
        </table>

    </div>
</div>





@endsection

