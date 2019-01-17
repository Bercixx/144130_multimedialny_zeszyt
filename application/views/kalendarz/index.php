<div class="container">
    <div class="row">
    <div class="col-md-10">


   

    <div id="calendar">

    </div>

    </div>
    </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dodaj wydarzenie</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("kalendarz/add_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Nazwa</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Opis</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Początek</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Koniec</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
        <input type="submit" class="btn btn-primary" value="Dodaj">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edytuj wydarzenie</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("kalendarz/edit_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Nazwa</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="name">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Opis</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Początek</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Koniec</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Usuń</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
        <input type="submit" class="btn btn-primary" value="Zapisz">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo site_url('resources/js/moment.min.js');?>"></script>
<!-- <script src="<?php echo site_url('resources/js/jquery.min.js');?>"></script> -->
<script src="<?php echo site_url('resources/js/jquery-ui.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/fullcalendar.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/locale-all.js');?>"></script> 
<script src="<?php echo site_url('resources/js/gcal.js');?>"></script>




<script type="text/javascript">
$(document).ready(function() {

    var date_last_clicked = null;
    var initialLocaleCode = 'pl';



    $('#calendar').fullCalendar({
      locale: initialLocaleCode,
        eventSources: [
           {
           events: function(start, end, timezone, callback) {
                $.ajax({
                    url: '<?php echo base_url() ?>kalendarz/get_events',
                    dataType: 'json',
                    data: {
                        // our hypothetical feed requires UNIX timestamps
                        start: start.unix(),
                        end: end.unix()
                    },
                    success: function(msg) {
                        var events = msg.events;
                        callback(events);
                    }
                });
              }
            },
        ],
        dayClick: function(date, jsEvent, view) {
            
            date_last_clicked = $(this);
            $('#addModal input[name=start_date]').val(date.format('YYYY/MM/DD HH:mm'));
            $('#addModal input[name=end_date]').val(date.format('YYYY/MM/DD HH:mm'));
  
            
            $(this).css('background-color', '#bed7f3');
            $('#addModal').modal();
            
        },
       eventClick: function(event, jsEvent, view) {
           
          $('#name').val(event.title);
          $('#description').val(event.description);
          $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
          if(event.end) {
            $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
          } else {
            $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
          }
          $('#event_id').val(event.id);
          $('#editModal').modal();
       },
    });
   
});
</script>