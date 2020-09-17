   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Emploi du temps</title>

    <!-- Bootstrap CSS -->
    <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet">
    <!-- bootstrap theme -->
    <link href={{asset("assets/css/bootstrap-theme.css")}} rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href={{asset("assets/css/elegant-icons-style.css")}} rel="stylesheet" />
    <link href={{asset("assets/css/font-awesome.min.css")}} rel="stylesheet" />
    <!-- full calendar css-->
    <link href={{asset("assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css")}} rel="stylesheet" />
    <link href={{asset("assets/fullcalendar/fullcalendar/fullcalendar.css")}} rel="stylesheet" />
    <!-- easy pie chart-->
    <link href={{asset("assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css")}} rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href={{asset("assets/css/owl.carousel.css")}} type="text/css">
    <link href={{asset("assets/css/jquery-jvectormap-1.2.2.css")}} rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href={{asset("assets/css/fullcalendar.css")}}>
    <link href={{asset("assets/css/widgets.css")}} rel="stylesheet">
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">
    <link href={{asset("assets/css/style-responsive.css")}} rel="stylesheet" />
    <link href={{asset("assets/css/xcharts.min.css")}} rel=" stylesheet">
    <link href={{asset("assets/css/jquery-ui-1.10.4.min.css")}} rel="stylesheet">
    <!--======================================================= -->
