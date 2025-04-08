<?php
   // Check if a session exist. If not, redirect to home page.
   session_start();
   if(isset($_SESSION["user"])){
      if(time() <= $_SESSION["expire"]){
         header("Location: private/index.php'");
         exit();
      }
   }else{
      header("Location: home.html");
      exit();
   }
?>