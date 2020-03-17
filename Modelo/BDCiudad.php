<?php
  class BDCiudad
   {    
        public $idCiudad;
   	    public $nombre;
        public $precioEnvio;
        public $cantidad;
        public $productosVendidos;
        public $Departamento;

    
   //end class

   private $conexion;

   function __construct()
   {
     $this->conexion =  new Conexion();
   }//end construct

   public function ReporteCiudad()
   {   
     $sqlReporteCategoria= "select c.nombre as Departamento,
                            p.nombre as nombre, count(p.idProducto) as productosVendidos
                            from categoria ca inner join subcategoria s on ca.idCategoria = s.idCategoria
                            join producto p on s.idSubCategoria = p.idSubCategoria
                            join detallepedido d on p.idProducto = d.idProducto
                            join pedido p2 on d.idPedido = p2.idPedido
                            join ciudad c on p2.idCiudad = c.idCiudad
                            where c.idCiudad=1
                            group by p.nombre
                            order by productosVendidos desc
                          ";
                 
       $cmd = $this->conexion->prepare($sqlReporteCategoria);
       $cmd->execute();
       $lista = $cmd->fetchAll();
           
       return $lista ;


       }//end function



}//end class




?>