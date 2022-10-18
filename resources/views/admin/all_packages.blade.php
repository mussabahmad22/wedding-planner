@extends('admin.layouts.app')
@section('style')
    <style type="text/css">
        li.nav-item {
            position: relative;
            border: 2px solid #ddd;
        }
        .event-settings {
            position: absolute;
            top: 0;
            right: 0px;
        }
        .event-settings .icofont{
            font-size: 16px;
            font-weight: 500;
        }
        i.icofont.icofont-trash {
            color: red;
        }
        i.icofont.icofont-edit {
            color: #4099ff;
        }
        .table-responsive {
             display: block;
             width: 100%;
             overflow-x: auto;
             -webkit-overflow-scrolling: touch;
             -ms-overflow-style: -ms-autohiding-scrollbar
         }

         .table,
         .jsgrid .jsgrid-table {
             width: 100%;
             max-width: 100%;
             margin-bottom: 1rem;
             background-color: transparent
         }

         .table thead th,
         .jsgrid .jsgrid-table thead th {
             border-top: 0;
             border-bottom-width: 1px;
             font-weight: 500;
             font-size: .875rem;
             text-transform: uppercase
         }

         .table td,
         .jsgrid .jsgrid-table td {
             font-size: 0.875rem;
             padding: .475rem 0.4375rem
         }

         .mt-10 {
             padding: 0.875rem 0.3375rem !important
         }

         button {
             outline: 0 !important
         }

         .form-control:focus {
             box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25) !important
         }

         .badge {
             border-radius: 0;
             font-size: 12px;
             line-height: 1;
             padding: .375rem .5625rem;
             font-weight: normal;
             border: none
         }
    </style>
@stop

@section('content') 
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header card">
                    <div class="card-block">
                        <h5 class="m-b-10">All Packages</h5>
                        @if(session()->has('success'))
                            <div class="col-sm-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="col-sm-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session()->get('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="col-sm-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <table class="table table-striped table-hover table-responsive ">
                            <thead >
                                <tr>
                                    <th scope="col">Event Title</th>
                                    <th scope="col">Event Details</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Amount Description</th>
                                  <!--   <th scope="col">Save Amount</th>
                                    <th scope="col">Save Amount Details</th>
                                    <th scope="col">Event Capacity Details</th>
                                    <th scope="col">Total Events</th>
                                    <th scope="col">Users Details</th>
                                    <th scope="col">Total Users</th> -->
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($packages as $package)
                                <tr>
                                   <th scope="row">{{ $package->event_title }}</th>
                                   <td>{{ $package->event_details}}</td>
                                   <td>${{$package->amount}}</td>
                                   <td>{{ $package->amount_desc}}</td>
                                  <!--  <td>${{ $package->save_amount}}</td>
                                   <td>{{ $package->saving_amount_details}}</td>
                                   <td>{{ $package->event_capacity_details }}</td>
                                   <td>{{ $package->total_events}}</td>
                                   <td>{{ $package->users_details}}</td>
                                   <td>{{ $package->total_users}}</td> -->

                                   <td><a href="{{url('admin/edit_package/'.$package->id)}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                                   <td><a href="{{url('admin/delete_package/'.$package->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
<script type="text/javascript">
</script>
@stop