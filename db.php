<?php
 require_once 'clases/Persona.php';
 //  $persona = new Persona('097042590', 'El señor', 'De los anillos', 'M', 'SOLTERO', '11 45879621', 'AR', 'Salta', 'Saltadora', 'Saltina');
 $persona = new Persona('097042590', 'El señor', 'De los Anillos', 'M', 'SOLTERO', '11 45879621', 'AR', 'Salta', 'Saltadora', 'Saltina', 1);
 $persona->save();
 echo $persona->getNombres() . ' se ha guardado correctamente con el id: ' . $persona->getIdPersona();


 $personaje = Persona::buscarPorId(1);
 if($personaje){
    echo '<br />'.$personaje->getNombres().'<br />';
    echo '<br />'.$personaje->getApellidos().'<br />';
 }else{
    echo 'El personaje no ha podido ser encontrado';
 }
?>