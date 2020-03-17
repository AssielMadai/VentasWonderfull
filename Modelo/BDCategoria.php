<?php
  class BDCategoria 
   {    
        public $idCategoria;
   	    public $nombre;
    
	   //set 
      public function setIdCategoria($idCategoria){$this->idCategoria  = $idCategoria;}
        public function setNombre($nombre){$this->nombre = $nombre;}
    
      //get
        public function getIdCategoria(){return $this->idCategoria;}
        public function getNombre(){return $this->nombre;}
    
   //end class

   private $conexion;

   function __construct()
   {
     $this->conexion =  new Conexion();
   }//end construct

   public function ReportePorCategoria()
   {   
     $sqlReporteCategoria= " select ca.nombre as Departamentos, count(p.idProducto) as productosVendidos
                                    from categoria ca inner join subcategoria s on ca.idCategoria = s.idCategoria
                                    join producto p on s.idSubCategoria = p.idSubCategoria
                                    join detallepedido d on p.idProducto = d.idProducto
                                    join pedido p2 on d.idPedido = p2.idPedido
                                    join ciudad c on p2.idCiudad = c.idCiudad
                                    and (p2.fechaPedido)between  '2018-01-01' and '2021-06-19'
                                    group by ca.nombre
                                    order by productosVendidos desc 

                          ";
                 
       $cmd = $this->conexion->prepare($sqlReporteCategoria);
       $cmd->execute();
       $lista = $cmd->fetchAll();
           
       return $lista ;


       }//end function



}//end class




?>