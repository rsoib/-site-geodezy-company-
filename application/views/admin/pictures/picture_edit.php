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
                        <label for="inputID" class="col-sm-12">Расм *</label>
                          <input type="file" name="userfile" class="form-control">
                           <img src="/assets/img/pictures/<?=$item->pict_name;?>" width="120px" height="120px">
                      </div>
                       <input type="submit" value='Илова' name="go" class="btn btn-primary">
                    </form>
            </div>
        </div>
      </div>
    </div>
</div>
