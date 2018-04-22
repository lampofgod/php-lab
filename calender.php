<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href='fullcalendar.min.css' rel='stylesheet' />
<link href='fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='moment.min.js'></script>
<script src='fullcalendar.min.js'></script>
<script>

    $(document).ready(function() {
        // function getJson() {
        //     return $.ajax({
        //         type: "POST",
        //         dataType: "json",
        //         url: "kuy.php"
        //     });
        // } 

        // var promise = getJson();
        // console.log(promise)

        // promise.success(function (data) {
        //     alert(data);
        // });

        $.ajax({
                type: "POST",
                dataType: "json",
                url: "kuy.php",
                success: function(result) {

                    console.log("ข้อมูลอยู่นี่")
                    console.log(result)

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: '2018-04-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: result
      })
    calendar.render();
    },
        error: function(error) {
            console.log(error);
        }
                    });

        //     var calendarEl = document.getElementById('calendar');
        //     var calendar = new FullCalendar.Calendar(calendarEl, {
        //     // $('#calendar').fullCalendar({
        //     //     header: {
        //     //         left: 'prev,next today',
        //     //         center: 'title',
        //     //         right: 'month,basicWeek,basicDay'
        //     //     },
        //     //     defaultDate: '2018-04-12',
        //     //     editable: true,
        //     //     eventLimit: true,
        //     //     events : <?php echo json_encode($data);?>
        //     // });
        //   header: {
        //     left: 'prev,next today',
        //     center: 'title',
        //     right: 'month,agendaWeek,agendaDay,listWeek'
        //   },
        //   defaultDate: '2018-04-12',
        //   navLinks: true, // can click day/week names to navigate views
        //   editable: true,
        //   eventLimit: true, // allow "more" link when too many events
        //   events: promise.responseText
        
   });

</script>

<html>
    <h3>ทดสอบ Fullcalendar</h2>
    <div id='calendar'></div>
    <html>
    <head></head>
    <body>
<input type="button" value="Back" button onclick="location.href='events.php'">
</body></html>