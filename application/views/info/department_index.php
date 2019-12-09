    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Шӯъбаҳо
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="/">
                 Асосӣ
                </a>
              </li>

              <li class="active">
                Шӯъбаҳо
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
        <!--blog start-->
        <div class="col-lg-12 ">
        <?php foreach ($departments as $item): ?>
          
        
          <div class="blog-item">
            <div class="row">

              <div class="col-lg-10 col-sm-10">
                <h1>
                  <a href="blog-detail.html">
                   <?=$item['dep_name'];?>
                  </a>
                </h1>
                <p>
                  <?=$item['dep_text'];?>
                </p>

                <div class="blog-two-info">
                  <p>
                    <i class="fa fa-user">
                    </i>
                      Сардори шӯъба <?=$item['dep_author'];?> 
                  </p>
                </div>
              </div>
            </div>
          </div>
      <?php endforeach ?>
        </div>

        <!--blog end-->
      </div>

    </div>
    <!--container end-->
<?php $this->load->view('footer'); ?>