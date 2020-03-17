<?php
  class Usuario 
   {  private $idUsuario;
      private $idRol;
      private $ciUsuario;
   	private $primerNombre;
   	private $segundoNombre;
   	private $apellidoPaterno;
      private $apellidoMaterno;
      private $genero;
      private $fechaNacimiento;
      private $usuario;
      private $contrasenia;
   	

   	function __construct()
      { }

	   //set 
	   public function setIdUsuario($idUsuario){$this->idUsuario = $idUsuario;}
      public function setIdRol($idRol){$this->idRol = $idRol;}
      public function setCiUsuario($ciUsuario){$this->ciUsuario = $ciUsuario;}
      public function setPrimerNombre($primerNombre){$this->primerNombre = $primerNombre;}
      public function setSegundoNombre($segundoNombre){$this->segundoNombre = $segundoNombre;}
      public function setApellidoPaterno($apellidoPaterno){$this->apellidoPaterno = $apellidoPaterno;}
      public function setApellidoMaterno($apellidoMaterno){$this->apellidoMaterno = $apellidoMaterno;}
      public function setGenero($genero){$this->genero = $genero;}
      public function setFechaNacimiento($fechaNacimiento){$this->fechaNacimiento = $fechaNacimiento;}
      public function setUsuario($usuario){$this->usuario = $usuario;}
      public function setContrasenia($contrasenia){$this->contrasenia = $contrasenia;}
      

      //get
      public function getIdUsuario(){return $this->idUsuario;}
      public function getIdRol(){return $this->idRol;}
      public function getCiUsuario(){return $this->ciUsuario;}
      public function getPrimerNombre(){return $this->primerNombre;}
      public function getSegundoNombre(){return $this->segundoNombre;}
      public function getApellidoPaterno(){return $this->apellidoPaterno;}
      public function getApellidoMaterno(){return $this->apellidoMaterno;}
      public function getGenero(){return $this->genero;}
      public function getFechaNacimiento(){return $this->fechaNacimiento;}    
      public function getUsuario(){return $this->usuario;}  
      public function getContrasenia(){return $this->contrasenia;}
      

   }//end class

?>