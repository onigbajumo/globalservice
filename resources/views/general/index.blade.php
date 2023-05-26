@extends('layouts.admin')

@section('content')



          <!-- Dynamic Table Full -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">General <small>Information</small></h3>
            </div>
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 80px;">ID</th>
                    <th>Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                    <th style="width: 15%;">Date Registered</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

                  </tr>
                </thead>
                <tbody>

                @foreach ($general as $item)
                  <tr>
                    <td class="text-center fs-sm">{{$item -> user_id}}</td>
                    <td class="fw-semibold fs-sm">
                       {{$item -> surname}}
                    </td>
                    <td class="d-none d-sm-table-cell fs-sm">
                    {{$item ->email}}<span class="text-muted">@example.com</span>
                    </td>
                    <td>
                      <span class="text-muted fs-sm">{{$item -> passportNumber}}</span>
                    </td>
                    <td class="d-none d-sm-table-cell">
                    <ul class="nav-main nav-main-horizontal nav-main-hover ">
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">
                          
                          <span class="nav-main-link-name">View</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ url('/general/' . $item->id )}}">
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

          


@endsection