<!DOCTYPE html>
<html>
<head>
    <title>Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }
    </style>
</head>
<body class="bg-danger">
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
<div class="content">
    <h2 class="bg-white"><center>Paket Ekslusif dari IndiGogo</center></h2>
    <div class="container">
        <div class="row">
            <?php foreach ($paket as $p) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="fs-2 mb-3" width="16" height="16">
                                <i class="bi bi-wifi"></i>
                            </div>
                            <h4 class="card-title"><?= $p['kecepatan'] ?></h4>
                            <p class="card-text"><?= $p['deskripsi'] ?></p>
                            <p class="card-text"><small class="text-body-secondary"><?= $p['detail'] ?></small></p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#belipaket-<?php echo $p['id']; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $p['id']; ?>">
                                Beli Paket
                            </button>
                            <div class="modal fade" id="belipaket-<?php echo $p['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-<?php echo $p['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel-<?php echo $p['id']; ?>">Beli Paket</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-lg-6 offset-lg-3">
                                                <h1 class="text-center mb-4">Form Pemesanan</h1>
                                                <form method="POST" action="<?= base_url('pesan/store') ?>">
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="nama" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="telepon" class="form-label">Nomor Telepon</label>
                                                        <input type="tel" class="form-control" name="telepon" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <textarea class="form-control" name="alamat" rows="3" required></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="paket" class="form-label">Paket Internet</label>
                                                        <select class="form-select" name="paket" required>
                                                            <option selected disabled value="">Pilih Paket Internet</option>
                                                            <option value=""><?= $p['kecepatan'] ?></option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary" name="bsubmit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapse-<?php echo $p['id']; ?>">
                                <div class="card card-body">
                                    <p class="card-text"><?= $p['detail'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
