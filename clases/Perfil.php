<?php
require_once 'Conexion.php';

class Perfil {

	private $idPerfil;
	private $idPersona;
	private $actualizacion;

	const TABLA = 'perfiles';

	public function __construct($idPersona) {
	   $this->idPersona = $idPersona;
	   $this->actualizacion = $actualizacion;
	}

	public function save(){
		$conexion = new Conexion();

		if($this->idPerfil) /*Modifica*/ {
			$consulta = $conexion->prepare('UPDATE ' . self::TABLA .' 
				SET idPersona = :idPersona, actualizacion = :actualizacion 
				WHERE idPerfil = :idPerfil');
			var_dump($consulta);
			$consulta->bindParam(':idPersona', $this->idPersona);
			$consulta->bindParam(':actualizacion', $this->actualizacion);
			$consulta->execute();
		}else /*Inserta*/ {
			$consulta = $conexion->prepare(
				'INSERT INTO ' . self::TABLA .' 
				(idPersona, actualizacion) 
				VALUES(:idPersona, :actualizacion)'
			);

			$consulta->bindParam(':idPersona', $this->idPersona);
			$consulta->bindParam(':actualizacion', $this->actualizacion);
			$consulta->execute();
			$this->idPerfil = $conexion->lastInsertId();
		}
		$conexion = null;
	}

	 public static function buscarPorId($idPerfil){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idPerfil = :idPerfil');
       $consulta->bindParam(':idPerfil', $idPerfil);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self(
          	$registro['idPersona'],
          	$registro['actualizacion'],
          	$idPerfil
          );
       }else{
          return false;
       }
    }

	public function getIdPerfil() {
	  return $this->idPerfil;
	}


	public function getActualizacion() {
	  return $this->actualizacion;
	}

	public function setActualizacion($actualizacion) {
	  $this->actualizacion = $actualizacion;
	}

}
?>