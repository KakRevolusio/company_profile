<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat&Ketentuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
    .navbar {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-weight: bold;
    }
    .navbar-nav .nav-item .nav-link:hover {
    color: red !important;
    }
    .dropdown-submenu {
    position: relative;
    }
    .dropdown-submenu .dropdown-menu {
    position: absolute;
    left: 100%;
    top: 0;
    margin-top: 0;
    }
    .dropdown-submenu:hover .dropdown-menu {
    display: block;
    }
    body {
    font-family: 'Times New Roman', Times, serif;
    }
</style>

<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>

<div class="col-12 col-sm-12 text-center"  data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
    <div class="container mt-3 mb-4">
    <span class="col-md-12 headerSk" style="font-size: 25px;"><b>Syarat dan Ketentuan</b></span>
    </div>
</div>

<div class="col-12 col-sm-8 text-center mx-auto" style="border: 2px solid black; padding: 10px"  data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
    <div class="modal-target">
        <span class="titleSk" style="font-size: 20px;">Tentang Kami</span>
        <div style="height:10px"></div>
        <div class="contentSk">
            <ol>
                <li>
                    <span class="bold" style="background-color: lightgray">Tentang IndiGogo.</span>
                    <br>
                    Layanan digital yang menyediakan Internet, Telepon Rumah dan TV Interaktif/IPTV (IndiGogo TV) dengan beragam pilihan paket 
                    serta layanan tambahan yang bisa dipilih sesuai kebutuhan Anda. Saat ini, jaringan IndiGogo sudah tersebar di seluruh wilayah 
                    Indonesia, dan terus berinovasi untuk memenuhi kebutuhan internet yang lebih baik bagi masyarakat.
                </li>
                <br>
                <li>
                    <span class="bold" style="background-color: lightgray">Tentang IndiGogo Chanel.</span>
                    <br>
                    IndiGogo Group merupakan Perusahaan yang bergerak di bidang penyelenggaraan layanan dan jaringan telekomunikasi
                    di Indonesia, beserta seluruh anak perusahaan dan affiliasinya. IndiGogo Group melayani jutaan pelanggan di seluruh Indonesia 
                    dengan rangkaian layanan telekomunikasi yang lengkap, mencakup sambungan telepon kabel tidak bergerak dan telepon nirkabel 
                    tidak bergerak, komunikasi seluler, layanan jaringan dan interkoneksi serta layanan internet dan komunikasi data. IndiGogo Group
                    juga menyediakan berbagai layanan di bidang informasi, media dan edutainment, termasuk cloud-based and server-based managed 
                    services, layanan e-Payment dan IT enabler, e-Commerce dan layanan portal lainnya.
                </li>
            </ol>
        </div>
    </div>
</div>



<?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
<script>
    AOS.init();
  </script>
</body>
</html>