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
                                <td>Амалиёт</td>
                              </tr>
                            <?php $i=1; foreach ($show as $item): ?>
                              <tr>
                                <td><?=$i;?></td>
                                <td><?=$item['name'];?></td>
                                <td>
                                    <a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-eye-open"></i>Дидани паём</a>
                                  </td>
                              </tr>
                            <?php $i++; endforeach ?>

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

      <?php foreach ($show as $value): ?>
        <h4 class="modal-title" id="myModalLabel">Паём аз <b><?=$value['name'];?></b></h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <tbody>
            <tr>
              <th>Id</th><td><?=$value['mess_id'];?></td>
            </tr>
            <tr>
                <th>Ном</th><td><?=$value['name'];?></td>
            </tr>
            <tr>
                <th>E-mail</th><td><?=$value['email'];?></td>
            </tr>
            <tr>
                <th>Вакти фиристодан</th><td><?=$value['mess_date'];?></td>
            </tr>
            <tr>
              <th>Телефон</th><td><?=$value['phone'];?></td>
            </tr>
            <tr>
                <th>Паём</th><td><?=$value['text'];?></td>
            </tr>
                </tbody></table>
      </div>

      <?php endforeach ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Пӯшидан</button>
      </div>
    </div>
  </div>
</div>