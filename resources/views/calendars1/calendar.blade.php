<link href='/css/fullcalendar4.3.1/core/main.css' rel='stylesheet' />
<link href='/css/fullcalendar4.3.1/daygrid/main.css' rel='stylesheet' />
<link href='/css/fullcalendar4.3.1/timegrid/main.css' rel='stylesheet' />
<style>
  #calendar {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
    /* max-width: 1000px; */
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
      height: 750,
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
      },
      eventClick: function(calEvent, jsEvent, view) {
        window.location.href = `{{ url('calendar/${calEvent.event.id}') }}`
      }
    });
    calendar.render();
  });

</script>

