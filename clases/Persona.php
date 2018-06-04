<?php
require_once 'Conexion.php';
require_once 'Perfil.php';

class Persona
{

    private $idPersona;
    private $dni;
    private $nombres;
    private $apellidos;
    private $sexo;
    private $edoCivil;
    private $telefono;
    private $idPais;
    private $provincia;
    private $ciudad;
    private $calle;

    const TABLA = 'personas';


    public function __construct($dni, $nombres, $apellidos, $sexo, $edoCivil, $telefono, $idPais, $provincia, $ciudad, $calle, $idPersona = null)
    {
        $this->idPersona = $idPersona;
        $this->dni = $dni;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->sexo = $sexo;
        $this->edoCivil = $edoCivil;
        $this->telefono = $telefono;
        $this->idPais = $idPais;
        $this->provincia = $provincia;
        $this->ciudad = $ciudad;
        $this->calle = $calle;
    }


    public function save()
    {
        $conexion = new Conexion();
        if ($this->idPersona) /*Modifica*/ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' 
				SET dni = :dni, nombres = :nombres, apellidos = :apellidos, sexo = :sexo, edoCivil = :edoCivil, telefono = :telefono, idPais = :idPais, provincia = :provincia, ciudad = :ciudad, calle = :calle 
				WHERE idPersona = :idPersona');

            $consulta->bindParam(':dni', $this->dni);
            $consulta->bindParam(':nombres', $this->nombres);
            $consulta->bindParam(':apellidos', $this->apellidos);
            $consulta->bindParam(':sexo', $this->sexo);
            $consulta->bindParam(':edoCivil', $this->edoCivil);
            $consulta->bindParam(':telefono', $this->telefono);
            $consulta->bindParam(':idPais', $this->idPais);
            $consulta->bindParam(':provincia', $this->provincia);
            $consulta->bindParam(':ciudad', $this->ciudad);
            $consulta->bindParam(':calle', $this->calle);
            $consulta->bindParam(':idPersona', $this->idPersona);
            $consulta->execute();
        } else /*Inserta*/ {
            $consulta = $conexion->prepare(
                'INSERT INTO ' . self::TABLA . ' 
				(dni, nombres, apellidos, sexo, edoCivil, telefono, idPais, provincia, ciudad, calle) 
				VALUES(:dni, :nombres, :apellidos, :sexo, :edoCivil, :telefono, :idPais, :provincia, :ciudad, :calle)'
            );

            $consulta->bindParam(':dni', $this->dni);
            $consulta->bindParam(':nombres', $this->nombres);
            $consulta->bindParam(':apellidos', $this->apellidos);
            $consulta->bindParam(':sexo', $this->sexo);
            $consulta->bindParam(':edoCivil', $this->edoCivil);
            $consulta->bindParam(':telefono', $this->telefono);
            $consulta->bindParam(':idPais', $this->idPais);
            $consulta->bindParam(':provincia', $this->provincia);
            $consulta->bindParam(':ciudad', $this->ciudad);
            $consulta->bindParam(':calle', $this->calle);
            $consulta->execute();
            $this->idPersona = $conexion->lastInsertId();
            $perfil = new Perfil($this->idPersona);
        }
        $conexion = null;
    }


    public static function buscarPorId($idPersona)
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idPersona = :idPersona');
        $consulta->bindParam(':idPersona', $idPersona);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self(
                $registro['dni'],
                $registro['nombres'],
                $registro['apellidos'],
                $registro['sexo'],
                $registro['edoCivil'],
                $registro['telefono'],
                $registro['idPais'],
                $registro['provincia'],
                $registro['ciudad'],
                $registro['calle'],
                $idPersona
            );
        } else {
            return false;
        }
    }


    public function getIdPersona()
    {
        return $this->idPersona;
    }


    public function getNombres()
    {
        return $this->nombres;
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }


    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($nombres)
    {
        $this->nombres = $nombres;
    }


    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }


    public function getEdoCivil()
    {
        return $this->edoCivil;
    }

    public function setEdoCivil($edoCivil)
    {
        $this->edoCivil = $edoCivil;
    }


    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }


    public function getIdPais()
    {
        return $this->idPais;
    }

    public function setIdPais($idPais)
    {
        $this->idPais = $idPais;
    }


    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }


    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }


    public function getCalle()
    {
        return $this->calle;
    }

    public function setCalle($calle)
    {
        $this->calle = $calle;
    }

}

?>