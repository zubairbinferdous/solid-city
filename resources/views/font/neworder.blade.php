@extends('layouts.app')

@section('content')
      <!--Start Dashboard Content-->
 <div class="clearfix"></div>

 <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">


              <form id="personal-info" action="{{ url('data_insert') }}" method="post">
                @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Delivery Info
                </h4>

                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="your_name" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Your Contact Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-4" name="your_number" required>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">weight ( kg )</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="input-1" name="weight" required>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="input-9" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="4" id="input-9" name="your_addres" required></textarea>
                  </div>
                </div>



                <h4 class="form-header">
                <i class="fa fa-file-text-o"></i>
                  COLLECTION INFO
                </h4>


                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Collector Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="coll_name" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Collector Contact Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-4" name="coll_number" required>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="input-9" class="col-sm-2 col-form-label">Collector Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="4" id="input-9" name="coll_addres" required></textarea>
                  </div>
                </div>



                <div class="form-group">
                 <button type="submit" class="btn btn-primary px-5"></i> Order Now </button>
               </div>

              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div>
    </div>
    </div>
    </div>
 </div>







      <!--End Dashboard Content-->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
@endsection


