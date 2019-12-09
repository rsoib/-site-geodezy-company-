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


                         <table class="table table-hover">
                            <tbody>
                              <tr class="info">
                                <td>#</td>
                                <td>Ном</td>
                                <td>Email</td>
                                <td>Вакт</td>
                                <td>Амалиёт</td>
                              </tr>
                            <?php $i=1; foreach ($messages as $item): ?>
                              <tr>
                                <td><?=$i;?></td>
                                <td><?=$item['name'];?></td>
                                <td><?=$item  ['email'];?></td>
                                <td><?=$item['mess_date'];?></td>
                                <td>
                                    <a href="/admin/profile/messages/show/<?=$item['mess_id'];?>" class="btn btn-default" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="/admin/profile/messages/delete/<?=$item['mess_id'];?>" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                                  </td>
                              </tr>
                            <?php $i++; endforeach ?>
                            <tr>
                                <td colspan="4">Ҳамаи паёмҳо</td>
                                <td><span class="badge"><?=$i-1;?></span></td>
                            </tbody>
                        </table> 
                </div>
            </div>
        </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Паём аз</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Сохранить изменения</button>
      </div>
    </div>
  </div>
</div>