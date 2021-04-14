
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/main.css">
    <title>Login</title>
    <script src="adminjs/login.js" defer></script>
</head>
<body>
    <main class="contenedor">
        <h1 class="centrar">
            <img class="logo" src="../img/logo.png" alt="logo">
        </h1>
        <form class="formulario" name="formulario" method='post' action='admincontroller/validar.php' onsubmit="return validaLogin();" >
            <fieldset>
                <legend>Regístrate</legend>
                <div class="contenedor-campos">
                    <div class="campo">
                        <label >Correo</label>
                        <input class="input-text" type="email" name="email" placeholder="Tu Email">
                        <span id="msgemail"></span>
                    </div>
                    <div class="campo">
                        <label>Contraseña</label>
                        <input class="input-text" type="password" name="password">
                        <span id="msgpassword"></span>
                    </div> 
                </div>
                <div class="alin-derecha">
                <button>Validar</button>
                </div>
            </fieldset>

        </form>
    </main>
    
</body>
</html>