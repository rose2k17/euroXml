<?php
/*ejemplo = simplexml_load_file("ejemplo.xml");*/
$ejemplo = new DOMDocument;
$ejemplo->load("ejemplo.xml");
$experiencias = $ejemplo->getElementsByTagName('WorkExperience');
foreach ($experiencias as $experiencia) {
    $inicios= $experiencia->getElementsByTagName('From');
    if($inicios->length <1 ) {
        $año = NULL; $mes = NULL; $dia = NULL;
    }
    foreach ($inicios as $inicio) {
        if($inicio->getAttribute('year')){
            $año = $inicio->getAttribute('year');
            echo $año;
        } else {$año = NULL;}
        if($inicio->getAttribute('month')){
            $mes = $inicio->getAttribute('month');
            echo $mes;
        } else {$mes = NULL;}
        if($inicio->getAttribute('day')){
            $dia = $inicio->getAtribute('day');
            echo $dia;
        } else {$dia = NULL;}
    }
    $final=$experiencia->getElementsByTagName('To');
    if($final->length <1 ) {
        $año = NULL; $mes = NULL; $dia = NULL;
    }
    foreach ($final as $fin) {
        if($fin->getAttribute('year')){
            $año = $fin->getAttribute('year');
            echo $año;
        } else {$año = NULL;}
        if($fin->getAttribute('month')){
            $mes = $fin->getAttribute('month');
            echo $mes;
        } else {$mes = NULL;}
        if($fin->getAttribute('day')){
            $dia = $fin->getAtribute('day');
            echo $dia;
        } else {$dia = NULL;}
    }
    $posicion = $experiencia->getElementsByTagName('')->getAttribute('Label');
    echo $posicion;
    $actividad = $experiencia->getElementsByTagName('Activities');
    echo $actividad;
}
?>