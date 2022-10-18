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
                    	<h5 class="m-b-10">{{ $title }}</h5>
                        <div class="col-md-12">
                            <div id="delete_message" class="alert alert-warning " style="display: none">
                                <p>Package Deleted Successfully</p>
                            </div>
                            <div id="usuccess_message" class="alert alert-success " style="display: none">
                                <p>Package Record Updated Successfully </p>
                            </div>
                            <form method="post" id="add_form" action="{{$url}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Event Title:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="event_title" id="title" class="form-control  @error('title') is-invalid   @enderror" placeholder="Title Here" value="{{ isset($record->event_title)?$record->event_title:'' }}">   
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label">Event Details:</label>
                                        <div class="col-md-10">
                                            <input type="text" name="event_details" id="title" class="form-control  @error('title') is-invalid   @enderror" placeholder="Details Here" value="{{ isset($record->event_details)?$record->event_details:'' }}"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-3">
                                            <label class="col-md-12 col-form-label ">Amount</label>
                                            <input type="text" name="amount" id="amount" class="form-control @error('amount') is-valid @enderror" placeholder="Amount" required="" value="{{ isset($record->amount)?$record->amount:'' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-md-12 col-form-label ">Amount Description</label>
                                            <input type="text" name="amount_desc" id="valid_for_days" class="form-control @error('valid_for_days') is-valid @enderror" placeholder="Amount details here" value="{{ isset($record->amount_desc)?$record->amount_desc:'' }}">
                                        </div>
                                      <!--   <div class="col-md-3">
                                            <label class="col-md-12 col-form-label">$ Save Amount </label>
                                            <input type="text" name="save_amount" id="withdraw_time" class="form-control @error('withdraw_time') is-valid @enderror" placeholder="save amount here" required="" value="{{ isset($record->save_amount)?$record->save_amount:'' }}">
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-3">
                                            <label class="col-md-12 col-form-label">Save Amount Details</label>
                                            <input type="text" name="save_amount_details" id="allowed_slots" class="form-control @error('allowed_slots') is-invalid   @enderror" placeholder="Details Here" value="{{ isset($record->saving_amount_details)?$record->saving_amount_details:'' }}">
                                        </div> -->
                                    </div>
                                    <h5 class="m-b-10">Manage Plans</h5>
                                    <br>
                                   <!--  <h6 class="m-b-10">Event Capacity :</h6>
                                    <div class="form-group row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-3">
                                            <label class="col-md-12 col-form-label">Event Capacity Details</label>
                                            <input type="text" name="event_capacity_details" id="allowed_slots" class="form-control @error('allowed_slots') is-invalid   @enderror" placeholder="Details Here" value="{{ isset($record->event_capacity_details)?$record->event_capacity_details:'' }}">
                                        </div>
                                         <div class="col-md-3">
                                            <label class="col-md-12 col-form-label"> Total Events</label>
                                            <input type="text" name="total_events" id="allowed_slots" class="form-control @error('allowed_slots') is-invalid   @enderror" placeholder="Total Events Here" value="{{ isset($record->total_events)?$record->total_events:'' }}">
                                        </div>
                                    </div>
                                    <h6 class="m-b-10">Users :</h6>
                                     <div class="form-group row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-3">
                                            <label class="col-md-12 col-form-label">User Details </label>
                                            <input type="text" name="user_details" id="allowed_slots" class="form-control @error('allowed_slots') is-invalid   @enderror" placeholder="Details Here" value="{{ isset($record->users_details)?$record->users_details:'' }}">
                                        </div>
                                         <div class="col-md-3">
                                            <label class="col-md-12 col-form-label"> Total Users Allowed</label>
                                            <input type="text" name="total_users" id="allowed_slots" class="form-control @error('allowed_slots') is-invalid   @enderror" placeholder="Total users Here" value="{{ isset($record->total_users)?$record->total_users:'' }}">
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-3">
                                            <label class="col-md-12 col-form-label"> Plan Name</label>
                                            <input type="text" name="total_users" id="allowed_slots" class="form-control @error('allowed_slots') is-invalid   @enderror" placeholder="Enter Your Plan Name" value="{{ isset($record->total_users)?$record->total_users:'' }}">
                                        </div>
                                          <div class="col-md-3">
                                            <label class="col-md-12 col-form-label"> Description</label>
                                            <input type="text" name="total_users" id="allowed_slots" class="form-control @error('allowed_slots') is-invalid   @enderror" placeholder="Enter Your Plan Description" value="{{ isset($record->total_users)?$record->total_users:'' }}">
                                        </div>
                                    </div>
                                    <h5 class="m-b-10">Plan Properties</h5>
                                    <br>
                                    <div class="card-block tab-icon">
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <!-- Tab panes -->
                                            <div class="tab-content card-block">
                                                <div class="tab-pane active" id="event" role="tabpanel">
                                                    <button onclick="addfaqs();" class="badge badge-success"><i class="fa fa-plus"></i> ADD NEW</button>
                                                    <div class="table-responsive">
                                                        <input type="hidden" name="event_id" value="">
                                                        <table id="faqs" class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Description</th>
                                                                    <th>Values</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                             
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                </div>
                                <div class="modal-footer"><button type="submit" id="btn_save" class="btn btn-info"><i class="icofont icofont-save"></i>{{ $text }}</button></div> 
                            </form>
                        </div>
					</div>
				</div>
			</div>
	  	</div>
  	</div>
@endsection

@section('script')
    <script type="text/javascript">
        var faqs_row = '';
        function addfaqs() {
            html = '<tr id="faqs-row' + faqs_row + '">';
            html += '<td><input type="text" placeholder="Description" class="form-control" name="description[]" required></td>';
            html += '<td><input type="text" placeholder="Values" class="form-control" name="note[]" required></td>';
            html += '<td class="mt-10"><button type="button" class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';
            html += '</tr>';

            $('#faqs tbody').append(html);

            faqs_row++;
        }
    </script>
@stop