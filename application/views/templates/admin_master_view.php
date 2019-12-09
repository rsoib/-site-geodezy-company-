<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
$this->load->view('templates/admin_master_header'); ?>
<div class="container">
    <div class="main-content" style="padding-top:60px;">
        <?php echo $the_view_content; ?>
    </div>
</div>
<?php $this->load->view('templates/admin_master_footer');?>
