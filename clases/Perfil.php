<?php
require_once 'Conexion.php';

class Perfil
{
    private $idPerfil; /* Identificador del perfil asociado a una persona */
    private $idPersona; /* Identificador de la persona a quien pertenece el perfil */
    private $actualizacion; /* Fecha de la ultima actualización del perfil */

    const TABLA = 'perfiles';

    /**
     * Constructor de la clase Perfil
     * @param   integer  $idPersona
     */
    public function __construct($idPersona)
    {
        $this->idPersona = $idPersona;
        $this->actualizacion = date("Y-m-d");
        $this->idPerfil = $this->buscarIdPerfilXIdPersona($this->idPersona);
        $this->save();
    }

    /**
     * Guarda por inserción o actualización un perfil
     *
     */
    public function save()
    {
        $conexion = new Conexion();
        if ($this->idPerfil) /*Modifica*/ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' 
				actualizacion = :actualizacion 
				WHERE idPerfil = :idPerfil');
            var_dump($consulta);
            $consulta->bindParam(':actualizacion', $this->actualizacion);
            $consulta->execute();
        } else /*Inserta*/ {
            $consulta = $conexion->prepare(
                'INSERT INTO ' . self::TABLA . ' 
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

    /**
     * Busca el perfil perteneciente a una persona por medio de su identificador (IdPersona)
     * @param   integer  $idPersona
     */
    public function buscarIdPerfilXIdPersona($idPersona)
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT idPerfil FROM ' . self::TABLA . ' WHERE idPersona = :idPersona');
        $consulta->bindParam(':idPersona', $idPersona);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return $registro['idPerfil'];
        } else {
            return false;
        }
    }


    /**
     * Getters and Setters
     */

    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    public function getActualizacion()
    {
        return $this->actualizacion;
    }

    public function setActualizacion($actualizacion)
    {
        $this->actualizacion = $actualizacion;
    }

    public function getIdPersona()
    {
        return $this->idPersona;
    }

    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;
    }

}
?>