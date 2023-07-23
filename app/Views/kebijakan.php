<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kebijakan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .fade-in {
      opacity: 0;
      animation: fadeInAnimation 2s ease-in-out forwards;
    }
    
    @keyframes fadeInAnimation {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
    .main-banner {
  background-image: url(./aset/KantorTelkom.jpg);
  height: 500px;
  width: auto;
  padding: 10px 200px;
  }
  </style>
</head>
<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    <div class="row ">
      <div class="col bg-danger text-white">
        Beranda -> Tentang kami -> Kebijakan Perusahaan
      </div>
    </div>
  </div>
<div class="main-banner"> 
  <div class="container mt-5 ">
    <div class="container bg-white rounded">
    <h2 id="kebijakan" class="fade-in text-center">Kebijakan Perusahaan</h2>
    <p class="fade-in mt-3">IndiGogo adalah perusahaan telekomunikasi yang didirikan berdasarkan hukum Republik Indonesia. Kebijakan privasi ini mengatur pengumpulan dan pengolahan data informasi melalui Aplikasi dan Situs Web IndiGogo. Data informasi yang dikumpulkan termasuk data pribadi yang Anda berikan saat mendaftar atau menggunakan Layanan IndiGogo. Tujuan pemrosesan data termasuk menjalankan Layanan IndiGogo, personalisasi pengalaman pengguna, penawaran layanan, analisis pelanggan, perbaikan jaringan, pembayaran, dan kewajiban hukum. Data dapat diproses oleh IndiGogo, Afiliasi IndiGogo, dan pihak ketiga yang bekerja sama dengan IndiGogo.</p>

  

    </div>
  </div>
  </div>
  <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var fadeElems = document.querySelectorAll(".fade-in");
      fadeElems.forEach(function(elem) {
        elem.style.animationDelay = "0.5s";
      });
    });
  </script>
    
</body>
</html>