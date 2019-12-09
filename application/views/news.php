<div class="text-center feature-head wow fadeInDown">
            <h1 class="">
              Хабарҳо
            </h1>

          </div>
  
    <!--property start-->
    <div class="property gray-bg">
      <div class="container">
        <div class="row">
          <?php foreach ($news as $item): ?>
          <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
            <img src="/assets/img/news/<?=$item['news_image'];?>" alt="" width="400" height="519" style="border: solid 5px #dad7d5;; ">
          </div>

          <div class="col-lg-6 col-sm-6 wow fadeInRight">
          
            <h1>
              <?=$item['news_title'];?>
            </h1>
            <hr>
            <p>
              <?=$item['news_short'];?>
            </p>
            
            <hr>
            <a href="/info/news/content/<?=$item['news_id'];?>" class="btn btn-purchase">
             Ёфти бештар
            </a>
    <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
    <!--property end-->

   