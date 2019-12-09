 <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              ХИЗМАТРАСОНИХО
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
                Хизматрасонихо
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <div class="gray-box">
      <div class="container">
        <div class="row">
          <div class="text-center feature-head">
            <h1>
              Хизматрсонихои мо
            </h1>
          </div>
      <?php foreach ($services as $item): ?>
          <div class="services">
            <div class="col-lg-6 col-sm-6">
              <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <i>
                  <img src="/assets/img/2.png" alt="" style="width:60px;height:60px;">
                </i>
              </div>
              <div class="content">
                <h3 class="title">
                  <?=$item['service_name'];?>
                </h3>
                <p>
                  <?=$item['service_short'];?>
                </p>
              </div>
            </div>
          </div>
    <?php endforeach ?>
        
        </div>
      </div>
    </div>
    <!--container end-->
<?php $this->load->view('footer'); ?>