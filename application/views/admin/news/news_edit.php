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
                        <label for="inputID" class="col-sm-12">Сарлавҳа *</label>
                        <input type="text" name='news_title' value="<?=set_value('news_title'),$item->news_title;?>" class="form-control"><h5 style="color:red;"><?=form_error('news_title')?></h5><br>

                      </div>

                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Матни кӯтоҳ *</label>
                        <textarea name="news_short" id="" cols="70"  rows="8" value=""><?=set_value('news_short'),$item->news_short;?></textarea><h5 style="color:red;"><?=form_error('news_short')?></h5><br>
                      </div>

                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Матни пурра *</label>
                         <textarea class="form-control" rows="7" name="news_content" data-validation-optional="true" value=""><?=set_value('news_content'),$item->news_content;?></textarea><h5 style="color:red;"><?=form_error('news_content')?></h5><br>
                      </div>

                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Расм *</label>
                        <input type="file" name="userfile" class="form-control">
                        <img src="/assets/img/news/<?=$item->news_image;?>" width="70px" height="70px">
                      </div>
                       <input type="submit" value='Тағйир' name="go" class="btn btn-primary">
                    </form>
            </div>
        </div>
      </div>
    </div>
</div>
