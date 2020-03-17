<?php
	//require('../Modelo/Usuario.php');
class BDBuscadorUsuario{
  
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}//end construct

		public function verificarUsuario($usuario,$contrasenia)
		{   
			$objetoUsuario = new Usuario();
			$sqlVerificarUsuario= " select u.idUsuario,u.idRol,u.ciUsuario,u.primerNombre,u.segundoNombre,
									        u.apellidoPaterno,u.apellidoMaterno, u.genero, u.fechaNacimiento, u.usuario, 
											u.contrasenia
									from usuario u inner join rol r
									ON u.idRol = r.idRol 
									AND (u.usuario = :usuario && u.contrasenia = :contrasenia);
								  ";
			
			try{
				$cmd = $this->conexion->prepare($sqlVerificarUsuario);
				$cmd->bindParam(':usuario', $usuario);
				$cmd->bindParam(':contrasenia', $contrasenia);
				$cmd->execute();
                /* Ejecuta una sentencia preparada pasando un array de valores */
                /*Para este caso solamente habra un registro o nada*/
			    $registroConsulta = $cmd->fetch();
             
                if($registroConsulta){

                	$objetoUsuario->setIdUsuario($registroConsulta['idUsuario']);
					$objetoUsuario->setIdRol($registroConsulta['idRol']);
					$objetoUsuario->setCiUsuario($registroConsulta['ciUsuario']);
                	$objetoUsuario->setPrimerNombre($registroConsulta['primerNombre']);
                	$objetoUsuario->setSegundoNombre($registroConsulta['segundoNombre']);
                	$objetoUsuario->setApellidoPaterno($registroConsulta['apellidoPaterno']);
					$objetoUsuario->setApellidoMaterno($registroConsulta['apellidoMaterno']);
					$objetoUsuario->setGenero($registroConsulta['genero']);
					$objetoUsuario->setFechaNacimiento($registroConsulta['fechaNacimiento']);
                	$objetoUsuario->setUsuario($registroConsulta['usuario']);
                	$objetoUsuario->setContrasenia($registroConsulta['contrasenia']);
                	return $objetoUsuario;
                }else{
                	return null;
                }
			}catch(PDOException $e){
				echo 'ERROR: Error en la busqueda del articulo - '.$e->getMesage();
				exit();
				return false;
			};
        }//end function



}//end class




?>