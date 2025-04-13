<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--enlace al css-->
    <link rel="stylesheet" href="css/inicio.css">
    <!--icono de la pagina-->
    <link rel="shortcut icon" href="img/logo.ico"/>
    <!--Nombre de la pagina-->
    <title>Uztech</title>
</head>
<body>
    <!--Formulario de logeo-->
    <form action="back/ingreso.php"><!--accion buscar en la bd al usuario-->
        <div><h2>Iniciar Sesion</h2></div>
        <input type="email" name="email" id="email" placeholder="Numero De identificacion" required>
        <br>
        <input type="password" name="password" id="password" placeholder="Contraseña" required>
        <br>
        <button type="submit" id="ingresar"></button>
    </form>
</body>
</html>