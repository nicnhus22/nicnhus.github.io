<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!--  Mobile Viewport Fix
  j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
  device-width : Occupy full width of the screen in its current orientation
  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
  -->
  <meta name="viewport" content="width=1024">
  <link rel="shortcut icon" href="favicon.ico">
  <!-- This is the traditional favicon.
     - size: 16x16 or 32x32
     - transparency is OK
     - see wikipedia for info on browser support: http:/mky.be/favicon/ -->
     
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- The is the icon for iOS's Web Clip.
     - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
     - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
     - Transparency is not recommended (iOS will put a black BG behind the icon) -->
  
    <link href="/fw/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet">
    
    <meta name="google-site-verification" content="">
  <!-- don't forget to set the site up: http:/google.com/webmasters -->
  
  <meta name="author" content="">
  <meta name="copyright" content="Copyright 2011. All Rights Reserved.">
    
    <title>Trainer Workout - Workout Buy</title>
    
    <meta name="title" content="">
    <meta name="description" content="">
    {{ (OnBoarding::demoOn()) ? HTML::style('css/onBoarding.css') : "" }}
    {{ HTML::style('css/innerStyles.css') }}
    {{ HTML::style('fw/jquery-ui-1.11.1.custom/jquery-ui.min.css'); }}
    {{ HTML::style('fw/chosen_v1/chosen.css'); }}
    {{ HTML::style('fw/fancybox/source/jquery.fancybox.css?v=2.1.5'); }}
    {{ HTML::style('fw/fullcalendar/fullcalendar.css'); }}
    {{ HTML::style('fw/datapicker/jquery.ui.timepicker.css'); }}
    {{ HTML::style('fw/lightbox/css/lightbox.css'); }}
    


    <!-- jQuery Version 1.11.0 -->
    {{ HTML::script('js/jquery-1.11.0.js'); }}
    {{ HTML::script('fw/jquery-ui-1.11.1.custom/jquery-ui.min.js'); }}

</head>
<body>
<div class="systemMessages"></div>

    <!-- header area starts here -->
    <div id="blur_overlay" class="hidden"></div>
    <header>
      <section class="icon_block">
        <a href="/Trainer/"><img src="/img/icon_logo.png" width="68px" height="39px"></a>
        <div class="quote resp-disappear">TrainerWorkout.com</div>
        <ul>
          <li id="mailnot">
            <a href="/Trainer/Mail/" class="fancybox fancybox.iframe" id="mailpopup">
              <span style="display:none" id="messagesNumber" class="notification"></span>
              <img src="/img/icon_env.png" width="30px" height="22px">
            </a>
          </li>
          <li id="notnot" onmouseover="showLastNotifications();">
            <a href="#">
              <span style="display:none" id="notificationsNumber" class="notification"></span>
            </a>
            <a href="#">
              <div class="icon_notification">
                <span id="notificationsNumber" class="notification">0</span>
              </div>
            </a>
            <div class="notificationdropdown">
              <span><img src="/img/Trainee/notification-arrow.png" alt="top arrow" /></span>
              <h2> Notifications </h2>
              <div id="notification_preloader" class="notification_preloader"></div>
            </div>
          </li>
        </ul>
      </section>
      <section class="navigation">
        <nav>
          <ul>
            <li class="active" menu="dashboard" id="m_dashboardSmall"><a href="/Trainer/">Dashboard</a></li>
            <li menu="profile" id="m_profileSmall"><a href="/Trainer/Profile/">Profile</a></li>
            <li menu="friends" id="m_friendsSmall"><a href="/Trainer/Friends/">Friends</a></li>
            <li menu="workouts" id="m_workoutsSmall"><a href="/Trainer/Workouts/">Workouts</a></li>
            <li menu="excercises" id="m_exercisesSmall"><a href="/Trainer/Exercises/">Exercises</a></li>
          </ul>
        </nav>
      </section>
      <section class="user_profile">
          <div class="profileimg">
              <a href=""><img src="/{{ Helper::image(Auth::user()->thumb); }}" alt="profile image"></a>
              <div class="userdropdown">
                <span><img src="/img/Trainee/top-arrow.png" alt="top arrow" /></span>
                <ul>
                    <li><a href="/Trainer/Profile/"><i class="fa fa-user"></i> My Profile</a></li>
                      <li><a href="/Trainer/Settings/"><i class="fa fa-cogs"></i> Setting</a></li>
                      <li><a href="/Trainer/Memberships/"><i class="fa fa-cogs"></i> Memberships</a></li>
                      <li><a href="/Trainer/onBoarding/start"><i class="fa fa-cogs"></i> Tutorial</a></li>
                      <li><a href="/logout/"><i class="fa fa-power-off"></i> Log out</a></li>
                  </ul>
              </div>
              <div class="user_name"><a href="">{{ Auth::user()->firstName }}<br>{{ Auth::user()->lastName }}</a></div>
          </div>
      </section>
    </header>
    <!-- End Of Header -->

         @yield("content")

    <!-- footer area starts here -->
    <footer>
        <div class="wrapper clearfix">
            <div class="footerblock">
                <h5>Gym</h5>
                <ul>
                    <li><a href="#">Why TrainerWokrout</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Free Trial</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Buy</a></li>
                </ul>
            </div>
            <div class="footerblock">
                <h5>Trainer</h5>
                <ul>
                    <li><a href="#">Why TrainerWokrout</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Free Trial</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Buy</a></li>
                </ul>
            </div>
            <div class="footerblock">
                <h5>Trainer</h5>
                <ul>
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Why TrainerWokrout</a></li>
                    <li><a href="#">Features</a></li>
                </ul>
            </div>
            <div class="footerblock">
                <h5>Other Link</h5>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Career</a></li>
                </ul>
            </div>
            <div class="footerblock fltright">
                 
                <a href="#" class="socialpinterest">Pinterest</a>
                <a href="#" class="socialtwitter">Twitter</a><br />
                <p>Copyright © 2014 | All Rights Reserved<br />
                <a href="#">Privacy policy</a> | <a href="#">Terms and conditions</a></p>
                
            </div>
        </div>

        
    
    </footer>



