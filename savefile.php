<?php

$file_content = urldecode($_POST['file_content']);
file_put_contents('outdated/test.php', html_entity_decode($file_content)); //save the file
header('Location: admin.php');