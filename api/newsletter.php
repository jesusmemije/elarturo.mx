<?php
require_once("Suscription.php");
extract($_REQUEST);

$suscription = new Suscription( $email );

if( $suscription->Create() ){

    echo 'ok';
    
} else {
    echo $suscription->error;
}
