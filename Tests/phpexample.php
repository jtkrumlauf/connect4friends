<!DOCTYPE html>
<html>
<body>
<?php if ($_SERVER["REQUEST_METHOD"] == "GET"): ?>
	<p>In the get</p>
	 <form action="phpexample.php" method="post">
        <div class="form-group">
            <button type="submit" class="btn btn-default">Go to post</button>
        </div>
	</form>
<?php endif ?>
<?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
	<p>In the post<p>
		<form action="phpexample.php" method="get">
        <div class="form-group">
            <button type="submit" class="btn btn-default">shit go back</button>
        </div>
	</form>
<?php endif ?>

</body>
</html>
