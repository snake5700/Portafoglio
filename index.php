<?php

require("database/conDb.php");


include("database/query.php");
include_once("utility.php");

?>

<html lang="it">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
// Improve the game. :)

// Elaborate inforation from .csv file.
/*echo "Sto aprendo il file";

$stream = openFile();

echo "File aperto, inizio la lettura";

$data = readFromFile($stream);

echo "Ho letto il file, ora ne converto gli elementi in una lista";


foreach($data as $k => $v){
    list($domain, $url, $username, $password) = $v;
    if(checkIfRowExist($domain, $url, $username, $password))
        continue;
    insert($domain, $url, $username, $password);
}
// Enjoy meals.

$data = readAllFromDatabase();
writeReport(json_encode($data));

update("aa.altervista.org", "https%3A%2F%2Faa.altervista.org%2Findex.php", "dentrolastoria", "Suka");
$data = readAllFromDatabase();
writeReport(json_encode($data));

delete("aa.altervista.org");
$data = readAllFromDatabase();
writeReport(json_encode($data));*/

if(isset($_COOKIE["Insert"])){
    $value = $_COOKIE["Insert"];
}

?>
<header>
<div class="container">
    <?php 
        $Cracco = rand(0,1);

        if($Cracco === 1)
            echo "<h1> Tu sei aria fritta cit. Cracco </h1>";
        else
            echo "<h1> Bravo Merlo! </h1>";
    ?>
</div>  
</header>
<main>
<p> Compilare il form manualmente con la formula <span class="keyword">(domain, url, username, password)</span>.</p>
<form action="validate.php" method="post">
    <div class="form-group">
        <label for="domain"> Dominio </label> 
        <input placeholder="Inserire Dominio" name="domain" id="domain" autofocus required>
    </div>
    <div class="form-group">
        <label for="url"> Url </label>
        <input placeholder="Inserire Url" name="url" id="url" required>
    </div>
    <div class="form-group">
        <label for="mail"> Email </label>
        <input type="mail" placeholder="Inserire Email" name="mail" id="mail" required>
    </div>
    <div class="form-group">
        <label for="password"> Password </label>
        <input type="password" placeholder="Inserire Password" name="password" id="password" required>
    </div>
    <p> In alternativa è possibile caricare un file </p>
    <div class="form-group">
        <label for="file"> File </label>
        <input type="file" value="File" name="file" id="file">
    </div>
    <input type="submit" name="submit" value="Invia form">
</form>

</main>
<footer>
    <div class="container">
        <?php echo "<h1>Copyright ®  ".date("Y")." all rights are reserved!</h1>" ?>
    </div>
</footer>
</body>
</html>