</head>
<body>
        <!-- container section start -->
        <section id="container" class="">
           <header class="header dark-bg">
             <div class="toggle-nav">
               <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
             </div>
       
             <!--logo start-->
             <a href="index.html" class="logo">Emploi du  <span class="lite">temps hebdomadaire</span></a>
             <!--logo end-->
       
             <div class="nav search-row" id="top_menu">
               <!--  search form start -->
               <ul class="nav top-menu">
                 <li>
                   <form class="navbar-form">
                     <input class="form-control" placeholder="Search" type="text">
                   </form>
                 </li>
               </ul>
               <!--  search form end -->
             </div>
       
             <div class="top-nav notification-row">
               <!-- notificatoin dropdown start-->
               <ul class="nav pull-right top-menu">
                 <!-- inbox notificatoin start-->
                 <li id="mail_notificatoin_bar" class="dropdown">
                   <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                   <i class="icon-envelope-l"></i>
                                   <span class="badge bg-important">5</span>
                               </a>
                   <ul class="dropdown-menu extended inbox">
                     <div class="notify-arrow notify-arrow-blue"></div>
                     <li>
                       <p class="blue">You have 5 new messages</p>
                     </li>
                     <li>
                       <a href="#">
                                           <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                           <span class="subject">
                                           <span class="from">Greg  Martin</span>
                                           <span class="time">1 min</span>
                                           </span>
                                           <span class="message">
                                               I really like this admin panel.
                                           </span>
                                       </a>
                     </li>              
                     <li>
                       <a href="#">See all messages</a>
                     </li>
                   </ul>
                 </li>
                 <!-- inbox notificatoin end -->
                 <!-- alert notification start-->
                 <li id="alert_notificatoin_bar" class="dropdown">
                   <a data-toggle="dropdown" class="dropdown-toggle" href="#">
       
                                   <i class="icon-bell-l"></i>
                                   <span class="badge bg-important">7</span>
                               </a>
                   <ul class="dropdown-menu extended notification">
                     <div class="notify-arrow notify-arrow-blue"></div>
                     <li>
                       <p class="blue">You have 4 new notifications</p>
                     </li>
                     <li>
                       <a href="#">See all notifications</a>
                     </li>
                   </ul>
                 </li>
                 <!-- alert notification end-->
                 <!-- user login dropdown start-->
                 <li class="dropdown">
                   <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                   <span class="profile-ava">
                                       <img alt="" src="img/avatar1_small.jpg">
                                   </span>
                                   <span class="username">Jenifer Smith</span>
                                   <b class="caret"></b>
                               </a>
                   <ul class="dropdown-menu extended logout">
                     <div class="log-arrow-up"></div>
                     <li class="eborder-top">
                       <a href="#"><i class="icon_profile"></i> My Profile</a>
                     </li>
                     <li>
                       <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                     </li>
                     <li>
                       <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                     </li>
                     <li>
                       <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                     </li>
                   </ul>
                 </li>
                 <!-- user login dropdown end -->
               </ul>
               <!-- notificatoin dropdown end-->
             </div>
           </header>
           <!--sidebar start-->
           <aside>
               <div id="sidebar" class="nav-collapse ">
                 <!-- sidebar menu start-->
                 <ul class="sidebar-menu">
                   <li class="active">
                     <a class="" href="index.html">
                         <i class="icon_house_alt"></i>
                         <span>Dashboard</span>
                     </a>
                   </li>    
                   <li class="sub-menu">
                     <a href="basic_table.html" class="">
                         <i class="icon_table"></i>
                         <span>Emploi du temps</span>
                         <span class="menu-arrow arrow_carrot-right"></span>
                     </a>            
                   </li>
                 </ul>
                 <!-- sidebar menu end-->
               </div>
             </aside>
             <!--sidebar end-->
       <section id="main-content">
       <section class="wrapper">
         <!--overview start-->
         <div class="row">
             <div class="col-lg-12">
               <h3 class="page-header"><i class="fa fa-agenda"></i> Emploi du temps</h3>
               <ol class="breadcrumb">
                 <li><i class="fa fa-home"></i><a href="index.html">Accueil</a></li>
                 <li><i class="fa fa-laptop"></i>Emploi du temps</li>
               </ol>
             </div>
           </div>
         <div class="row">
             <div class="col-md-6 portlets">
               <div class="panel panel-default">
                 <div class="panel-heading">
                   <h2><strong>Calendrier</strong></h2>
                   <div class="panel-actions">
                     <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                     <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                   </div>
       
                 </div><br><br><br>
                 <div class="panel-body">
                   <!-- Widget content -->
       
                   <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                   <div id="calendar"></div>
       
                 </div>
               </div>
             </div>
           </div>
           <!-- project team & activity end -->
       </section>
       <div class="text-center">
           <div class="credits">
             Designed by <a href="#">Simplon Burkina</a>
           </div>
         </div>
       </section>
       </section>
   <!-- javascripts -->
    <script src={{asset("assets/js/jquery.js")}}></script>
    <script src={{asset("assets/js/jquery-ui-1.10.4.min.js")}}></script>
    <script src={{asset("assets/js/jquery-1.8.3.min.js")}}></script>
    <script type="text/javascript" src={{asset("assets/js/jquery-ui-1.9.2.custom.min.js")}}></script>
    <!-- bootstrap -->
    <script src={{asset("assets/js/bootstrap.min.js")}}></script>
    <!-- nice scroll -->
    <script src={{asset("assets/js/jquery.scrollTo.min.js")}}></script>
    <script src={{asset("assets/js/jquery.nicescroll.js")}} type="text/javascript"></script>
    <!-- charts scripts -->
    <script src={{asset("assets/assets/jquery-knob/js/jquery.knob.js")}}></script>
    <script src={{asset("assets/js/jquery.sparkline.js")}} type="text/javascript"></script>
    <script src={{asset("assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js")}}></script>
    <script src={{asset("assets/js/owl.carousel.js")}}></script>
    <!-- jQuery full calendar -->
    <script src={{asset("assets/js/fullcalendar.min.js")}}></script>
        <!-- Full Google Calendar - Calendar -->
        <script src={{asset("assets/assets/fullcalendar/fullcalendar/fullcalendar.js")}}></script>
        <!--script for this page only-->
        <script src={{asset("assets/js/calendar-custom.js")}}></script>
        <script src={{asset("assets/js/jquery.rateit.min.js")}}></script>
        <!-- custom select -->
        <script src={{asset("assets/js/jquery.customSelect.min.js")}}></script>
        <script src={{asset("assets/assets/chart-master/Chart.js")}}></script>

        <!--custome script for all page-->
        <script src={{asset("assets/js/scripts.js")}}></script>
        <!-- custom script for this page-->
        <script src={{asset("assets/js/sparkline-chart.js")}}></script>
        <script src={{asset("assets/js/easy-pie-chart.js")}}></script>
        <script src={{asset("assets/js/jquery-jvectormap-1.2.2.min.js")}}></script>
        <script src={{asset("assets/js/jquery-jvectormap-world-mill-en.js")}}></script>
        <script src={{asset("assets/js/xcharts.min.js")}}></script>
        <script src={{asset("assets/js/jquery.autosize.min.js")}}></script>
        <script src={{asset("assets/js/jquery.placeholder.min.js")}}></script>
        <script src={{asset("assets/js/gdp-data.js")}}></script>
        <script src={{asset("assets/js/morris.min.js")}}></script>
        <script src={{asset("assets/js/sparklines.js")}}></script>
        <script src={{asset("assets/js/charts.js")}}></script>
        <script src={{asset("assets/js/jquery.slimscroll.min.js")}}></script>
        <script>
        //knob
        $(function() {
            $(".knob").knob({
            'draw': function() {
                $(this.i).val(this.cv + '%')
            }
            })
        });

        //carousel
        $(document).ready(function() {
            $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });

        /* ---------- Map ---------- */
        $(function() {
            $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                values: gdpData,
                scale: ['#000', '#000'],
                normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
            });
        });
        </script>

</body>

</html>
