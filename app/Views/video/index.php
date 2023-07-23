<!--  -->

<!DOCTYPE html>
<html>
<head>
    <title>Web View - Galeri Video</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        #wrapper {
            min-height: 100%;
            position: relative;
        }

        #content {
            padding-bottom: 100px; /* Tinggi footer */
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px; /* Tinggi footer */
        }
    </style>
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
            <h1 class="text-center p-1 mb-2 mt-3">Indigogo-Galeri Video</h1>
        </div>
        <div class="row">
        <?php foreach ($videos as $video) : ?>
            <div class="col-md-4">
                <div class="card mb-4">
                <iframe src="/uploads/<?= $video['video'] ?>" class="card-img-top" alt="<?= $video['judul'] ?>">
        </iframe>
                    <div class="card-body">
                    <h5 class="card-title"><?= $video['judul'] ?></h5>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div id="footer">
            <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
