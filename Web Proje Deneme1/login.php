<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) 
{
    header("Location: Login.html");
    exit();
}

if (!filter_var($username, FILTER_VALIDATE_EMAIL)) 
{
    header("Location: Login.html");
    exit();
}

$expectedUsername = 'b221210017@sakarya.edu.tr';
$expectedPassword = 'b221210017';

if ($username === $expectedUsername && $password === $expectedPassword) 
{
    echo "<script>alert('Giriş başarılı, hoş geldiniz!');</script>";
} 
else 
{
    echo "<script>alert('Kullanıcı adı veya parola yanlış. Lütfen tekrar deneyin.');</script>";
}
?>