<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page_title;?></title>
<link href="<?php echo site_url('assets/admin/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo site_url('assets/admin/css/editor.css');?>" rel="stylesheet">
<link href="<?php echo site_url('assets/admin/css/style.css');?>" rel="stylesheet">
<script src="<?php echo site_url('/assets/admin/js/jquery-2.2.4.min.js');?>"></script>
<script src="<?php echo site_url('/assets/admin/js/bootstrap.min.js');?>"></script> 

</head>
<body>
<?php
if($this->ion_auth->logged_in()) {
?>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('admin');?>"><?php echo $this->config->item('cms_title');?></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/admin/profile/services">Хизматрасониҳо</a></li>
        <li><a href="/admin/profile/news">Хабарҳо</a></li>  
        <li><a href="/admin/profile/story">Таърихи мо</a></li> 
        <li><a href="/admin/profile/departments">Шӯъбаҳо</a></li>    
        <li><a href="/admin/profile/messages">Паёмҳо <span class="badge" style="background-color:orange;"></span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('admin/user/logout');?>">Баромадан</a></li>
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</nav>
<?php
}
