<?php

require_once 'responses/consultarResponse.php';
require_once '../../modelo/club.php';
require_once '../../modelo/jugador.php';

header('Content-Type: application/json');



$resp= new ConsultatodosResponse ();

$c=new Club();
$c->Nombre = 'Paris Saint-Germain Football Club';
$c->Fundacion = '2 de agosto de 1970 (52 años)';
$c->Presidente = 'Nasser Al-Khelaifi';

$c2=new Club();
$c2->Nombre = 'Manchester United Football Club';
$c2->Fundacion = '5 de marzo de 1878 (144 años)';
$c2->Presidente = 'Joel Glazer';

$j1=new jugador();
$j1->Id= '1';
$j1->Nombre = 'Lionel Andrés Messi';
$j1->Apodo= 'La Pulga,  El Mesías,  D10S';
$j1->Altura = '1.70cm';
$j1->Club= $c


$j2=new Jugador();
$j2->Id= '2';
$j2->Nombre = 'Lisandro Martínez';
$j2->Apodo='Licha';
$j2->Altura = '1.75cm';
$j2->Club=$c2






$resp->$listJugador() = $j1;
$resp->$listJugador() = $j2;


echo json_encode($resp);
