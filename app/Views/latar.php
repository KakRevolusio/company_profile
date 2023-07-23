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
        Beranda -> Tentang kami -> Latar Perusahaan 
      </div>
    </div>
  </div>
<div class="main-banner"> 
  <div class="container mt-5 ">
    <div class="container bg-white rounded">
    <h2  class="fade-in text-center">Latar Perusahaan</h2>
    <p class="fade-in mt-3">IndiGogo Networks adalah sebuah perusahaan yang bergerak di bidang jaringan komputer. Kami menyediakan solusi jaringan terpadu untuk perusahaan, institusi, dan organisasi di berbagai sektor. Fokus utama kami adalah memastikan keandalan, keamanan, dan efisiensi jaringan bagi pelanggan kami.</p>
    <h2  class="fade-in text-center">Sejarah Perusahaan</h2>
    <p class="fade-in mt-3 ">IndiGogo Networks didirikan pada tahun 2023 oleh Muh.Junior, seorang ahli jaringan dengan pengalaman yang luas di industri ini. Awalnya, perusahaan ini dimulai sebagai usaha kecil dengan beberapa karyawan, tetapi dengan kesuksesan yang diperoleh, perusahaan kami berkembang pesat dan menjadi salah satu pemain terkemuka di sektor jaringan.</p>
  

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