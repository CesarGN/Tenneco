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
                    <p>
                        <label for="login">Email:</label>
                        <input type="text" name="login" id="login" placeholder="name@example.com">
                    </p>

                    <p>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" placeholder="***********">
                    </p>

                    <p class="login-submit" style="margin-top: 7px;">
                        <button type="submit" class="login-button" href=""></button>
                    </p>

                    <p class="forgot-password"><a href="index.php"><b>Forgot your password?</b></a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>