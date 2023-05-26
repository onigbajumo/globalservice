@extends('layouts.admin')

@section('content')





<div class="content">
    <!-- Quick Overview -->
    <h1>Welcome to Admin Dashboard</h1>
    <div class="row">
      <div class="col-6 col-lg-3">
        <a class="block block-rounded block-link-shadow text-center" href="">
          <div class="block-content block-content-full">
            <div class="fs-2 fw-semibold text-primary">{{$totalUsers}}</div>
          </div>
          <div class="block-content py-2 bg-body-light">
            <p class="fw-medium fs-sm text-muted mb-0">
              All Users
            </p>
          </div>
        </a>
      </div>
      <div class="col-6 col-lg-3">
        <a class="block block-rounded block-link-shadow text-center" href="">
          <div class="block-content block-content-full">
            <div class="fs-2 fw-semibold text-dark">{{$totalVisa}}</div>
          </div>
          <div class="block-content py-2 bg-body-light">
            <p class="fw-medium fs-sm text-muted mb-0">
              Visa Applicant
            </p>
          </div>
        </a>
      </div>
      <div class="col-6 col-lg-3">
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content block-content-full">
            <div class="fs-2 fw-semibold text-dark">{{$totalPassport}}</div>
          </div>
          <div class="block-content py-2 bg-body-light">
            <p class="fw-medium fs-sm text-muted mb-0">
              Passport Applicant
            </p>
          </div>
        </a>
      </div>
      <div class="col-6 col-lg-3">
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content block-content-full">
            <div class="fs-2 fw-semibold text-dark">{{$totalNin}}</div>
          </div>
          <div class="block-content py-2 bg-body-light">
            <p class="fw-medium fs-sm text-muted mb-0">
              NIN Applicant
            </p>
          </div>
        </a>
      </div>
    </div>
    <!-- END Quick Overview -->



          <!-- Dynamic Table Full -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Registered Users</h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                  <tr>
                    <th style="width: 20%;">Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                    <th >Date Registered</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

                  </tr>
                </thead>
                <tbody>

                @foreach ($users as $userdata)
                  <tr>
                    
                    <td class="fw-semibold fs-sm">
                      <h5 href="text-primary text-capitalize">{{$userdata -> name}}</h5>
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                    {{$userdata ->email}}
                    </td>
                    <td>
                      <span class="text-muted fs-sm">{{$userdata -> created_at}}</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                    <ul class="nav-main nav-main-horizontal nav-main-hover ">
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          
                          <span class="nav-main-link-name">View</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                             <span class="nav-main-link-name">Visa</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <span class="nav-main-link-name">NIN</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <span class="nav-main-link-name">General Info</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <span class="nav-main-link-name">Passport Info</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    </td>
                  </tr>

                  @endforeach

                 
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- END Dynamic Table Full -->
</div>
          




@endsection