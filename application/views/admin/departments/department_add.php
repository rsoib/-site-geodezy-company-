  <?php $this->load->view('templates/admin_master_header'); ?>
<div class="top"  style="margin-top:60px; margin-left:15px;"></div>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php $this->load->view('admin/left_sidebar'); ?>
		</div>
	</div>
</div>
 <div class="row">
    <div class="container">
      <div class="col-md-9">
        <div class="panel panel-primary">
         
            <div class="panel-heading">
              <h3 class="panel-title"><?=$page_title;?></h3>
            </div>
            
            <div class="panel-body panel-admin">
                <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Номи шӯъба *</label>
                        <input type="text" name='dep_name' value="<?=set_value('dep_name')?>" class="form-control"><h5 style="color:red;"><?=form_error('dep_name')?></h5><br>

                      </div>

                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Мудири шӯъба *</label>
                        <input type="text" name='dep_author' value="<?=set_value('dep_author')?>" class="form-control"><h5 style="color:red;"><?=form_error('dep_author')?></h5><br>

                      </div>

                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Шарҳ*</label>
                        <textarea name="dep_text" id="" class="form-control" value=""><?=set_value('dep_text')?></textarea><h5 style="color:red;"><?=form_error('dep_text')?></h5><br>
                      </div>
                       <input type="submit" value='Илова' name="go" class="btn btn-primary">
                    </form>
            </div>
        </div>
      </div>
    </div>
</div>
