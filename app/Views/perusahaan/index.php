
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Struktur Perusahaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    .main-banner {
      background-image: url(./aset/KantorTelkom.jpg);
      height: auto;
      width: auto;
      padding: 10px 200px;
    }
  </style>
</head>
<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
  <div class="row">
    <div class="col bg-danger text-white">
      Beranda -> Tentang kami -> Struktur Perusahaan
    </div>
  </div>
  <div class="main-banner">
    <div class="container">
      <div class="col-8 mx-auto bg-white rounded-pill">
        <h1 class="text-center p-3 mb-2 mt-3">Struktur Perusahaan</h1>
      </div>
      <div class="row">
      <?php foreach ($perusahaan as $item) : ?>
                    <div class="col-md-4">
                        <div class="card">
                        <img src="uploads/<?php echo $item['gambar']; ?>" class="card-img-top" alt="Image">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $item['nama']; ?></h5>
                                <p class="card-text"><?php echo $item['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>

  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</body>
</html>
