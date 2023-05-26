@extends('layouts.user')

@section('content')
<!-- Hero -->
<div class="content">
          <div class="d-flex flex-column flex-md-row justify-content-md-between text-center ">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">
                NIN Application Form
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
                  <form action="{{url('nin')}} " method="POST">
                  @csrf
                    <div class="mb-4">
                      <label class="form-label" for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="example-ltf-email" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="bvn">BVN </label>
                      <input type="text" class="js-masked-phone form-control" id="bvn" name="bvn" placeholder="">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="appointmentDate">Select preferred Appointment date<span class="text-danger">*</span></label>
                        <input type="text" class="js-datepicker form-control" id="appointmentDate" name="appointmentDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                    </div>
                    <div class="mb-4">
                      <label class="form-label">Appointment Location <span class="text-danger">*</span></label>
                      <div class="space-x-2">
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" id="appointmentLocation" name="appointmentLocation" value="Wimbledon (Highland House, 165 The Broadway, London SW19 1NE)" checked>
                          <label class="form-check-label" for="appointmentLocation">Wimbledon (Highland House, 165 The Broadway, London SW19 1NE)</label>
                        </div>
                        <div class="form-check form-check">
                          <input class="form-check-input" type="radio" id="appointmentLocation" name="appointmentLocation" value="Liverpool (Unit G6 67-83, Queens Dock Commercial Centre, Norfolk St, Liverpool L1 0BG)">
                          <label class="form-check-label" for="appointmentLocation">Liverpool (Unit G6 67-83, Queens Dock Commercial Centre, Norfolk St, Liverpool L1 0BG)</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-4">

                        <label class="form-label" for="appointmentTime">Select Preferred Appointment time</label>
                        <input type="text" class="js-flatpickr form-control" id="appointmentTime" name="appointmentTime" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-time_24hr="true">
                     
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="ukMobileNumber">UK Mobile Number </label>
                      <input type="text" class="js-masked-phone form-control" id="ukMobileNumber" name="ukMobileNumber" placeholder="">
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
                      <label class="form-label" for="lastName">Last Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="firstName">First Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="middleName">Middle Name</label>
                      <input type="text" class="form-control" id="middleName" name="middleName" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="otherName">Other Names</label>
                      <input type="text" class="form-control" id="otherName" name="otherName" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="maidenName">Maiden Name (if applicable)</label>
                      <input type="text" class="form-control" id="maidenName" name="maidenName" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="permanentAddress">Permanent Address <span class="text-danger">*</span></label>
                      <textarea class="form-control" id="permanentAddress" name="permanentAddress" rows="2" placeholder=""></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="dob">Date of Birth <span class="text-danger">*</span></label>
                        <input type="text" class="js-datepicker form-control" id="dob" name="dob" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="countryOfBirth">Country of birth<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="countryOfBirth" name="countryOfBirth" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="stateOfBirth">State of birth<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="stateOfBirth" name="stateOfBirth" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="stateOfOrigin">State of Origin<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="stateOfOrigin" name="stateOfOrigin" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="lgaOfOrigin">LGA of Origin<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="lgaOfOrigin" name="lgaOfOrigin" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="townOfOrigin">Town of Origin<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="townOfOrigin" name="townOfOrigin" placeholder="">
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
                      <label class="form-label" for="height">Height (in cm)<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="height" name="height" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="nationality">Nationalty <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="nationality" name="nationality" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="residenceStatus">Residence status <span class="text-danger">*</span></label>
                      <select class="form-select" id="residenceStatus" name="residenceStatus">
                        <option selected>Open to select option</option>
                        <option value="Birth">Birth</option>
                        <option value="Naturalization">Naturalization</option>
                        <option value="Registration">Registration</option>
                        
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="maritalStatus">Marital Status <span class="text-danger">*</span></label>
                      <select class="form-select" id="maritalStatus" name="maritalStatus">
                        <option selected>Open to select option</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Other">Other</option>
                        
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="religion">Religion <span class="text-danger">*</span></label>
                      <select class="form-select" id="religion" name="religion">
                        <option selected>Open to select option</option>
                        <option value="Christianity">Christianity</option>
                        <option value="Islam">Islam</option>
                        <option value="Traditional">Traditional</option>
                        <option value="Other">Other</option>
                        
                      </select>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="telephoneNumber">Telephone Number <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="guardianSurname">Guardian's surname (for under 16s) </label>
                      <input type="text" class="form-control" id="guardianSurname" name="guardianSurname" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="guardianFirstName">Guardian's  first name (for under 16s) </label>
                      <input type="text" class="form-control" id="guardianFirstName" name="guardianFirstName" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="guardianMiddleName">Guardian's  middle name (for under 16s) </label>
                      <input type="text" class="form-control" id="guardianMiddleName" name="guardianMiddleName" placeholder="">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="guardianNin">Guardian's  NIN (for under 16s) </label>
                      <input type="text" class="form-control" id="guardianNin" name="guardianNin" placeholder="">
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