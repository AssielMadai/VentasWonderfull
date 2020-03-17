<?php
	/**
	* Clase de conexion a la DB
	*/
	class Conexion extends PDO
	{  
		//PDO: Objetos de Datos de PHP (PDO por sus siglás en inglés)
		//https://www.php.net/manual/es/book.pdo.php

		private $tipoDB = 'mysql';
		private $servidor = '127.0.0.1:3308';
		private $user = 'root';
		private $password = '';
		private $db = 'online';

		public function __construct()
		{
			try {
				  /*
				  $cadenaConexion = 'base de datos:  '.$this->tipoDB.' :host= '.$this->servidor.' ;dbname= '.$this->db." -- ". $this->user." -- ". $this->password;
				  echo "Cadena de Conexion: ".$cadenaConexion."<br>";

				  */
				  // . . . create a PDO object
                                    //PDO('mysql:host=localhost;dbname=test', $user, $pass);
				  parent::__construct($this->tipoDB.':host='.$this->servidor.';dbname='.$this->db, $this->user, $this->password);
				  /*echo "Conexion exitosa";*/
			} catch (PDOException $e ) {
				echo 'ERROR: No se logro hacer una conexion a la Base de Datos - '.$e->getMessage();
				exit;
			}
		}//end construct
	}//end class


  //$con = new Conexion();

 ?>
