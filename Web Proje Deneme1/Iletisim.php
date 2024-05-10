<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

var_dump($_POST);

$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$cinsiyet = $_POST['cinsiyet'];
$mesaj = $_POST['mesaj'];

$errors = [];

if (empty($name)) {
    $errors[] = "Ad alanı boş bırakılamaz.";
}
if (empty($surname)) {
    $errors[] = "Soyad alanı boş bırakılamaz.";
}
if (empty($phone)) {
    $errors[] = "Telefon alanı boş bırakılamaz.";
} elseif (strlen($phone) != 11) {
    $errors[] = "Geçersiz Telefon Numarası";
}
if (empty($email)) {
    $errors[] = "Email alanı boş bırakılamaz.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Geçersiz Email";
}
if (empty($cinsiyet)) {
    $errors[] = "Cinsiyet alanı boş bırakılamaz.";
}
if (empty($mesaj)) {
    $errors[] = "Mesaj alanı boş bırakılamaz.";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    sleep(3);
    header("Location: Iletisim.html");
    exit();
}

echo "Giriş Başarılı $name $surname $phone $email";
?>