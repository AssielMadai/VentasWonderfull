<?php
  class BDRegistrarCliente
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function registrarCliente(Cliente $cliente) {

			print_r($cliente);

			$sql = "INSERT INTO cliente(idHotel,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,telefono,genero,fechaNacimiento,activo)  
					VALUES(:idHotel,:ci,:primerNombre,:segundoNombre,:apellidoPaterno,:apellidoMaterno,:telefono,:genero,:fechaNacimiento,:activo);
										   ";
				$idHotel =$cliente->getIdHotel();
				$ci = $cliente->getCi();
				$primerNombre = $cliente->getPrimerNombre();
				$segundoNombre = $cliente->getSegundoNombre();
				$apellidoPaterno = $cliente->getApellidoPaterno();
				$apellidoMaterno = $cliente->getApellidoMaterno();
				$telefono = $cliente->getTelefono();
				$genero = $cliente->getGenero();
				$fechaNacimiento = $cliente->getFechaNacimiento();
				$activo = $cliente->getActivo();
				
				try {
					$cmd = $this->conexion->prepare($sql);
					$cmd->bindParam(':idHotel',$idHotel );
					$cmd->bindParam(':ci', $ci);
					$cmd->bindParam(':primerNombre', $primerNombre);
					$cmd->bindParam(':segundoNombre', $segundoNombre);
					$cmd->bindParam(':apellidoPaterno', $apellidoPaterno);
					$cmd->bindParam(':apellidoMaterno', $apellidoaterno);
					$cmd->bindParam(':telefono', $telefono);
					$cmd->bindParam(':genero', $genero);
					$cmd->bindParam(':telefono', $telefono);
					$cmd->bindParam(':fechaNacimiento', $fechaNacimiento);
					$cmd->bindParam(':activo', $activo);
					$cmd->execute();
					return $this->conexion->lastInsertId();
				} catch (PDOException $e) {
					echo 'ERROR: No se logro realizar la nueva inserción - ' . $e->getMesage();
					exit();
					return false;
				}
			} //end function

	}//end class
    ?>