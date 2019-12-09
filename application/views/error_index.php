<?php $this->load->view('header'); ?>
<!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1><?=$page_title.' Хатогӣ';?></h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="/">Асосӣ</a></li>
                        <li class="active"><?=$page_title?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="gray-bg">
    <div class="fof">
            <!-- 404 error -->
        <div class="container  error-inner wow flipInX">
            <h1>404, Саҳифа ёфт нашуд.</h1>
            <p class="text-center">Чунин саҳифа вуҷуд надорад.</p>
            <a class="btn btn-info" href="/">АЗ САҲИФАИ АСОСӢ ОҒОЗ КУНЕД</a>
        </div>
        <!-- /404 error -->
        </div>
    </div>
    <!--container end-->
   <?php $this->load->view('footer'); ?>