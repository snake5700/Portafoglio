<?php

require("database/conDb.php");


include("database/query.php");
include_once("utility.php");

?>

<html lang="it">
<head>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
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
?>
<header>
<div class="container">
    <?php 
        if(isset($_COOKIE["Cracco"])){
            $value = $_COOKIE["Cracco"];
            if($value > 0)
                echo "<h1> Sembra un piatto di Marchesi </h1>";
            else
                echo "<h1> Bravo merlo, hai fatto un errore </h1>";
            setcookie("Cracco", "", time()-360);
        }
    ?>
</div>  
</header>
<main>
<article>
    <h1> Benvenuti nel password manager </h1>
    <p> Le vostre password saranno memorizzate correttamente, in modo sicuro e nessuno le saprà oltre a voi e me . Inoltre potrete visualizzarle quando vi sarete autenticati, in alternativa cliccate <a href="private/index.php"> qui </a> </p>
</article>
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
    <div class="form-group">
        <input type="submit" name="submit" value="Invia form">
    </div>
</form>
</main>
<footer>
    <div class="container">
        <?php echo "<h1>Copyright ®  ".date("Y")." all rights are reserved!</h1>" ?>
    </div>
</footer>
</body>
</html>



