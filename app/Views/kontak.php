<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
</head>
<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    
          <div class="container">
            <div class="row">
              <div class="col-sm-4 "  data-aos="fade-up" data-aos-duration="3000" >
                <div class="card text-center" >
                  <img src="https://www.pengertianku.net/wp-content/uploads/2014/10/pengertian-customer-service.jpeg" class="card-img-top" alt="Gambar 1">
                  <div class="card-body">
                    <h1 class="card-title"> Contact Us </h1>
                    <p> <b> INDIGOGO </b> <br> Jl. Lele 7 No. 11, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
                    <a href="https://api.whatsapp.com/send/?phone=6282248487902&text&type=phone_number&app_absent=0" class="btn btn-primary"> Hubungi </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4"  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000">
                <div class="card text-center">
                  <img src="https://www.pengertianku.net/wp-content/uploads/2014/10/pengertian-customer-service.jpeg" class="card-img-top" alt="Gambar 2">
                  <div class="card-body">
                    <h1 class="card-title"> Kebijakan Privasi </h1>
                    <p> Perusahan <b> INDIGOGO </b> memberikan pelindungi privasi dan juga data - data client kami dengan sangat ketat menggunakan teknologi terkini</p>
                    <a href="https://api.whatsapp.com/send/?phone=6282248487902&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary"> Hubungi </a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4" data-aos="fade-up" data-aos-duration="3000">
                <div class="card text-center">
                  <img src="https://www.pengertianku.net/wp-content/uploads/2014/10/pengertian-customer-service.jpeg" class="card-img-top" alt="Gambar 3">
                  <div class="card-body">
                    <h1 class="card-title"> Customer Service </h1>
                    <p> Halaman pengaduan pelanggan jika terdapat kendala dan masalah bisa langsung menghubungi Customer Service kami</p>
                    <a href="https://api.whatsapp.com/send/?phone=6282248487902&text&type=phone_number&app_absent=0" class="btn btn-primary"> Hubungi </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      
      <script>
    function sendEmail() {
      window.location.href = 'mailto:alamat.tujuan@contoh.com?subject=Email dari Website&body=Halo, ini adalah pesan dari website.';
    }
  </script>
      <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
      <script>
        AOS.init();
      </script>
</body>
</html>