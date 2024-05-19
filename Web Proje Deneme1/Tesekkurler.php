<?php
session_start(); // Oturumu başlat

// Verileri oturumdan al
$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
$cinsiyet = $_SESSION['cinsiyet'];
$mesaj = $_SESSION['mesaj'];
$memnuniyet = $_SESSION['memnuniyet'];

// Verileri ekrana yaz
echo "Ad: " . $name . "<br>";
echo "Soyad: " . $surname . "<br>";
echo "Telefon: " . $phone . "<br>";
echo "Email: " . $email . "<br>";
echo "Cinsiyet: " . $cinsiyet . "<br>";
echo "Mesaj: " . $mesaj . "<br>";
echo "Memnuniyet: " . $memnuniyet . "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;URL='Hakkinda.html'">
    <title>Mesaj Alındı</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center" style="margin-top: 10%;">
        <h1 class="display-4">Teşekkürler</h1>
        <h2 class="lead">Ana Menüye Yönlendiriliyorsunuz</h2>
        <h4>Lütfen Bekleyin...</h4>
        <h5>Veya <a href="Hakkinda.html">buraya</a> tıklayın</h5>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>