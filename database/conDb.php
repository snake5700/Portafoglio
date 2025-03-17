<?php

$conDb = new mysqli("localhost", "Alessio", "Panavia_Tornado", "password");

if($conDb->connect_errno)
    throw new RunTimeException("Connessione: ".$conDb->connect_error);

?>

