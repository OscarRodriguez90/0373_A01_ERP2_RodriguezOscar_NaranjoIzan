<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía de Instalación de Odoo</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <header>
        <h1>Guía de Instalación de Odoo</h1>
        <nav>
            <ul>
                <li><a href="../../index.php">Inicio</a></li>
                <li><a href="guia_instal·lació.php" class="active">Guía Instal·lació</a></li>
                <li><a href="Módulo CRM.php">Módulo CRM</a></li>
                <li><a href="Módulo Gestión de ventas.php">Módulo Gestión de ventas</a></li>
                <li><a href="Backup.php">Backup</a></li>
                <li><a href="conclusions.php">Conclusiones</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="content-with-image">
            <div class="text">
                <h2>Paso 1: Instalar PostgreSQL</h2>
                <p>
                    Antes de instalar Odoo, asegúrate de instalar PostgreSQL, que es el sistema de gestión de bases de datos necesario. Durante la instalación, selecciona las configuraciones por defecto.
                </p>
            </div>
            <div class="images-vertical2">
                <img src="../../img/inst1.png" alt="Instalar PostgreSQL">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 2: Configurar PostgreSQL</h2>
                <p>
                    Introduce los valores de configuración para PostgreSQL, como el <strong>localhost</strong>, el puerto <strong>5432</strong>, el usuario <strong>openpg</strong> y la contraseña <strong>openpgpwd</strong>.
                </p>
            </div>
            <div class="images-vertical2">
                <img src="../../img/inst2.png" alt="Configurar PostgreSQL">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 3: Crear una base de datos</h2>
                <p>
                    Una vez instalado PostgreSQL, accede al administrador de bases de datos de Odoo. Introduce un nombre para la base de datos, un correo electrónico y una contraseña. Asegúrate de recordar estos datos.
                </p>
            </div>
            <div class="images-vertical2">
                <img src="../../img/inst3.png" alt="Crear base de datos en Odoo">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 4: Configurar la contraseña maestra</h2>
                <p>
                    Configura una contraseña maestra para proteger el acceso al administrador de bases de datos. Esta contraseña será necesaria para crear, eliminar o restaurar bases de datos.
                </p>
            </div>
            <div class="images-vertical2">
                <img src="../../img/inst4.png" alt="Configurar contraseña maestra">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 5: Acceder a Odoo</h2>
                <p>
                    Accede a Odoo desde tu navegador web utilizando la URL <code>http://localhost:8069</code>. Introduce las credenciales de la base de datos que creaste para iniciar sesión.
                </p>
            </div>
            <div class="images-vertical2"><br>
                <img src="../../img/inst5.png" alt="Pantalla de inicio de sesión de Odoo">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 6: Explorar los módulos de Odoo</h2>
                <p>
                    Una vez dentro de Odoo, podrás explorar los módulos disponibles, como CRM, Ventas, Inventario, y más. Instala los módulos que necesites para tu negocio.
                </p>
            </div>
            <div class="images-vertical2">
                <img src="../../img/inst6.png" alt="Explorar módulos de Odoo">
            </div>
        </section>
    </main>
    
</body>
</html>