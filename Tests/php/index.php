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
<!--
Background- Neutral: #EFEFEF
Piece Red #FF3B3F
Piece Carbon #A9A9A9
Light Blue #CAEBF2
-->
<head>
  <title> Connect 4 Friends </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" src="css/index.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
    width: 60%;
    margin: auto;
    grid-template-areas:
    'header header header header header header'
    'left middle middle middle middle middle'
  }

  .left, .middle {
    padding: 10px;
    height: 300px;
    background-color: #EFEFEF;
  }

  /* Left Column */
  .left {
    grid-area: left;
    border: 1px solid black;
  }

  /* Middle Column */
  .middle {
    grid-area: middle;
  }

  /* Nav Bar */
  .nav-item {
    padding: 5px;
  }
  </style>
</head>
<body>
  	<form action="index.php" method="get">
      <div class="grid-container">
        <div class="header" style="background-color: white">
          <img src="assets/indexLogo.png"/>
        </div>
        <div class="left">
          <nav class="navbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#"> Play </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Stats </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Rules </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Settings </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Shop </a>
              </li>
            </ul>
        </nav>
        </div>
        <div class="middle"> Greetings we need content here </div>
      </div>
  	</form>
</body>
</html>

