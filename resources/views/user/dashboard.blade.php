@extends('layouts.app')
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
                        <h5 class="m-b-10">Event tabs</h5>
                        <!-- <p class="text-muted m-b-10">Event Managment</p> -->
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="/"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#!">Tabs</a></li> -->
                        </ul>
                    </div>
                </div>
                 
                <div class="page-body">

                     <div class="row">
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
                        <div class="col-sm-12">
                            <!-- Tab variant tab card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Events Managements</h5>
                                </div>
                                <div class="card-block tab-icon">
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <!-- <h6 class="sub-title">Tab With Icon</h6> -->
                                            <div class="sub-title"><button class="btn btn-primary" data-toggle="modal" data-target="#add-event-modal"><i class="icofont icofont-plus"></i>Add New Event</button></div>
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs md-tabs " role="tablist">
                                                @forelse ($events as $key => $event)
                                                    <li class="nav-item">
                                                        <a class="nav-link {{$key==0 ? 'active':''}}" data-toggle="tab" href="#event{{$event->id}}" role="tab"><i class="icofont icofont-tasks-alt"></i>{{$event->name}}</a>
                                                        <div class="slide"></div>
                                                        <div class="event-settings">
                                                            <a onclick="return confirm('are you sure you want to delete Event...?');" href="{{ route('event.delete', ['id' => $event->id]) }}" role="tab"><i class="icofont icofont-trash"></i></a>
                                                            <a href="#update-event-modal" data-toggle="modal" onclick="updateModal({{$event}})" data-target="#update-event-modal"><i class="icofont icofont-edit"></i></a>
                                                        </div>
                                                    </li>
                                                @empty
                                                    <p>No Events</p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                </div>
                            </div>
                            <!-- Tab variant tab card start -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Tab variant tab card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Event Checklists</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option" style="width: 180px;">
                                            <li class="complete"><i class="fa fa-chevron-left fa-chevron-right"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-times close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block tab-icon">
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <!-- Tab panes -->
                                            <div class="tab-content card-block">
                                                @foreach($events as $key => $event_det)
                                                    <div class="tab-pane {{$key==0 ? 'active':''}}" id="event{{$event_det->id}}" role="tabpanel">
                                                        <div class="sub-title">{{$event_det->name}}</div>
                                                        <button onclick="addfaqs();" class="badge badge-success"><i class="fa fa-plus"></i> ADD NEW</button>
                                                        <div class="table-responsive">
                                                            <form action="{{route('event.prop')}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="event_id" value="{{$event_det->id}}">
                                                                <table id="faqs" class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Description</th>
                                                                            <th>Note</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if($event_det->properties)
                                                                            @forelse(json_decode($event_det->properties)->checklist as $index=>$property)
                                                                                <tr id="faqs-row{{$index}}">
                                                                                    <td><input type="text" name="name[]" class="form-control" placeholder="Name" value="{{$property->name}}" required></td>
                                                                                    <td><input type="text" name="description[]" value="{{$property->descripton}}" placeholder="Description" class="form-control" required></td>
                                                                                    <td><input type="text" name="note[]" placeholder="Note" value="{{$property->note}}" class="form-control" required></td>
                                                                                    <td class="mt-10"><button type="button" class="badge badge-danger" onclick="$('#faqs-row{{$index}}').remove();"><i class="fa fa-trash"></i> Delete</button></td>
                                                                                </tr>
                                                                            @empty
                                                                                <p>No Checklist</p>
                                                                            @endforelse
                                                                        @endif
                                                                    </tbody>
                                                                </table>

                                                                <div class="save-changes"><button class="btn btn-primary"><i class="icofont icofont-save"></i>Save Changes</button></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                </div>
                            </div>
                            <!-- Tab variant tab card start -->
                        </div>
                    </div>
                </div>

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    <!-- Modal -->
    <div class="modal fade" id="add-event-modal" tabindex="-1" role="dialog" aria-labelledby="add-event-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Event Add Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('event.store')}}" name="event_" id="event_add_frm">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="event_name">Event Name</label>
                            <input type="text" name="event_name" class="form-control" id="event_name_inp" aria-describedby="eventHelp" placeholder="Enter event name">
                            <small id="eventHelp" class="form-text text-muted">This will be your Event name...</small>
                        </div>
                        <!-- for update purpose -->
                        <input type="" name="id" id="event_update_id" value="" hidden>
                        <div class="form-group">
                            <label for="exampleInputevent_category">Description</label>
                            <textarea name="description" class="form-control" id="event_desc" placeholder="Event Description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update-event-modal" tabindex="-1" role="dialog" aria-labelledby="add-event-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{route('event.update')}}" name="event_" id="event_add_frm">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="event_id" id="event_id">
                        <div class="form-group">
                            <label for="event_name">Event Name</label>
                            <input type="text" name="event_name" id="event_name" class="form-control" id="event_name_inp" aria-describedby="eventHelp" placeholder="Enter event name">
                            <small id="eventHelp" class="form-text text-muted">This will be your Event name...</small>
                        </div>
                        <!-- for update purpose -->
                        <input type="" name="id" id="event_update_id" value="" hidden>
                        <div class="form-group">
                            <label for="exampleInputevent_category">Description</label>
                            <textarea name="description" class="form-control" id="event_desc_update" placeholder="Event Description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('script')
<script type="text/javascript">
    var faqs_row = '{{count($events)}}';
    function addfaqs() {
        html = '<tr id="faqs-row' + faqs_row + '">';
        html += '<td><input type="text" class="form-control" placeholder="Name" name="name[]" required></td>';
        html += '<td><input type="text" placeholder="Description" class="form-control" name="description[]" required></td>';
        html += '<td><input type="text" placeholder="Note" class="form-control" name="note[]" required></td>';
        html += '<td class="mt-10"><button type="button" class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

        html += '</tr>';

        $('#faqs tbody').append(html);

        faqs_row++;
    }

    function updateModal(event){
        $('#event_id').val(event.id);
        $('#event_name').val(event.name);
        $('#event_desc_update').append(event.description);
    }
</script>
@stop