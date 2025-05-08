<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo Gestión de Ventas - Odoo ERP</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <header>
        <h1>Módulo Gestión de Ventas</h1>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="guia_instal·lació.php">Guia Instal·lació</a></li>
                <li><a href="Módulo CRM.php">Módulo CRM</a></li>
                <li><a href="Módulo Gestión de ventas.php" class="active">Módulo Gestión de Ventas</a></li>
                <li><a href="Backup.php">Backup</a></li>
                <li><a href="conclusions.php">Conclusiones</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="content-with-image">
            <div class="text">
                <h2>Módulo Gestión de Ventas</h2>
                <h3>Justificación de la elección:</h3>
                <p>
                    He elegido el módulo Gestión de Ventas porque representa uno de los pilares fundamentales en el funcionamiento de cualquier pequeña o mediana empresa (PYME). Las ventas son el núcleo de la actividad comercial, ya que sin un control eficaz de los pedidos, presupuestos y relaciones con los clientes, una empresa no puede operar de forma sostenible ni competitiva.
                    <br>
                    Este módulo facilita la administración de todo el ciclo comercial, desde la generación de presupuestos hasta la confirmación de pedidos y la creación automática de facturas. Además, se integra de forma nativa con otros módulos clave de Odoo como Inventario, Facturación y CRM, lo cual permite una gestión fluida, sin duplicidad de información y con total trazabilidad de cada operación.
                    <br>
                    Es especialmente útil para las PYMEs porque automatiza tareas que normalmente se hacen de forma manual o dispersa en hojas de cálculo o correos electrónicos, reduciendo errores, ahorrando tiempo y mejorando la experiencia tanto del cliente como del equipo comercial.
                </p>
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h3>Características destacadas:</h3>
                <ul>
                    <li><strong>Creación de presupuestos comerciales:</strong> permite generar fácilmente presupuestos personalizados para los clientes, incluyendo productos, precios, descuentos y condiciones específicas.</li>
                    <li><strong>Conversión de presupuestos en pedidos:</strong> con un solo clic se puede transformar un presupuesto aceptado en un pedido de venta formal, agilizando el proceso de cierre comercial.</li>
                    <li><strong>Gestión de clientes (contactos):</strong> facilita el alta y mantenimiento de una base de datos de clientes, incluyendo información fiscal, direcciones, historial de compras y comunicaciones.</li>
                    <li><strong>Seguimiento del historial de ventas:</strong> Odoo guarda un registro completo de todas las operaciones comerciales, lo cual permite hacer análisis de rendimiento, identificar tendencias de compra y anticiparse a las necesidades del cliente.</li>
                    <li><strong>Envío automático de presupuestos por correo electrónico:</strong> desde la propia interfaz, se pueden enviar ofertas a los clientes en formato PDF con mensajes personalizados, ahorrando tiempo y mejorando la imagen profesional de la empresa.</li>
                    <li><strong>Configuración de condiciones comerciales:</strong> se pueden definir métodos de pago, políticas de entrega, plazos y descuentos por cliente o tipo de pedido, permitiendo una flexibilidad que se adapta a diferentes modelos de negocio.</li>
                </ul>
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Creación de un cliente</h2>
                <p>
                    Accedemos al módulo de Ventas > Clientes y procedemos a crear un nuevo cliente. En este caso, se le asigna un nombre personalizado (por ejemplo, el que aparece en la imagen de la actividad). 
                    En la ficha del cliente, configuramos como forma de pago el plazo de 30 días netos, lo que significa que el cliente dispone de 30 días desde la fecha de la factura para realizar el pago. 
                    Esta condición se aplica automáticamente a los presupuestos y facturas que se generen para este cliente.
                </p>
            </div>
            <div class="images-vertical">
                <img src="../../img/ventas1.png" alt="Creación de un cliente">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Generación de un presupuesto</h2>
                <p>
                    Desde el menú Ventas > Presupuestos, hacemos clic en “Crear” para iniciar un nuevo presupuesto. Seleccionamos el cliente que acabamos de registrar y añadimos un producto disponible en el sistema. 
                    Este producto puede ser un bien o servicio que ofrece la empresa, al cual se le indica una cantidad y un precio de venta. El presupuesto se guarda y se puede revisar antes de su confirmación.
                </p>
            </div>
            <div class="images-vertical">
                <img src="../../img/ventas2.png" alt="Generación de un presupuesto">
            </div>
        </section>

        <section class="content-with-image">
            <div class="text">
                <h2>Confirmación del pedido</h2>
                <p>
                    Una vez revisado y aceptado el presupuesto, se hace clic en el botón “Confirmar” para convertirlo automáticamente en un pedido de venta. 
                    Esto permite que el proceso continúe con la gestión de inventario, la logística y, en su caso, la generación de la factura correspondiente si está habilitado el módulo de facturación.
                    <br><br>
                    Este flujo demuestra cómo Odoo facilita una gestión comercial eficaz, automatizando pasos clave y centralizando toda la información relacionada con las ventas, clientes y productos en un solo sistema.
                </p>
            </div>
            <div class="images-vertical"><br><br>
                <img src="../../img/ventas3.png" alt="Confirmación del pedido">
            </div>
        </section>
    </main>
    
</body>
</html>