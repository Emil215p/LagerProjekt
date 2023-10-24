<div id="formkeepinside">
<form id="checkoutform" action="code/register.php" method="post">
    <div id="inputform">
        <label><h1>Create user:</h1><br>Name:</label><br>
    <input class='input-width' type="text" name="name" pattern="{1,}" title="A name is required." required><br>
    </div>
    <div id="inputform">
    <label>Address:</label><br>
    <input class='input-width' type="text" name="address" pattern="[a-zA-ZæøåÆØÅ0-9 ]{1,}" title="Please enter a valid address." required><br>
    </div>
    <div id="inputform">
    <label>Zip:</label><br>
    <input class='input-width' type="text" name="zip" pattern="[0-9]{1,}" title="Please enter a valid zip code." required><br>
    </div>
    <div id="inputform">
    <label>City:</label><br>
    <input class='input-width' type="text" name="city" pattern="[a-zA-ZæøåÆØÅ ]{1,}" title="Please enter a valid city." required><br>
    </div>
    <div id="inputform">
    <label>Phone:</label><br>
    <input class='input-width' type="text" name="phone" pattern="[0-9+]{1,11}" title="Please enter a valid phone number, formats '12345678' and '+xx12345689' are allowed."  required><br>
    </div>
    <div id="inputform">
    <label>Email:</label><br>
    <input class='input-width' type="text" name="email" pattern="[a-zA-ZæøåÆØÅ0-9._%+\-]+@[a-zA-ZæøåÆØÅ0-9.\-]+\.[a-zA-ZæøåÆØÅ]{2,}$" title="Please enter a valid email address." required><br>
    </div>
    <div id="inputform">
    <label>Password:</label><br>
    <input class='input-width' type="password" name="password" minlength="8" title="Please enter a valid password, 8 characters are required" required><br>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Register">
</form>

<form id="checkoutformlogin" action="code/login.php" method="post">
    <div id="inputformlogin">
    <label><h1>Login:</h1><br>Email:</label><br>
    <input class='input-width' type="text" name="email" pattern="[a-zA-ZæøåÆØÅ0-9._%+\-]+@[a-zA-ZæøåÆØÅ0-9.\-]+\.[a-zA-ZæøåÆØÅ]{2,}$" required><br>
    </div>
    <div id="inputformlogin">
    <label>Password:</label><br>
    <input class='input-width' type="password" name="password" required><br>
    </div>
    <input type="submit" class="btn btn-primary" name="login" value="Login">
</form>
</div>