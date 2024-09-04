<?php

function nombreDiaSemana($fecha){
   echo  $dia = date('w', strtotime($fecha));
   
        
    $nombresDias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado" );
    
    $diaS = $nombresDias[$dia];
    return $diaS;
    }

    echo nombreDiaSemana('2024-08-11');
?>