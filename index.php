<!DOCTYPE html>
<html>
<head>
  <title> Connect 4 Friends </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" src="css/index.css"/>
  <style>
  * {
      box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Logo Area */
  .header {
    grid-area: header;
    background-color: #f1f1f1;
    padding: 30px;
    text-align: center;
    font-size: 35px;
  }

  /* The grid container */
  .grid-container {
    display: grid;
    grid-template-areas:
    'header header header header header header'
    'left middle middle middle middle right'
  }

  .left, .middle, .right {
    padding: 10px;
    height: 300px;
  }

  /* Left Column */
  .left {
    grid-area: left;
  }

  /* Middle Column */
  .middle {
    grid-area: middle;
  }

  /* Right Column */
  .right {
    grid-area: right;
  }

  </style>
</head>
<body>
  <?php if ($_SERVER["REQUEST_METHOD"] == "GET"): ?>
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
  <?php endif ?>
  <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
  	<form action="index.php" method="get">
      <div class="grid-container">
        <div class="header">
          <h2>Header</h2>
        </div>
        <div class="left" style="background-color:#aaa;">NAV BAR HERE</div>
        <div class="middle" style="background-color:#bbb;">MAIN CONTENT HERE</div>
        <div class="right" style="background-color:#ccc;">LOGIN/SIGNUP HERE</div>
      </div>
  	</form>
  <?php endif ?>
</body>
</html>
