@extends('layouts.default')
@section('content')
   <div class="col-8">
      
      <div class="well clearfix">
         <button type="button" class="btn btn-warning pull-right add-record" data-toggle="modal" data-target="#exampleModal" 
                  id="ad_event_btn"><i class="glyphicon glyphicon-plus"></i>Add Event
         </button>
         <h3>Events</h3>
         @if($events)
            <div class="row">
               @foreach ($events as $key => $value)            
                  <div class="card" id="{{$value->id}}" style="width: 18rem;">
                     <div class="card-body">
                        <h4 class="card-title"><b>{{$value->name}}</b></h4>
                        <p class="card-text">{{$value->description}}</p>
                        <a class="btn btn-xs pull-left show-event" onclick="showEvent({{$value}})" id="">
                           <i class="glyphicon glyphicon-eye-open" onclick="showEvent({{$value}})"></i>
                        </a>
                        <button class="btn btn-xs delete-event align-items-center justify-content-center" onclick="removeEvent({{$value->id}})">
                           <i class="glyphicon glyphicon-trash"></i>
                        </button>
                        <button class="btn btn-xs update-event" onclick="updateEvent({{$value}})">
                           <i class="glyphicon glyphicon-pencil"></i>
                        </button>
                     </div>
                  </div>
               @endforeach
            </div>
         @endif
      </div>
         
      <form enctype="multipart/form-data" method="POST" action="{{route('event.update')}}" id="prop_form">
         @csrf
         <table class="table table-bordered" id="tbl_posts">
            <thead>
               <div><h3 id="event_name">Event Name</h3> <h4 id="mode_name">CheckList</h4></div>
               <tr>
                  <th>#</th>
                  <th><h3>CheckLists</h3></th>
                  <th>Action<a class="btn btn-primary pull-right add-record" data-added="0"><i class="glyphicon glyphicon-plus"></i> Add Row</a></th>
               </tr>
            </thead>
            <tbody id="tbl_posts_body">
               <input type="text" id="event_id" name="event_id" hidden>
               <input type="text" id="mode" name="mode" value="checklist" hidden>
            </tbody>
         </table>
         <button class="btn btn-success btn-xl" id="update_event_prop_btn" onclick="$('#prop_form').submit();" hidden><i class="glyphicon glyphicon-pencil"></i>Update Event</button>
      </form>

      <div style="display:none;">
         <table id="sample_table">
            <tr id="">
               <td><span class="sn"></span>.</td>
               <td><input type="text" class="form-control inp1" name="data" placeholder="enter data">
                     <div class="form-group form-check">
                        <input type="checkbox" name="check" class="form-check-input chk1" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                     </div>
               </td>
               <td><a class="btn btn-xs delete-record" data-id="0"><i class="glyphicon glyphicon-trash"></i></a></td>
            </tr>
         </table>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Event Add Modal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form method="POST" action="{{route('event.store')}}" name="event_" id="event_add_frm">
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
                        <textarea name="description" class="form-control" id="event_desc">type here...</textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>
               <div class="modal-footer"></div>
            </div>
         </div>
      </div>
   </div>
   
   <script type="text/javascript">
       
      $("#event_name_inp").val('');
      $("#event_desc").val('');
      $(document).delegate('a.add-record', 'click', function(e) {
         e.preventDefault();    
         var content = $('#sample_table tr'),
         size = $('#tbl_posts >tbody >tr').length + 1,
         element = null,    
         element = content.clone();
         
         var input_length = $('#sample_table >tbody >tr >td >input').length;
         for (var i = 1; i <= input_length; i++) {
            element.find('.inp'+i).attr('name','inp-'+size+'-'+i);
            element.find('.chk'+i).attr('name','chk-'+size+'-'+i);
         }
         element.attr('id', 'rec-'+size);
         element.find('.delete-record').attr('data-id', size);
         element.appendTo('#tbl_posts_body');
         element.find('.sn').html(size);
      });

      $(document).delegate('a.delete-record', 'click', function(e) {
         e.preventDefault();    
         var didConfirm = confirm("Are you sure You want to delete");
         if (didConfirm == true) {
            var id = $(this).attr('data-id');
            var targetDiv = $(this).attr('targetDiv');
            $('#rec-' + id).remove();
            
            //regnerate index number on table
            $('#tbl_posts_body tr').each(function(index) {
               //alert(index);
               $(this).find('span.sn').html(index+1);
            });
            return true;
         } else {
            return false;
         }
      });

         $('#myModal').on('shown.bs.modal', function () {
         $('#myInput').trigger('focus')
      });
      /*update event*/
      function updateEvent(event) {
         console.log(event.name);
         console.log(event.description);
         $("#event_name_inp").val(event.name);
         $("#event_desc").val(event.description);
         $("#event_update_id").val(event.id);
         $("#event_add_frm").attr('action', '{{route("event.edit")}}');
         $("#ad_event_btn").click();     
       }
      /*remove event*/
      function removeEvent(event_id) {
         $("#"+event_id).hide();
         $('#rec-' + event_id).remove();
         var id = event_id;
            $.ajax({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               type: 'POST',
               url: '{{route("event.destroy")}}',
               data: {id, id},
               success: function(response) { 
                   
               }        
            });
      }
      /*show event*/
      function showEvent(event) {
         console.log(event);
         
         $("#update_event_prop_btn").removeAttr("hidden");
         $("#event_id").val('');
         $("#event_id").val(event.id);
         $("#event_name").html(event.name); 
      }    
   </script>
@stop