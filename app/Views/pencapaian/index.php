<!DOCTYPE html>
<html>
<head>
    <title>Pencapaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <h2 class="bg-white"><center>Pencapaian</center></h2>
    <div class="container">
        <div class="row">
            <?php foreach ($pencapaian as $pencapaian) : ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="/uploads/<?= $pencapaian['foto'] ?>" class="card-img-top" alt="<?= $pencapaian['judul'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pencapaian['judul'] ?></h5>
                            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $pencapaian['id']; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $pencapaian['id']; ?>">
                                Lebih Detail
                            </button>
                            <div class="collapse" id="collapse-<?php echo $pencapaian['id']; ?>">
                                <div class="card card-body">
                                    <p class="card-text"><?= $pencapaian['deskripsi'] ?></p>
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