<script>
    jQuery('#start').datetimepicker()
    jQuery('#end').datetimepicker()
    jQuery('#estart').datetimepicker()
    jQuery('#eend').datetimepicker()
    
    $('.jsmultiple2').select2({
      placeholder: 'Dodaj osoby do eventu',
      width: '450px',
      initSelection: function(element, callback) {                   
        }
    });
   

    
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
                            $("#modalform").trigger("reset");
                            $('#select2-users-container').html('');
                            $('#start').val(start);
                            $('#end').val(end);
                            $('#title').val("");
                            $('#imp').click(); 
               },
                
               eventDrop: function (event, delta) {
                           var start = $.fullCalendar.formatDate(event.start, "Y/MM/DD HH:mm");
                           var end = $.fullCalendar.formatDate(event.end, "Y/MM/DD HH:mm");
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
                        var user = {!! json_encode($user->id) !!};
                        $.ajax({
                            url: SITEURL + '/fullcalendar/{id}/edit',
                            data: 'id=' + event.id,
                            type: "POST",
                            success: function (response) {}
                        }).done(function(data){


                            var test = document.getElementById('ititle');
                            test.innerHTML = data.event.title;
                            test = document.getElementById('istart');
                            test.innerHTML = data.event.start;
                            test = document.getElementById('iend');
                            test.innerHTML = data.event.end;
                            $("#modalform").trigger("reset");
                            $('#select2-eusers-container').html('');
                            $('#estart').val(data.event.start);
                            $('#eventId').val(data.event.id)
                            $('#eend').val(data.event.end);
                            $('#etitle').val(data.event.title); 
                            $('#edescription').val(data.event.description);
                            $('#deleteEventId').val(data.event.id);
                            $('#leaveEventId').val(data.event.id);
                            
                            if(user==data.event.user_id)
                            {
                                document.getElementById("eventinfo").style.display = "none";
                                document.getElementById("leavebtn").style.display = "none";
                                document.getElementById("deletebtn").style.display = "block";
                                document.getElementById("emodalform").style.display = "block";
                                
                                
                            }
                            else
                            {
                                document.getElementById("eventinfo").style.display = "block";
                                document.getElementById("leavebtn").style.display = "block";
                                document.getElementById("deletebtn").style.display = "none";
                                document.getElementById("emodalform").style.display = "none";
                            }

                            var array = [];
                            for(i=0; i<data.users.length; i++)
                            {
                                array.push(data.users[i].id);
                            }

                            $('#eusers').val(array).trigger('change');
                            $('#imp2').click();


                });    
               }
               
           });
           
           $('#emodalform').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: SITEURL + '/fullcalendar/{id}/update',
                    data: $("#emodalform").serialize(),
                    success: function (response) {
                            displayMessage("Edited Successfully");
                             $("#emodalform").trigger("reset");
                             $("#eusers").select2("val", "");
                             $('#eusers').val(null).trigger('change');
                    }
                });
                $('#closebtn2').click(); 
                calendar.fullCalendar('refetchEvents');
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
                             $("#modalform").trigger("reset");
                         }
                     });
                   $('#closebtn').click(); 
                   calendar.fullCalendar('refetchEvents');
               });

            $('#dmodalform').submit(function(e)
                {
                    e.preventDefault();
                    var deleteMsg = confirm("Do you really want to delete?");
                    if (deleteMsg) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + '/fullcalendar/{id}/delete',
                            data: $("#dmodalform").serialize(),
                            success: function (response) {
                                if(parseInt(response) > 0) {
                                    displayMessage("Deleted Successfully");
                                }
                            }
                        });
                        $('#closebtn2').click(); 
                        calendar.fullCalendar('refetchEvents');
                    }
                });
            $('#lmodalform').submit(function(e)
            {
                e.preventDefault();
                var deleteMsg = confirm("Do you really want to leave event?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalendar/{id}/leave',
                        data: $("#lmodalform").serialize(),
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                displayMessage("Leaved Successfully");
                            }
                        }
                    });
                    $('#closebtn2').click(); 
                    calendar.fullCalendar('refetchEvents');
                }
            });
     });
   
     
     function displayMessage(message) {
       $(".response").html("<div class='success'>"+message+"</div>");
       setInterval(function() { $(".success").fadeOut(); }, 1000);
     }
   
    
   </script>