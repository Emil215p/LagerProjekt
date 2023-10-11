<?php
   session_start();
   unset($_SESSION["name"]);
   unset($_SESSION["email"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = ../index.php?page=start');