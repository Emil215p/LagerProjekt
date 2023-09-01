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
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="outdated/style.css" />
    <a href="#" onclick="this.parentNode.submit()">Edit old styling</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="dependencies/dbconn.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit database connection (careful)</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="dependencies/footer.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit footer</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="dependencies/header.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit header</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="dependencies/header_alt.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit alternative header (header for edit side)</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="dependencies/navbar.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit navigation bar</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="../LagerProjekt/about.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit about section</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="../LagerProjekt/admin.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit admin section</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="../LagerProjekt/contact.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit contact section</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="../LagerProjekt/index.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit index section</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="../LagerProjekt/savefile.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit file saving system (careful, it controls the saving of edits)</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="../LagerProjekt/sideedit.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit file editing system (careful, it controls the editing)</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="../LagerProjekt/store.php" />
    <a href="#" onclick="this.parentNode.submit()">Edit store section</a>
</form>
<form action="./sideedit.php" method="POST">
    <input type="hidden" name="var" value="../LagerProjekt/storestyle.css" />
    <a href="#" onclick="this.parentNode.submit()">Edit main site styling</a>
</form>
<?php
require_once "dependencies/footer.php";