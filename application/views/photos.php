  <!--recent work start-->
   
     <div class="container">
        <div class="row">
          <div class="col-lg-12 recent">
            <h3 class="recent-work">
              Аксхо
            </h3>
            <p>Кормандон дар раванди корхои сахрои</p>
            <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">
          <?php foreach ($photos as $item): ?>
              <div class="item view view-tenth">
                <img src="/assets/img/pictures/<?=$item['pict_name'];?>" alt="work Image" style="height:186px; width: 279;">
                <div class="mask">
                  <a href="/info/pictures" class="info" data-toggle="tooltip" data-placement="top" title="Хамаи расмхо">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
        <?php endforeach ?>

            </div>
          </div>
        </div>
      </div>
 


    <!-- service end -->
    <div class="hr">
      <span class="hr-inner"></span>
    </div>