<meta charset='utf-8'>

<?php

function FechaTexto($fecha){
   $dia = date('w', strtotime($fecha));
   $diaF = date('d', strtotime($fecha));
   $mes = date('n', strtotime($fecha));
   $ano = date('Y', strtotime($fecha));

   
        
    $nombresDias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado" );
    $nombresMEs = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    
    $diaS = $nombresDias[$dia];
    $mesS = $nombresMEs[$mes];
    $textoFecha = $diaS." ".$diaF∫." del ".$mesS." del ".$ano;

    return $textoFecha;
    }

    echo FechaTexto('2024-08-11');
?>
