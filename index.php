<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="/inventario/style.css">
</head>

<body>
    <nav>
        <a href="/inventario/u013.php">Ir a inventario U013</a>
    </nav>
    <div class="contenedor">
        <table border="1" cellpadding="10" cellspacing="0">
            <caption>
                <h2>Inventario</h2>
            </caption>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th>Lote</th>
                    <th>Piezas</th>
                    <th>Caducidad</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Clave</th>
                    <th>Descripción</th>
                    <th>Lote</th>
                    <th>Piezas</th>
                    <th>Caducidad</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="float">
        <a class="add">Nuevo lote</a>
        <a class="add">Descargar</a>
    </div>


    <?php
    include_once "vista/partials/edit.html";
    include_once "vista/partials/modal.php";
    ?>

    <script src="/inventario/vista/script/js.js"></script>
    <script>
        let ajax = new Ajax
        ajax.fillTable("/inventario/controlador/controlador.php?s=1");
        //setInterval(fillTable,10000)
    </script>
</body>

</html>