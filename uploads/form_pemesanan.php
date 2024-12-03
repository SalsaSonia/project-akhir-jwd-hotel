<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mycss.css"> <!-- Link ke file CSS -->
    <title>Form Pemesanan Grand Luxora Hotel</title>
    <script>
        // Fungsi untuk menghitung total bayar berdasarkan harga, durasi, dan pilihan breakfast
        function hitungTotal() {
            var harga = parseInt(document.getElementById("harga").value); // Ambil harga kamar
            var durasi = parseInt(document.getElementById("durasi").value); // Ambil durasi menginap
            var total = harga * durasi; // Hitung total harga kamar sebelum diskon

            // Tambahan biaya untuk breakfast jika checkbox dicentang
            if (document.getElementById("breakfast").checked) {
                total += 80000 * durasi; // Tambahkan biaya breakfast (80.000 per hari) ke total
            }

            // Diskon 10% jika durasi menginap 3 hari atau lebih, dihitung setelah menambahkan biaya breakfast
            if (durasi >= 3) {
                total -= total * 0.1; // Kurangi total harga dengan diskon 10%
            }

            // Tampilkan total bayar di input total_bayar
            document.getElementById("total_bayar").value = total;
        }

        // Fungsi untuk mengatur harga otomatis berdasarkan tipe kamar yang dipilih
        function updateHarga() {
            var harga;
            var tipeKamar = document.getElementById("tipe_kamar").value; // Ambil tipe kamar yang dipilih
            // Tentukan harga berdasarkan tipe kamar
            switch (tipeKamar) {
                case "Standar":
                    harga = 500000;
                    break;
                case "Deluxe":
                    harga = 800000;
                    break;
                case "Executif":
                    harga = 1000000;
                    break;
            }
            document.getElementById("harga").value = harga; // Tampilkan harga yang sesuai di input harga
        }

        // Fungsi untuk memvalidasi form sebelum disubmit
        function validateForm() {
            var totalBayar = document.getElementById("total_bayar").value; // Ambil nilai total bayar
            if (totalBayar === '' || totalBayar === '0') {
                alert("Total bayar harus dihitung sebelum menyimpan."); // Tampilkan pesan error jika total bayar belum dihitung
                return false; // Mencegah form dari pengiriman
            }
            return true; // Mengizinkan form untuk disubmit jika valid
        }

        // Fungsi untuk memastikan hanya angka yang bisa dimasukkan pada input nomor identitas
        function validateNumberInput(input) {
            input.value = input.value.replace(/[^0-9]/g, ''); // Hapus karakter non-angka
        }

        // Fungsi untuk mencegah nilai durasi menginap negatif atau nol
        function validateDurasiInput(input) {
            if (input.value <= 0) {
                alert("Durasi menginap harus lebih dari 0 hari."); // Tampilkan pesan error jika durasi tidak valid
                input.value = ""; // Kosongkan input jika nilai tidak valid
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Mendapatkan parameter URL jika ada pesan error
            var urlParams = new URLSearchParams(window.location.search);
            var errorMsg = urlParams.get('error');
            if (errorMsg) {
                document.getElementById('error-message').innerText = errorMsg; // Tampilkan pesan error
            }

            // Set nilai default untuk tipe kamar dan harga jika ada di URL
            var defaultTipeKamar = "Standar"; // Set tipe kamar default
            document.getElementById("tipe_kamar").value = defaultTipeKamar; // Pilih tipe kamar default
            updateHarga(); // Set harga default berdasarkan tipe kamar

            // Tambahkan event listener untuk perubahan tipe kamar
            document.getElementById("tipe_kamar").addEventListener("change", updateHarga);
        });
    </script>
</head>
<body>
    <div class="form-container">
        <h2>Form Pemesanan Grand Luxora Hotel</h2>
        <form action="proses_pemesanan.php" method="POST" onsubmit="return validateForm()">
            <!-- Input untuk Nama Pemesan -->
            <label for="nama">Nama Pemesan:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <!-- Input untuk Jenis Kelamin -->
            <label for="gender">Jenis Kelamin:</label>
            <input type="radio" id="laki" name="gender" value="Laki-laki" required> Laki-laki
            <input type="radio" id="perempuan" name="gender" value="Perempuan" required> Perempuan<br><br>

            <!-- Input untuk Nomor Identitas -->
            <label for="id">Nomor Identitas:</label>
            <input type="text" id="id" name="id" maxlength="16" oninput="validateNumberInput(this)" required><br><br>

            <!-- Input untuk Tipe Kamar -->
            <label for="tipe_kamar">Tipe Kamar:</label>
            <select id="tipe_kamar" name="tipe_kamar" required>
                <option value="Standar">Standar</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Executif">Executif</option>
            </select><br><br>

            <!-- Input untuk Harga -->
            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" readonly><br><br>

            <!-- Input untuk Tanggal Pesan -->
            <label for="tanggal">Tanggal Pesan:</label>
            <input type="date" id="tanggal" name="tanggal" required><br><br>

            <!-- Input untuk Durasi Menginap -->
            <label for="durasi">Durasi Menginap (Hari):</label>
            <input type="number" id="durasi" name="durasi" required oninput="validateDurasiInput(this)"><br><br>

            <!-- Checkbox untuk Breakfast -->
            <label for="breakfast">Termasuk Breakfast:</label>
            <input type="checkbox" id="breakfast" name="breakfast" value="Ya"> Ya<br><br>

            <!-- Input untuk Total Bayar -->
            <label for="total_bayar">Total Bayar:</label>
            <input type="text" id="total_bayar" name="total_bayar" readonly><br><br>

            <!-- Tempat untuk menampilkan pesan error -->
            <div id="error-message" style="color: red;"></div>

            <!-- Tombol-tombol form -->
            <div class="btn-form-container">
                <button type="button" onclick="hitungTotal()">Hitung Total Bayar</button> <!-- Tombol untuk menghitung total bayar -->
                <button type="submit">Simpan</button> <!-- Tombol untuk submit form -->
                <button type="reset">Cancel</button> <!-- Tombol untuk reset form -->
            </div>
        </form>
    </div>
</body>
</html>
