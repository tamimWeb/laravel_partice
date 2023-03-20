@extends('admin.master')
@section('contain')


<div class="card mb-4">
    <div class="card-header">
        <h2>Category List</h2>
        @if(Session::has('success'))
        <div class="col-3 mt-2 p-2 text-danger" role="alert" >
            {{Session::get('success')}}
        </div>
        @endif

        <div style="margin-right: 10%; float: right; margin-bottom:5px;">
            <a class="btn btn-primary" href="{{url('create/category')}}">Add Category</a>
        </div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($c_list as $data)
					<tr>

						<td>{{$loop->iteration}}</td>
						<td>{{$data->category_name}}</td>
                        <td>{{$data->category_description}}</td>

                        <td>
                            <a href="{{route('delete.category',$data->id)}}" class="btn btn-danger"> <i class="fa-solid fa-trash">Delete</i> </a>
                            <a href="{{route('edit.category',$data->id)}}" class="btn btn-info" type="submit"> Edit </a>
                            <a href="{{route('show.category',$data->id)}}" class="btn btn-success" >View</a>


                        </td>
                    </tr>
					@endforeach
					</tbody>
            </tbody>
        </table>

    </div>
</div>





@endsection

