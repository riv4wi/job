<?php
require_once 'Conexion.php';

class Experiencia
{
    private $idPerfil; /* Identificador del perfil asociado a la persona */
    private $idExperiencia; /* Identificador de la experiencia laboral asociada a un perfil */
    private $puesto; /* Puesto o cargo que desempeñó la persona en la experiencia laboral */
    private $nivel; /* Nivel del puesto - Junior, Semi-Senior, Senior */
    private $area; /* Area relacionada al puesto o experiencia laboral */
    private $personasAcargo; /* Cantidad de personas a cargo si aplica */
    private $desde; /* Fecha desde que se comenzó a trabajar */
    private $hasta; /* Fecha de finalización de la experiencia laboral */
    private $tiempo; /* Tiempo que duró la experiencia laboral - Es un campo calculado */

    const TABLA = 'experiencias'; /* Tabla donde se guardan los datos relacionados a la exp. laboral */

    /**
     * Constructor de la clase Experiencia
     * @param   integer  $idPerfil
     * @param   string  $puesto
     * @param   integer $nivel
     * @param   string  $area
     * @param   string  $personasAcargo
     * @param   string  $desde - Formato YYYY-MM-DD
     * @param   string  $hasta - Formato YYYY-MM-DD
     * @param   integer  $idExperiencia
     */
    public function __construct($idPerfil, $puesto, $nivel, $area, $personasAcargo, $desde, $hasta, $idExperiencia=null)
    {
        $this->idPerfil = $idPerfil;
        $this->idExperiencia = $idExperiencia;
        $this->puesto = $puesto;
        $this->nivel = $nivel;
        $this->area = $area;
        $this->personasAcargo = $personasAcargo;
        $this->desde = $desde;
        $this->hasta = $hasta;
        $this->tiempo = $this->calcularTiempo($desde, $hasta);
    }

    /**
     * Calcula el tiempo transcurrido entre 2 fechas
     *
     * @param   string  $desde - Formato YYYY-MM-DD
     * @param   string  $hasta - Formato YYYY-MM-DD
     */
    private function calcularTiempo($desde, $hasta)
    {
        $fecha1 = new DateTime($desde);
        $fecha2 = new DateTime($hasta);
        $fecha = $fecha1->diff($fecha2);
       return sprintf('%d año(s), %d mes(es), %d día(s)', $fecha->y, $fecha->m, $fecha->d);
    }

    /**
     * Guarda por inserción o actualización una experiencia laboral
     *
     */
    public function save()
    {
        $conexion = new Conexion();

        if ($this->idPerfil && $this->idExperiencia) /*Modifica*/ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' 
				SET puesto = :puesto, nivel = :nivel, area = :area, personasAcargo = :personasAcargo, desde = :desde, hasta = :hasta, tiempo = :tiempo 
				WHERE idPerfil = :idPerfil AND idExperiencia = :idExperiencia');

            $consulta->bindParam(':puesto', $this->puesto);
            $consulta->bindParam(':nivel', $this->nivel);
            $consulta->bindParam(':area', $this->area);
            $consulta->bindParam(':personasAcargo', $this->personasAcargo);
            $consulta->bindParam(':desde', $this->desde);
            $consulta->bindParam(':hasta', $this->hasta);
            $consulta->bindParam(':tiempo', $this->tiempo);
            $consulta->bindParam(':idExperiencia', $this->idExperiencia);
            $consulta->bindParam(':idPerfil', $this->idPerfil);
            $consulta->execute();
        }
        else /*Inserta*/
        {
            $consulta = $conexion->prepare(
                'INSERT INTO ' . self::TABLA . ' 
				(idPerfil, puesto, nivel, area, personasAcargo, desde, hasta, tiempo) 
				VALUES(:idPerfil, :puesto, :nivel, :area, :personasAcargo, :desde, :hasta, :tiempo)'
            );
            var_dump($consulta);
            $consulta->bindParam(':idPerfil', $this->idPerfil);
            $consulta->bindParam(':puesto', $this->puesto);
            $consulta->bindParam(':nivel', $this->nivel);
            $consulta->bindParam(':area', $this->area);
            $consulta->bindParam(':personasAcargo', $this->personasAcargo);
            $consulta->bindParam(':desde', $this->desde);
            $consulta->bindParam(':hasta', $this->hasta);
            $consulta->bindParam(':tiempo', $this->tiempo);
            $consulta->execute();
            $this->idExperiencia = $conexion->lastInsertId();

            echo "\nPDOStatement::errorInfo():\n";
            $arr = $consulta->errorInfo();
            print_r($arr);
        }
        $conexion = null;
    }

    /**
     * Devuelve todas las experiencias laborales asociadas a un perfil dado
     *
     * @param   integer  $idPerfil
     * @param   integer  $idExperiencia
     */
    public function buscarExperienciasPorId($idPerfil)
    {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idPerfil = :idPerfil');
        $consulta->bindParam(':idPerfil', $idPerfil);
        $consulta->execute();
        $registro = $consulta->fetch();
        if ($registro) {
            return new self(
                $registro['puesto'],
                $registro['nivel'],
                $registro['area'],
                $registro['personasAcargo'],
                $registro['desde'],
                $registro['hasta'],
                $registro['tiempo'],
                $idPerfil
            );
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

    public function getPuesto()
    {
        return $this->puesto;
    }

    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function getPersonasAcargo()
    {
        return $this->personasAcargo;
    }

    public function setPersonasAcargo($personasAcargo)
    {
        $this->personasAcargo = $personasAcargo;
    }

    public function getDesde()
    {
        return $this->desde;
    }

    public function setDesde($desde)
    {
        $this->desde = $desde;
    }

    public function getHasta()
    {
        return $this->hasta;
    }

    public function setHasta($hasta)
    {
        $this->hasta = $hasta;
    }

    public function getTiempo()
    {
        return $this->tiempo;
    }

    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }

}
?>