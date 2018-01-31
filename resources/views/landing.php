<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="UAB High-school programming challenge">
        <meta name="keywords" content="UAB, programming, hackathon, challenge, birmingham, al, code">
        <meta name="author" content="chris rocco">

        <title>UAB High School Programming Contest</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="favicon.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">


        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Material Icons CSS -->
        <link href="assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="assets/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- flexslider -->
        <link href="assets/flexSlider/flexslider.css" rel="stylesheet">
        <!-- materialize -->
        <link href="assets/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- shortcodes -->
        <link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <!-- sweetalert -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <!-- Style CSS -->
        <link href="style.css" rel="stylesheet">
        <link href="custom.css" rel="stylesheet">


        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
        <script src="app.js"></script>
    </head>

    <body ng-app="hspc" ng-controller="hspc.controller as $ctrl" id="top" class="has-header-search">


        <!-- Top bar -->
        <div class="top-bar uab-green">
          <div class="container">
            <div class="row">
              <!-- Social Icon -->
              <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                  <!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>-->
                </ul>
              </div>

              <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i>pirkelbauer@uab.edu</a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i>(205) 934-8532</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.top-bar -->

                
        <!--header start-->
        <header id="header" class="tt-nav nav-border-bottom">

            <div class="header-sticky light-header ">

                <div class="container">

                    <div id="materialize-menu" class="menuzord">

                        <!--logo start-->
                        <a href="index.html" class="logo-brand">
                            <img class="retina" src="assets/img/uab-cs-logo.jpg" alt="" style="height: 80px !important;" />
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right">
                            <li><a href="#about">About the Contest</a></li>
                            <li><a href="#awards">Awards</a></li>
                            <li><a href="#schedule">Event Schedule</a></li>
                            <li><a href="#register">Register</a></li>
                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>

        </header>
        <!--header end-->






        <!-- REVOLUTION SLIDER
        ======================================== -->
        <section class="rev_slider_wrapper">
         <div class="rev_slider materialize-slider" >
          <ul>

            <!-- slide 1 start --> 
            <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="assets/img/banner-1/bg.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="materialize Material" data-description="">

                <!-- MAIN IMAGE -->
                <img src="assets/img/banner-1/bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>


                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme"
                    data-x="left"
                    data-y="center" data-voffset="-150"
                    data-transform_idle="o:1;"
                    data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2000"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-1/glasses.png">
                        </div>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme"
                    data-x="left"
                    data-y="bottom" data-voffset="100"
                    data-transform_idle="o:1;"
                    data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-1/earphones.png">
                        </div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide" 
                    data-x="['right','right','right','right']" data-hoffset="['0','0','-50','-50']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                    data-transform_idle="o:1;"
                    data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-1/cup.png">
                        </div>
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme"
                    data-x="center"
                    data-y="center" data-voffset="-100" 
                    data-fontsize="['70','70','70','45']"
                    data-lineheight="['70','70','70','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="800" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap;">
                    UAB TECH CHALLENGE
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme rev-subheading white-text text-center"
                    data-x="center"
                    data-y="center" 
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">
                    <h3 style="font-size: 23px; color: white; font-weight: bold">February 17, 10:30am - 4:00pm, 1300 University Boulevard</h4>
                    The High School Programming Contest (HSPC) hosted by UAB
                    <br/> brings talented students from high schools throughout Alabama to the UAB campus to
                    <br/> participate in an organized competition.
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rev-btn"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1200" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap;">
                    <a href="#register" class="btn btn-lg waves-effect uab-gold waves-light">Register Now</a>
                </div>

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-70','-70','-170','-170']" 
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-1/macbook.png">
                        </div>
                </div>
            </li>
            <!-- slide 1 end -->

            <!-- slide 2 start --> 
            <li data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="assets/img/banner-2/bg.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Unique Design" data-description="">
                
                <!-- MAIN IMAGE -->
                <img src="assets/img/banner-2/bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>


                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide"
                    data-x="['right','right','right','right']" data-hoffset="['0','0','-170','-170']" 
                    data-y="['top','top','top','top']" data-voffset="['0','0','-90','-90']" 
                    data-transform_idle="o:1;"
                    data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2000"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/book.png">
                        </div>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide"
                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                    data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                    data-transform_idle="o:1;"
                    data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2000"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/flower.png">
                        </div>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme"
                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-90','-90']"

                    data-transform_idle="o:1;"
                    data-transform_in="x:-50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/box.png">
                        </div>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide" 
                    data-x="['right','right','right','right']" data-hoffset="['0','0','-150','-150']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                    data-transform_idle="o:1;"
                    data-transform_in="x:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/tube.png">
                        </div>
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption NotGeneric-Title tp-resizeme"
                    data-x="center"
                    data-y="center" data-voffset="-100" 
                    data-fontsize="['70','70','70','45']"
                    data-lineheight="['70','70','70','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="800" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap;">We Build Brands
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme rev-subheading white-text text-center"
                    data-x="center"
                    data-y="center" 
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">Materialize is an interactive agency. Which develops websites <br> and premium mobile applications.
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme rev-btn"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-style_hover="cursor:default;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1200" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap;">
                    <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
                </div>


                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme"
                    data-basealign="slide" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-120','-120','-170','-170']" 
                    data-transform_idle="o:1;"
         
                    data-transform_in="y:50px;opacity:0;s:600;e:Power2.easeOut;" 
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;"
                    data-start="2400"
                    style="z-index: 5;">
                        <div><img src="assets/img/banner-1/dummy.png" alt="" data-lazyload="assets/img/banner-2/ipad.png">
                        </div>
                </div>
            </li>
            <!-- slide 2 end -->
         
          </ul>             
         </div><!-- end revolution slider -->
        </section><!-- end of slider wrapper -->







        <!-- ABOUT SECTION
        ============================= -->
        
        <section id="about" class="section-padding">
            <div class="container">

              <div class="text-center mb-80">
                  <h2 class="section-title">What is the UAB HS Programming Challenge? </h2>
                  <p style="font-size: 20px">UAB Computer Science offers innovative, competitive degrees that are
                      designed for the 21st century workforce and that will prepare you for a
                      career in a variety of fields. If you like programming and computers,
                      find out how you can be a part of our program here: <a href="http://www.uab.edu/cas/computerscience/undergraduate-programs">http://www.uab.edu/cas/computerscience/undergraduate-programs</a> </p>
              </div>

              <div class="vertical-tab">
                <div class="row">
                  <div class="col-sm-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-stacked" role="tablist">
                          <li role="presentation" class="active"><a href="#tab-5" class="waves-effect waves-light" role="tab" data-toggle="tab">
                            Eligibility
                          </a></li>
                          <li role="presentation"><a href="#tab-8" class="waves-effect waves-light" role="tab" data-toggle="tab">
                            Contest Guidelines
                          </a></li>
                          <li role="presentation"><a href="#tab-6" class="waves-effect waves-light" role="tab" data-toggle="tab">
                            Problem Submission
                          </a></li>
                          <li role="presentation"><a href="#tab-7" class="waves-effect waves-light" role="tab" data-toggle="tab">
                            Scoring
                          </a></li>
                        </ul>                      
                  </div><!-- /.col-md-3 -->

                  <div class="col-sm-9">
                        <!-- Tab panes -->
                        <div class="panel-body">
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab-5">
                                <h2>About the Contest</h2>

                                <img class="alignright" src="assets/img/working_man.png" alt="">

                                <p>The High School Programming Contest (HSPC) hosted by UAB brings talented students
                                    from high schools throughout Alabama to the UAB campus to participate in an organized competition. 
                                    Students individually compete to demonstrate their programming skills and problem solving abilities 
                                    by attempting to solve six programming problems within a three hour period. Schools that have three 
                                    or more contestants are also eligible for team awards.</p>


                                <h2>Who can Participate?</h2>
                                <p>The competition is open to all Alabama high school students (public, private, or home schools).
                                A high school student is any student currently enrolled in grades 9-12. Seniors who graduate in 2017 are welcome to participate.</p>

                                

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-6">
                                <h2>Problem Submission</h2>

                                <img class="alignright" src="assets/img/busy_man.png" alt="">

                                <p>After a problem is judged, one of the following responses will be returned to the contestant:
                                    <b>Correct, Incorrect Output, Incorrect Output Format, Incomplete Output, Failed Test Case, Compiler Error, Run-time Error, Run Time Limit Exceeded</b>.
                                </p>
                                <p>A contestant may submit a program for judging as many times as they wish. If a program is judged to be incorrect, the contestant may resubmit later.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-7">
                                <h2>Scoring and Determination of Rank</h2>

                                <img class="alignright" src="assets/img/mission.png" alt="">

                                <p>Ranking will be based on overall score, where the score is determined primarily by the number of problems solved correctly. 
                                    Time will be used as a secondary scoring method in order to break potential ties. In the case where multiple contestants have 
                                    solved the same number of problems, the tie breaker will be the total time taken to solve the correct problems (i.e., the 
                                    contestant solving the problems in the least amount of time will have the higher ranking). A third-level tie breaker will default 
                                    to the flip of a coin :) For each incorrect submission, a penalty of 20 minutes will be assessed to the contestant. 
                                    In computing team rankings, the top three scores of students from each school will be considered.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-8" style="font-weight: bold">
                                <h2>Contest Guidelines</h2>

                                <img class="alignright" src="assets/img/business.png" alt="">

                                <p>There is an individual contest (first 5 places awarded). 
                                    A team is also provided for those schools having three 
                                    or more participating students (first 2 places awarded).</p>
                                <p>The contest will consist of 6 or more problems to be solved over a 3 hour period. The set of problems will span various levels of difficulty.
                                    Solutions to the problems must be coded in Java or C++ or Python. No other languages are allowed.<p>
                                <p>You are allowed to bring a total of two books to the contest. These must be “traditional” 
                                    books – you may not compose your own book or set of notes unless they are in a binder.</p>
                                <p>You are NOT allowed to bring any software or disks into the lab. 
                                    If you need a piece of paper, you may ask the lab proctor for blank paper. 
                                    Any question should be submitted to the judges in writing.</p>
                                <p>Each clarification question will be considered and acknowledged, but the judges reserve the right to not answer 
                                    any question that may reveal the answer. The question and its answer may be provided to all contestants if it 
                                    seems relevant. Performance is a criterion for judging if a solution is correct. Your program must finish and 
                                    deliver a correct answer within one minute in order to be considered correct. For some of the problems there 
                                    may exist a solution that might work, but is so inefficient that it will take longer than a minute to finish. 
                                    You may work on the problems in any order, and submit them in any order. There will not be any third party libraries 
                                    provided for you. Only standard libraries will be provided, but you may type in any support libraries on your own and 
                                    submit them as part of your solution. The judges’ decisions are final.</p>
                            </div>
                          </div>
                        </div>
                  </div>
                </div><!-- /.row -->
              </div><!-- /.vertical-tab -->
            </div><!-- /.container -->
        </section>






        <!-- AWARDS SECTION
        ============================= -->
        <section id="awards" class="parallax-bg banner-5 bg-fixed overlay dark-5 padding-top-100" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="mb-80 text-center">
                  <h2 class="font-30 white-text text-extrabold text-uppercase">What can I win?!</h2>
                  
                  <!--<p class="white-text width-60 mb-30" style="font-size: 20px">
                      Up for grabs will be <b>5</b> individual prizes, <b>2</b> team prizes, and <b>Grace Hopper awards</b> to female contestants!
                  </p>-->
                  <p class="white-text width-60 mb-30" style="font-size: 20px">
                      <em>To be Announced.</em>
                  </p>
              </div><!-- /.hero-intro -->
            </div><!-- /.container -->
        </section>





        <!-- EVENT SCHEDULE SECTION
        ======================================== -->
        <section id="schedule" class="section-padding">
            <div class="container">

              <div class="mb-80 wow fadeInUp">
                  <h2 class="section-title text-uppercase">Event Schedule</h2>
              </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="border-tab transparent-nav event-schedule">
                    <div class="table-responsive">
		                        <table class="table">
		                            <thead>
		                            <tr>
		                                <th>ACTIVITY</th>
		                                <th>LOCATION</th>
		                                <th>START</th>
		                                <th>END</th>
		                            </tr>
		                            </thead>
		                            <tbody>
                                        <tr>
                                            <td>Check-In / Late Registration</td>
                                            <td>Campbell Hall</td>
                                            <td>10:30 am</td>
                                            <td>11:30 am</td>
                                        </tr>
                                        <tr>
                                            <td>Lunch</td>
                                            <td>Campbell Hall</td>
                                            <td>11:00 am</td>
                                            <td>11:30 am</td>
                                        </tr>
                                        <tr>
                                            <td>Welcome and Orientation for HSPC</td>
                                            <td>Campbell Hall</td>
                                            <td>11:30 am</td>
                                            <td>11:45 am</td>
                                        </tr>
                                        <tr>
                                            <td>HSPC Contest</td>
                                            <td>Campbell Hall</td>
                                            <td>12:00 pm</td>
                                            <td>3:00 pm</td>
                                        </tr>
                                        <tr>
                                            <td>Award Presentation</td>
                                            <td>Campbell Hall</td>
                                            <td>3:15 pm</td>
                                            <td>4:00 pm</td>
                                        </tr>
                                    </tbody>
		                        </table>
	                        </div>
                    </div><!-- /.border-bottom-tab -->
                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->


            </div><!-- /.container -->
        </section>





        <!-- REGISTER SECTION
        ======================================== -->
        <section id="register" class="section-padding parallax-bg banner-5 bg-fixed overlay dark-5" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row">
                <div class="col-md-6 white-text">
                  <h2 class="font-40 mb-30 white-text line-height-50">
                      <span class="text-bold pink-text">Hurry Up!</span>
                        Registration Deadline is <b>February 10</b></h2>

                  <p>Registration fee is <b>$20</b>. Pay by cash or check at venue.
                    <br/>After <b>Feb 10</b>,
                    the registration fee will increase to <b>$30</b> </p>

                  <p><b>**NOTE</b> This contest is open to all AL high-school students and advanced junior high students</p>
					
					<br>

                    <div class="countdown-wrapper">
                        <ul class="countdown">
                            <li>                    
                                <span class="days pink-text">00</span>
                                <p>days</p>
                            </li>
                            <li>
                                <span class="hours pink-text">00</span>
                                <p>hours </p>
                            </li>
                            <li>
                                <span class="minutes pink-text">00</span>
                                <p>minutes</p>
                            </li>
                            <li>
                                <span class="seconds pink-text">00</span>
                                <p>seconds</p>
                            </li>               
                        </ul><!-- /countdown -->
                    </div>

                </div><!-- /.col-md-6 -->

                <div class="col-md-5 col-md-offset-1">
                	<div class="booking-form-wrapper">

                		<h3 style="color: white">Registration Form</h3>
                    	<form name="contact-form" class="clearfix" ng-submit="$ctrl.register($event)">

	                      <div class="row">
	                        <div class="col-md-6">
	                          <div class="input-field">
	                            <input type="text" name="name" class="validate" id="name" ng-model="$ctrl.registrationForm.name">
	                            <label for="name" class="">Name</label>
	                          </div>

	                        </div><!-- /.col-md-6 -->

	                        <div class="col-md-6">
	                          <div class="input-field">
	                            <input id="phone" name="phone" type="tel" class="validate" ng-model="$ctrl.registrationForm.phone">
	                            <label for="phone" class="">Phone Number</label>
	                          </div>
	                        </div><!-- /.col-md-6 -->

	                      </div><!-- /.row -->

	                      <div class="row">
	                        <div class="col-md-6">
	                          <div class="input-field">
	                            <input type="number" min="8" max="12" name="grade-level" class="validate" id="name" ng-model="$ctrl.registrationForm.grade_level">
	                            <label for="name" class="">Grade Level</label>
	                          </div>
	                        </div><!-- /.col-md-6 -->

                              <div class="col-md-6">
                                  <div class="input-field">
                                      <label class="sr-only" for="email">Email</label>
                                      <input id="email" type="email" name="email" class="validate" ng-model="$ctrl.registrationForm.email">
                                      <label for="email" data-error="wrong" data-success="right" class="">Email</label>
                                  </div>
                              </div>

                          </div><!-- /.row -->

                            <div>
                                <br/>
                                <h3 style="color: white">What is your skill level?</h3>

                                <input type="radio" id="sk1" name="skill-level" ng-model="$ctrl.registrationForm.skill_level" value="Pro">
                                <label for="sk1">Pro</label>

                                <input type="radio" id="sk2" name="skill-level" ng-model="$ctrl.registrationForm.skill_level" value="Intermediate">
                                <label for="sk2">Intermediate</label>

                                <input type="radio" id="sk3" name="skill-level" ng-model="$ctrl.registrationForm.skill_level" value="Beginner">
                                <label for="sk3">Beginner</label>
                            </div>
                          
                              <div>
                                  <br/>
                                  <h3 style="color: white">What programming language will you use?</h3>

                                  <input type="radio" id="pgLng1" name="programming-language" ng-model="$ctrl.registrationForm.programming_language" value="Java">
                                  <label for="pgLng1">Java</label>

                                  <input type="radio" id="pgLng2" name="programming-language" ng-model="$ctrl.registrationForm.programming_language" value="C++">
                                  <label for="pgLng2">C++</label>

                                  <input type="radio" id="pgLng3" name="programming-language" ng-model="$ctrl.registrationForm.programming_language" value="Python">
                                  <label for="pgLng3">Python 3</label>

                                  <input type="radio" id="pgLng4" name="programming-language" ng-model="$ctrl.registrationForm.programming_language" value="C#">
                                  <label for="pgLng4">C#</label>
                              </div>

                            <div class="input-field">
                                <input type="text" name="other-language" class="validate" id="other-language" ng-model="$ctrl.registrationForm.other_language">
                                <label for="other-language" class="">If you'd rather use another language, list it here:</label>
                            </div>

                            <div>
                                <br/>
                                <h3 style="color: white">What IDE would you like to use? </h3>

                                <input type="radio" id="ide1" name="ide" ng-model="$ctrl.registrationForm.ide" value="Eclipse">
                                <label for="ide1">Eclipse</label>

                                <input type="radio" id="ide2" name="ide" ng-model="$ctrl.registrationForm.ide" value="jGrasp">
                                <label for="ide2">jGrasp</label>

                                <input type="radio" id="ide3" name="ide" ng-model="$ctrl.registrationForm.ide" value="Atom">
                                <label for="ide3">Atom</label>

                                <input type="radio" id="ide4" name="ide" ng-model="$ctrl.registrationForm.ide" value="IntelliJ">
                                <label for="ide4">IntelliJ</label>
                            </div>

                            <div class="input-field">
                                <input type="text" name="other-ide" class="validate" id="other-ide" ng-model="$ctrl.registrationForm.other_ide">
                                <label for="other-ide" class="">If you prefer another IDE, list it here:</label>
                            </div>


                            <button type="submit" name="submit" class="waves-effect waves-light btn uab-gold mt-30">Register Now</button>
                    	</form>
                	</div>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <!-- FOOTER
        ======================================== -->
        <footer id="contact" class="footer footer-one">
            <div class="primary-footer brand-bg uab-green">
                <div class="container">
                    <a href="#top" class="page-scroll btn-floating btn-large uab-gold back-top waves-effect waves-light tt-animate btt" data-section="#top">
                      <i class="material-icons"></i>
                    </a>

                    <div class="row">

                        <div class="col-md-3 widget">
                            <h2 class="white-text">Our Offices</h2>
                            <address style="color: white; font-size: 14px">
                                115A Campbell Hall <br>
                                1300 University Boulevard <br>
                                Birmingham, Alabama 35294-1170 <br>
                                +1 (205) 934 2213
                            </address>
                        </div>

                        <div class="col-md-3 widget">
                            <h2 class="white-text">Contact Us</h2>
                            <address style="color: white; font-size: 14px">
                                <b> Pirkelbauer, Peter<b> - pirkelbauer@uab.edu <br>
                            </address>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3 widget">
                            <h2 class="white-text">Last Year's Questions</h2>
                            <ul class="footer-list">
                                <li><a target="_blank" href="documents/2005-problems.pdf">2005 Contest Problems</a></li>
                                <li><a target="_blank" href="documents/2006-problems.pdf">2006 Contest Problems</a></li>
                                <li><a target="_blank" href="documents/2007-problems.pdf">2007 Contest Problems</a></li>
                                <li><a target="_blank" href="documents/2008-problems.pdf">2008 Contest Problems</a></li>
                                <li><a target="_blank" href="documents/2009-problems.pdf">2009 Contest Problems</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 widget">
                            <ul class="footer-list">
                                <li><a target="_blank" href="documents/AlabamaHSPC_2010_Problems.pdf">2010 Contest Problems</a></li>
                                <li><a target="_blank" href="documents/2014_Problems.pdf">2014 Contest Problems</a></li>
                                <li><a target="_blank" href="documents/hspc2015.pdf">2015 Contest Problems</a></li>
                                <li><a target="_blank" href="documents/hspc2016.pdf">2016 Contest Problems</a></li>
                                <li><a target="_blank" href="documents/2017-problems.pdf">2017 Contest Problems</a></li>
                            </ul>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->

            <div class="secondary-footer uab-green-secondary">
                <div class="container">
                    <span class="copy-text">&nbsp;  Website By <a href="http://chrisroc.co">Chris Rocco</a></span>
                </div><!-- /.container -->
            </div><!-- /.secondary-footer -->
        </footer>







        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="assets/img/uab-w-nsa.png" alt="logo" style="height: 100px">
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader --> 


        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/materialize/js/materialize.min.js"></script>
        <script src="assets/js/menuzord.js"></script>
        <script src="assets/js/bootstrap-tabcollapse.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.sticky.min.js"></script>
        <script src="assets/js/smoothscroll.min.js"></script>
        <script src="assets/js/imagesloaded.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/jquery.shuffle.min.js"></script>
        <script src="assets/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/flexSlider/jquery.flexslider-min.js"></script>
        <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/smooth-menu.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/coundown-timer.js"></script>
        <script src="assets/js/ajaxchimp.js"></script>
        <script src="assets/js/ajaxchimp-config.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="assets/js/scripts.js"></script>

        <!-- RS5.0 Core JS Files -->
        <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery(".materialize-slider").revolution({
                    sliderType:"hero",
                    sliderLayout:"fullwidth",
                    delay:9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "gyges",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[700,600,500,500],
                    disableProgressBar:"on",
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,50],
                    }


                });
            });
        </script>


        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
         
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        
    
    
    
    
    </body>
  
</html>