<?php

require("database/conDb.php");


include("database/query.php");
include_once("utility.php");

// Add session management.

// This page should be replaced for user authentication. and renamed as index.html
// After the user is authenticated, it should be redireted to it's private page. Use session's and cookies.

// Style will not be modified.

// For html file.. It's better to show a registraction form with a big logo and a little description of the service.

?>

<html lang="it">
<head>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
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



