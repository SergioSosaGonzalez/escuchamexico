<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Luz de amor</title>
    <!-- CSS INCLUDE -->
    <link href="<?=$this->url->get('dash/css/bootstrap.css')?>" rel="stylesheet" type="text/css" >
    <link href="<?=$this->url->get('dash/css/font-awesome.css')?>" rel="stylesheet" type="text/css" >
    <link href="<?=$this->url->get('dash/css/sweet-alert.css')?>" rel="stylesheet" type="text/css" >
    <link href="<?=$this->url->get('dash/css/material-design-iconic-font.min.css')?>" rel="stylesheet" type="text/css" >
    <link href="<?=$this->url->get('dash/css/normalize.css')?>" rel="stylesheet" type="text/css" >
    <link href="<?=$this->url->get('dash/css/jquery.mCustomScrollbar.css')?>" rel="stylesheet" type="text/css" >
    <link href="<?=$this->url->get('dash/css/style.css')?>" rel="stylesheet" type="text/css" >
    <link href="<?=$this->url->get('dash/css/jquery.dataTables.css')?>" rel="stylesheet" type="text/css" >
    <link href="<?=$this->url->get('dash/css/sweetalert.css')?>" rel="stylesheet" type="text/css" >

</head>
<body>
<div class="navbar-lateral full-reset">
    <div class="visible-xs font-movile-menu mobile-menu-button"></div>
    <div class="full-reset container-menu-movile custom-scroll-containers">
        <div class="logo full-reset all-tittles">
            <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
            Luz de amor
        </div>
        <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
            <figure>
                <img src="/dash/img/LUZ_BAJA.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
            </figure>
            <p class="text-center" style="padding-top: 15px;">Sistema de gestion</p>
        </div>
        <div class="full-reset nav-lateral-list-menu">
            <ul class="list-unstyled">
                <li><a href="/dashboard"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                <li>
                    <div class="dropdown-menu-button"><i class="fa fa-user-md"></i>&nbsp;&nbsp; Psicologos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="<?=$this->url->get('dashboard/todos-psicologos')?>"><i class="fa fa-list"></i>&nbsp;&nbsp; Lista de candidatos</a></li>
                        <li><a href="<?=$this->url->get('dashboard/psicologos-activos')?>"><i class="fa fa-thumbs-up" ></i>&nbsp;&nbsp; Activos</a></li>
                        <li><a href="<?=$this->url->get('dashboard/psicologos-inactivos')?>"><i class="fa fa-thumbs-down"></i>&nbsp;&nbsp; Inactivos</a></li>
                    </ul>
                </li>
                <li>
                    <div class="dropdown-menu-button"><i class="fa fa-user"></i>&nbsp;&nbsp; Pacientes <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp;Citas</a></li>
                        <li><a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Personas pendientes</a></li>
                    </ul>
                </li>
                <li>
                    <div class="dropdown-menu-button"><i class="fa fa-comments"></i>&nbsp;&nbsp; Comentarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="/dashboard/comentarios-pendientes"><i class="fa fa-list"></i>&nbsp;Pendientes a autorizar</a></li>
                        <li><a href="/dashboard/comentarios-activos"><i class="fa fa-thumbs-up"></i>&nbsp;Autorizados</a></li>
                    </ul>
                </li>
             </ul>
        </div>
    </div>
</div>
<div class="content-page-container full-reset custom-scroll-containers">
    <nav class="navbar-user-top full-reset">
        <ul class="list-unstyled full-reset">
            <figure>
                <img src="/dash/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
            </figure>
            <li style="color:#fff; cursor:default;">
                <span class="all-tittles">Admin Name</span>
            </li>
            <li  class="tooltips-general exit-system-button" data-href="/logout" data-placement="bottom" title="Salir del sistema">
                <i class="zmdi zmdi-power"></i>
            </li>
            <li  class="tooltips-general" data-href="/logout" data-placement="bottom" title="Cambiar contraseña">
                <i class="fa fa-key"></i>
            </li>

        </ul>
    </nav>
    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">Bienvenidos al dashboard de Luz de amor <small>Gestion del sistema</small></h1>
        </div>
    </div>

    <div class="container-fluid"  style="margin: 50px 0;">
        {{ content() }}
    </div>

</div>
<script src="/dash/js/jquery.min.js"></script>
<script src="/dash/js/jquery-1.11.2.min.js"></script>
<script src="/dash/js/jquery.dataTables.js"></script>
<script src="/dash/js/modernizr.js"></script>
<script src="/dash/js/bootstrap.min.js"></script>
<script src="/dash/js/dashboardAction.js"></script>
<script src="/dash/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/dash/js/main.js"></script>
<script src="<?= $this->url->get('dash/js/sweetalert.min.js')?>"></script>
<script src="<?= $this->url->get('dash/js/formValidation.min.js')?>"></script>
<script src="<?=$this->url->get('dash/js/bootstrapV.min.js')?>"></script>
</body>
</html>
