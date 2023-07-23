<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <style>
        .fade-in {
            opacity: 0;
            animation: fadeInAnimation 2s ease-in-out forwards;
        }
        
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        .main-banner {
            background-image: url(./aset/414.jpg); 
        }
        
        /* CSS tambahan untuk menu di slide bar */
        .sidebar a:hover,
        .sidebar a:active {
            background-color: red;
            color: white;
        }

        .sidebar a:hover p,
        .sidebar a:active p {
            color: white;
        }
        
        /* Teks di samping slide bar */
        .content {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-align: center;
            height: 100%;
        }
        .main-banner {
            background-image: url(./aset/KantorTelkom.jpg);
            width: 800px;
            height: auto;
        }
        .sidebar-content {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    <div class="row">
        <div class="col bg-danger text-white">
            Beranda -> Tentang kami -> Defisi Bagian  -> Progamer
        </div>
    </div>
    <div class="container-fluid mt-4 mb-3">
        <div class="row">
            <div class="sidebar col-lg-3">
            <div class="card rounded border-0 shadow">
                    <div class="card-body d-flex flex-column gap-3 py-5 px-4">
                        <!-- Progaming -->
                        <a href="http://localhost:8080/progamer" class="text-decoration-none bg-danger">
                            <div class="d-flex align-items-center rounded p-2 gap-2 menu-profile">
                                <img src="./ASET/profileSolid.svg" alt="">
                                <p class="fs-5 text-secondary text-light">Progaming</p>
                            </div>
                        </a>
                        <!-- Marketing-->
                        <a href="http://localhost:8080/marketing" class="text-decoration-none">
                            <div class="d-flex align-items-center rounded p-2 gap-2 menu-semua">
                                <img src="./ASET/askSolid.svg" alt="">
                                <p class="fs-5 text-secondary">Marketing</p>
                            </div>
                        </a>

                        <!--Lapangan -->
                        <a href="http://localhost:8080/lapangan" class="text-decoration-none">
                            <div class="d-flex align-items-center rounded p-2 gap-2 menu-terjawab">
                                <img src="./ASET/doneSolid.svg" alt="">
                                <p class="fs-5 text-secondary">Lapangan</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <!-- Card 1 -->
                    <?php foreach ($progamer as $item) : ?>
                    <div class="col-md-4">
                        <div class="card">
                        <img src="uploads/<?php echo $item['gambar']; ?>" class="card-img-top" alt="Image">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $item['nama']; ?></h5>
                                <p class="card-text"><?php echo $item['jabatan']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    
                </div>
            </div>
        </div>
    </div>
    <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>