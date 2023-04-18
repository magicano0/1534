
<?php
    /* Your password */
    $password = '404A200OK';

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        // Password not set or incorrect. Send to login.php.
        header('Location: index.php');
        exit;
    }
?>

<?php
error_reporting(0);
header("Location: Home/");
exit;

?>