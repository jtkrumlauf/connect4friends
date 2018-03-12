<?php session_start(); ?>

<!DOCTYPE html>
<html>
<body>
<?php if ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_SESSION["ID"])):?>
	<p>In the get</p>
	 <form action="session.php" method="post">
        <div class="form-group">
            <button type="submit" class="btn btn-default">Log in</button>
        </div>
	</form>
<?php elseif(isset($_SESSION["ID"])): ?>
	<p> You're logged in! </p>
<?php elseif($_SERVER["REQUEST_METHOD"] == "POST"): 
	echo "just set session id";
	$_SESSION["ID"] = 4;
?>
<?php endif ?>

</body>
</html>
