<?php echo '<pre>';
var_dump($_SESSION);
echo '</pre>'; ?>
<form action="code/insert.php" method="post">
    <div class="form-group">
        <label>name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>address</label>
        <input type="text" name="address" class="form-control">
    </div>
    <div class="form-group">
        <label>zip</label>
        <input type="text" name="zip" class="form-control">
    </div>
    <div class="form-group">
        <label>city</label>
        <input type="text" name="city" class="form-control">
    </div>
    <div class="form-group">
        <label>phone</label>
        <input type="text" name="phone" class="form-control">
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Indsend">
</form>