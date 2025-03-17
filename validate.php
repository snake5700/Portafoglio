<?php

require_once("database/query.php");

if(!isset($_POST["submit"]))
    die("<p> Impossibile inviare il form, tornare indietro </p>");

if((empty($_POST["domain"])) || (empty($_POST["url"])) || (empty($_POST["mail"])) || (empty($_POST["password"])))
    die("<p> Uno o più campi sono vuoti </p>");

$domain = htmlspecialchars(trim($_POST["domain"]));

$url = htmlspecialchars(trim($_POST["url"]));

if(!filter_var($url, FILTER_VALIDATE_URL))
    die("<p> Url non valido </p>");

$username = htmlspecialchars(trim($_POST["mail"]));

if(!filter_var($username, FILTER_VALIDATE_EMAIL))
    die("<p> Email non valida! </p>");

$password = password_hash(htmlspecialchars(trim($_POST["password"])), PASSWORD_DEFAULT);

$url = urlencode($url); 

if(!checkIfRowExist($domain,$url,$username)){
    $esit=insert($domain,$url,$username,$password);
    setcookie("Insert",$esit,time()+360);
    header("Location:../");
}
?>