<?php include ("connect.php"); ?>
<?php include ("header.php"); ?>

<div class="container">
        <div class="content-container clearfix">
<h2>Login Here</h2>
<form action="login_submit.php" method="post">
<fieldset>
<p>

  <div class="row">
<div class="col-md-3">
<label for="phpro_username">Username</label>
<input type="" class="form-control" id="phpro_username" name="phpro_username" value="" maxlength="20" />
</div>
</div>

  <div class="row">
<div class="col-md-3">
<label for="phpro_password">Password</label>
<input type="password" class="form-control" id="phpro_password" name="phpro_password" value="" maxlength="20" />
</div>
</div>
<p>
</p>
<input type="submit" class="btn btn-success btn-block visible-xs" value="Login" />
<input type="submit" class="btn btn-success hidden-xs" value="Login" />
</p>
<a href="adduser.php">create account</a>
</fieldset>
</form>
</div>
</div>
</body>
</html>