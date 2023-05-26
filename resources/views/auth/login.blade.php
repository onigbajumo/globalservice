@extends('layouts.frame')

@section('content')



            <!-- Sign In Section -->
            <div class="bg-body-light">
              <div class="content content-full">
                <div class="row g-0 justify-content-center">
                  <div class="col-md-8 col-lg-6 col-xl-4 py-4 px-4 px-lg-5">
                    <!-- Header -->
                    <div class="text-center">
                      <p class="mb-2">
                      <img src="assets/media/global/header_logo.png" width="50%" alt="">
                      </p>

                      <h1 class="h4 mb-1">
                      Welcome!
                      </h1>
                      <div>
                        Don't have an account?
                        <a class="fs-sm fw-medium" href="{{ route('register') }}" >Register</a>
                      </div>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                   
                    <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                        @csrf
                      <div class="py-3">
                        <div class="mb-4">
                          <input type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                       

                        <div class="mb-4">
                          <div class="d-md-flex align-items-md-center justify-content-md-between">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <div class="py-2">
                            @if (Route::has('password.request'))
                              <a class="fs-sm fw-medium" href="{{ route('password.request') }">Forgot Password?</a>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-lg-6 col-xxl-5">
                          <button type="submit" class="btn w-100 btn-alt-primary">
                            Sign In
                          </button>
                          
                                  
                                
                        </div>
                      </div>
                    </form>
                    <!-- END Sign In Form -->
                  </div>
                </div>
              </div>
            </div>
            <!-- END Sign In Section -->
@endsection



