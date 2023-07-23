<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Bantuan</title>
    <style>
    .container {
      position: relative;
      text-align: center;
    }

    .text-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: black;
      font-size: 45px;
    }
</style>
</head>
<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    <div class="container">
        <img src="https://nahla.ba/wp-content/uploads/2021/05/Family_digitalweb.jpg" alt="Foto" />
        <div class="text-overlay">
        Apa yang bisa kami bantu?
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
        </div>
    </div>
<?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
</body>
</html>