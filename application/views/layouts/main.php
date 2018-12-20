<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Multimedialny zeszyt obserwacji dziecka</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- fullCalendar -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/fullcalendar.min.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('resources/css/fullcalendar.print.min.css" media="print');?>">
        
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    </head>
    
    <body class="hold-transition skin-green-light layout-boxed sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Multimedialny zeszyt obserwacji dziecka</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"><?= zalogowanyUzytkownik('email') ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?= site_url('autoryzacja/wyloguj') ?>" class="btn btn-default btn-flat">Wyloguj się</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">NAWIGACJA</li>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-home"></i> <span>Strona główna</span>
                            </a>
                        </li>
                        
                        <?php if(czyAdmin()): ?>
						<li>
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Uzytkownicy</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('uzytkownicy/add');?>"><i class="fa fa-plus"></i> Dodaj użytkownika</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('uzytkownicy/index');?>"><i class="fa fa-list-ul"></i> Spis użytkowników</a>
                                </li>
							</ul>
                        </li>
                        <?php endif; ?>

                        <?php if(czyRodzic()): ?>
						<li>
                            <a href="<?php echo site_url('rodzic/kalendarz');?>">
                                <i class="fa fa-calendar"></i> <span>Kalendarz</span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-heartbeat"></i> <span>Lekarstwa</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('rodzic/lekarstwa_dodaj');?>"><i class="fa fa-plus"></i> Dodaj lekarstwo</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('rodzic/lekarstwa_lista');?>"><i class="fa fa-list-ul"></i> Spis lekarstw</a>
                                </li>
							</ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('rodzic/zajecia');?>">
                                <i class="fa fa-mortar-board"></i> <span>Zajęcia</span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Opiekunowie</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('rodzic/opiekunowie_lista');?>"><i class="fa fa-list-ul"></i>Spis opiekunów</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('rodzic/opiekunowie_email');?>"><i class="fa fa-envelope"></i>E-mail</a>
                                </li>
							</ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('rodzic/uwagi');?>">
                                <i class="fa fa-exclamation"></i> <span>Uwagi</span>
                            </a>
                            
                        </li>
                        <?php endif; ?>

                        <?php if(czyOpiekun()): ?>
						<li>
                            <a href="<?php echo site_url('rodzic/kalendarz');?>">
                                <i class="fa fa-calendar"></i> <span>Kalendarz</span>
                            </a>
                            
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('opiekun/zajecia');?>">
                                <i class="fa fa-mortar-board"></i> <span>Zajęcia</span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?php echo site_url('opiekun/podopieczni');?>">
                                <i class="fa fa-user"></i> <span>Podopieczni</span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?php echo site_url('opiekun/notatki');?>">
                                <i class="fa fa-file-text-o"></i> <span>Notatki</span>
                            </a>
                            
                        </li>
                        <?php endif; ?>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php 
                                       
                    if(isset($_view) && $_view)
                    
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
          
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <script src="<?php echo site_url('resources/js/jquery-ui.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/fullcalendar.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>

        <script>
  $(function () {

/* initialize the external events
 -----------------------------------------------------------------*/
function init_events(ele) {
  ele.each(function () {

    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
    // it doesn't need to have a start or end
    var eventObject = {
      title: $.trim($(this).text()) // use the element's text as the event title
    }

    // store the Event Object in the DOM element so we can get to it later
    $(this).data('eventObject', eventObject)

    // make the event draggable using jQuery UI
    $(this).draggable({
      zIndex        : 1070,
      revert        : true, // will cause the event to go back to its
      revertDuration: 0  //  original position after the drag
    })

  })
}

init_events($('#external-events div.external-event'))

/* initialize the calendar
 -----------------------------------------------------------------*/
//Date for the calendar events (dummy data)
var date = new Date()
var d = date.getDate(),
    m = date.getMonth(),
    y = date.getFullYear()
$('#calendar').fullCalendar({
  header    : {
    left  : 'prev,next today',
    center: 'title',
    right : 'month,agendaWeek,agendaDay'
  },
  buttonText: {
    today: 'dzisiaj',
    month: 'miesiąc',
    week : 'tydzień',
    day  : 'dzień'
  },
  //Random default events
  events    : [
    {
      title          : 'All Day Event',
      start          : new Date(y, m, 1),
      backgroundColor: '#f56954', //red
      borderColor    : '#f56954' //red
    },
    {
      title          : 'Long Event',
      start          : new Date(y, m, d - 5),
      end            : new Date(y, m, d - 2),
      backgroundColor: '#f39c12', //yellow
      borderColor    : '#f39c12' //yellow
    },
    {
      title          : 'Meeting',
      start          : new Date(y, m, d, 10, 30),
      allDay         : false,
      backgroundColor: '#0073b7', //Blue
      borderColor    : '#0073b7' //Blue
    },
    {
      title          : 'Lunch',
      start          : new Date(y, m, d, 12, 0),
      end            : new Date(y, m, d, 14, 0),
      allDay         : false,
      backgroundColor: '#00c0ef', //Info (aqua)
      borderColor    : '#00c0ef' //Info (aqua)
    },
    {
      title          : 'Birthday Party',
      start          : new Date(y, m, d + 1, 19, 0),
      end            : new Date(y, m, d + 1, 22, 30),
      allDay         : false,
      backgroundColor: '#00a65a', //Success (green)
      borderColor    : '#00a65a' //Success (green)
    },
    {
      title          : 'Click for Google',
      start          : new Date(y, m, 28),
      end            : new Date(y, m, 29),
      url            : 'http://google.com/',
      backgroundColor: '#3c8dbc', //Primary (light-blue)
      borderColor    : '#3c8dbc' //Primary (light-blue)
    }
  ],
  editable  : true,
  droppable : true, // this allows things to be dropped onto the calendar !!!
  drop      : function (date, allDay) { // this function is called when something is dropped

    // retrieve the dropped element's stored Event Object
    var originalEventObject = $(this).data('eventObject')

    // we need to copy it, so that multiple events don't have a reference to the same object
    var copiedEventObject = $.extend({}, originalEventObject)

    // assign it the date that was reported
    copiedEventObject.start           = date
    copiedEventObject.allDay          = allDay
    copiedEventObject.backgroundColor = $(this).css('background-color')
    copiedEventObject.borderColor     = $(this).css('border-color')

    // render the event on the calendar
    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

    // is the "remove after drop" checkbox checked?
    if ($('#drop-remove').is(':checked')) {
      // if so, remove the element from the "Draggable Events" list
      $(this).remove()
    }

  }
})

/* ADDING EVENTS */
var currColor = '#3c8dbc' //Red by default
//Color chooser button
var colorChooser = $('#color-chooser-btn')
$('#color-chooser > li > a').click(function (e) {
  e.preventDefault()
  //Save color
  currColor = $(this).css('color')
  //Add color effect to button
  $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
})
$('#add-new-event').click(function (e) {
  e.preventDefault()
  //Get value and make sure it is not null
  var val = $('#new-event').val()
  if (val.length == 0) {
    return
  }

  //Create events
  var event = $('<div />')
  event.css({
    'background-color': currColor,
    'border-color'    : currColor,
    'color'           : '#fff'
  }).addClass('external-event')
  event.html(val)
  $('#external-events').prepend(event)

  //Add draggable funtionality
  init_events(event)

  //Remove event from text input
  $('#new-event').val('')
})
})
</script>
    </body>
</html>
