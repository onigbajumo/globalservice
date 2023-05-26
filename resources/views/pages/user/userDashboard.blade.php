@extends('layouts.user')

@section('content')

      <!-- Hero -->
      <div class="content">
          <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">
                Dashboard
              </h1>
              <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                Welcome <span class="text-capitalize text-primary fw-bold ">{{ Auth::user()->name }}</span>, everything looks great.
              </h2>
            </div>
            
          </div>
        </div>
        <!-- END Hero -->

              <!-- Overview -->
            <div class="row row-deck m-4">
            <div class="col-sm-6 col-xxl-3">
              <!-- Visa Application -->
              <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">Visa Application {{ Auth::user()->id }}</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Visa Application</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                    <i class="far fa-address-card fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">

                @if (auth()->user()->visa)
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('/visa/' . Auth::id()) }}">  
                    <span>View data</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                  @else
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('/visa/create') }}">
                    <span>Apply Now</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                  @endif
                </div>
              </div>
              <!-- END Visa Application -->
            </div>
            <div class="col-sm-6 col-xxl-3">
              <!-- Passport Application-->
              <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">Passport Application</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Passport Application</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                    <i class="far fa-id-card fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                @if (auth()->user()->passport)

                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('/passport/' . Auth::id()) }}">
                    <span>View data</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                  @else
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href= "{{ url('/passport/create')}}">
                    <span>Apply Now</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                  @endif
                </div>
              </div>
              <!-- END Passport Application -->
            </div>

            <div class="col-sm-6 col-xxl-3">
              <!-- NIN Application -->
              <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">NIN Application</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">NIN Application</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                    <i class="fab fa-wpforms fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                @if (auth()->user()->nin)
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('/nin' , '{id}') }}">
                    <span>View data</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                  @else
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('/nin/create') }}">
                    <span>Apply Now</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                  @endif
                </div>
              </div>
              <!-- END NIN Application -->
            </div>
            <div class="col-sm-6 col-xxl-3">
              <!-- General Information -->
              <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                  <dl class="mb-0">
                    <dt class="fs-3 fw-bold">General Information</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">General Information</dd>
                  </dl>
                  <div class="item item-rounded-lg bg-body-light">
                    <i class="fa fa-user fs-3 text-primary"></i>
                  </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                  @if (auth()->user()->general)

                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="{{ url('/general/' . Auth::id()) . '/edit' }}">
                    <span>Edit Your Information</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                  @else
                  <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href= "{{ url('/general/create')}}">
                    <span>Apply Now</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                  </a>
                  @endif
                 
                </div>
              </div>
              <!-- END General Information-->
            </div>


          </div>
          <!-- END Overview -->

           <!-- Page Content -->
        <div class="content">
          <!-- Blocks API, functionality initialized in Template._uiApiBlocks() -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">My General Information</h3>
            </div>

            @if (auth()->user()->general)
            <div class="block-content">
              <p class="fs-sm text-muted mb-0">
                
              </p>
              <p>
                <!-- <code>One.block('mode', '#block-id');</code> -->
              </p>
              <div class="row items-push">
                <div class="col-md-12 ">
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
                            <h4>Email</h4>
                          </td>
                          <td>
                            <code></code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Application Type</h4>
                          </td>
                          <td>
                            <code>Standard</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Passport Number </h4>
                          </td>
                          <td>
                            <code>Multiple Entry (1) Year</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Visa Class</h4>
                          </td>
                          <td>
                            <code>Passport Booklet Type</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h4>Title  </h4>
                          </td>
                          <td>
                            <code>Miss</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Surname  </h4>
                          </td>
                          <td>
                            <code>state_normal</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>First Name  </h4>
                          </td>
                          <td>
                            <code>fullscreen_toggle</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Middle Name </h4>
                          </td>
                          <td>
                            <code>fullscreen_on</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Date of Birth </h4>
                          </td>
                          <td>
                            <code>fullscreen_off</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <h4>Place of Birth </h4>
                          </td>
                          <td>
                            <code>pinned_toggle</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Marital Status </h4>
                          </td>
                          <td>
                            <code>pinned_on</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Gender </h4>
                          </td>
                          <td>
                            <code>pinned_off</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Phone Number </h4>
                          </td>
                          <td>
                            <code>close</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>occupation</h4>
                          </td>
                          <td>
                            <code>open</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>Mother Maiden Name</h4>
                          </td>
                          <td>
                            <code>open</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <h4>NIN Number </h4>
                          </td>
                          <td>
                            <code>open</code>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                    @else
              <p class="m-4"> Your Information as not been recorded. Please apply with the link on General Information</p>
          @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Blocks API -->




        </div>
        <!-- END Page Content -->

@endsection