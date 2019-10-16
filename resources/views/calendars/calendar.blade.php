<link href='/css/fullcalendar4.3.1/core/main.css' rel='stylesheet' />
<link href='/css/fullcalendar4.3.1/daygrid/main.css' rel='stylesheet' />
<link href='/css/fullcalendar4.3.1/timegrid/main.css' rel='stylesheet' />
<style>

  /* body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  } */

  #calendar {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
    /* max-width: 900px; */
    margin: 0 auto;
  }

</style>

<div id='calendar'></div>

<script src='/css/fullcalendar4.3.1/core/main.js'></script>
<script src='/css/fullcalendar4.3.1/interaction/main.js'></script>
<script src='/css/fullcalendar4.3.1/daygrid/main.js'></script>
<script src='/css/fullcalendar4.3.1/timegrid/main.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      defaultDate: '2019-10-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: function(info, successCallback, failureCallback) {
          axios.get("{{ url('/get-calendar') }}").then((response) => {
              let row = [];
              console.log(response.data)
              if(response.data !== null){
                  response.data.forEach((event) => {
                      row.push({
                        id: event.id,
                        title: event.task.task_name,
                        start: event.date + 'T' + event.task.start_time, //วันที่กิจกรรม และเวลาจัดกิจกรรม
                        end: event.date + 'T' + event.task.end_time,   // วันที่กิจกรรม และเวลาสิ้นสุดกิจกรรม
                        color  : event.color
                      })
                  })
                  successCallback(row)
              };
          })
      }
    });
    calendar.render();
  });

</script>

