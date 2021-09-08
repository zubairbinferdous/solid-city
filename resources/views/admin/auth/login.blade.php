@extends('layouts.admin')

@section('admin_content')

<!-- Start wrapper our login desing-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
    <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
         <div class="card-content p-2">
            <div class="text-center">
                <a href="{{ URL::to('/') }}"> <img src="{{ asset('public/fontend/images/logo-icon.png') }}" style="width: 150px;" alt="logo icon"></a>
            </div>
          <div class="card-title text-uppercase text-center py-3">Admin Login</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

              <div class="form-group">
              <label for="exampleInputUsername" class="sr-only">Username</label>
               <div class="position-relative has-icon-right">

                  <input type="email" id="exampleInputUsername" class="form-control input-shadow  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Username"  required autocomplete="email" autofocus>

                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>

                    @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                    @enderror

               </div>
              </div>



              <div class="form-group">
              <label for="exampleInputPassword" class="sr-only">Password</label>
               <div class="position-relative has-icon-right">

                  <input type="password" id="exampleInputPassword" class="form-control input-shadow @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

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


            <div class="form-row">
             <div class="form-group col-6">
               <div class="icheck-material-primary">
                <input type="checkbox" id="user-checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                <label for="user-checkbox">Remember me</label>
              </div>
             </div>




             <div class="form-group col-6 text-right">
              <a href="{{ route('password.request') }}">Reset Password</a>
             </div>
            </div>



             <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    
             </form>

           </div>
          </div>
          <div class="card-footer text-center py-3">
            <p class="text-dark mb-0">Do not have an account? <a href="{{ route('register') }}"> Sign Up here</a></p>
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
