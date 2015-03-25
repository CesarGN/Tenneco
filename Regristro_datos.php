<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dark Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
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
            <fieldset class="field"> 
                <legend> Ingresa   </legend>
                <form method="post" action="Altas_bajas.php" class="login">
                    <p>
                        <label for="login">Email:</label>
                        <input type="text" name="login" id="login" placeholder="name@example.com">
                    </p>

                    <p>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" placeholder="***********">
                    </p>

                    <p class="login-submit">
                        <button type="submit" class="login-button" href=""></button>
                    </p>

                    <p class="forgot-password"><a href="index.php"><b>Forgot your password?</b></a></p>
                </form>
            </fieldset>  
        </div>
    </body>
</html>