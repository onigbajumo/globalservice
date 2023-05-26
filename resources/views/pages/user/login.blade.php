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
                      <p>Please login.</p>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                   
                    <form class="js-validation-signin" action="#" method="POST">
                      <div class="py-3">
                        <div class="mb-4">
                          <input type="text" class="form-control form-control-lg form-control-alt" id="login-username" name="login-username" placeholder="Username">
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="login-password" placeholder="Password">
                        </div>
                        <div class="mb-4">
                          <div class="d-md-flex align-items-md-center justify-content-md-between">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="login-remember" name="login-remember">
                              <label class="form-check-label" for="login-remember">Remember Me</label>
                            </div>
                            <div class="py-2">
                              <a class="fs-sm fw-medium" href="op_auth_reminder2.html">Forgot Password?</a>
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