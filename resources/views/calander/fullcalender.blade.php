@extends('layouts.student')
@section('style')
<link href="/wa/dashboard/css/student-admin.css" rel="stylesheet">
<<<<<<< HEAD
<!--<link href="/wa/dashboard/css/session.css" rel="stylesheet">-->
=======
{{-- <link href="/wa/dashboard/css/session.css" rel="stylesheet"> --}}
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

<style>
.fc-day-grid-event .fc-content {
white-space: pre-wrap;
overflow: hidden;
color: white;
<<<<<<< HEAD
}
</style>
@endsection
@section('content')
=======
/* background-color:white; */
}
</style>
@endsection
@section('content')    
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
 {{-- <div class="container"> --}}
 <div>
    <div id='calendar'></div>
</div>
<<<<<<< HEAD

<script>
$(document).ready(function () {

var SITEURL = "{{ url('/') }}";

=======
    
<script>
$(document).ready(function () {
   
var SITEURL = "{{ url('/') }}";
  
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
<<<<<<< HEAD

=======
  
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
var calendar = $('#calendar').fullCalendar({
                    editable: false,
                    // for month week
                    header: {
                        left: 'prev,next today',
                        center: 'title',
<<<<<<< HEAD
                        right: 'month,agendaWeek,agendaDay'
                    },
=======
                        // right: 'month,agendaWeek,agendaDay'
                        right: 'agendaDay,agendaWeek,month'
                    },
                    eventLimit: true,
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
                    // end here
                    events: SITEURL + "/fullcalender",
                    displayEventTime: false,
                    editable: false,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                        event.eventBackgroundColor = 'red';
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/fullcalenderAjax",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event Created Successfully");
<<<<<<< HEAD

=======
  
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
                                    calendar.fullCalendar('renderEvent',
                                        {
                                            id: data.id,
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },true);
<<<<<<< HEAD

=======
  
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
<<<<<<< HEAD

=======
  
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
                        $.ajax({
                            url: SITEURL + '/fullcalenderAjax',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function (response) {
                                displayMessage("Event Updated Successfully");
                            }
                        });
                    },
                    eventClick: function (event) {
                        var deleteMsg = confirm("Do you really want to delete?");
                        if (deleteMsg) {
                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/fullcalenderAjax',
                                data: {
                                        id: event.id,
                                        type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event Deleted Successfully");
                                }
                            });
                        }
                    }
<<<<<<< HEAD

                });

});

function displayMessage(message) {
    toastr.success(message, 'Event');
}

</script>
 </body>
</html>
=======
 
                });
 
});
 
function displayMessage(message) {
    toastr.success(message, 'Event');
} 
  
</script>
 </body>
</html> 
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
