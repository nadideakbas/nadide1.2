<?php
$isim = isset($_POST['isim']) ? trim($_POST['isim']) : '';
$soyisim = isset($_POST['soyisim']) ? trim($_POST['soyisim']) : '';
$cinsiyet = isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : '';
$sehir = isset($_POST['sehir']) ? $_POST['sehir'] : '';
$mesaj = isset($_POST['mesaj']) ? trim($_POST['mesaj']) : '';

$hatalar = [];
if (empty($isim)) $hatalar[] = "İsim alanı boş bırakılamaz.";
if (empty($soyisim)) $hatalar[] = "Soyisim alanı boş bırakılamaz.";
if (empty($cinsiyet)) $hatalar[] = "Cinsiyet seçmelisiniz.";
if (empty($sehir)) $hatalar[] = "Şehir seçmelisiniz.";
if (empty($mesaj)) $hatalar[] = "Mesaj alanı boş bırakılamaz.";

$gonderimZamani = date('d.m.Y H:i:s');
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonuçları</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container mt-5">

    <?php if (!empty($hatalar)): ?>
      <h3>Form Sonuçları</h3>
      <div class="alert alert-danger">
        <ul>
          <?php foreach ($hatalar as $hata): ?>
            <li><?= htmlspecialchars($hata) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <a href="/pages/iletişim.html" class="btn btn-primary">Geri Dön</a>

    <?php else: ?>
      <h3 class="mb-4">Form Başarıyla Gönderildi</h3>
      <div class="card p-4 shadow-sm">
        <p><strong>İsim:</strong> <?= htmlspecialchars($isim) ?></p>
        <p><strong>Soyisim:</strong> <?= htmlspecialchars($soyisim) ?></p>
        <p><strong>Cinsiyet:</strong> <?= htmlspecialchars($cinsiyet) ?></p>
        <p><strong>Şehir:</strong> <?= htmlspecialchars($sehir) ?></p>
        <p><strong>Mesaj:</strong> <?= nl2br(htmlspecialchars($mesaj)) ?></p>
        <p><strong>Gönderim Zamanı:</strong> <?= $gonderimZamani ?></p>
      </div>
    <?php endif; ?>

  </div>
</body>
</html>
