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
                        <label for="inputID" class="col-sm-12">Ном ва насаб *</label>
                        <input type="text" name='person_name' value="<?=set_value('person_name'),$item->person_name;?>" class="form-control"><h5 style="color:red;"><?=form_error('person_name')?></h5><br>

                      </div>

                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Шарҳ *</label>
                        <textarea name="person_text" id="" cols="40"  rows="8" value=""><?=set_value('person_text'),$item->person_text;?></textarea><h5 style="color:red;"><?=form_error('person_text')?></h5><br>
                      </div>
    
                      
                      <div class="form-group"> 
                        <label for="inputID" class="col-sm-12">Расм *</label>
                        <input type="file" name="userfile" class="form-control">
                        <img src="/assets/img/persons/<?=$item->person_image;?>" width="120px" height="120px">
                      </div>
                       <input type="submit" value='Тағйир' name="go" class="btn btn-primary">
                    </form>
            </div>
        </div>
      </div>
    </div>
</div>
