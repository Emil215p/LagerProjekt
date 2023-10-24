<?php
//$_SESSION['valid'] = true;
if (!(isset($_SESSION['valid']) && $_SESSION['valid'] == true)) {
   header("location: index.php?page=loginornew"); 
}