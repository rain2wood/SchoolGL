<!DOCTYPE html>
<?php
session_start();
$email = $_SESSION['email'];
$password = $_SESSION['password'];

echo "logged email is $email<br>";
echo "logged password is $password";
?>
</html>