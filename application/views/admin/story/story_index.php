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
                	<?php if(!empty($this->session->flashdata('message'))): ?>
                    <h2 class="alert alert-info">
                      <?=$this->session->flashdata('message');?>
                    </h2>
                  <?php endif; ?>
					       
                 <a href="/admin/profile/personals" class="pull-right btn btn-success" style="margin-right: 10px;"><i class="glyphicon glyphicon-th-large"></i>Кормандон</a>
                 <a href="/admin/profile/pictures" class="pull-right btn btn-warning" style="margin-right: 10px;"><i class="glyphicon glyphicon-th-large"></i>Расмҳо</a>
                	<div class="after" style="margin-bottom:50px;"></div>
				        
                <h3 style="text-align:center">Таърихи мо</h3>
				        <a href="/admin/profile/story/add" class="pull-right btn btn-default" style="margin-bottom:10px;"><i class="glyphicon glyphicon-plus"></i>Илова</a>
				        <hr>

					         <table class="table table-hover">
                            <tbody>
                              <tr class="info">
                                <td>#</td>
                                <td>Сарлавҳа</td>
                                <td>Амалиёт</td>
                              </tr>
                            <?php $i=1; foreach ($story as $item): ?>
                              <tr>
                                <td><?=$i;?></td>
                                <td><?=$item['history_title'];?></td>
                                <td><a href="/admin/profile/story/edit/<?=$item['history_id'];?>" title="Тағйир" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Тағйир</a>
                                    <a href="/admin/profile/story/delete/<?=$item['history_id'];?>" title="Удалить" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>нест</a></td>
                              </tr>
                            <?php $i++; endforeach ?>
                            </tbody>
                          </table> 

                </div>
            </div>
        </div>
    </div>
</div>