<!-- /#wrapper -->

    

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('js/bootstrap.min.js'); }}
    <!-- CHOSEN SELCT BOX -->
    {{ HTML::script('fw/ckeditor/ckeditor.js'); }}

    {{ HTML::script('fw/fancybox/source/jquery.fancybox.pack.js?v=2.1.5'); }}
    {{ HTML::script('fw/fullcalendar/fullcalendar.min.js'); }}
    {{ HTML::script('fw/datapicker/jquery.ui.timepicker.js'); }}
    
    {{ HTML::script('js/global.js'); }}
    {{ HTML::script('js/thirdParty.js'); }}

    {{ HTML::script('js/widgets.js'); }}
    {{ HTML::script('fw/lightbox/js/lightbox.js'); }}
    


    <!-- CHOSEN SELCT BOX -->
    {{ HTML::script('fw/chosen_v1/chosen.jquery.js'); }}
    {{ HTML::script('fw/chosen_v1/docsupport/prism.js'); }}
    <script type="text/javascript">
        var config = {
          '.chosen-select'           : {},
          '.chosen-select-deselect'  : {allow_single_deselect:true},
          '.chosen-select-no-single' : {disable_search_threshold:10},
          '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
          '.chosen-select-width'     : {width:"95%"}
        }
        for (var selector in config) {
          $(selector).chosen(config[selector]);
        }
    </script>

    <!-- DataTables JavaScript -->
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->


    @yield('scripts')

     @if($errors->has())
       {{$message = "";}}
       @foreach ($errors->all() as $error)
        {{$message .= $error."</br>"; }}
      @endforeach
      <script>errorMessage("{{ $message }}")</script>
    @endif

    @if(Session::has("message"))
      <script>successMessage("{{ Session::get("message") }}")</script>
    @endif

     @if(isset($message))
      <script>successMessage("{{ $message }}")</script>
    @endif

    @if(Session::has("error"))
      <script>errorMessage("{{ Session::get("error") }}")</script>
    @endif

    <?php  $onboarding = OnBoarding::launchOnboarding() ?>

    {{ $onboarding["html"] }}
    
    {{ $onboarding["scripts"] }}

    <script>
      $(document).ready(function() {
        $(".fancybox").fancybox({
            'type' : 'iframe',
            'width': '540px',
            'closeBtn':false
        });
      });
    </script>


    <script>
      if(!debug){
        callNotifications();
        callMessages(5);
        setInterval(function(){
            callNotifications();
            callMessages(5);
        }, 15000);
      }
    </script>

    <script>
        @if(Config::get("app.debug"))
          debug = true;
        @else
          debug = false;
        @endif
    </script>
    
    
</body>
</html>