<form id="checkoutform" action="code/insertlogin.php" method="post">
    <div id="inputform">
        <label><h1>Create user:</h1><br>Name:</label><br>
    <input class='input-width' type="text" name="name"><br>
    </div>
    <div id="inputform">
    <label>Address:</label><br>
    <input class='input-width' type="text" name="address"><br>
    </div>
    <div id="inputform">
    <label>Zip:</label><br>
    <input class='input-width' type="text" name="zip"><br>
    </div>
    <div id="inputform">
    <label>City:</label><br>
    <input class='input-width' type="text" name="city"><br>
    </div>
    <div id="inputform">
    <label>Phone:</label><br>
    <input class='input-width' type="text" name="phone"><br>
    </div>
    <div id="inputform">
    <label>Email:</label><br>
    <input class='input-width' type="text" name="email"><br>
    </div>
    <div id="inputform">
    <label>Password:</label><br>
    <input class='input-width' type="password" name="password"><br>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Register">
</form>

<form id="checkoutformlogin" action="code/login.php" method="post">
    <div id="inputformlogin">
    <label><h1>Login:</h1><br>Email:</label><br>
    <input class='input-width' type="text" name="email"><br>
    </div>
    <div id="inputformlogin">
    <label>Password:</label><br>
    <input class='input-width' type="password" name="password"><br>
    </div>
    <input type="submit" class="btn btn-primary" name="login" value="Login">
</form>