
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Struktur Perusahaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
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
      Beranda -> Tentang kami -> Alat Dan Spesifikasi
    </div>
  </div>
  <div class="main-banner">
    <div class="container">
      <div class="col-8 mx-auto bg-white rounded-pill">
        <h1 class="text-center p-3 mb-2 mt-3">Alat Dan Spesifikasi</h1>
      </div>
      <div class="row">
      <form action="http://localhost:8080/alat" method="post" class="d-flex" role="search">
        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    <?php if(count($alat)>0): ?>
      <?php  foreach ($alat as $alat) : ?>
            <div class="col-md-4 mt-2">
                <div class="card mb-4">
                <img src="/uploads/<?= $alat['gambar'] ?>" class="card-img-top" alt="<?= $alat['nama'] ?>">
                    <div class="card-body">
                    <h5 class="card-title"><?= $alat['nama'] ?></h5>
                        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $alat['id']; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $alat['id']; ?>">
                            Baca
                        </button>
                        <div class="collapse" id="collapse-<?php echo $alat['id']; ?>">
                            <div class="card card-body">
                            <p class="card-text"><?= $alat['spesifikasi'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
  </div>
  <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
