<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css">
    <title>Pemesanan</title>
</head>
<body>
    <div class="pemesanan-container">
    <?php
    // Memulai sesi PHP
    session_start();

    // Konfigurasi koneksi ke database
    $servername = "localhost"; // Nama server
    $username = "username"; // Nama pengguna database
    $password = ""; // Password pengguna database
    $dbname = "ujikom"; // Nama database yang akan digunakan

    // Membuat koneksi ke database MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa apakah koneksi berhasil
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error); // Jika koneksi gagal, tampilkan pesan kesalahan
    }

    // Mengambil data yang dikirim dari form pemesanan
    $nama = $_POST['nama']; // Nama pemesan
    $gender = $_POST['gender']; // Jenis kelamin
    $id = $_POST['id']; // Nomor identitas
    $tipe_kamar = $_POST['tipe_kamar']; // Tipe kamar yang dipilih
    $harga = $_POST['harga']; // Harga kamar
    $tanggal = $_POST['tanggal']; // Tanggal pemesanan
    $durasi = $_POST['durasi']; // Durasi menginap dalam hari
    $breakfast = isset($_POST['breakfast']) ? 'Ya' : 'Tidak'; // Pilihan sarapan, default 'Tidak'

    // Validasi nomor identitas harus 16 digit
    if (strlen($id) != 16) {
        // Jika nomor identitas tidak valid, kembalikan ke halaman form dengan pesan kesalahan
        header("Location: form_pemesanan.php?error=Isian salah.. No Identitas harus 16 digit.");
        exit(); // Hentikan eksekusi jika terjadi kesalahan
    }

    // Menghitung total biaya berdasarkan data yang diinput pengguna
    $hargaKamar = $harga; // Harga kamar per malam
    $hargaBreakfast = $breakfast == 'Ya' ? 80000 : 0; // Harga sarapan per hari (jika dipilih)

    // Menghitung total harga kamar dan sarapan
    $totalKamar = $hargaKamar * $durasi; // Total harga kamar berdasarkan durasi menginap
    $totalBreakfast = $hargaBreakfast * $durasi; // Total harga sarapan berdasarkan durasi menginap
    $totalBayar = $totalKamar + $totalBreakfast; // Total keseluruhan (kamar + sarapan)

    // Menambahkan diskon 10% jika menginap 3 hari atau lebih
    $diskon = 0; // Inisialisasi diskon
    if ($durasi >= 3) {
        $diskon = $totalBayar * 0.1; // Menghitung diskon 10% dari total bayar
        $totalBayar -= $diskon; // Kurangi total bayar dengan diskon
    }

    // Menyimpan data pemesanan ke dalam database
    $sql = "INSERT INTO pendaftar (nama_pemesan, jenis_kelamin, no_identitas, tipe_kamar, harga, tanggal_pesanan, durasi_menginap, breakfast, total_bayar)
            VALUES ('$nama', '$gender', '$id', '$tipe_kamar', '$harga', '$tanggal', '$durasi', '$breakfast', '$totalBayar')";

    // Mengecek apakah data berhasil disimpan ke database
    if ($conn->query($sql) === TRUE) {
        // Jika data berhasil disimpan, tampilkan pesan dan detail pemesanan
        echo "<h3>Terima kasih telah memesan kamar di Grand Luxora Hotel.</h3>";
        echo "<h2>Detail pemesanan:</h2>";
        echo "<p>Nama Pemesan: $nama</p>";
        echo "<p>Nomor Identitas: $id</p>";
        echo "<p>Jenis Kelamin: $gender</p>";
        echo "<p>Tipe Kamar: $tipe_kamar</p>";
        echo "<p>Durasi Menginap: $durasi hari</p>";
        echo "<p>Breakfast: $breakfast</p>";

        // Jika ada diskon, tampilkan informasi diskon
        if ($durasi >= 3) {
            echo "<p>Diskon: 10%</p>";
        }

        // Menampilkan total bayar dengan format yang benar (ribuan dipisah dengan titik)
        echo "<p><strong>Total Bayar: Rp. " . number_format($totalBayar, 0, '', '.') . "</strong></p>";
    } else {
        // Jika terjadi kesalahan dalam menyimpan data, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi ke database
    $conn->close();
    ?>
    <br>
    <!-- Tautan untuk kembali ke halaman utama -->
    <a href="index.php">Selesai</a>
    </div>
</body>
</html>
