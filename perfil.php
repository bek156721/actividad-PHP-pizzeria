<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>PizzaPlaneta | Confirmación</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <h1>PizzaPlaneta</h1>
        </div>
        <div class="nav-right">
            <div class="profile-section">
                <!-- Aquí va el PHP para la imagen de perfil -->
                <img src="iimg/perfil_usuario.jpg" class="profile-pic">
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;">
        <header class="form-header">
            <h2>Edición de Perfil</h2>
        </header>
        <div class="contenedor-foto-perfil">

        <!-- Aquí va el PHP para mostrar la foto de perfil actual en grande-->


        </div>
        <!-- otro atributo? -->
        <form action="guardar.php" method="POST" enctype"multipart/form-data">
            <input type="file" name="foto_perfil" id="ipt-foto_perfil" accept="image/png, image/jpeg">
            <button type="submit" class="btn-submit">Cambiar foto</button>
        </form>
    </div>
</body>
</html>