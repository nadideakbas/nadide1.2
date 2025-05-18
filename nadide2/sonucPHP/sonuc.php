<?php
// Formdan gelen POST verilerini alıyoruz
$isim = $_POST['isim'] ?? '';
$soyisim = $_POST['soyisim'] ?? '';
$cinsiyet = $_POST['cinsiyet'] ?? '';
$sehir = $_POST['sehir'] ?? '';
$mesaj = $_POST['mesaj'] ?? '';

// Basit boş alan kontrolü
$hata = '';
if (!$isim) $hata .= "İsim alanı boş bırakılamaz.<br>";
if (!$soyisim) $hata .= "Soyisim alanı boş bırakılamaz.<br>";
if (!$cinsiyet) $hata .= "Cinsiyet seçmelisiniz.<br>";
if (!$sehir) $hata .= "Şehir seçmelisiniz.<br>";
if (!$mesaj) $hata .= "Mesaj alanı boş bırakılamaz.<br>";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Form Sonucu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" />
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Gönderilen Form Bilgileri</h2>

    <?php if ($hata): ?>
      <div class="alert alert-danger" role="alert">
        <?= $hata ?>
        <a href="iletisim.html" class="btn btn-sm btn-primary mt-2">Geri dön</a>
      </div>
    <?php else: ?>
      <table class="table table-bordered">
        <tbody>
          <tr><th>İsim</th><td><?= htmlspecialchars($isim) ?></td></tr>
          <tr><th>Soyisim</th><td><?= htmlspecialchars($soyisim) ?></td></tr>
          <tr><th>Cinsiyet</th><td><?= htmlspecialchars($cinsiyet) ?></td></tr>
          <tr><th>Şehir</th><td><?= htmlspecialchars($sehir) ?></td></tr>
          <tr><th>Mesaj</th><td><?= nl2br(htmlspecialchars($mesaj)) ?></td></tr>
        </tbody>
      </table>
      <a href="iletisim.html" class="btn btn-primary">Yeni Form Doldur</a>
    <?php endif; ?>
  </div>
</body>
</html>

