<?php

$conn = mysqli_connect('localhost','root','','db_login');


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Personal Portfolio Website </title>
   <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   <link rel="stylesheet" href="style.css">

</head>
<body class="tampilan">

<br><br>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid ">
  <a class="btn btn-primary position-absolute top-50 end-0 translate-middle" href="login.php" role="button">login</a>
    </div>
  </div>
</nav>

<section class="home" id="home">
<br><br><br><br><br>
   <div class="content">
      <img src="img/logo.png" alt="">
</div>

</section>

<section class="about" id="about">
<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="text">
      <h1 class="heading" data-aos="fade-up"> <span> Explanation</span> </h1>
      <p data-aos="fade-up">Mie Gacoan" adalah sebuah merk dagang dari jaringan restaurant mie pedas no 1 di indonesia, yang menjadi anak perusahaan PT Pesta Pora Abadi. Berdiri sejak awal tahun 2016, saat ini merk "Mie Gacoan" telah tumbuh menjadi market leader, utamanya di provinsi Jawa Timur, Jawa Tengah, Jawa Barat, Kepulauan Bali, dan sedang dalam jalur kuat utk berekspansi menjadi merk terbesar nomor 1 secara nasional. Mengusung konsep bersantap modern dengan harga yg affordable, kehadiran "Mie Gacoan" telah mendapatkan apresiasi luar biasa di setiap market dimana "Mie Gacoan" hadir utk melayani puluhan ribu pelanggan setiap bulan nya. Oleh karena itu, inovasi akan selalu kami kedepankan agar "Mie Gacoan" tetap relevan dan menjadi pilihan terbaik bagi para customer fanatik.</p>
      </div>
<br>
   <h1 class="heading" data-aos="fade-up"> <span>About</span> </h1>

   <div class="text">

      <p data-aos="fade-up">Nama "Mie Gacoan" diambil dari kata "Gaco" yang artinya jagoan / andalan dalam bahasa jawa. Tidak heran jika Mie Gacoan menjadi tempat bersantap favorit bagi masyarakat indonesia, khususnya mahasiswa, pelajar dan keluarga. Dengan mengusung suasana restoran yang atraktif, keren dan lega, dan juga dilengkapi berbagai fasilitas membuat setiap pengunjung makin betah dan selalu ingin kembali lagi.</p>

            <div class="bio">
            <h3 data-aos="zoom-in"> <span>Tiktok : </span> miegacoan.tiktok </h3>
            <h3 data-aos="zoom-in"> <span>instagram : </span> @Mie.Gacoan </h3>
            <h3 data-aos="zoom-in"> <span>Facebook : </span> mie Gacoan </h3>
            </h3>
            <br>
            <h3 data-aos="zoom-in"> <span>address : </span> Jl. Raya Tajur No.155 A, RT.03/RW.06, Tajur, Kec. Bogor Tim., Kota Bogor, Jawa Barat
         </div>
   </div>

<section class="portfolio" id="portfolio">

      <h1 class="heading" data-aos="fade-up"> <span>Produk</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <img src="img/MIE SUIT.jpg" alt="">
            <h3>MIE SUIT</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/MIE gacoan.jpg" alt="">
            <h3>MIE GACOAN</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/MIE HOMPIMPA.jpg" alt="">
            <h3>MIE HOMPIMPA</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/PANGSIT GORENG.jpg" alt="">
            <h3>PANGSIT GORENG</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/UDANG KEJU.jpg" alt="">
            <h3>PUDANG KEJU</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/UDANG RAMBUTAN.jpg" alt="">
            <h3>UDANG RAMBUTAN</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/SIOMAY.jpg" alt="">
            <h3>SIOMAY</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/LUMPIA UDANG.jpg" alt="">
            <h3>LUMPIA UDANG</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/ES PETAK UMPET.jpg" alt="">
            <h3>ES PETAK UMPET</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/ES TEKLEK.jpg" alt="">
            <h3>ES TEKLEK</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/ES SLUKU BATHLOK.jpg" alt="">
            <h3>ES SLUKU BATHLOK</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="img/ES GOBAK SODOR.jpg" alt="">
            <h3>ES GOBAK SODOR</h3>
         </div>
   </section>

   <script src="js/script.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>