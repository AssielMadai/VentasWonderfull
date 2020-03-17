<?php
	//require('../Modelo/Usuario.php');
class BDProducto{

	  private $idProducto;
      private $idSubCategoria;
      private $nombre;
   	  private $precio;
      private $cantidad;
      public  $producto; 
      public  $mes;
      //public  $cantidad;
   	
	   //set 
	  public function setIdProducto($idProducto){$this->idProducto = $idProducto;}
      public function setIdSubCategoria($idSubCategoria){$this->idSubCategoria = $idSubCategoria;}
      public function setNombre($nombre){$this->nombre = $nombre;}
      public function setPrecio($precio){$this->precio = $precio;}
      public function setCantidad($cantidad){$this->cantidad = $cantidad;}

      //get
      public function getIdProducto(){return $this->idProducto;}
      public function getIdSubCategoria(){return $this->idSubCategoria;}
      public function getNombre(){return $this->nombre;}
      public function getPrecio(){return $this->precio;}
      public function getCantidad(){return $this->cantidad;}
  
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}//end construct

		public function ReporteVenta()
		{   
			$sqlReporteVenta= " SELECT CASE MONTH(ped.fechaPedido) 
			When 1 then 'Enero'
			When 2 then 'Febrero'
			When 3 then 'Marzo'
			When 4 then 'Abril'
			When 5 then 'Mayo'
			When 6 then 'Junio'
			When 7 then 'Julio'
			When 8 then 'Agosto'
			When 9 then 'Septiembre'
			When 10 then 'Octubre'
			When 11 then 'Noviembre'
			When 12 then 'Diciembre'
			END as Mes, p.nombre as Producto , COUNT(dP.idProducto) as Cantidad
			FROM Producto p INNER JOIN detallePedido dP
			on p.idProducto = dp.idProducto
			JOIN pedido ped
			on dp.idPedido = ped.idPedido
			and MONTH (ped.fechaPedido) = 2
			GROUP BY producto
			ORDER BY Cantidad DESC
			limit 5
			";
									
				$cmd = $this->conexion->prepare($sqlReporteVenta);
				$cmd->execute();
				$listaProductoVendido = $cmd->fetchAll();
                /* Ejecuta una sentencia preparada pasando un array de valores */
                /*Para este caso solamente habra un registro o nada*/
			    /*
				$lista = array();
				$i = 0;
				
				foreach($listaProductoVendido as $item){
						$obj = new Cliente();		
						$obj->setIdProducto($item['idProducto']);
						$obj->setIdSubCategoria($item['idSubCategoria']);
						$obj->setNombre($item['nombre']);
						$obj->setPrecio($item['precio']);
						$obj->setCantidad($item['cantidad']);
						$lista[$i] = $obj;
						$i++;
				}*/
				
				return $listaProductoVendido;


        }//end function



}//end class




?>