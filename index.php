<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Centro Pre Universitario</title>
</head>

<body>
  <center>

            <img src="img/login.png" width="180" heigth="180">
            <br>
              <h1>INGRESA</h1>
                <br>
                
            <form action="p_login.php" method="POST">
            <fieldset id="grupito">
            <center>   
                    <input type="text" name="txtusuario" id="txt"
                      autocomplete="off" placeholder="username (8valores)" maxlength="8">
                      <br> <br>
                    <input type="password" name="txtpass" id="txt"
                      autocomplete="off" placeholder="password (8valores)" maxlength="8">
                      <br>
                    <input type="submit" value="Iniciar Sesion" id="btn">
                  
                    <p>Ingrese sus datos</p>
            </center> 
            </fieldset>
            </form>
            
  </center>

</body>
</html>