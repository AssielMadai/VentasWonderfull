<?php
    require('../Modelo/BDCliente.php');
    require('../Modelo/Conexion.php');
    $conexion = new Conexion();

    $objetoCliente = new BDCliente();
    $objectClient = $objetoCliente->ReporteVentaPorCliente();   
   
    
?>