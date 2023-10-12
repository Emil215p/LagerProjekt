<?php
   session_start();
   unset($_SESSION["name"]);
   
   echo 'You have cleaned session';
   header("location: ../index.php?page=start");