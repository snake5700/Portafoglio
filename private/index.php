<?php
 /* This is the private page of the user. here the user can upload a file with the passwords or fill the form manually.
 Here he can:
    - Insert  an new passsowrd manually;
    - Delete or update a  row;
    - See all his password with a javascritp function;*/
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: ../index.html");
        exit();
    }
?>
<html lang="it">
<head>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<header>
    <a href="#" class="logo"> <img src="../images/VeroLogoNoSfondo1.png" alt="logo"> </a>
    <nav class="center desktop">
        <ul>
            <li class="current"> <a href="#"> Home </a> </li>
            <li> <a href="#"> About </a> </li>
            <li> <a href="#"> Contact </a> </li> 
        </ul>
    </nav>
    <nav class="right">
        <ul>
            <li> <button class="nav-btn" onclick="location.href='login.html'"> Sign In </button> </li>
            <li> <img src="../images/user.png" class="user-circle" alt="user"> 
<!-- Aggiungere dropdown menu, aggiustare la usercard. -->
            </li>

        </ul>
    </nav>
</header>
<main>
<section class="info">
    <div class="info-news">
        <article>
            <h1> Password manager </h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi sem, viverra a nulla quis, porttitor sagittis leo. Aenean ullamcorper faucibus turpis, eget sodales ante consectetur eget. Cras a tincidunt neque. Fusce nec arcu tellus. Vivamus maximus, erat et tempus dapibus, neque ex vulputate augue, eu laoreet lacus ligula eget enim. Duis aliquam justo sed risus mattis vestibulum non viverra diam. Cras id bibendum justo, id blandit nunc. Sed convallis odio sit amet enim scelerisque, a feugiat ligula rutrum. Donec tincidunt molestie porttitor. Fusce egestas purus eget augue semper, vel consequat dolor venenatis. </p>
        </article>
        <aside class="right"> <img src="images/security" alt="security" class="square-image"> </aside>
    </div>
    <div class="info-news">
        <article>
            <h1> Perché? </h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi sem, viverra a nulla quis, porttitor sagittis leo. Aenean ullamcorper faucibus turpis, eget sodales ante consectetur eget. Cras a tincidunt neque. Fusce nec arcu tellus. Vivamus maximus, erat et tempus dapibus, neque ex vulputate augue, eu laoreet lacus ligula eget enim. Duis aliquam justo sed risus mattis vestibulum non viverra diam. Cras id bibendum justo, id blandit nunc. Sed convallis odio sit amet enim scelerisque, a feugiat ligula rutrum. Donec tincidunt molestie porttitor. Fusce egestas purus eget augue semper, vel consequat dolor venenatis.</p>
        </article>
        <aside class="right"> <img src="images/security" alt="Photo" class="square-image"> </aside>
    </div>
    <div class="info-news">
        <article>
            <h1> Proposta </h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mi sem, viverra a nulla quis, porttitor sagittis leo. Aenean ullamcorper faucibus turpis, eget sodales ante consectetur eget. Cras a tincidunt neque. Fusce nec arcu tellus. Vivamus maximus, erat et tempus dapibus, neque ex vulputate augue, eu laoreet lacus ligula eget enim. Duis aliquam justo sed risus mattis vestibulum non viverra diam. Cras id bibendum justo, id blandit nunc. Sed convallis odio sit amet enim scelerisque, a feugiat ligula rutrum. Donec tincidunt molestie porttitor. Fusce egestas purus eget augue semper, vel consequat dolor venenatis.</p>
        </article>
        <aside class="right"> <img src="images/security" alt="Photo" class="square-image"> </aside>
    </div>
</section>
</main>
<footer>
    <a href="#" class="logo"> <img src="../images/VeroLogoNoSfondo1.png" alt="logo"> </a>
        <p> Copyright &copy; Adamska Shalansaska all rights are reserved. </p>
    <nav class="social-desktop center desktop">
        <ul>
            <li> <a href="#"> Instagram </a> </li>
            <li> <a href="#"> Facebook </a> </li>
            <li> <a href="#"> Telegram </a> </li>
            <li> <a href="#"> GitHub </a> </li>
        </ul>
    </nav>
</footer>
</body>
</html>