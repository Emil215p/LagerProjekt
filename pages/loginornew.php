<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="assets/css/loginregister.css">
<div class="form">
    <div id="signup">   
        <h1>Register</h1>
        <form action="code/register.php" method="post">
                <div class="field-wrap">
                    <label>
                        Name<span class="req">*</span>
                    </label>
                    <input class='input-width' type="text" name="name" pattern="{1,}" title="A name is required." required/>
                </div>
                <div class="field-wrap">
                    <label>
                        Address<span class="req">*</span>
                    </label>
                    <input type="text" name="address" pattern="[a-zA-ZæøåÆØÅ0-9 ]{1,}" title="Please enter a valid address." required/>
                </div>
                <div class="field-wrap">
                    <label>
                        Zip<span class="req">*</span>
                    </label>
                    <input type="text" name="zip" pattern="[0-9]{1,}" title="Please enter a valid zip code." required/>
                </div>
                <div class="field-wrap">
                    <label>
                        City<span class="req">*</span>
                    </label>
                    <input type="text" name="city" pattern="[a-zA-ZæøåÆØÅ ]{1,}" title="Please enter a valid city." required/>
                </div>
                <div class="field-wrap">
                    <label>
                        Phone<span class="req">*</span>
                    </label>
                    <input type="text" name="phone" pattern="[0-9+]{1,11}" title="Please enter a valid phone number, formats '12345678' and '+xx12345689' are allowed."  required/>
                </div>
                <div class="field-wrap">
                    <label>
                        Email<span class="req">*</span>
                    </label>
                    <input type="text" name="email" pattern="[a-zA-ZæøåÆØÅ0-9._%+\-]+@[a-zA-ZæøåÆØÅ0-9.\-]+\.[a-zA-ZæøåÆØÅ]{2,}$" title="Please enter a valid email address." required/>
                </div>
                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" minlength="8" title="Please enter a valid password, 8 characters are required" required/>
                </div>
                <button type="submit" name="submit" class="button button-block"/>Register</button>
        </form>
    <div id="login">   
        <h1>Login</h1>
        <form action="code/login.php" method="post">
            <div class="field-wrap">
                <label>
                    Email<span class="req">*</span>
                </label>
                <input type="text" name="email" pattern="[a-zA-ZæøåÆØÅ0-9._%+\-]+@[a-zA-ZæøåÆØÅ0-9.\-]+\.[a-zA-ZæøåÆØÅ]{2,}$" required/>
            </div>
            <div class="field-wrap">
                <label>
                    Password<span class="req">*</span>
                </label>
                <input type="password" name="password" required/>
            </div>
            <button type="submit" class="button button-block" name="login"/>Login</button>  
        </form>
    </div>
</div>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="assets/js/loginregister.js"></script>