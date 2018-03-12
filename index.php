<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"):
  $_SESSION["ID"] = $_POST["username"];
endif;
if (!isset($_SESSION["ID"])):
    header("Location: http://localhost:8000/login.php");
endif;
?>

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
</body>
</html>
