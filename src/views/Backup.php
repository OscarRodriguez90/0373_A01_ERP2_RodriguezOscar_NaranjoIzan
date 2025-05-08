<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Backup and Restoration</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <header>
        <h1>Database Backup</h1>
        <nav>
            <ul>
                <li><a href="../../index.html">Home</a></li>
                <li><a href="guia_instal·lació.php">Guia Instal·lació</a></li>
                <li><a href="Módulo CRM.php">Módulo CRM</a></li>
                <li><a href="Módulo Gestión de ventas.php">Módulo Gestión de ventas</a></li>
                <li><a href="Backup.php" class="active">Backup</a></li>
                <li><a href="conclusions.php">Conclusiones</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="content-with-image">
            <div class="text">
                <h2>Paso 1: Crear un Backup</h2>
                <p>
                    Accede a la página de administración de bases de datos en Odoo (<code>/web/database/manager</code>). Haz clic en el botón <strong>Backup</strong> para iniciar el proceso de copia de seguridad.
                </p>
            </div>
            <div class="images-vertical">
                <img src="../../img/backup1.png" alt="Botón de Backup en Odoo">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 2: Descargar el archivo ZIP</h2>
                <p>
                    Una vez que el backup esté listo, descarga el archivo en formato <strong>.zip</strong>. Este archivo contiene toda la información de la base de datos. Luego, pásaselo a tu compañero para restaurarlo en su sistema.
                </p>
            </div>
            <div class="images-vertical2">
                <img src="../../img/backup2.png" alt="Descargar archivo ZIP del Backup">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 3: Restaurar la Base de Datos</h2>
                <p>
                    En la misma página de administración de bases de datos, haz clic en el botón <strong>Restore</strong>. Esto te permitirá cargar el archivo de backup para restaurar la base de datos.
                </p>
            </div>
            <div class="images-vertical">
                <img src="../../img/backup3.png" alt="Botón de Restore en Odoo">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 4: Introducir los datos de la Base de Datos</h2>
                <p>
                    Introduce los datos necesarios, como el nombre de la base de datos, la contraseña maestra y selecciona el archivo de backup descargado. Haz clic en <strong>Continue</strong> para completar la restauración.
                </p>
            </div>
            <div class="images-vertical2">
                <img src="../../img/backup4.png" alt="Introducir datos de la Base de Datos">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Paso 5: Verificar la Restauración</h2>
                <p>
                    Una vez restaurada la base de datos, accede a Odoo con las credenciales correspondientes. Verifica que todos los datos estén presentes y que el sistema funcione correctamente.
                </p>
            </div>
            <div class="images-vertical">
                <img src="../../img/backup5.png" alt="Verificación de la Restauración">
            </div>
        </section>
    </main>
    
</body>
</html>