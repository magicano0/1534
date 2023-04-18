<?php
    /* Your password */
    $password = '404A200OK';

    /* Redirects here after login */
    $redirect_after_login = 'Home/spCall/';

    /* Will not ask password again for */
    $remember_password = strtotime('+5 minutes'); // 5 minutes

    if (isset($_POST['password']) && $_POST['password'] == $password) {
        setcookie("password", $password, $remember_password);
        header('Location: ' . $redirect_after_login);
        exit;
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="pwd.css" />
    <title>By -->> magICano--<< </title>
  </head>
  <body>
    <form action="" class="form" method="post">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <div class="form-inner">
        <h2>PASSWORD</h2>
        <div class="content">
          <input class='input' id='pw' name='password' placeholder='ادخل باسوورد الاسكريبت هنا ' type='password' required>
          <button class="btn" type="submit" name="submit" > دخول الاسكريبت</button>
      <input class='btn'  name='pwd' type='button' onclick="window.location.href='https://miklpro.com/X8wKg" value=' الحصول علي الباسوورد هنا'>
         </div>
      </div>


    </form>
  </body>
</html>

