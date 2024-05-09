<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) 
{
    header("Location: login.html");
    exit();
}

if (!filter_var($username, FILTER_VALIDATE_EMAIL)) 
{
    header("Location: login.html");
    exit();
}

$expectedUsername = 'b221210017@sakarya.edu.tr';
$expectedPassword = 'b221210017';

if ($username === $expectedUsername && $password === $expectedPassword) 
{
    echo "Hoşgeldiniz $username";
} 
else
{
    header("Location: login.html");
}
?>