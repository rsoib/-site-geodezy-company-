<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="rokib">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Аксхо</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/theme.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/flexslider.css"/>
    <link href="/assets/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/animate.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/mixitup.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/component.css">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/style-responsive.css" rel="stylesheet" />


    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

 
  <body>
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" alt="" width="100px" height="100px;" style="margin-bottom:10px;">КВД <span>Аэрогеодезия</span></a>
          </div>
          <div style="margin-top:30px;" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                 <li class="dropdown">
                      <a href="/">Асосӣ</a>  
                  </li>
                  
                  <li class="dropdown">
                      <a href="/info/service">Хизматрасонихо</a>  
                  </li>

                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="/">Дар бораи мо <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="/info/news">Хабархо</a>
                          </li>
                          <li>
                              <a href="/info/history">Таърихи мо</a>
                          </li>

                          <li>
                              <a href="/info/personal">Сохтор</a>
                          </li>
                           <li>
                              <a href="/info/pictures">Расмҳо</a>
                          </li>
                          <li>
                              <a href="/info/rolic">Ролик</a>
                          </li>
                      </ul>

                  </li>
                  
                  <li>
                      <a href="/info/department">Шӯъбаҳо</a>
                  </li>

                 
                  <li>
                      <a href="/info/contact">Алока</a>
                  </li>
                  <li><input class="form-control search" placeholder=" Ҷустуҷӯ" type="text"></li>
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Аксхо</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.html">Асоси</a></li>
                        <li class="active">Асоси</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <div class="container">
        <div class="row mar-b-30">
        <div id="portfoliolist-three">
            <div class="col-md-12">
        <?php foreach ($pictures as $item): ?>
            <div class="portfolio app" data-cat="app">
                <div class="portfolio-wrapper">
                    <div class="portfolio-hover">
                        <div class="image-caption">
                            <a href="/assets/img/pictures/<?=$item['pict_name'];?>" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Дидан"><i class="fa fa-eye"></i></a>
                        </div>
                        <img src="/assets/img/pictures/<?=$item['pict_name'];?>" alt="Расм" style="width:365px; height:284px;"/>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
      
            </div>

        </div>

        </div>
    </div>


  <!--footer start-->
   <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              Алоқа бо мо
            </h1>
            <address>
              <p><i class="fa fa-globe pr-10"></i>Ҷкмҳурии Тоҷикистон, ш.Душанбе </p>
              <p><i class="fa fa-home pr-10"></i>кӯчаи Н.Карабоев 61</p>
              <p><i class="fa fa-mobile pr-10"></i>Телефон : (123) 456-7890 </p>
              <p><i class="fa fa-phone pr-10"></i>Телефони кори : (123) 456-7890 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">support@example.com</a></p>
            </address>
          </div>
         
          <div class="col-lg-3 col-sm-3">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
              <h1>
                Дар бораи мо
              </h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="/info/history">Таърихи корхона</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="/info/history">Кормандон</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="/info/pictures">Аксхо</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="/info/personal">Сохтор</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="/info/news">Хабарҳо</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-sm-3">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
              <h1>
               Дигар хизматрасониҳо
              </h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="/info/department">Шӯъбаҳо</a>
                </li>

                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="/info/contact">Алоқа бо мо</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="/info/service">Хизматрасониҳо</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
              <h1>
                Оиди сомона
              </h1>
              <p>
                Сомона аз тарафи донищҷӯи курси 4-и Донишгоҳи технологии Тоҷикистон Раҷабов Соиб сохта шудааст. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                  <div class="copyright">
                    <p>&copy; 2018 КВД "Аэрогеодезия" | Ҳамаи ҳуқуқҳо ҳимоя шудаанд!</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- js placed at the end of the document so the pages load faster
    <script src="js/jquery.js"></script> -->
    <script src="/assets/js/jquery-1.8.3.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/hover-dropdown.js"></script>
    <script defer src="/assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/assets/assets/bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/assets/owlcarousel/owl.carousel.js"></script>
    <script src="/assets/js/mixitup.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/link-hover.js"></script>


    <!--common script for all pages-->
    <script src="/assets/js/common-scripts.js"></script>



    <script src="/assets/js/jquery.magnific-popup.js"></script>

    <script type="text/javascript">
    $('.image-caption a').tooltip();

    $(function () {

        var filterList = {

            init: function () {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist-three').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });

            },

            hoverEffect: function () {
                $("[rel='tooltip']").tooltip();
                // Simple parallax effect
                $('#portfoliolist-three .portfolio .portfolio-hover').hover(
                function(){
                    $(this).find('.image-caption').slideDown(250); //.fadeIn(250)
                },
                function(){
                    $(this).find('.image-caption').slideUp(250); //.fadeOut(205)
                }
            );
            }

        };

        // Run the show!
        filterList.init();


    });

    $( document ).ready(function() {
       $('.magnefig').each(function(){
            $(this).magnificPopup({
                    type:'image',
                    removalDelay: 300,
                    mainClass: 'mfp-fade'
               })
        });
    });
    </script>

  <script>



      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            stopOnHover : true,

        });

      });

      new WOW().init();


  </script>
 </body>
</html>
