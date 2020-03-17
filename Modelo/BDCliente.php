<?php
  class BDCliente 
   {    
        public $idCliente;
   	    public $ciCliente;
        public $primerNombre;
        public $segundoNombre;
        public $apellidoPaterno;
        public $apellidoMaterno;
        public $genero;
        public $fechaNacimiento;
        public $usuario;
        public $contrasenia;
        public $Cliente;
        public $Anio;
        public $Compras;
	   //set 
      public function setIdCliente($idCliente){$this->idCliente  = $idCliente;}
        public function setCiCliente($ciCliente){$this->ciCliente = $ciCliente;}
        public function setPrimerNombre($primerNombre){$this->primerNombre = $primerNombre;}
        public function setSegundoNombre($segundoNombre){$this->segundoNombre = $segundoNombre;}
        public function setApellidoPaterno($apellidoPaterno){$this->apellidoPaterno = $apellidoPaterno;}
        public function setApellidoMaterno($apellidoMaterno){$this->apellidoMaterno = $apellidoMaterno;}
        public function setGenero($genero){$this->genero = $genero;}
        public function setFechaNacimiento($fechaNacimiento){$this->fechaNacimiento = $fechaNacimiento;}
        public function setUsuario($usuario){$this->usuario = $usuario;}
        public function setContrasenia($contrasenia){$this->contrasenia = $contrasenia;}

      //get
        public function getIdCliente(){return $this->idCliente;}
        public function getCiCliente(){return $this->ciCliente;}
        public function getPrimerNombre(){return $this->primerNombre;}
        public function getSegundoNombre(){return $this->segundoNombre;}
        public function getApellidoPaterno(){return $this->apellidoPaterno;}
        public function getApellidoMaterno(){return $this->apellidoMaterno;}
        public function getGenero(){return $this->genero;}
        public function getFechaNacimiento(){return $this->fechaNacimiento;}
        public function getUsuario(){return $this->usuario;}
        public function getContrasenia(){return $this->contrasenia;}

   //end class

   private $conexion;

   function __construct()
   {
     $this->conexion =  new Conexion();
   }//end construct

   public function ReporteVentaPorCliente()
   {   
     $sqlReporteVentaPorCliente= " SELECT YEAR(ped.fechaPedido) as Anio, CONCAT(c.primerNombre,' ',c.ApellidoPaterno) as Cliente , COUNT(ped.idPedido) as Compras
                          FROM producto p INNER JOIN detallePedido dP
                          on p.idProducto = dp.idProducto
                          JOIN pedido ped
                          on dp.idPedido = ped.idPedido
                          JOIN cliente c
                          ON C.idCliente = ped.idCliente
                          and year (ped.fechaPedido) = 2020
                          GROUP BY Cliente
                          ORDER BY Compras DESC
                          limit 5
                          ";
                 
       $cmd = $this->conexion->prepare($sqlReporteVentaPorCliente);
       $cmd->execute();
       $listaCliente = $cmd->fetchAll();
           
       return $listaCliente;


       }//end function



}//end class




?>