<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulario</title>
    <style>
        /* Estilos personalizados para el formulario */
        body{
            background-color: #F4F6F7;
            
        }
        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="number"] {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 5px;
            width: 100%;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0069d9;
        }

        .container {
            
            margin-top: 100px;
            background-color: #D6DBDF;
        }

        h1 {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="container" style="position: center;">
        <h1 class="text-center">Ingreso de Informacion de Insumos</h1>
        <div class="row justify-content-center">
          <form action="/Parcial_Alvarado/controladores/productos/guardar.php" method="POST" class="col-lg-8 border p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="insumos_nombre">Nombre del Insumo:</label>
                        <input type="text" name="insumos_nombre" id="insumos_nombre">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insumos_cantidad_existencia">Cantidad En Existencia:</label>
                        <input type="text" name="insumos_cantidad_existencia" id="insumos_cantidad_existencia">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="insumos_marca_producto">Marca del Producto:</label>
                        <input type="text" name="insumos_marca_producto" id="insumos_marca_producto">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="insumos_nombre_proveedor">Nombre del Proveedor:</label>
                        <input type="text" name="insumos_nombre_proveedor" id="insumos_nombre_proveedor">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="insumos_precio">Precio del Insumo:</label>
                        <input type="number" name="insumos_precio" id="insumos_precio">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <button type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
