@extends('layouts.app')

@section('content')

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Order List</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>YOUR NAME</th>
                        <th>YOUR CONTACT NUMBER</th>
                        <th>WEIGHT ( KG )</th>
                        <th>ADDRESS</th>
                        <th>COLLECTOR NAME</th>
                        <th>COLLECTOR CONTACT NUMBER</th>
                        <th>COLLECTOR ADDRESS</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                 @foreach($data as $row)

                     @if(Auth::id() == $row->create_by)

                    <tr>
                        <td>{{ $row->your_name }}</td>
                        <td>{{ $row->your_number }}</td>
                        <td>{{ $row->weight }}</td>
                        <td>{{ $row->your_addres }}</td>
                        <td>{{ $row->coll_name }}</td>
                        <td>{{ $row->coll_number }}</td>
                        <td>{{ $row->coll_addres }}</td>
                        <td>
                          <a href="{{ URL::to('edit_data/'. $row->id) }}" class="btn btn-sm btn-dark">edit</a>
                          <a href="{{ URL::to('view_data/'. $row->id) }}" class="btn btn-sm btn-success">view</a>
                          <a href="{{ URL::to('delete_data/'. $row->id ) }}" class="btn btn-sm btn-danger" id="delete">delete</a>

                        </td>
                    </tr>
                    @endif

                @endforeach

                </tbody>

            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
    </div>
  </div>






      <!--End Dashboard Content-->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->


	<!--Start footer-->
@endsection



