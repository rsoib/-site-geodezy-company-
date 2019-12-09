
 <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Хабархо
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
                Хабархо
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

<?php foreach ($news as $item): ?>
        <div class="col-md-6">
          <div class="blog-left wow fadeInLeft">
            <div class="blog-img">
              <img src="/assets/img/news/<?=$item['news_image'];?>  " alt="" style="width:553px; height:341px;"/>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="blog-two-info">
                  <p>
                    <i class="fa fa-user">
                    </i>
                    <a href="#">
                      Администратор
                    </a>

                    |
                    <i class="fa fa-calendar">
                    </i>
                    <?=$item['news_date'];?>
                    

                  </p>
                </div>
              </div>
            </div>
            <div class="blog-content">
              <h3>
               <?=$item['news_title'];?>
              </h3>
              <p>
               <?=$item['news_short'];?>
              </p>
            </div>
            <a href="/info/news/content/<?=$item['news_id'];?>" class="btn btn-primary">
              Ёфти бештар
            </a>

          </div>

          <!--blog end-->
      </div>
<?php endforeach ?>
    </div>
  </div>
    <!--container end-->

  

    <!--container end-->

<?php $this->load->view('footer'); ?>
