<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/mycss.css">

    <title>Project Ujikom | Grand Luxora Hotel</title>
  </head>
  <body>

  <!-- Navbar (dari bootstrap) -->
  <div class="container"><!-- start container -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Grand Luxora Hotel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto"><!-- ml-auto: agar ul geser ke kanan -->
        <li class="nav-item active"><!-- menu home untuk kembali ke index.php -->
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  </div><!-- end of container -->
  
  <!-- Tampilan menu (boostrap) -->
  <div class="container"><!-- start container -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="beasiswa-tab" data-toggle="tab" data-target="#beasiswa" type="button" role="tab" aria-controls="beasiswa" aria-selected="true">Produk</button>
      </li>

      <!-- menu daftar harga -->
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="daftar-tab" data-toggle="tab" data-target="#daftar" type="button" role="tab" aria-controls="daftar" aria-selected="false">Daftar Harga</button>
      </li>

      <!-- Menu tentang kami -->
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="hasil-tab" data-toggle="tab" data-target="#hasil" type="button" role="tab" aria-controls="hasil" aria-selected="false">Tentang Kami</button>
      </li>

      <!-- Menu pesan kamar -->
      <li class="nav-item" role="presentation">
      <a class="nav-link" href="form_pemesanan.php">Pesan Kamar</a>
      </li>
    </ul>

    <!-- Jenis kamar -->
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="beasiswa" role="tabpanel" aria-labelledby="beasiswa-tab">
        <div class="section-menu">
          <h4 class="text-center">Jenis Kamar</h4>
          <h5 class="text-center">Grand Luxora Hotel</h5><br>
          <p>Selamat datang di hotel kami, tempat di mana kenyamanan dan kemewahan bertemu dalam harmoni sempurna. Kami menawarkan berbagai jenis kamar yang dirancang untuk memenuhi setiap kebutuhan tamu, mulai dari perjalanan bisnis hingga liburan santai. Setiap kamar dirancang dengan gaya elegan dan modern, dilengkapi dengan fasilitas terbaik untuk memastikan Anda merasa seperti di rumah sendiri. Pilihlah jenis kamar yang sesuai dengan keinginan Anda, dari kenyamanan sederhana hingga kemewahan tak tertandingi, dan nikmati pengalaman menginap yang tak terlupakan.</p>

          <!-- Card boostrap untuk jenis-jenis kamar -->
          <div class="card-group">

          <!-- Kamar 1.standar -->
            <div class="card">
              <img src="../images/1.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Standar</h5>
                <p class="card-text">Nikmati kenyamanan sederhana dalam kamar Standar kami yang dilengkapi dengan fasilitas dasar namun berkualitas. Cocok bagi Anda yang mencari pengalaman menginap terjangkau dengan tempat tidur nyaman, TV layar datar, dan koneksi Wi-Fi gratis. Kamar ini menghadirkan suasana hangat dan ramah untuk beristirahat setelah hari yang panjang.</p>
                <p class="card-text"><small class="text-muted">Grand Luxora Hotel</small></p>
                <a href="https://youtu.be/uQdlGZFjegw?si=9IEa5YZzB5t4sJfV" class="btn btn-primary">Let's Go</a>
              </div>
            </div>

            <!-- Kamar 2.deluxe -->
            <div class="card">
              <img src="../images/2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Deluxe</h5>
                <p class="card-text">Tingkatkan pengalaman menginap Anda dengan Kamar Deluxe yang menawarkan ruang lebih luas dan dekorasi modern. Kamar ini dilengkapi dengan fasilitas premium seperti minibar, area duduk yang nyaman, serta pemandangan indah dari jendela. Deluxe memberikan sentuhan kemewahan yang sempurna untuk liburan yang lebih berkesan.</p>
                <p class="card-text"><small class="text-muted">Grand Luxora Hotel</small></p>
                <a href="https://youtu.be/FDoYFYYMj9I?si=0t6g-PiHyGc3OR2L" class="btn btn-primary">Let's Go</a>
              </div>
            </div>

            <!-- Kamar 3.Executif -->
            <div class="card">
              <img src="../images/3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Executif</h5>
                <p class="card-text">Untuk Anda yang menginginkan kemewahan tertinggi, Kamar Eksekutif kami dirancang khusus dengan furnitur elegan dan layanan eksklusif. Dilengkapi dengan fasilitas unggulan seperti bathtub pribadi, ruang kerja, dan layanan kamar 24 jam. Kamar Eksekutif menghadirkan pengalaman menginap kelas atas yang ideal bagi tamu bisnis atau wisatawan yang mengutamakan kenyamanan luar biasa.</p>
                <p class="card-text"><small class="text-muted">Grand Luxora Hotel</small></p>
                <a href="https://youtu.be/dl5lQT8piRI?si=0Juc78qGeaPT1KDA" class="btn btn-primary">Let's Go</a>
              </div>
            </div>
          </div>
          <br>

          <!-- Deskripsi penutup -->
          <div>
          <p>Apapun pilihan kamar Anda, kami berkomitmen untuk memberikan pelayanan terbaik dan kenyamanan maksimal selama Anda menginap. Dengan desain yang elegan, fasilitas modern, dan suasana yang tenang, setiap kamar kami menjadi tempat ideal untuk beristirahat setelah hari yang sibuk. Jadikan momen Anda lebih berkesan dengan sentuhan kemewahan dari kamar yang kami tawarkan, dan nikmati layanan yang dirancang khusus untuk memenuhi setiap kebutuhan Anda. Kami siap menyambut Anda dengan hangat dan menghadirkan pengalaman menginap yang sempurna.</p>
          <p>Salam hangat dari <b>Grand Luxora Hotel</b>, tempat di mana kemewahan dan kenyamanan berpadu sempurna.</p>
          </div>
        </div>
      </div>

      <!-- Daftar Harga Kamar Grand Luxora Hotel -->
      <div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="daftar-tab"><br>
        <h4 class="text-center">Daftar Harga</h4>
        <h5 class="text-center">Grand Luxora Hotel</h5><br>
        
        <!-- Membuat table (dari bootstrap) untuk daftar harga -->
        <table class="table">
          <thead class="thead-light">
            <!-- Judul-judul kolom -->
            <tr>
              <th scope="col">No</th>
              <th scope="col">Jenis Kamar</th>
              <th scope="col">Harga per Malam</th>
              <th scope="col">Sarapan (Opsional)</th>
            </tr>
          </thead>
          <tbody>
            <!-- baris 1 -->
            <tr>
              <th scope="row">1</th>
              <td>Standar</td>
              <td>Rp 500.000</td>
              <td>Rp 80.000</td>
            </tr>
            <!-- baris 2 -->
            <tr>
              <th scope="row">2</th>
              <td>Deluxe</td>
              <td>Rp 800.000</td>
              <td>Rp 80.000</td>
            </tr>
            <!-- baris 3 -->
            <tr>
              <th scope="row">3</th>
              <td>Executif</td>
              <td>Rp 1.000.000</td>
              <td>Rp 80.000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="tab-pane fade" id="hasil" role="tabpanel" aria-labelledby="hasil-tab">
        <!-- Tentang Kami (card bootstrap) -->
        <div class="card mb-3">
          <img src="../images/hotel.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Grand Luxora Hotel</h5>
            <p class="card-text">Grand Luxora Hotel berdiri megah di Kota Cirebon, menawarkan pengalaman menginap yang memadukan kemewahan, kenyamanan, dan kehangatan. Kami dirancang untuk menjadi tujuan utama bagi para pelancong bisnis maupun wisatawan yang mencari tempat beristirahat dengan layanan terbaik. Lokasi kami yang strategis memudahkan akses ke berbagai pusat perbelanjaan, tempat wisata, serta area bisnis, menjadikan kami pilihan tepat bagi Anda yang menginginkan kemudahan dan kualitas dalam setiap perjalanan.</p>
            <p>Di Grand Luxora Hotel, setiap detail diciptakan dengan penuh perhatian untuk memberikan pengalaman yang tak terlupakan. Kamar-kamar kami dirancang dengan sentuhan elegan dan modern, dilengkapi dengan fasilitas terkini untuk memastikan kenyamanan Anda. Kami juga menyediakan beragam fasilitas seperti restoran mewah dengan menu internasional, kolam renang, pusat kebugaran, serta ruang pertemuan yang ideal untuk acara bisnis atau perayaan pribadi. Semua ini didukung oleh staf kami yang profesional dan berdedikasi untuk memberikan layanan personal yang ramah dan penuh perhatian.</p>
            <p>Kami percaya bahwa setiap tamu adalah bagian dari keluarga besar Grand Luxora Hotel, dan kepuasan Anda adalah prioritas utama kami. Dari layanan check-in yang mudah hingga layanan kamar 24 jam, kami hadir untuk memastikan bahwa setiap momen Anda bersama kami penuh dengan kenyamanan dan kemewahan. Terlepas dari apakah Anda berada di sini untuk bisnis atau liburan, kami berkomitmen untuk menjadikan pengalaman Anda istimewa.</p>
            <br>
            <p>Alamat: Jalan Raya Utama No. 123, Cirebon, Indonesia</p>
            <p>Telepon: +62 21 1234 5678</p>
            <p>Email: salsasonia06@gmail.com</p>
            <br>
            <p>Selamat datang di Grand Luxora Hotel, tempat di mana setiap kunjungan menjadi momen yang berharga.</p>
            <p class="card-text"><small class="text-muted">Grand Luxora hotel</small></p>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="kamar" role="tabpanel" aria-labelledby="kamar-tab">

      </div>
    </div>
  </div><!-- end of container -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>