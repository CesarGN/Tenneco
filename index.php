<<<<<<< HEAD

<?php
header('Location: Vistas/principal.php');
?>
   
=======
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bolsa de trabajo TENNECO</title>
        <!-- Css de bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="screen" href="reglas.css">
        <!-- Respond.js proxy on external server -->
        <link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />

        <script src="html5shiv-master/dist/html5shiv.js"></script>
        <script src=""></script>

        <link rel="shortcut icon" href="imgs/ico.png" type="image/png" />
        <!-- Respond.js redirect location on local server -->
        <link href="/path/to/respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />

        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="acordeon.js"></script>

    </head>
    <body>
        <!-- Contenedor para el encabezado Tenneco-->
        <div class="container-fluid">
            <div class="margen">
                <div class="row fondomarg degradadoazul margen">      </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <a class="thumbnail adapta">
                            <img src="imgs/header_logo.png" >
                        </a>
                    </div>
                </div>
                <div class="row fondomargb degradadoazul">
                </div>
            </div>

            <!-- Contenedor para carrusel-->


            <div class="row col-lg-10 col-lg-offset-1">
                <div class=" col-sm-10 col-sm-push-1">
                    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner carrusel">
                            <div class="item active">
                                <img src="imgs/1.gif" alt="...">
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="imgs/2.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="imgs/3.jpg" alt="..."> 
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="imgs/4.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="imgs/5.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h3></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>




            <!-- Comienza contenedor de acordeon-->

            <div>
                <div class="row  col-lg-10 col-lg-offset-1">
                    <div class="col-sm-3 col-md-3">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <span class="glyphicon glyphicon-tasks text-info">
                                        </span>Contentenido</a>
                                    </h4>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-briefcase text-info ">
                                            </span>Oportunidades</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body degradadoazul">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <a class="ai2" href="#" id="O1">Bolsa de trabajo</a> <span class="label label-success">Vacantes 320</span>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user text-primary">
                                            </span>Gente Tenneco</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body degradadoazul">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-globe"></span><a class="ai2" href="#" id="G1">¿Quienes somos?</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-time"></span><a class="ai2" href="#" id="G2">¿Por qué trabajar con nosotros?</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book"></span><a class="ai2" href="#" id="G3">¿Cual es nuestra misión?</a>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-question-sign text-primary">
                                            </span>Ayuda</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body degradadoazul">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-open"></span><a class="ai2" href="#" id="A1">Postulate</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-saved"></span><a class="ai2" href="#" id="A2">Contratación</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-info-sign"></span><a class="ai2" href="#" id="A3">Tips para tu CV</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-phone-alt text-primary">
                                            </span>Asistencia</a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body degradadoazul">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-earphone"></span><a class="ai2" href="#" id="AS1">Telefonos</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-envelope"></span><a class="ai2" href="#" id="AS2">E-mail</a>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---- Div 1 mostrar-->

                    <div class="col-sm-9 col-md-9 efecto" id="DivO1" style="display: none;">
                        <div class="well col-sm-offset-0">
                            <h1 href="#">
                                Contenido
                            </h1>

                        </div>
                    </div>
                    <!---- Div 2 mostrar-->
                    <div class="col-sm-9 col-md-9" id="DivG1" style="display: none;">
                        <div class="well col-sm-offset-0">
                            <div class="fblanco"> 
                                <div class="col-lg-12 ">
                                    <a class="thumbnail ab5" >
                                            <img src="imgs/12.JPG" >
                                    </a>
                                </div>
                                <h1 class="margh1" href="#"> Tenneco nace en el año de 1943  </h1>
                                <p class="margdiv"> Es el productor y comercializador de sistemas 
                                    de escape más grande del mundo produciendo uno 
                                    de cada cuatro amortiguadores y sistemas de escape 
                                    vendidos.
                                    Tenneco Celaya inicia con su apertura en el año
                                    1995 en la ciudad de Querétaro y en el año 2005
                                    se cambia a la ciudad de Celaya.
                                </p>




                            </div>
                            
                        </div>
                    </div>
                        <div class="col-sm-9 col-md-9" id="DivG2" style="display: none;">
                            <div class="well col-sm-offset-0">
                                <h1 href="#">
                                    Ya
                                </h1>

                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9" id="DivG3" style="display: none;">
                            <div class="well col-sm-offset-0">
                                <h1 href="#">
                                    Salio
                                </h1>

                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9" id="DivA1" style="display: none;">
                            <div class="well col-sm-offset-0">
                                <h1 href="#">
                                    yeii
                                </h1>

                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9" id="DivA2" style="display: none;">
                            <div class="well col-sm-offset-0">
                                <h1 href="#">
                                    ii
                                </h1>

                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9" id="DivA3" style="display: none;">
                            <div class="well col-sm-offset-0">
                                <h1 href="#">
                                    i
                                </h1>

                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9" id="DivAS1" style="display: none;">
                            <div class="well col-sm-offset-0">
                                <h1 href="#">
                                    weerwedfdfsdfs
                                </h1>


                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9" id="DivAS2" style="display: none;">
                            <div class="well col-sm-offset-0">
                                <h1 href="#">
                                    ye
                                </h1>

                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9" id="DivAS3" style="display: none;">
                            <div class="well col-sm-offset-0">
                                <h1 href="#">
                                    y
                                </h1>

                            </div>
                        </div>

                    </div> 
                </div>



                <!-- Comienza contenedor de miniaturas-->
                <div class="row"> 
                    <marquee  scrolldelay="-1" scrollamount="7" direction="left" loop="infinite" onmouseout="this.start()" onmouseover="this.stop()">

                        <a href="http://www.monroe.com.mx/home/oespectrum" target="_blank">
                            <img class="img-rounded" style="margin-right: 15px;" title="Titulo de la entrada" alt="Titulo de la entrada" src="imgs/minis/minis monroe/m1.png"/></a>
                        <a href="http://www.monroe.com.mx/home/reflex" target="_blank">
                            <img class="img-rounded" style="margin-right: 15px;" title="Titulo de la entrada" alt="Titulo de la entrada"  src="imgs/minis/minis monroe/m2.png"/></a>
                        <a href="http://www.monroe.com.mx/home/max_air" target="_blank">
                            <img class="img-rounded" style="margin-right: 15px;" title="Titulo de la entrada" alt="Titulo de la entrada"  src="imgs/minis/minis monroe/m3.png"/></a>
                        <a href="http://www.monroe.com.mx/home/max_lift" target="_blank">
                            <img class="img-rounded" style="margin-right: 15px;" title="Titulo de la entrada" alt="Titulo de la entrada"  src="imgs/minis/minis monroe/m4.png"/></a>
                        <a href="http://www.monroe.com.mx/home/gas_magnum" target="_blank">
                            <img class="img-rounded" style="margin-right: 15px;" title="Titulo de la entrada" alt="Titulo de la entrada"  src="imgs/minis/minis monroe/m5.png"/></a>
                        <a href="http://www.monroe.com.mx/home/monro_matic_plus" target="_blank">
                            <img class="img-rounded" style="margin-right: 15px;" title="Titulo de la entrada" alt="Titulo de la entrada"  src="imgs/minis/minis monroe/m6.png"/></a>
                        <a href="http://www.monroe.com.mx/home/sensa_trac" target="_blank">
                            <img class="img-rounded" style="margin-right: 15px;" title="Titulo de la entrada" alt="Titulo de la entrada"  src="imgs/minis/minis monroe/m7.png"/></a>
                    </marquee>
                    <div class="fondomarg degradadoazul"></div>
                </div>
            </div>

    </body>
</html>
>>>>>>> branch 'master' of https://github.com/CesarGN/Tenneco.git
