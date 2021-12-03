<?php
include_once("bootstrap.html");
include_once("connect.php");
session_start();

if(isset($_POST["logoutBtn"])){
$_SESSION['user'] = "";
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="font-family: Segoe UI,Frutiger; background-color: white	;">
  <nav class="navbar navbar-expand-md navbar-light" style="background-color:#343434;">
    <a  class= "navbar-brand font-weight-bold" style="color:#157e41;" ; href="index.php">Kansas sustainable</a>
      <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse float-right" id="collapsibleNavbar">
      <ul class="nav  navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link text-white" href="sustainable.php" >Om kansas sustainbale</a>
        </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="optjen_point.php" >Optjen point</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="indlos_pointkode.php" >Indløs pointkode</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="index.php" >Pointshop</a>
          </li>
          <li class="nav-item">
              <a class="nav-link font-weight-bold" style="color:#157e41;" href="login.php" >Login</a>

          </li>
      </ul>
  </div>
</nav>

<footer class="footer mt-auto navbar-light border-bottom fixed-bottom text-white" style="background-color:#343434;">
  <div class="container" >
    <div class="py-2 text-center">
  &copy; 1920 -
  <script>
    document.write(new Date().getFullYear())
  </script> | KANSAS WORKWEAR A/S <a>
  </div>
</footer>
