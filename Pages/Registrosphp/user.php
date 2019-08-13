<?php 
	include_once 'funciones.php';

	Class User extends BD
	{
		private $usuario;
		private $nombre;
		private $avatar;

		public function ExistUsuario($usu, $pass){
			$query = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Alias = :usu");
			$query->execute(['usu' =>$usu]);

			foreach ($query as $rows) {
				if ($usu === $rows['Alias'] && password_verify($pass, $rows['Password']))
					return true;
				else 
					return false;
			}

			if ($query->rowCount())
				return true;
			else
				return false;
		}

		public function ExistCorreo($cor, $pass){
			$querycorr = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Correo = :cor");
			$querycorr->execute(['cor' =>$cor]);

			foreach ($querycorr as $rows) {
				if ($cor === $rows['Correo'] && password_verify($pass, $rows['Password']))
					return true;
				else 
					return false;
			}

			if ($querycorr->rowCount())
				return true;
			else
				return false;
		}

		public function ExistTelefono($tel, $pass){
			$querytel = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Telefono = :tel");
			$querytel->execute(['tel' =>$tel]);

			foreach ($querytel as $rows) {
				if ($tel === $rows['Telefono'] && password_verify($pass, $rows['Password']))
					return true;
				else 
					return false;
			}

			if ($querytel->rowCount())
				return true;
			else
				return false;
		}

		public function setUsuario($usuarios){
			$sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Alias = :usuarios");
			$sql->execute(['usuarios' =>$usuarios]);

			foreach ($sql as $row) {
				$this->nombre = $row['Nombre'];
				$this->usuario = $row['Alias'];
				$this->avatar = $row['Avatar'];
			}
		}

		public function setCorreo($correo){
			$sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Correo = :correo");
			$sql->execute(['correo' =>$correo]);

			foreach ($sql as $row) {
				$this->nombre = $row['Nombre'];
				$this->usuario = $row['Alias'];
				$this->avatar = $row['Avatar'];
			}
		}

		public function setTelefono($telefono){
			$sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Telefono = :telefono");
			$sql->execute(['telefono' =>$telefono]);

			foreach ($sql as $row) {
				$this->nombre = $row['Nombre'];
				$this->usuario = $row['Alias'];
				$this->avatar = $row['Avatar'];	
			}
		}

		public function getUsuario(){
			return $this->nombre;
			return $this->usuario;
			return $this->avatar;
		}

		public function getAvatar(){
			return $this->avatar;
		}
	}
 ?>