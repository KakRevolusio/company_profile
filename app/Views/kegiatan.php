<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<head>
    <title>Kegiatan</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
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


    <div id="carousel1" class="carousel slide mx-auto my-4 w-75" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php $ix = 0;
            foreach ($activities as $elements) :
                if ($elements['status'] == 1) : ?>
                    <?php if ($ix == 0) {
                        echo '<button type="button" data-bs-target="#carousel1" data-bs-slide-to="' . $ix . '" class="active" aria-current="true"
                        aria-label="Slide ' . $ix + 1 . '"></button>';
                    } else {
                        echo '<button type="button" data-bs-target="#carousel1" data-bs-slide-to="' . $ix . '" aria-label="Slide ' . $ix + 1 . '"></button>';
                    };
                    $ix++; ?>

            <?php endif;
            endforeach; ?>
        </div>

        <div class="carousel-inner">
            <?php $it = 0 ?>
            <?php foreach ($activities as $elements) :
                if ($elements['status'] == 1) : ?>
                    <?php if ($it == 0) {
                        echo '<div class="carousel-item active">';
                    } else {
                        echo '<div class="carousel-item">';
                    };
                    $it++; ?>
                    <div class="card text-end bg-transparent">
                        <div class="card-header bg-dark bg-opacity-75">
                            <?php
                            // //  echo $elements['end_date'];
                            // //  $date = strtotime($elements['end_date']);
                            // //  echo date('H:i:s', $date); 
                            // $countdown = strtotime($elements['end_date']) - time();

                            // $days_remaining = floor($countdown / 86400);
                            // $hours_remaining = floor(($countdown % 86400) / 3600);
                            // $minutes_remaining = floor(($countdown % 3600) / 60);
                            // $seconds_remaining = ($countdown % 60);
                            // echo "$days_remaining hari, $hours_remaining jam, $minutes_remaining menit, dan $seconds_remaining detik lagi";
                            ?>
                            <span class="text-white fw-semibold fs-6" id="countDown<?php echo $elements['id']; ?>"></span>
                        </div>
                        <div class="card-body p-0" style="background-size: cover;  background-position: center center;  background-image: url(<?php echo $elements['img_path'] ?>); ">
                            <div class="w-100 p-4" style="height: 450px; width: auto; background: linear-gradient(90deg, rgba(6,6,6,0) 0%, rgba(0,0,0,0.8027543781184349) 50%); ;">
                                <div class="ms-auto w-50 text-light my-4 mx-2">
                                    <h2 class="card-title pb-3">
                                        <?php echo $elements["title"] ?>
                                    </h2>
                                    <p class="card-text">
                                        <?php echo substr_replace($elements["description"], "...", 400) ?>
                                    </p>
                                    <!-- <a href="#" class="btn btn-primary">Selengkapnya</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
<?php endif;
            endforeach; ?>
    </div>
    </div>

    <div class="container my-5 mx-auto">
        <div class="row row-cols-3 mx-2">
            <!-- my php code which uses x-path to get results from xml query. -->
            <?php foreach ($activities as $elements) : ?>
                <?php if ($elements['status'] != 1) : ?>
                    <div class="col my-3">
                        <div class="card-columns-fluid">
                            <div class="card bg-opacity-75 bg-dark text-white">
                                <div class="card-header">
                                </div>
                                <img src="<?php echo $elements["img_path"] ?>" class="card-img-top rounded-0" style="height: 200px; width: auto;" alt="IMG ERROR">
                                <div class="card-body">
                                    <h5 class="card-title"><b>
                                            <?php echo $elements["title"] ?>
                                        </b></h5>
                                    <p class="card-text">
                                        <span id="descriptionLess<?= $elements["id"]; ?>" style="display: inline;"><?php echo substr_replace($elements["description"], "...", 100) ?></span>
                                        <span id="descriptionMore<?= $elements["id"]; ?>" style="display: none;"><?php echo $elements["description"] ?>
                                            <span id="countDown<?= $elements["id"]; ?>"></span>
                                        </span>
                                    </p>
                                    <a onclick="read<?= $elements["id"]; ?>()" id="readButton<?= $elements["id"]; ?>" class="justify-self-end btn btn-secondary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>


    <script>
        <?php foreach ($activities as $elements) : ?>
            // Set the date we're counting down to
            var countDownDate<?php echo $elements['id']; ?> = new Date("<?= $elements['end_date'] ?>");


            // Update the count down every 1 second
            var x<?php echo $elements['id']; ?> = setInterval(function() {

                // Get today's date and time
                var now<?php echo $elements['id']; ?> = new Date().getTime();

                // Find the distance between now and the count down date
                var distance<?php echo $elements['id']; ?> = countDownDate<?php echo $elements['id']; ?> -
                    now<?php echo $elements['id']; ?>;


                // Time calculations for days, hours, minutes and seconds
                var days<?php echo $elements['id']; ?> = Math.floor(distance<?php echo $elements['id']; ?> / (1000 *
                    60 * 60 * 24));
                var hours<?php echo $elements['id']; ?> = Math.floor((distance<?php echo $elements['id']; ?> % (1000 *
                    60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes<?php echo $elements['id']; ?> = Math.floor((distance<?php echo $elements['id']; ?> % (1000 *
                    60 * 60)) / (1000 * 60));
                var seconds<?php echo $elements['id']; ?> = Math.floor((distance<?php echo $elements['id']; ?> % (1000 *
                    60)) / 1000);

                // Display the result in the element with id="demo"


                // If the count down is finished, write some text
                if ((distance<?php echo $elements['id']; ?>) <= 0) {
                    clearInterval(x);
                    document.getElementById("countDown<?php echo $elements['id']; ?>").innerHTML = "Kegiatan sudah berakhir.";
                } else {
                    document.getElementById("countDown<?php echo $elements['id']; ?>").innerHTML = "Dimulai dalam: " +
                        days<?php echo $elements['id']; ?> + " hari, " + hours<?php echo $elements['id']; ?> + " jam, " +
                        minutes<?php echo $elements['id']; ?> + " menit, dan " + seconds<?php echo $elements['id']; ?> + " detik.";
                }

            }, 1000);
        <?php endforeach; ?>
    </script>

    <script>
        <?php foreach ($activities as $elements) : ?>

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