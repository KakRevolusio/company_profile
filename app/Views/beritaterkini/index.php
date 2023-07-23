<!--  -->

<!DOCTYPE html>
<html>
<head>
    <title>Web View - Berita Terkini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-danger">
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
<div>
    <div class="container">
        <div class="col-4 mx-auto bg-white rounded-pill">
            <h1 class="text-center p-1 mb-2 mt-3">Indigogo-Berita Terkini</h1>
        </div>
        <div class="row">
        <?php foreach ($beritaterkinis as $beritaterkini) : ?>
            <div class="col-md-4">
                <div class="card mb-4">
                <img src="/uploads/<?= $beritaterkini['gambar'] ?>" class="card-img-top" alt="<?= $beritaterkini['judul'] ?>">
                    <div class="card-body">
                    <h5 class="card-title"><?= $beritaterkini['judul'] ?></h5>
                        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $beritaterkini['id']; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $beritaterkini['id']; ?>">
                            Baca
                        </button>
                        <div class="collapse" id="collapse-<?php echo $beritaterkini['id']; ?>">
                            <div class="card card-body">
                            <p class="card-text"><?= $beritaterkini['deskripsi'] ?></p>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
