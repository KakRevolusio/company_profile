<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<head>
    <title>Produk</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
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
    </style>
</head>

<body style="background-image: linear-gradient(
  0deg,
  hsl(0deg 62% 35%) 0%,
  hsl(8deg 43% 45%) 5%,
  hsl(13deg 39% 52%) 9%,
  hsl(16deg 45% 59%) 14%,
  hsl(19deg 53% 64%) 18%,
  hsl(21deg 62% 69%) 23%,
  hsl(19deg 59% 71%) 27%,
  hsl(10deg 41% 70%) 32%,
  hsl(350deg 27% 67%) 36%,
  hsl(320deg 19% 62%) 41%,
  hsl(279deg 20% 59%) 45%,
  hsl(256deg 29% 58%) 50%,
  hsl(292deg 23% 54%) 55%,
  hsl(324deg 33% 55%) 59%,
  hsl(339deg 46% 57%) 64%,
  hsl(349deg 60% 59%) 68%,
  hsl(357deg 74% 60%) 73%,
  hsl(1deg 80% 65%) 77%,
  hsl(1deg 79% 72%) 82%,
  hsl(1deg 78% 78%) 86%,
  hsl(0deg 78% 83%) 91%,
  hsl(0deg 78% 88%) 95%,
  hsl(0deg 80% 92%) 100%
);">
    <?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>


    <div class="container my-5">
        <div class="row row-cols-3 mx-2">
            <!-- my php code which uses x-path to get results from xml query. -->
            <?php foreach ($products as $elements) : ?>
                <div class="col my-3">
                    <div class="card-columns-fluid">
                        <div class="card bg-opacity-75 bg-dark text-white text-white rounded-4">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-start align-items-center mt-1 mb-3">
                                    <img src="<?php echo $elements['img_path']; ?>" class="img-fluid object-fit-contain" style="height: 50px; width:auto;" alt="IMG ERROR">
                                </div>
                                <h5 class="card-title"><b>
                                        <?php echo $elements["name"] ?>
                                    </b></h5>

                                <p class="card-text">
                                    <span id="descriptionLess<?= $elements["id"]; ?>" style="display: inline;"><?php echo substr_replace($elements["description"], "...", 100) ?></span>
                                    <span id="descriptionMore<?= $elements["id"]; ?>" style="display: none;"><?php echo $elements["description"] ?></span>
                                </p>
                                <p class="card-text" style="font-size: 28px; font-weight: bold;">Rp
                                    <?php echo number_format($elements["price"]) ?>
                                </p>
                                <button onclick="read<?= $elements["id"]; ?>()" class="btn btn-secondary" id="readButton<?= $elements["id"]; ?>">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    </div>


    <script>
        <?php foreach ($products as $elements) : ?>

            function read<?= $elements["id"]; ?>() {

                let descriptionMore<?= $elements["id"]; ?> = document.getElementById("descriptionMore<?= $elements["id"]; ?>");
                let descriptionLess<?= $elements["id"]; ?> = document.getElementById("descriptionLess<?= $elements["id"]; ?>");
                let readButton<?= $elements["id"]; ?> = document.getElementById("readButton<?= $elements["id"]; ?>");

                if (descriptionMore<?= $elements["id"]; ?>.style.display === "none") {
                    readButton<?= $elements["id"]; ?>.innerHTML = "Lebih Sedikit";
                    descriptionLess<?= $elements["id"]; ?>.style.display = "none"
                    descriptionMore<?= $elements["id"]; ?>.style.display = "inline"
                } else {
                    readButton<?= $elements["id"]; ?>.innerHTML = "Selengkapnya";
                    descriptionMore<?= $elements["id"]; ?>.style.display = "none"
                    descriptionLess<?= $elements["id"]; ?>.style.display = "inline"
                }

            }
        <?php endforeach; ?>
    </script>




</body>



</html>