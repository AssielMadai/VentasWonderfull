<?php
require_once ("../Modelo/Conexion.php");
require_once ("../Modelo/BDProducto.php");

    $objProducto = new BDProducto();
    $objectProduct = $objProducto->ReporteVenta();   

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <title>Usuarios</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-info w-100 p-3">
    <div class="collapse navbar-collapse h-100 " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reportes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../Vista/IUPanelControlUsuario.php">ProductoVendidoMes</a>
                <a class="dropdown-item" href="../Vista/IUListaCliente.php">Lista de Clientes</a>
                    <a class="dropdown-item" href="../Vista/IUListaCiudad.php">Lista Ciudades</a>
                    <a class="dropdown-item" href="../Vista/IUListaCategoria.php">Categorias</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Inicio
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Index">Inicio</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container card my-5">
    <div class="card-body">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        

                                <form action="../Controlador/LogicaVerificarUsuario.php" method="post" name="LogicaAutenticacionUsuario">
                                <div class="form-group">
                                    <label>Mes</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Mes">
                                </div>
                                </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</div>

<div class="container"><br><br>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Mes</th>
        <th scope="col">Producto</th>
        <th scope="col">Cantidad</th>        
    </tr>
    </thead>
    
    <?php 
        $count = 1;
        
        foreach ($objectProduct as $key ) { 
    ?>                   
    <tbody>
            <td><?php echo $count?></td>
            <td><?php echo $key['Mes'] ?></td>
            <td><?php echo $key['Producto']?></td>
            <td><?php echo $key['Cantidad'] ?></td>
    </tbody>
        <?php  $count++; } ?>
</table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>