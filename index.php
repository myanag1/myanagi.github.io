<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>yamato_eigyo</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>

  <?php
    if($error_message) {
      echo $error_message;
    }
  ?>

    <form action="index.php" method="POST">
        <p>ログインID：<input type="text" name="user_name"></p>
        <p>パスワード：<input type="password" name="password"></p>
        <input type="submit" name="login" value="ログイン">
    </form>


<?php
session_start();

$error_message = "";

if(isset($_POST["login"])) {

    if($_POST["user_name"] == "masashi" && $_POST["password"] == "93s3041c") {

        $_SESSION["user_name"] = $_POST["user_name"];

        $login_success_url = "login_success.php";

        header("Location: {$login_success_url}");

        exit;

    }

$error_message = "※ID、もしくはパスワードが間違っています。もう一度入力して下さい。";

}

?>




  </body>
</html>
