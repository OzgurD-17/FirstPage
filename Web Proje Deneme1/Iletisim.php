<?php
// Formdan gelen verileri al
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$cinsiyet = $_POST['cinsiyet'];
$mesaj = $_POST['mesaj'];
$memnuniyet = $_POST['memnuniyet'];

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
echo "Ad: $name<br>";
echo "Soyad: $surname<br>";
echo "Telefon: $phone<br>";
echo "Email: $email<br>";
echo "Cinsiyet: $cinsiyet<br>";
echo "Mesaj: $mesaj<br>";
echo "Memnuniyet: $memnuniyet<br>";
sleep(5);
// Başka bir sayfaya yönlendirme
header("Location: tesekkurler.html");
exit();
?>
