@extends('layouts.user')

@section('content')


        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                  Visa Appllication
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Check to confirm all the data you provided for your Visa Appllication
                </h2>
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="{{ url()->previous() }}">Back</a>
                  </li>
                  
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          @if ($visa)
          <!-- Blocks API, functionality initialized in Template._uiApiBlocks() -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Your visa pplication data</h3>
            </div>
            <div class="block-content">
              <p class="fs-sm text-muted mb-0">
                
              </p>
              <p>
                <!-- <code>One.block('mode', '#block-id');</code> -->
              </p>
              <div class="row items-push">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-vcenter mb-0">
                      <thead>
                        <tr>
                          <th style="width: 30%;">Application</th>
                          <th style="min-width: 60%;">Your Data</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <h4>Nationalty</h4>
                          </td>
                          <td>
                            <code>{{$visa->nationality}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Passport Type</h4>
                          </td>
                          <td>
                            <code>{{$visa->passport_type}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Visa Type </h4>
                          </td>
                          <td>
                            <code>{{$visa->visa_type}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Visa Class</h4>
                          </td>
                          <td>
                            <code>{{$visa->visa_class}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h4>Title  </h4>
                          </td>
                          <td>
                            <code>{{$visa->title}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Surname  </h4>
                          </td>
                          <td>
                            <code>{{$visa->surname}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>First Name  </h4>
                          </td>
                          <td>
                            <code>{{$visa->first_name}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Middle Name </h4>
                          </td>
                          <td>
                            <code>{{$visa->middle_name}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Date of Birth </h4>
                          </td>
                          <td>
                            <code>{{$visa->dob}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h4>Place of Birth </h4>
                          </td>
                          <td>
                            <code>{{$visa->pofB}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h4>Gender </h4>
                          </td>
                          <td>
                            <code>{{$visa->gender}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Marital Status </h4>
                          </td>
                          <td>
                            <code>{{$visa->marital_status}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Email Address </h4>
                          </td>
                          <td>
                            <code>{{$visa->emailAddress}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Phone Number </h4>
                          </td>
                          <td>
                            <code>{{$visa->passport_type}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Passport Number </h4>
                          </td>
                          <td>
                            <code>{{$visa->passportNumber}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Passport Expiry Date</h4>
                          </td>
                          <td>
                            <code>{{$visa->passportExpiryDate}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Previous Nationality </h4>
                          </td>
                          <td>
                            <code>{{$visa->previousNationality}}</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Occupation </h4>
                          </td>
                          <td>
                            <code>{{$visa->occupation}}</code>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @else
    <p>User not found.</p>
@endif
          <!-- END Blocks API -->



        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->



@endsection