<!DOCTYPE html>
<html>
<head>
    <title>Balas Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .container-fluid {
            display: flex;
        }

        .sidebar {
            flex-basis: 280px;
            background-color: #f0f0f0;
            padding: 15px;
        }

        .content {
            flex-grow: 1;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="sidebar">
            <?php include(APPPATH . 'Views/navdanfoot/beranda.php'); ?>
        </div>
        <div class="container mt-5">
            <div class="card">
                <h3><center>Balasan Forum</center></h3>
                <div class="card-body">
                    <form method="post" action="/admin/forum/update/<?= $pertanyaan['id'] ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="isi" class="form-label">Pertanyaan</label>
                            <input type="text" class="form-control" id="isi" name="isi" value="<?= $pertanyaan['isi'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="balasan" class="form-label">Balasan</label>
                            <textarea class="form-control" id="balasan" name="balasan"><?= $pertanyaan['balasan'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Balas</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
