<?php
session_start(); // Oturumu başlat

// Formdan gelen verileri al
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$cinsiyet = $_POST['cinsiyet'];
$mesaj = $_POST['mesaj'];
$memnuniyet = $_POST['memnuniyet'];

// Verileri oturumda sakla
$_SESSION['name'] = $name;
$_SESSION['surname'] = $surname;
$_SESSION['phone'] = $phone;
$_SESSION['email'] = $email;
$_SESSION['cinsiyet'] = $cinsiyet;
$_SESSION['mesaj'] = $mesaj;
$_SESSION['memnuniyet'] = $memnuniyet;

// XSS (Cross-Site Scripting) kontrolü
$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$mesaj = htmlspecialchars($mesaj);

// Giriş doğrulama
if (empty($name) || empty($surname) || empty($phone) || empty($email) || empty($cinsiyet) || empty($mesaj) || empty($memnuniyet)) {
    echo "Lütfen tüm alanları doldurun.";
    exit();
}

// Telefon numarasının doğruluğu kontrolü
if (!preg_match("/^\d{10}$/", $phone)) {
    echo "Lütfen telefon numaranızı doğru formatta girin (örn: 5551112233).";
    exit();
}

// Email adresinin doğruluğu kontrolü
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Lütfen geçerli bir email adresi girin.";
    exit();
}

header("Location: Tesekkurler.php");
exit();
