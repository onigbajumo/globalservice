@extends('layouts.user')

@section('content')
<!-- Hero -->
<div class="content">
          <div class="d-flex flex-column flex-md-row justify-content-md-between text-center ">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">
                General Application Form
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
                  <form class="space-y-4" action="{{url('general/store')}}" method="POST">
                  @csrf
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="applicationType">Type of Application <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <select class="form-select" id="applicationType" name="applicationType">
                            <option selected>Open to select option</option>
                            <option value="First issue/Fresh passport">First issue/Fresh passport</option>
                            <option value="Renewal">Renewal</option>
                            <option value="Lost or stolen">Lost or stolen</option>
                            <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="passportNumber">Passport Number <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="passportNumber" name="passportNumber" placeholder="">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="passportBookletType">Passport Booklet type <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <select class="form-select" id="passportBookletType" name="passportBookletType">
                            <option selected>Open to select option</option>
                            <option value="32 Pges (5 years validity)">32 Pges (5 years validity)</option>
                            <option value="64 Pges (10 years validity)">64 Pges (10 years validity)</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="title">Title<span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <select class="form-select" id="title" name="title">
                            <option selected>Open to select option</option>
                            <option value="Miss">Miss</option>
                            <option value="Mr">Mr</option>
                            <option value="Mr">Mrs</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="surname">Surname <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="firstName">First Name<span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="middleName">Middle name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="dob">Date of Birth <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                      <input type="text" class="js-datepicker form-control" id="dob" name="dob" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="placeOfBirth">Place of Birth <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" placeholder="">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label">Gender <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="gender" name="gender" value="Female" checked>
                          <label class="form-check-label" for="gender">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="gender" name="gender" value="Male">
                          <label class="form-check-label" for="gender">Male</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label">Marital Status <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="maritalStatus" name="maritalStatus" value="Single" checked>
                          <label class="form-check-label" for="maritalStatus">Single</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="maritalStatus" name="maritalStatus" value="Married">
                          <label class="form-check-label" for="maritalStatus">Married</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="maritalStatus" name="maritalStatus" value="Widowed">
                          <label class="form-check-label" for="maritalStatus">Widowed</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="maritalStatus" name="maritalStatus" value="Divorced">
                          <label class="form-check-label" for="maritalStatus">Divorced</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="occupation">Occupation <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="occupation" name="occupation" placeholder="">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="motherMaidenName">Mother Maiden Name <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="motherMaidenName" name="motherMaidenName" placeholder="">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="ninNumber">Nin Number <span class="text-danger">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="ninNumber" name="ninNumber" placeholder="">
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