    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              АЛОҚА
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
                Алоқа
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

            <?php if(!empty($this->session->flashdata('message'))): ?>
                    <h2 class="alert alert-info">
                      <?=$this->session->flashdata('message');?>
                    </h2>
                  <?php endif; ?>

                <div class="col-lg-7 col-sm-7 address">
                      <h4>
                          Барои алока бо Шумо ба Мо нависед
                      </h4>
                    <div class="contact-form">    
                        <form id="sendBrief" action="" method="post" class="form-horizontal has-validation-callback" role="form">
                            <p class="text-info">Майдонҳое, ки бо *, ишора шудаанд барои пур кадан заруранд.</p>
              
                                <div class="form-group">
                                    <label for="nameorg" class="col-sm-12 ">Ном *</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="name" id="name" class="form-control" value="<?=set_value('name')?>" title="" data-validation="required" data-validation-error-msg="Майдони ном барои пур кардан зурур аст.">
                                    </div>
                                </div>

          
                                <div class="form-group">
                                    <label for="nameorg" class="col-sm-12 ">Email *</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="email" id="email" class="form-control" value="<?=set_value('email')?>" title="" data-validation="email" data-validation-error-msg="Email - и нодуруст ворид карда шуд.">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nameorg" class="col-sm-12 ">Телефон</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="phone" id="phone" class="form-control" value="<?=set_value('phone')?>" title="">
                                    </div>
                                </div>
                              
                               <div class="form-group">
                                    <label for="nameorg" class="col-sm-12 ">Паём *</label>
                                    <div class="col-sm-12">
                                       <textarea placeholder="" name="text" rows="5" class="form-control" data-validation="required" data-validation-error-msg="Майдони паём барои пур кардан зурур аст."><?=set_value('text')?></textarea>
                                    </div>
                               </div>
                               <input class="btn btn-info" name="go" type="submit" value="Фиристодан">
                               <input class="btn btn-default" name="reset" type="reset" value="Тоза кардан">
                              
                        </form>
                            <div class="clearfix">&nbsp;</div>

                        </div>
  
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
                        <script>

                          $.validate({
                            modules : 'location, date, security, file',
                            onModulesLoaded : function() {
                              $('#country').suggestCountry();
                            }
                          });

                          // Restrict presentation length
                          $('#presentation').restrictLength( $('#pres-max-length') );
                        </script>  


          </div>
        </div>
      </div>

    </div>

    
    <!--container end-->
<?php $this->load->view('footer'); ?>