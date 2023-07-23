<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    <div class="container">
        <h1>Forum Diskusi</h1>
        <div class="row">
            <div class="col-md-6">
                <p>Tambahkan Komentar terkait Produk dan layanan yang kami berikan</p>
                <form action="<?= base_url('komentar/store') ?>" method="post">
                    <div class="form-group mb-3">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="form-group mb-3">
                        <label for="komentar">Komentar:</label>
                        <textarea class="form-control" id="komentar" name="komentar" required placeholder="Masukkan Komentar Anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Komentar Saat Ini</h2>
                <?php if (!empty($komentars)): ?>
                    <?php foreach ($komentars as $komentar): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?= $komentar['nama'] ?></h5>
                                <p class="card-text"><?= $komentar['komentar'] ?></p>
                                <form action="<?= base_url('komentar/delete/'.$komentar['id_komentar']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus komentar?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="list-group-item">Belum ada komentar.</li>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>