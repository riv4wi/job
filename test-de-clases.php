<?php
require_once 'clases/Persona.php';
require_once 'clases/Perfil.php';
require_once 'clases/Experiencia.php';

$persona = new Persona('097042590', 'El señor', 'De los anillos', 'M', 'SOLTERO', '11 45879621', 'AR', 'Salta', 'Saltadora', 'Saltina');
// $persona = new Persona('097042590', 'El señor', 'De los Anillos', 'M', 'SOLTERO', '11 45879621', 'AR', 'Salta', 'Saltadora', 'Saltina', 1);
$persona->save();

$personaje = Persona::buscarPorId(1);
if ($personaje) {
    echo '<br />personaje buscado: ' . $personaje->getNombres() . ' ' . $personaje->getApellidos() . '<br />';
} else {
    echo 'El personaje no ha podido ser encontrado';
}

$experiencia = new Experiencia(
    1,
    'Desarrollador de software',
    'Junior',
    'Sistemas',
    0,
    '2017/01/10',
    '2018/02/15',
    0);

$experiencia->save();
?>