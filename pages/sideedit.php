    <?php
$file = $_POST['var']; // file to edit
$html = file_get_contents($file); //read the file contents
$html = htmlentities($html, ENT_QUOTES);
?>
        <?php 
        require_once "../includes/header_alt.php";
        require_once "../includes/navbar.php"?>
<script>
function encode_content(){
  var content = document.getElementById('file_content').value;
  document.getElementById('file_content').value = encodeURIComponent(content);
}
</script>
</head>
<body>
<p>Opdater side.</p>
<form name="edit_form" method="post" action="./savefile.php" onsubmit="encode_content()">
  <textarea name="file_content" id="file_content" style="width:100%;" rows="35"><?php echo $html; ?></textarea>
  <input type="hidden" name="var" value="<?php echo $file; ?>"/>
  <input type="submit" value="Gem ændringer">
</form>
<a href="http://www.emko01.skp-dp.sde.dk/LagerProjekt/pages/admin.php">Tilbage</a>
        <?php require_once "http://www.emko01.skp-dp.sde.dk/LagerProjekt/includes/footer.php";