<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <!-- META SECTION -->
    <title>Luz de amor | Iniciar sesión</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--Meta Google-->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="nofollow">
    <meta name="googlebot" content="nofollow">
    <meta name="google" content="notranslate" />
    <meta name="author" content="Chontal Developers" />
    <meta name="copyright" content="2015 c-develpers.com Todos los derechos reservados." />
    <meta name="application-name" content="C-Developers" />
    <link rel="author" href="https://plus.google.com/u/0/101316577346995540804/posts"/>

    <!-- CSS INCLUDE -->

    <link rel="stylesheet" href="<?= $this->url->get('dash/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->get('dash/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" id="theme" href="<?= $this->url->get('dash/css/login.css') ?>"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= $this->url->get('dash/css/font-awesome.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?= $this->url->get('dash/css/font-awesome.css') ?>"/>
    <link rel="stylesheet" href="<?= $this->url->get('dash/css/formValidation.min.css') ?>" media="screen">
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<?= $this->getContent() ?>


    
        <?= $this->assets->outputJs('JsIndexLogin') ?>
    


<script>
    $('#formLogin').formValidation({
        framework:'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        locale:"es_Es",
        fields:{
            username:{
                validators:{
                    notEmpty:{
                        message:"Este campo no puede estar vacio"
                    }
                }
            },
            password:{
                validators:{
                    notEmpty:{
                        message:"Rellenar este campo"
                    }
                }
            }
        }
    }).on('success.form.fv', function(e) {
        e.preventDefault();
        $.ajax({
            url:"/ajax",
            method: "post",
            data: $(this).serialize(),
            datatype:"json",
            success: function (resp) {
                console.log(resp);
                if(resp.message=="SUCCESS"){
                    window.location.replace("/dashboard");
                }else{

                }
            },  error: function(jqXHR,estado,error){
                console.log(estado);
                console.log(error);
            },complete: function(jqXHR,estado){
                console.log(estado);
            }
        });
    });
</script>
</body>
</html>
