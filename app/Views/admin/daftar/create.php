
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
        .center {
        text-align: center;
        }
    </style>
</head>
<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    

      <div>
      <h2 class="text-center">Tambah Data Pendaftaran</h2>
      </div>
<?php if (!empty($validation->getErrors())) : ?>

    <div class="alert alert-danger">
    <?= $validation->listErrors(); ?>
</div>
<?php endif; ?>
<div class="container mx-auto">
    <form action="/admin/pendaftaran/store" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="<?= old('nik'); ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat"><?= old('alamat'); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama" value="<?= old('agama'); ?>">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
        </div>
        <div class="mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="text" class="form-control" id="usia" name="usia" value="<?= old('usia'); ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= old('email'); ?>">
        </div>
        <div class="mb-3">
            <label for="nomor_handphone" class="form-label">Nomor Handphone</label>
            <input type="text" class="form-control" id="nomor_handphone" name="nomor_handphone" value="<?= old('nomor_handphone'); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
      <script>
        AOS.init();
      </script>
</body>
</html>