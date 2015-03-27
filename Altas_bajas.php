<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Registro</title>
        <link rel="stylesheet" href="formulario.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="containerfluid">
            <div class="margen">
                <div class="row fondomarg degradadoazul margen">      
                </div>
                <div class="row" style="height: 121px;">
                    <div class="col-lg-12 ">
                        <a class="thumbnail">
                            <img src="imgs/header_logo.png">
                        </a>                       
                    </div>
                </div>
                <div class="row fondomargb degradadoazul">
                </div>
            </div>
        </div>
        <div class="container degradadoazul">
            <div class="izquierda">
                <div class="botones">
                    Nombre <br/>                 
                    <br/>
                    Apellidos <br/>             
                </div>
            </div>
            <div class="derecha">
                <div class="informacion">
                    Puesto: <br/> 
                    <input type="text" name="nombre" value="" />
                    <br/>
                    Tipo de contrato: <br/>   
                    <select>
                                    <option value="Indf">Indefinido</option>
                                    <option value="Perm">Permanente</option>
                                    <option value="Temp">Temporal</option>
                    </select>
                </div>
            </div>
        </div>
    </body>
</html>