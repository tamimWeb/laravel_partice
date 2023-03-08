@extends('admin.master')
@section('contain')

<div class="card mb-4">
    <div class="card-header">
        Category List
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
                            <a href="{{route('delete.category',$data->id)}}" class="btn btn-danger"> Delete </a>
                            <a href="" class="btn btn-info" type="submit"> Edit </a>


                        </td>
                    </tr>
					@endforeach
					</tbody>
            </tbody>
        </table>

    </div>
</div>





@endsection

