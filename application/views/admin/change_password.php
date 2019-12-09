<?php $this->load->view('templates/admin_master_header'); ?>
<div class="row">
  <div class="col-lg-4 col-lg-offset-4">
    <h1>Вход</h1>
    <form action="" method="POST">
    	 <div class="form-group"> 
            <label for="inputID" class="col-sm-12">Логин *</label>
             <input type="text" name='login' value="" class="form-control"></h5><br>
         </div>
    	 <div class="form-group"> 
            <label for="inputID" class="col-sm-12">Пароль *</label>
             <input type="password" name='password' value="" class="form-control"></h5><br>
         </div>
         <input type="submit" class="btn btn-primary" name="go" value="Изменит">
    </form>
  </div>
</div>
