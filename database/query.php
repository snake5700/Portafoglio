<?php

require_once("conDb.php");


// Insert a row inside the database (It doesn't check if a row exist).
function insert($domain, $url, $username, $password){
    global $conDb; 
    
    $stmt = $conDb->prepare("Insert into Fritta Values(?,?,?,?)");
    $stmt->bind_param("ssss",$domain,$url,$username,$password);
    if(!$stmt->execute()) 
        throw new RunTimeException("Insert: ". $stmt->errno);
    return ($stmt->affected_rows > 0 ? 1 : 0);
}

// Dumb function for debug purposing.
function readAllFromDatabase(){
    global $conDb;

    $store = array();

    $result = $conDb->query("Select * from Fritta");
    while($data = $result->fetch_array(MYSQLI_ASSOC))
        array_push($store, $data);

    return $store;
}

// A little sanity check.
function checkIfRowExist($domain, $url, $username){
    global $conDb;

    $stmt = $conDb->prepare("Select domain, url, username, pass from Fritta where domain=? && url=? && username=?");
    $stmt->bind_param("sss",$domain,$url,$username);
    if(!$stmt->execute()) 
        throw new RunTimeException("Check: ". $stmt->errno);
    
    return ($stmt->num_rows != 0 ? True : False);
}

// This function update the username.
function update($domain,$url,$username,$password){
    global $conDb;

    $stmt = $conDb->prepare("Update Fritta Set pass=? where domain=? && url=? && username=?");
    $stmt->bind_param("ssss", $password, $domain, $url, $username);
    if(!$stmt->execute())
        throw new RunTimeException("Update: ". $stmt->errno);
}

// Delete rows from the database.
function delete($domain){
    global $conDb;

    $stmt = $conDb->prepare("Delete from Fritta where domain=?");
    $stmt->bind_param("s", $domain);
    if(!$stmt->execute())
        throw new RunTimeException("Delete: ".$stmt->errno);
}

// A function that return the password of a website if it exists.
?>