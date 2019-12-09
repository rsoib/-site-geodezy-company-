<?php $this->load->view('header'); ?>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Хабарҳо
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="/">
                  Асосӣ
                </a>
              </li>
              <li>
                <a href="#">
                  Хабарҳо
                </a>
              </li>
             
            </ol>
          </div>
        </div>
      </div>
    </div>

        <!--container start-->
    <div class="container">
      <div class="row">
        <!--blog start-->
        <div class="col-lg-9">
          <div class="blog-item">
            <div class="row">
              <div class="col-lg-2 col-sm-2">
              </div>
              <div class="col-lg-10 col-sm-10">
                <div class="blog-img gs">
                  <img src="/assets/img/news/<?=$item->news_image;?>" alt="" style="margin-left:-145px;" width="720px" height="433px;">
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-10 col-sm-10">
                <h1>
                  <a href="">
                   <?=$item->news_title;?>
                  </a>
                </h1>
                <h4>
                 <?=$item->news_content;?>
                </h4>

              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-3">
          <div class="blog-side-item">
            <div class="search-row">
              <input type="text" class="form-control" placeholder="Ҷустуҷӯ">
            </div>
           
            <div class="blog-post">
              <h3>
                 Дигар хабарҳо
              </h3>
            <?php foreach ($news as $value): ?>
           
              <div class="media">
                <a class="pull-left gs" href="javascript:;">
                  <img class="" src="/assets/img/news/<?=$value['news_image'];?>" alt="" width="110px" height="91px;">
                </a>
                <div class="media-body">
                  <h5 class="media-heading">
                    <a href="/info/news/content/<?=$value['news_id'];?>">
                      <?=$value['news_title'];?>
                    </a>
                  </h5>
                </div>
              </div>
              <hr>
             <?php endforeach ?>
              <a href="/info/news" class="btn btn-info btn-lg da-link">
                Ҳамаи хабарҳо
              </a>
            </div>
          </div>
        </div>


      </div>

    </div>
    <!--container end-->


<?php $this->load->view('footer');?>