<?php

$fileContent = file_get_contents($_POST['var']);
echo $fileContent;
$file_content = urldecode($_POST['file_content']);
file_put_contents($_POST['var'], html_entity_decode($file_content)); //save the file
header('Location: admin.php');
