 <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Дар бораи мо
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="/">
                  Асоси
                </a>
              </li>
              <li class="active">
                Дар бораи мо
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
      <div class="row">
<?php foreach ($story as $item): ?>
  

        <div class="col-lg-7 about wow fadeInRight">
          <h3>
            <?=$item['history_title'];?>
          </h3>
          <h4>
             <?=$item['history_text'];?>
          </h4>  
        </div>
<?php endforeach ?>
        <div class="col-lg-5">
          <div class="about-carousel wow fadeInLeft">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                  <img src="/assets/img/pro/8.jpg" style="width:458px; height:271px;" alt="">
                  <div class="carousel-caption">
                    <p>
                      КВД "Аэрогеодезия"
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="/assets/img/pro/5.jpg" style="width:458px; height:271px;" alt="">
                  <div class="carousel-caption">
                    <p>
                      КВД "Аэрогеодезия"
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="/assets/img/pro/6.jpg" style="width:458px; height:271px;" alt="">
                  <div class="carousel-caption">
                    <p>
                      КВД "Аэрогеодезия"
                    </p>
                  </div>
                </div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left">
                </i>
              </a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right">
                </i>
              </a>
            </div>
          </div>
        </div>
      </div>
     


    <div class="container" id="tourpackages-carousel">

      <div class="row">
        <div class="profile">
          <h2>
            КОРМАНДОН
          </h2>

      <?php foreach ($personals as $value): ?>
        
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
              <img src="/assets/img/persons/<?=$value['person_image'];?>" alt="" style="width:240px; height:180px;">
              <div class="caption">
                <h4>
                  <?=$value['person_name'];?>
                </h4>
                <p>
                  <?=$value['person_text'];?>
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
      <?php endforeach ?>
          
        </div>
        <!-- End row -->

      </div>
      <!-- End container -->
    </div>
        </div>

<?php $this->load->view('footer'); ?>
