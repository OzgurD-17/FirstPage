<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "<script type='text/javascript'>alert('Kullanıcı adı veya parola boş olamaz. Lütfen tekrar deneyin.');window.location.href='Login.html';</script>";
    exit();
}

if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
    alert('Geçersiz e-posta adresi. Lütfen tekrar deneyin.');
    window.location.href='Login.html';
    </script>";
    exit();
}

$expectedUsername = 'b221210017@sakarya.edu.tr';
$expectedPassword = 'b221210017';

if ($username === $expectedUsername && $password === $expectedPassword) {
    echo "<script>alert('Giriş başarılı, hoş geldiniz!');window.location.href='Login.html';</script>";
} else {
    echo "<script>alert('Kullanıcı adı veya parola yanlış. Lütfen tekrar deneyin.');window.location.href='Login.html';</script>";
}
