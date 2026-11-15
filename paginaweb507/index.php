<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetería Escolar</title>
    <!-- Vinculación exacta con tu archivo de estilos -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!-- Encabezado con Logotipo -->
    <header>
        <div class="header-container">
            <div class="logo-box">
                <div class="logo-text">
                    <strong>AROMA CAFÉ</strong>
                </div>
            </div>
            <div class="header-title">
                <h1>Cafetería Escolar</h1>
                <p>Alimentos y bebidas para estudiantes</p>
            </div>
        </div>
    </header>

    <!-- Barra de Navegación -->
    <nav class="nav-bar">
        <a href="#menu">Menú</a> | <a href="#contacto">Contacto</a>
    </nav>

    <main class="main-container">
        <!-- Sección Menú -->
        <section id="menu" class="section-box">
            <h2>Menú</h2>
            <table class="tabla-menu">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hamburguesa</td>
                        <td>$45</td>
                    </tr>
                    <tr>
                        <td>Jugo</td>
                        <td>$20</td>
                    </tr>
                    <tr>
                        <td>Sándwich</td>
                        <td>$30</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Sección Contacto -->
        <section id="contacto" class="section-box">
            <h2>Contacto</h2>
            <div class="form-container">
                <form action="index.php" method="POST">
                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>

                    <div class="campo">
                        <label for="correo">Correo:</label>
                        <input type="email" id="correo" name="correo" required>
                    </div>

                    <div class="campo">
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn-enviar">Enviar</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>Cafetería Escolar © 2026</p>
    </footer>

</body>
</html>
