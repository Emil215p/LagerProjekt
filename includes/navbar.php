        <div class="topnav">
<!--            Removed for now, intended to be permanent if i can get the new system to work.-->
<!--            <a class="active" href="http://www.emko01.skp-dp.sde.dk/LagerProjekt/index.php">Start</a>
            <a href="http://www.emko01.skp-dp.sde.dk/LagerProjekt/pages/store.php">Store</a>
            <a href="http://www.emko01.skp-dp.sde.dk/LagerProjekt/pages/contact.php">Contact</a>
            <a href="http://www.emko01.skp-dp.sde.dk/LagerProjekt/pages/about.php">About</a>-->
            <a <?php echo $home_active; ?> class="navbar-brand" href="index.php?page=home">Start</a>
            <a <?php echo $store_active; ?> class="navbar-brand" href="index.php?page=store">Store</a>
            <a <?php echo $contact_active; ?> class="navbar-brand" href="index.php?page=contact">Contact</a>
            <a <?php echo $about_active; ?> class="navbar-brand" href="index.php?page=about">About</a>
<!--            Both of these are obsolete, the test irrelevant and broken, the admin page is broken due to the file system change, might not fix them.
            They do not matter.
            A cart button should probably take the side of the navbar.
-->
<!--            <a id="right" href="http://www.emko01.skp-dp.sde.dk/LagerProjekt/pages/admin.php">(Deprecated) Admin</a>
            <a id="right" href="http://www.emko01.skp-dp.sde.dk/LagerProjekt/obsolete/outdated/test.php">(Old) Test</a>-->
        </div>