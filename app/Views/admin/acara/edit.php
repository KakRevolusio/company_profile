<!DOCTYPE html>
<html>
<head>
    <title>Edit Acara</title>
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
        <h1>Edit Acara</h1>
        <form method="post" action="/admin/acara/update/<?= $acara['id'] ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="jidul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="jidul" name="jidul" value="<?= $acara['jidul'] ?>">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan"><?= $acara['keterangan'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="poto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="poto" name="poto">
            </div>
            <div class="mb-3">
                <label for="current_gambar" class="form-label">Current Foto</label>
                <img src="/uploads/<?= $acara['poto'] ?>" alt="<?= $acara['jidul'] ?>" style="max-height: 100px;">
                <input type="hidden" name="current_gambar" value="<?= $acara['poto'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
