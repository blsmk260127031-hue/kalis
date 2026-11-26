<?php
// 1. Variabel Penanda Khusus Verifikasi
$verifikator = "SISWA_RPL_524";

// 2. Menangkap Data yang Dikirim dari Form HTML
$nama  = htmlspecialchars($_POST['txt_nama'] ?? '');
$kelas = htmlspecialchars($_POST['txt_kelas'] ?? '');
$minat = htmlspecialchars($_POST['rad_minat'] ?? '');

// 3. Cek minat dan tentukan rekomendasi bahasa (Checkpoint 5)
$rekomendasi = "";
if ($minat == "Web Dev") {
    $rekomendasi = "Rekomendasi Bahasa: JavaScript & PHP";
} elseif ($minat == "Mobile Dev") {
    $rekomendasi = "Rekomendasi Bahasa: Flutter & Kotlin";
} elseif ($minat == "Game Dev") {
    $rekomendasi = "Rekomendasi Bahasa: C# & Unity";
} else {
    $rekomendasi = "Rekomendasi Bahasa: Pilihan minat belum dipilih";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pemrosesan Form RPL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }
        .container-hasil {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #1a237e;
            font-size: 24px;
        }
        .status {
            background-color: #eceff1;
            border-left: 5px solid #1a237e;
            padding: 12px 15px;
            margin-top: 15px;
            border-radius: 4px;
        }
        .rekomendasi {
            background-color: #e8eaf6;
            border-left: 5px solid #3949ab;
            padding: 12px 15px;
            margin-top: 15px;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container-hasil">
        <!-- Tampilan Header Utama -->
        <h1>Selamat Datang, <?php echo $nama; ?>!</h1>

        <!-- Tampilan Informasi Kelas dan Minat -->
        <p>Anda dari kelas <strong><?php echo $kelas; ?></strong> dengan
            minat <strong><?php echo $minat; ?></strong>.</p>

        <!-- Teks Rekomendasi sesuai minat -->
        <div class="rekomendasi">
            <?php echo $rekomendasi; ?>
        </div>

        <!-- Pesan Penanda Khusus -->
        <div class="status">
            Status Akun: Terverifikasi oleh Kode <?php echo $verifikator; ?>
        </div>
    </div>
</body>
</html>
