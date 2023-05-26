@extends('layouts.user')

@section('content')

<!-- Hero -->
<div class="content">
          <div class="d-flex flex-column flex-md-row justify-content-md-between text-center ">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">
                Personal information Application Form
              </h1>
              
            </div>
           
          </div>
        </div>
        <!-- END Hero -->
    <!-- Labels on top -->
        <div class="block block-rounded m-4">
            <div class="block-header block-header-default">
              <h3 class="block-title">Please complete all details!</h3>
            </div>

            <div class="block-content block-content-full">
              <div class="row">
                
                <div class="col-lg-10 space-y-5">
                  <!-- Form Labels on top - Default Style -->
                  <form class="space-y-4" action="{{url('passport/store')}}" method="POST">
                    @csrf
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="">
                        @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                            @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="title">Title<span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <select class="form-select @error('title') is-invalid @enderror" id="title" name="title">
                            <option selected>Open to select option</option>
                            <option value="Miss">Miss</option>
                            <option value="Mr">Mr</option>
                            <option value="Mr">Mrs</option>
                        </select>
                        @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="lastName">Surname <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="">
                        @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="firstName">First Name<span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="">
                        @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="middleName">Middle name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control @error('middleName') is-invalid @enderror" id="middleName" name="middleName" placeholder="">
                        @error('middleName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="contactNumber">Contact Number <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control @error('contactNumber') is-invalid @enderror" id="contactNumber" name="contactNumber" placeholder="">
                        @error('contactNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label">Marital Status <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input @error('maritalStatus') is-invalid @enderror" type="radio" id="maritalStatus" name="maritalStatus" value="Single" checked>
                          <label class="form-check-label" for="maritalStatus">Single</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input @error('maritalStatus') is-invalid @enderror" type="radio" id="maritalStatus" name="maritalStatus" value="Married">
                          <label class="form-check-label" for="maritalStatus">Married</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input @error('maritalStatus') is-invalid @enderror" type="radio" id="maritalStatus" name="maritalStatus" value="Widowed">
                          <label class="form-check-label" for="maritalStatus">Widowed</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input @error('maritalStatus') is-invalid @enderror" type="radio" id="maritalStatus" name="maritalStatus" value="Divorced">
                          <label class="form-check-label" for="maritalStatus">Divorced</label>
                        </div>
                        @error('maritalStatus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="hairColor">Color of Hair <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <select class="form-select @error('hairColor') is-invalid @enderror" id="hairColor" name="hairColor">
                            <option selected>Open to select option</option>
                            <option value="Black">Black</option>
                            <option value="Gray">Gray</option>
                            <option value="Brown">Brown</option>
                            <option value="White">White</option>
                        </select>
                        @error('hairColor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="eyeColor">Color of Eyes <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <select class="form-select @error('eyeColor') is-invalid @enderror" id="eyeColor" name="eyeColor">
                            <option selected>Open to select option</option>
                            <option value="Grey">Grey</option>
                            <option value="Blue">Blue</option>
                            <option value="Brown">Brown</option>
                        </select>
                        @error('eyeColor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="identificationMarks">Identification Marks <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control @error('identificationMarks') is-invalid @enderror" id="identificationMarks" name="identificationMarks" placeholder="">
                        @error('identificationMarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="height">Height (in cm)  <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control @error('height') is-invalid @enderror" id="height" name="height" placeholder="">
                        @error('height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-8 ms-auto">
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                      </div>
                    </div>
                  </form>
                  <!-- END Form Labels on top - Default Style -->

                
                </div>
              </div>
            </div>
          </div>
          <!-- END Labels on top -->


@endsection