<!DOCTYPE html>
<html>
    
    <head>
        <title>Tutorial ventanas modales con Jquery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="reglamodal.css">
        <script type="text/javascript">
            function openVentana(){
                $(".ventana").slideDown(4000);
            }
            function closeVentana(){
                $(".ventana").slideUp("fast");
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="ventana">
                <h1>Ventana modal</h1>
                <div class="form">
                    <div class="cerrar"><a href="javascript:closeVentana();">Cerrar X</a></div>
                    
                    <form><h1>Formulario Login</h1>
                    <hr>
                        <table>
                            <fieldset>
                                <legend>Datos personales</legend>
                                Nombre <br/>
                                <input type="text" name="nombre" value="" />
                                <br/>
                                Apellidos <br/>
                                <input type="text" name="apellidos" value="" />
                                <br/>
                                Estado <br/>
                                <select>
                                    <option value="DIF">Distrito Federal</option>
                                    <option value="AGS">Aguascalientes</option>
                                    <option value="BCN">Baja California</option>
                                    <option value="BCS">Baja California Sur</option>
                                    <option value="CAM">Campeche</option>
                                    <option value="CHP">Chiapas</option>
                                    <option value="CHI">Chihuahua</option>
                                    <option value="COA">Coahuila</option>
                                    <option value="COL">Colima</option>
                                    <option value="DUR">Durango</option>
                                    <option value="GTO">Guanajuato</option>
                                    <option value="GRO">Guerrero</option>
                                    <option value="HGO">Hidalgo</option>
                                    <option value="JAL">Jalisco</option>
                                    <option value="MEX">M&eacute;xico</option>
                                    <option value="MIC">Michoac&aacute;n</option>
                                    <option value="MOR">Morelos</option>
                                    <option value="NAY">Nayarit</option>
                                    <option value="NLE">Nuevo Le&oacute;n</option>
                                    <option value="OAX">Oaxaca</option>
                                    <option value="PUE">Puebla</option>
                                    <option value="QRO">Quer&eacute;taro</option>
                                    <option value="ROO">Quintana Roo</option>
                                    <option value="SLP">San Luis Potos&iacute;</option>
                                    <option value="SIN">Sinaloa</option>
                                    <option value="SON">Sonora</option>
                                    <option value="TAB">Tabasco</option>
                                    <option value="TAM">Tamaulipas</option>
                                    <option value="TLX">Tlaxcala</option>
                                    <option value="VER">Veracruz</option>
                                    <option value="YUC">Yucat&aacute;n</option>
                                    <option value="ZAC">Zacatecas</option>
                                </select>
                                <br/>
                                Ciudad <br/>
                                <input type="text" name="Estado" value="" size="10" maxlength="9" />
                            </fieldset>
                            
                        </table>
                    </form>
                </div>

            </div>
            <h1>Ventanas modales en nuestra web</h1>

            <h2><a href="javascript:openVentana();">Ver mas...></a></h2>
            <div class="sist_reports"> 
                <input type="radio" name="numprioridad" value="1" checked>
                Realizada 
                <input type="radio" name="numprioridad" value="2">
                Pendiente 
            <div id="dat_rep" style="display: none;"> 
                <label>
                    Fecha
                </label> 
                    <input type="date" name="datfecha" id="datepicker" readonly="readonly" size="12" value="" required/> 
            </div>

            </div>

    </body>