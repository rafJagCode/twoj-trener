<script>
    jQuery('#start').datetimepicker()
    jQuery('#end').datetimepicker()
   
    $('.jsmultiple2').select2({
      placeholder: 'Dodaj osoby do eventu',
      width: '450px'
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
                             $("#modalform").trigger("reset");
                             $("#users").select2("val", "");
   
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