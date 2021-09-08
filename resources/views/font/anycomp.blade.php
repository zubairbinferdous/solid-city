@extends('layouts.app')

@section('content')

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user"></i>
                   Any kind of Issue
                </h4>


                <div class="form-group row">
                  <label for="input-9" class="col-sm-2 col-form-label">Complain us</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="4" id="input-9" name="aboutuser" required></textarea>
                  </div>
                </div>


                <div class="form-group py-2">
                  <div class="icheck-material-primary">
                 <input type="checkbox" id="user-checkbox1" checked=""/>
                 <label for="user-checkbox1">I Agree Terms & Conditions</label>
                 </div>
                </div>
                <div class="form-group">
                 <button type="submit" class="btn btn-primary px-5"></i> Complain Now </button>
               </div>



              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
  </div>
</div>

<!--start overlay-->
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
  </div>
    <!-- End container-fluid-->

@endsection


