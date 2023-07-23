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
    height: 700px;
    width: auto;
    padding: 10px 200px;
    }
    </style>
</head>
<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    <div class="row ">
        <div class="col bg-danger text-white">
            Beranda -> Kemitraan Perusahaan
        </div>
    </div>
    </div>
<div class="main-banner"> 
    <div class="container mt-5 ">
    <div class="container bg-white rounded">
    <h2 id="kebijakan" class="fade-in text-center">Kemitraan Perusahaan</h2>
    <p class="fade-in mt-3">Kami, [INDIGOGO], berkomitmen untuk menjalin kemitraan yang saling menguntungkan dengan berbagai entitas dalam rangka memperluas jangkauan layanan internet kami. Kami percaya bahwa kemitraan yang kokoh dan berkelanjutan dapat memberikan manfaat bagi semua pihak yang terlibat.</p>
    <h2 id="kebijakan" class="fade-in text-center">Jenis Kemitraan</h2>
    <p class="fade-in mt-3">a. Penyedia layanan komunikasi dan jaringan: Kolaborasi dengan penyedia layanan komunikasi dan jaringan lainnya untuk saling memperkuat dan meningkatkan konektivitas serta kualitas layanan bagi pelanggan kami.
                        <br>b. Pemasok perangkat keras dan perangkat lunak: Kemitraan dengan pemasok perangkat keras dan perangkat lunak guna memastikan ketersediaan peralatan dan solusi terkini yang mendukung pengembangan layanan internet kami.
                        <br>c. Pengembang properti: Kemitraan dengan pengembang properti untuk memasang infrastruktur jaringan di lingkungan baru dan menghadirkan konektivitas internet berkualitas tinggi kepada penghuni dan pengunjung.
                        <br>d. Pihak ketiga dalam industri terkait: Kemitraan dengan perusahaan dan institusi dalam industri terkait, seperti penyedia konten digital, perusahaan teknologi, dan lembaga pemerintah untuk berkolaborasi dalam menghadirkan solusi terbaik bagi pelanggan kami.</p>
    <h2 id="kebijakan" class="fade-in text-center">Keuntungan Kemitraan</h2>
    <p class="fade-in mt-3">a. Akses ke Jaringan dan Layanan: Mitra kami akan mendapatkan akses ke jaringan luas dan canggih kami, serta dapat menawarkan layanan internet berkualitas tinggi kepada pelanggan mereka.
                            <br>b. Dukungan Teknis: Kami akan menyediakan dukungan teknis yang komprehensif kepada mitra kami untuk memastikan penerapan yang sukses dan pemeliharaan infrastruktur yang optimal.
                            <br>c. Keuntungan Bersama: Kemitraan yang sukses akan menghasilkan keuntungan bersama dalam hal pertumbuhan bisnis, pangsa pasar yang lebih besar, dan peningkatan kepuasan pelanggan.</p>
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