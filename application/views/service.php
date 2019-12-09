  <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
              Хизматрасониҳои мо 
            </h1>

          </div>


          <div class="feature-box">
            <?php foreach ($services as $item): ?>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                <img src="/assets/img/services/<?=$item['service_image'];?>" alt="" width="100" height="100">

                </em>
                <h4>
                  <b><?=$item['service_name'];?></b>
                </h4>
              </div>
              <p class="text-center">
                <?=$item['service_short'];?>
              </p>
            </div>
          <?php endforeach ?>
            
            
          </div>

          <!--feature end-->
        </div>
      </div>
    </div>