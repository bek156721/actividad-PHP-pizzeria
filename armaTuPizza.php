<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico" />
        <title>PizzaPlaneta</title>
        <link rel="stylesheet" href="./css/styles.css">
    </head>

    <body>
        <nav class="navbar">
            <div class="nav-left">
                <?php
                    $imgs = 
                    [
                        "it" => "img/banderas/it.png",
                        "mx" => "img/banderas/mx.png",
                        "fr" => "img/banderas/fr.png",
                        "ar" => "img/banderas/ar.png"
                    ];
                    $pais = $_GET["pais"];
                    echo $pais;
                    echo "<img src =". $imgs[$pais] ." class = 'flag-icon'>";
                ?>
                <h1>PizzaPlaneta</h1>
            </div>
            <div class="nav-right">
                <div class="profile-section">
                    <!-- Aquí va el PHP para cambiar la foto de perfil -->
                    <img src="img/perfil_default.jpg" class="profile-pic">
                    <a href="perfil.php" class="btn-editar">EditarPerfil</a>
                </div>
            </div>
        </nav>

        <main class="container">
            <header class="form-header">
                <h2>¡Arma tu Pizza Perfecta!</h2>
                <p>Llena tus datos y prepárate para la mejor experiencia de tu vida.</p>
            </header>

            <form action="confirmacion.php" method="POST">
                <div class="form-grid">
                    <div class="input-group">
                        <label for="nombre">Tu nombre:</label>
                        <input type="text" name="nombre" id="ipt-nombre" placeholder="Ej. Ratatoing" required>
                    </div>

                    <div class="input-group">
                        <label for="correo">Correo electrónico:</label>
                        <input type="email" name="correo" id="ipt-correo" placeholder="hola@fersa.com" required>
                    </div>

                    <div class="input-group">
                        <label for="tipo_pizza">Especialidad de la casa:</label>
                        <select name="tipo_pizza" id="sel-tipo_pizza" required>
                            <option value="" disabled selected>Elige tu sabor...</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="queso">Queso</option>
                            <option value="mexicana">Mexicana</option>
                            <option value="cuatro_quesos">4 Quesos</option>
                            <option value="hawaiana">Hawaiana (Sin piña obvio)</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="cantidad">¿Cuántas pizzas quieres?</label>
                        <input type="number" name="cantidad" id="ipt-cantidad" min="1" max="10" value="1">
                    </div>

                    <div class="input-group">
                        <label for="picante">Nivel de picante (1-5):</label>
                        <input type="range" name="picante" id="ipt-picante" min="1" max="5" value="3">
                    </div>

                    <div class="input-group">
                        <label for="fecha_entrega">¿Cuándo la quieres?</label>
                        <input type="datetime-local" name="fecha_entrega" id="ipt-fecha_entrega" required>
                    </div>

                    <div class="input-group color-group">
                        <label for="color_caja">Color de tu caja de entrega:</label>
                        <input type="color" name="color_caja" id="ipt-color_caja" value="#e63946">
                    </div>

                    <div class="input-group full-width">
                        <label>Tamaño de pizza:</label>
                        <div class="radio-group">
                            <input type="radio" name="tamano" id="ipt-chica" value="Chica" required>
                            <label for="chica">Chica</label>
                            
                            <input type="radio" name="tamano" id="ipt-mediana" value="Mediana">
                            <label for="mediana">Mediana</label>
                            
                            <input type="radio" name="tamano" id="ipfamiliar" value="Familiar">
                            <label for="familiar">Grande</label>
                        </div>
                    </div>

                    <div class="input-group full-width">
                        <label>Extras:</label>
                        <div class="checkbox-group">
                            <input type="checkbox" name="extras[]" id="ipt-queso" value="Borde de Queso">
                            <label for="queso">Borde de Queso</label> <br>

                            <input type="checkbox" name="extras[]" id="ipt-champinones" value="Champiñones">
                            <label for="champinones">Champiñones</label><br>

                            <input type="checkbox" name="extras[]" id="ipt-jalapenos" value="Jalapeños Extra">
                            <label for="jalapenos">Jalapeños Extra</label><br>

                            <input type="checkbox" name="extras[]" id="ipt-piña" value="Piña">
                            <label for="piña">Piña</label><br>

                            <input type="checkbox" name="extras[]" id="ipt-aceitunas" value="Aceitunas">
                            <label for="aceitunas">Aceitunas</label>
                        </div>
                    </div>

                    <div class="input-group full-width">
                        <label for="instrucciones">Instrucciones de Entrega:</label>
                        <textarea name="instrucciones" id="txta-instrucciones" rows="4" placeholder="Casa de color azul, porton negro"></textarea>
                    </div>
                </div>

                <!-- Aquí va otro php (Oculto, wuuu) -->
                
                <button type="submit" class="btn-submit">¡Pedir mi Pizza!</button>
            </form>
        </main>
    </body>
</html>