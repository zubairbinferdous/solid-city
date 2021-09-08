@extends('layouts.app')

@section('content')
      <!--Start Dashboard Content-->
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

      <h6 class="text-uppercase">delivery info </h6>
      
      <hr>

     <div class="row">
      <div class="col-12 col-lg-6 col-xl-6">
        <div class="card gradient-primary rounded-0">
       <div class="card-body p-1">
         <div class="media align-items-center bg-white p-3">
         <div class="media-body">
           <p class="text-dark text-uppercase extra-small-font font-weight-bold">All Order Delivery </p>
           <h3 class="mb-0 text-dark">+0%</h3>
         </div>
         <div class="circle-1 bg-primary-light1">
           <div class="circle-2 bg-primary-light2">
            <div class="circle-3 gradient-primary-light">
              <i class="zmdi zmdi-shopping-cart-plus text-white"></i>
            </div>
           </div>
         </div>
         </div>
       </div>
       </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-6">
        <div class="card gradient-info rounded-0">
       <div class="card-body p-1">
         <div class="media align-items-center bg-white p-3">
         <div class="media-body">
           <p class="text-dark text-uppercase extra-small-font font-weight-bold">Complete Order Delivery </p>
           <h3 class="mb-0 text-dark">+0%</h3>
         </div>
         <div class="circle-1 bg-info-light1">
           <div class="circle-2 bg-info-light2">
            <div class="circle-3 gradient-info-light">
              <i class="zmdi zmdi-layers text-white"></i>
            </div>
           </div>
         </div>
         </div>
       </div>
       </div>
      </div>
  </div>




      <div class="overlay toggle-menu"></div>
    <!--end overlay-->
    </div>
    <!-- End container-fluid-->

    </div><!--End content-wrapper-->


  </div><!--End wrapper-->

  
@endsection

