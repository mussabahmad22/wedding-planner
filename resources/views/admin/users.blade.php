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
                    	<h5 class="m-b-10">ALL USERS</h5>
						<table class="table table-striped table-hover">
						 	<thead>
						    	<tr>
							      	<th scope="col">Sr.</th>
							      	<th scope="col">First Name</th>
							      	<th scope="col">Last Name</th>
							      	<th scope="col">Email</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						  		@foreach($users as $user)
						    	<tr>
							       <th scope="row">{{ $user->id }}</th>
							       <td>{{ $user->first_name }}</td>
							       <td>{{ $user->last_name }}</td>
							       <td>{{ $user->email }}</td>
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