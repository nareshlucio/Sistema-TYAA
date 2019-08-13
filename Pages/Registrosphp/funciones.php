<?php
	function conexion(){
		$result = new mysqli('localhost', 'root', '', 'automatizacion'); 
   		if (!$result)
     		throw new Exception('<h1>No se Pudo Conectar con la BD</h1>');
   		else
     		return $result;
	}

	class BD
	{
		private $host;
		private $db;
		private $user;
		private $pass;
		private $charset;

		public function __construct()
		{
			$this->host = 'localhost';
			$this->db = 'automatizacion';
			$this->user = 'root';
			$this->pass = '';
			$this->charset = 'latin1_swedish_ci';
		}
		function conexionPDO(){
		try {
			$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
						PDO::ATTR_EMULATE_PREPARES => false
			];
    		$pdo = new PDO('mysql:host=localhost;dbname=automatizacion', 'root', '',$options);
    		return $pdo;
		} catch (PDOException $e) {
    		echo 'Falló la conexión: ' . $e->getMessage();
    		die();
		}
	}
	}
	 
?>