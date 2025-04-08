<?php

require_once("database/queryUsers.php");
include_once("utility.php");

if(!isset($_POST["Registration"]))
    writeLog("Accesso non autorizzato:".date("Y-m-d H:i:s").",".$_SERVER["REMOTE_ADDR"].",".$_SERVER["HTTP_USER_AGENT"]."\n");

if((empty($_POST["surname"])) || (empty($_POST["name"])) || (empty($_POST["email"])) || (empty($_POST["password"])) || (empty($_POST["confirm"])))
    header("Location: index.php");

// Check if form is filled.

$surname = htmlspecialchars(trim($_POST["surname"]));
$name = htmlspecialchars(trim($_POST["name"]));
$username = htmlspecialchars(trim($_POST["email"]));
$password = htmlspecialchars(trim($_POST["password"]));
$confirm = htmlspecialchars(trim($_POST["confirm"]));

// File .js per controllare questo.

if(!filter_var($username, FILTER_VALIDATE_EMAIL))
    die("<p> Email non valida, si prega di riprovare!</p>");

if($password != $confirm)
    die("<p> Password non coincidenti, si prega di riprovare!</p>");

$password = password_hash($password, PASSWORD_DEFAULT);

if(!insert($surname, $name, $username, $password))
    header("Location: index.php");
else
    header("Location: private/");
?>