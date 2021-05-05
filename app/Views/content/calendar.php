<div id="container_style" class="container">
       <div class="col-md-12">
           <div id="calendar"></div>
       </div>
    </div>
</div>
    
<script type="text/javascript">
    
    var events = <?php echo json_encode($data) ?>;
     
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
            
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      events    : events
    })
</script>