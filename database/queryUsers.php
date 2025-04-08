<?php

require_once("conDb.php");

function insert($surname, $name, $username, $password){
    global $conDb;

    $stmt = $conDb->prepare("Insert into users() values(?,?,?,?)");
    $stmt->bind_param("ssss", $id, $surname, $name, $username, $password);
    if(!$stmt->execute()) 
        throw new RunTimeException("Insert: ". $stmt->errno);
    return ($stmt->affected_rows > 0 ? 1 : 0);
}

?>