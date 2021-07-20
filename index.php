<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Tarea 6</title>
    <link rel="stylesheet" href="app/views/css/styles.css">
</head>
<body>
    <!-- Sidebar de la web -->
    <div class="sidebar">
        <!-- Links principales -->
        <div class="__links">
            <a class="active" href="#"><i class='bx bx-home'></i>Inicio</a>
            <a href="#"><i class='bx bxs-bookmark'></i>Marcas</a>
            <a href="#"><i class='bx bxl-shopify'></i>Carrito</a>
            <a href="#"><i class='bx bxs-message-square-detail'></i>Mensajes</a>
        </div>
    </div>

    <div class="container">
        <div class="card2">
            <h2>Ingrese un nuevo vehiculo</h2>
            <p>Utilice este formulario para registrar nuevos vehiculos para la automotora</p>
            <span id="vehiculeResult" style="color:royalblue; text-align:center;"></span>
            <form action="#" method="post" id="newCar">
                <label for="patente">Patente</label>
                <p id="error1"></p>
                <input type="text" name="patente" id="patente" placeholder="ingrese la patente">
                <label for="serialMotor">Serial del motor</label>
                <input type="text" name="serialMotor" id="serialMotor" placeholder="ingrese la serial del motor">
                <label for="serialCarroceria">Ingrese la serial de la carroceria</label>
                <input type="text" name="serialCarroceria" id="serialCarroceria" placeholder="Ingrese la serial de la carroceria">
                <label for="marca">Marca del vehiculo</label>
                <input type="text" name="marca" id="marca" placeholder="ingrese la marca del vehiculo">
                <label for="modelo">Modelo del vehiculo</label>
                <input type="text" name="modelo" id="modelo" placeholder="ingrese el modelo del vehiculo">
                <label for="year">Año del vehiculo</label>
                <p id="error2"></p>
                <input type="number" name="year" id="year" placeholder="ingrese el año del vehiculo">
                <label for="color">Color del vehiculo</label>
                <input type="text" name="color" id="color" placeholder="Ingrese el color del vehiculo">
                <label for="precio">Precio del vehiculo</label>
                <input type="text" name="precio" id="precio" placeholder="
                ingrese el precio del vehiculo">
                <button type="submit">Ingresar vehiculo</button>
            </form>
        </div>
        <div class="card2">
            <h2>Vehículos ingresados</h2>
            <button type="submit" id="getCars">Consultar vehiculos</button>
            <table class="carResults">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                        <th>Patente</th>
                        <th>Serial Motor</th>
                        <th>Serial Carroceria</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Color</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody id="showAll">

                </tbody>
            </table>
        </div>
    </div>

    <script src="app/js/main.js"></script>
</body>
</html>