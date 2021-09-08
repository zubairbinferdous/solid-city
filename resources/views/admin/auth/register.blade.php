@extends('layouts.admin')

@section('admin_content')

<!-- Start wrapper our desing register-->
 <div id="wrapper">

    <div class="card card-authentication1 mx-auto my-4">
        <div class="card-body">
         <div class="card-content p-2">
            <div class="text-center">
                <a href="{{ URL::to('/') }}"> <img src="{{ asset('public/fontend/images/logo-icon.png') }}" style="width: 150px;" alt="logo icon"></a>
            </div>
          <div class="card-title text-uppercase text-center py-3">Admin_Registration</div> 

            <form method="POST" action="{{ route('register') }}">
                   @csrf

              <div class="form-group">
              <label for="exampleInputName" class="sr-only">Name</label>
               <div class="position-relative has-icon-right">
                  <input type="text" id="exampleInputName" placeholder="Enter Your Name" class="form-control input-shadow @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>

                    @error('name')
                      <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                      </span>
                    @enderror

               </div>
              </div>


              <div class="form-group">
              <label for="exampleInputEmailId" class="sr-only">Email ID</label>
               <div class="position-relative has-icon-right">
                  <input type="text" id="exampleInputEmailId" class="form-control input-shadow @error('email') is-invalid @enderror" placeholder="Enter Your Email ID" name="email" value="{{ old('email') }}" required autocomplete="email">
                  <div class="form-control-position">
                      <i class="icon-envelope-open"></i>
                  </div>
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                     @enderror
               </div>
              </div>


              <div class="form-group">
               <label for="exampleInputPassword" class="sr-only">Choose Password</label>
               <div class="position-relative has-icon-right">

                  <input type="password" id="exampleInputPassword" class="form-control input-shadow @error('password') is-invalid @enderror" placeholder="Choose Password" name="password" required autocomplete="new-password">

                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>

                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
               </div>
              </div>



              <div class="form-group">
               <label for="exampleInputPassword" class="sr-only">Confirm Password</label>
               <div class="position-relative has-icon-right">
                  <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
              </div>




              
             <div class="form-group">
                 <div class="icheck-material-primary">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">I Agree With Terms & Conditions</label>
                 </div>
              </div>


              
                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign Up</button>
                        
             </form>
           </div>
          </div>
          <div class="card-footer text-center py-3">
            <p class="text-dark mb-0">Already have an account? <a href="{{ route('login') }}"> Sign In here</a></p>
          </div>
         </div>
    
    
    
    
    </div><!--wrapper-->
    
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
    
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

@endsection
