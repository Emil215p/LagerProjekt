<?php
require_once "dependencies/header.php";
require_once "dependencies/navbar.php"
?>
<h1>Manage the database and items</h1>
<p>Change what you want.</p>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="outdated/test.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit test site</a>
</form>
<!--<a href="sideedit.php?var=outdated/test.php">Edit test page</a>-->
<!--<a href="sideedit.php" value="outdated/test.php" name="var" method="post">Rediger Test side</a>-->
<?php
require_once "dependencies/footer.php";