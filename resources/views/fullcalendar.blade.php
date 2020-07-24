@extends('layout')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ URL::asset('css/jquery.datetimepicker.min.css')}}" />

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/jquery.datetimepicker.full.min.js')}}"></script>
@endsection
@section('content')
<!-- Button trigger modal -->
<button id="imp" style="display: none" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Zorganizuj event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
        <form id="modalform" class="form-horizontal" method="POST" action="{{ route('fullcalendar.create' , $user->id) }}">
          @csrf
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-pencil fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Tytuł" />
              </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="start" id="start" placeholder="Data rozpoczęcia" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="end" id="end" placeholder="Data zakończenia" />
                </div>
            </div>
            <div class="modal-footer">
              <button id="closebtn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-secondary">Dodaj event</button>
            </div>
        </form>
      </div>    
      </div>
    </div>
  </div>  

 
<div class="container margbt">
    <div class="response"></div>
    <div id='calendar'></div>  
</div>


</body>

<script>
 jQuery('#start').datetimepicker()
 jQuery('#end').datetimepicker()

  $(document).ready(function () {

   

        var SITEURL = "{{url('/')}}" 
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
 
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "/fullcalendar/{id}",
            displayEventTime: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,

          

            select: function (start, end, allDay) {
                var start = $.fullCalendar.formatDate(start, "Y/MM/DD HH:mm");
                var end = $.fullCalendar.formatDate(end, "Y/MM/DD HH:mm");
                $('#start').val(start);
                $('#end').val(end);
                $('#title').val("");
                $('#imp').click(); 
            },
             
            eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + '/fullcalendar/{id}/update',
                            data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                            type: "POST",
                            success: function (response) {
                                displayMessage("Updated Successfully");
                            }
                        });
                    },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalendar/{id}/delete',
                        data: "&id=" + event.id,
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                displayMessage("Deleted Successfully");
                            }
                        }
                    });
                }
            }
            
        });

        $('#modalform').submit(function(e) {
                e.preventDefault();
                //your ajax funtion here
                var SITEURL = "{{url('/')}}" 
                $.ajax({
                      url: SITEURL + "/fullcalendar/{id}/create",
                      data: $("#modalform").serialize(),
                      type: "POST",
                      success: function (data) {
                          displayMessage("Added Successfully");
                      }
                  });
                $('#closebtn').click(); 
                calendar.fullCalendar('refetchEvents');
            });
  });

  
  function displayMessage(message) {
    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
  }

 
</script>
@endsection