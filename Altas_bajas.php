<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Registro</title>
        <link rel="stylesheet" href="formulario.css">
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="acordeon.js"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="containerfluid">
            <div class="margen">
                <div class="row fondomarg degradadoazul">      
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
        <div class="row">
            <div class="cajademo3-auxiliar"> 
                <div class="cajademo3">
                    <a class="thumbnail" style="float: left;">
                        <img src="img/1.png">
                    </a>
                    <a class="thumbnail" style="float: left;">
                        <img src="img/3.png" >
                    </a>
                    <a class="thumbnail" style="float: left;">
                        <img src="img/2.png" >
                    </a>
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
                    <table>
                        <fieldset class="puestofield">
                            <legend class="margenlegend">
                                Puesto
                            </legend>
                            Nombre del puesto
                            <br/> 
                            <input type="text" name="nombre_puesto" value="" />
                            <br/><br/>
                            Tipo de contrato: <br/>   
                            <select>
                                <option value="Indf">Indefinido</option>
                                <option value="Perm">Permanente</option>
                                <option value="Temp">Temporal</option>
                                <option value="Tiem">Tiempo completo</option>
                                <option value="Medio">Medio Tiempo</option>
                                <option value="Hono">Honorarios</option>
                                <option value="Otro">Otro</option>
                            </select> <br/><br/>
                            Ubicación de la vacante:
                            <br/>
                            <select>
                                <option value="Ags">Aguascalientes</option>
                                <option value="Cel">Celaya</option>
                                <option value="Pue">Puebla</option>
                                <option value="Rey">Reynosa</option>
                            </select> <br/><br/>
                            Conocimientos:
                            <br/>
                            <textarea class="form-control" rows="3" style="resize: none;"></textarea><br/>
                            Experiencia:
                            <br/>
                            <textarea class="form-control" rows="3" style="resize: none;"></textarea><br/>
                            Idioma:
                            <div class="radio">
                                <label>
                                    <input type="radio" name="opciones" id="opciones_1" value="1" checked>
                                    Español
                                </label>
                            </div>
                            <div class="radio" style="margin-bottom: 30px;">
                                <label>
                                    <input type="radio" name="opciones" id="opciones_2" value="2" >
                                    Ingles
                                </label><br/>
                            </div>
                            <div id="ING" style="display: none;">
                                Nivel:
                                <select>
                                    <option value="Ba">Basico</option>
                                    <option value="Int">Intermedio</option>
                                    <option value="Av">Avanzado</option>
                                </select><br/>
                            </div>
                        </fieldset>
                        <br/>
                        <fieldset class="perfilfield">
                            <legend class="margenlegend">
                                Perfil
                            </legend>
                            Sexo:
                            <div class="radio">
                                <label>
                                    <input type="radio" name="opciones" id="opciones_1" value="3" checked>
                                    Masculino
                                </label>
                            </div>
                            <div class="radio" style="margin-bottom: 10px;">

                                <label>
                                    <input type="radio" name="opciones" id="opciones_2" value="4" >
                                    Femenino
                                </label>
                            </div>
                            <div class="radio" style="margin-bottom: 10px; margin-bottom: 25px;">
                                <label>
                                    <input type="radio" name="opciones" id="opciones_3" value="5" >
                                    Indistinto
                                </label>
                            </div>
                            <br/><br/>
                            Edad:<br/>
                            <input type="text" name="edad" value="" /><br/><br/>
                            Estado civil:<br/>
                            <select>
                                <option value="Ca">Casado</option>
                                <option value="So">Soltero</option>
                                <option value="In">Indistinto</option>
                            </select><br/><br/>
                            Habilidades Tecnicas:
                            <textarea class="form-control" rows="3" style="resize: none;"></textarea><br/>
                            Caracteristicas Personales:
                            <textarea class="form-control" rows="3" style="resize: none;"></textarea><br/>
                        </fieldset>

                    </table>     
                </div>
            </div>
        </div>
    </body>
</html>