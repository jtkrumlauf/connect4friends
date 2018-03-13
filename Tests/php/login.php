<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title> Connect 4 Friends </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" src="css/index.css"/>
</head>
<body>
  	 <form action="index.php" method="post">
          <div class="form-group">
            Username:<br>
            <input type="text" name="username" value="">
            <br>
            Password:<br>
            <input type="text" name="password" value="">
            <br><br>
            <button type="submit" class="btn btn-default"> Login </button>
          </div>
  	</form>
</body>
</html>
