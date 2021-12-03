<?php
$title = "Kansas Sustainable - Login";
include("functions.php");
include_once("bootstrap.html");
include_once("connect.php");
include_once("header.php");


$loginstatus = "";

if (!isset($_SESSION['user'])) {
  $loginstatus = "You are not logged in";
}

if(isset($_POST['login'])){
  $users = getUsers($_POST['email']);
  if(count($users)>0){
    if($_POST['password'] == $users[0]['password']) {
        $_SESSION['user'] = $users[0]['user_id'];
        header("Location: index.php");
        exit();
    } else {
      $loginstatus = "Password is invalid";
    }
  } else {
    $loginstatus = "Email does not exist";
  }
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

<body>
<div class="container-fluid">
  <div class="row">
    <div class="col" style="padding-left: 0; padding-right: 0;">
    <div class="container ">
      <div class="d-flex justify-content-center login-form" style="padding-top: 250px;">
       <form action=" login.php" method="post">
          <div class="from-group">
            <h2 class="text-center mb-4">Login</h2>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="E-mail" name="email" value="">
                   </div>
                   <div class="form-group">
                     <input type="password" class="form-control" placeholder="Password" name="password" value="">
                   </div>
                   <p><?php echo $loginstatus ?></p>
                  </div>
             <input class="btn btn-primary mb-2" style="background-color:#343434;" type="submit"   name="login" value="Sign In">
          <a style="color:#157e41;" href="signup.php"><p>Sign up now</p></a>
          </div>
         </div>
        
         </div>
         </form>
    <div class="col" style="padding-left: 0; padding-right: 0;">
    <img src="trees.jpg" alt="pic1" class="img-fluid max-width: 100% height: autopx">
    </div>
</div>
</body>

</html>
