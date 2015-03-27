<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dark Login Form</title>
        <link rel="stylesheet" href="style.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="containerfluid">
            <div class="margen">
                <div class="row fondomarg degradadoazul margen">      </div>
                <div class="row " style="height: 121px;">
                    <div class="col-lg-12 ">
                        <a class="thumbnail">                    
                            <img src="imgs/header_logo.png" >                            
                        </a>
                    </div>
                </div>
                <div class="row fondomargb degradadoazul">
                </div>
            </div>
            <div class="row  col-lg-10 col-lg-offset-1">              
                <form method="post" action="Altas_bajas.php" class="login">
                    <table>
                            <fieldset style="width:530px;padding-top: 5px;border-top-width: 20px;margin-top: 10px;padding-right: 5px;padding-bottom: 5px;                                     
                                      padding-left: 5px;border-right-width: 20px;border-bottom-width: 20px;border-left-width: 20px;border-color:#FDE43B;">

                                <legend style="width: 150px; color: #EEEEEE; font-size: 28px;" > Registro </legend>                
                    <p>
                        <label for="login">Email:</label>
                        <input type="text" name="login" id="login" placeholder="name@example.com">
                    </p>

                    <p>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" placeholder="***********">
                    </p>

                    <p class="login-submit" style="margin-top: 88px;">
                        <button type="submit" class="login-button" href=""></button>
                    </p>

                    <p class="forgot-password"><a href="index.php"><b>Forgot your password?</b></a></p>
                    </fieldset>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>