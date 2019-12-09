<div class="row">
  <div class="col-lg-4 col-lg-offset-4">
    <h3 style="text-align:center">Воридшавӣ  ба панели идоракунӣ</h3>
    <img src="/assets/img/logo.png" alt="" width="120px" height="120px;" style="margin-left:120px;">
    <?php if (!empty($this->session->flashdata('message'))) 
    {
      echo "<h4 class='alert alert-danger'>".$this->session->flashdata('message')."</h4>";
    };?>
    <?php echo form_open('',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php echo form_label('Логин','identity');?>
        <?php echo '<b style="color:red;">'.form_error('identity').'</b>';?>
        <?php echo form_input('identity','','class="form-control"');?>
      </div>
      <div class="form-group">
        <?php echo form_label('Рамз','password');?>
        <?php echo '<b style="color:red;">'.form_error('password').'</b>';?>
        <?php echo form_password('password','','class="form-control"');?>
      </div>
      <div class="form-group">
        <label>
          <?php echo form_checkbox('remember','1',FALSE);?> Ба хотир гирифтан?
        </label>
      </div>
      <?php echo form_submit('submit', 'Ворид шудан', 'class="btn btn-primary btn-lg btn-block"');?>
    <?php echo form_close();?>
  </div>
</div>
