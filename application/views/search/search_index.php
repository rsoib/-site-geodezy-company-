<?php $this->load->view('header'); ?>
 

 <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              <?=$page_title;?>
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
                <?=$page_title;?>
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
          <div class="blog-item">
            <div class="row">
            <?php if ($item==true): ?>
              <div class="col-lg-10 col-sm-10">
                <h1 style="background-color:#D9EDF7;">
                  <a href="blog-detail.html">
                   <?=$item->dep_name;?>
                  </a>
                </h1>
                <p  style="background-color:#D9EDF7;">
                  <?=$item->dep_text;?>
                </p>
            <?php endif ?>
                <div class="blog-two-info">
                  <p  style="background-color:#D9EDF7;">
                    <i class="fa fa-user">
                    </i>
                      Сардори шӯъба <?=$item->dep_author;?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--blog end-->
      </div>

    </div>
    <!--container end-->
<?php $this->load->view('footer'); ?>