@extends('layouts.user')

@section('content')

<!-- Hero -->
<div class="content">
          <div class="d-flex flex-column flex-md-row justify-content-md-between text-center ">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">
                VISA Application Form (Nigeria)
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
                <div class="col-lg-4">
                  <p class="fs-sm text-muted">
                  Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, 
                  </p>
                </div>
                <div class="col-lg-8 space-y-5">
                  <!-- Form Labels on top - Default Style -->
                  <form action=" {{url('visa/store')}} " method="POST" >
                    @csrf

                  <div class="mb-4">
                      <label class="form-label" for="nationality">Nationalty <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="nationality" name="nationality" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="passport_type">Passport Type <span class="text-danger">*</span></label>
                      <select class="form-select" id="passport_type" name="passport_type">
                        <option selected>Open to select option</option>
                        <option value="Standard">Standard</option>
                        <option value="Diplomatic">Diplomatic</option>
                        <option value="official">Official</option>
                        <option value="UN">UN</option>
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="visa_type">Visa Type <span class="text-danger">*</span></label>
                      <select class="form-select" id="visa_type" name="visa_type">
                        <option selected>Open to select option</option>
                        <option value="Single Entry (within 6 months)">Single Entry (within 6 months)</option>
                        <option value="Multiple Entry (1) Year">Multiple Entry (1) Year</option>
                        <option value="Temporary Work Permit (TWP)">Temporary Work Permit (TWP)</option>
                        <option value="Subject To Regularisation (STR)">Subject To Regularisation (STR)</option>
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="visa_class">Visa Class<span class="text-danger">*</span></label>
                      <select class="form-select" id="visa_class" name="visa_class">
                        <option selected>Open to select option</option>
                        <option value="Business Visa">Business Visa</option>
                        <option value="Tourism Visa">Tourism Visa</option>
                        <option value="Transit Visa">Transit Visa</option>
                        <option value="Visiting Visa">Visiting Visa</option>
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Title <span class="text-danger">*</span></label>
                      <div class="space-x-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="title" name="title" value="Miss" checked>
                          <label class="form-check-label" for="title">Miss</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="title" name="title" value="Mr">
                          <label class="form-check-label" for="title">Mr</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="title" name="title" value="Mrs" >
                          <label class="form-check-label" for="title">Mrs</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="surname">Surname <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="surname" name="surname" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="first_name">First Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="middle_name">Middle Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="">
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="dob">Date of Birth <span class="text-danger">*</span></label>
                        <input type="text" class="js-datepicker form-control" id="dob" name="dob" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="pofB">Place of Birth <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="pofB" name="pofB" placeholder="">
                    </div>

                    <div class="mb-4">
                      <label class="form-label">Gender <span class="text-danger">*</span></label>
                      <div class="space-x-2">
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
                    <div class="mb-4">
                      <label class="form-label">Marital Status <span class="text-danger">*</span></label>
                      <div class="space-x-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="marital_status" name="marital_status" value="Divorced" checked>
                          <label class="form-check-label" for="marital_status">Divorced</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="marital_status" name="marital_status" value="Married">
                          <label class="form-check-label" for="marital_status">Married</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="marital_status" name="marital_status" value="Single">
                          <label class="form-check-label" for="marital_status">Single</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="emailAddress">Email Address <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="phoneNumber">Phone Number <span class="text-danger">*</span></label>
                      <input type="text" class="js-masked-phone form-control" id="phoneNumber" name="phoneNumber" placeholder="070 999 9999">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="passportNumber">Passport Number<span class="text-danger">*</span></label>
                      <input type="text" class="js-masked-phone form-control" id="passportNumber" name="passportNumber" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="passportExpiryDate">Passport Expiry Date <span class="text-danger">*</span></label>
                        <input type="text" class="js-datepicker form-control" id="passportExpiryDate" name="passportExpiryDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="previousNationality">Previous Nationality </label>
                      <input type="text" class="form-control" id="previousNationality" name="previousNationality" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="occupation">Occupation <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="occupation" name="occupation" placeholder="">
                    </div>

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                  </form>
                  <!-- END Form Labels on top - Default Style -->
                  
                    
                  

                
                </div>
              </div>
            </div>
          </div>
          <!-- END Labels on top -->

@endsection