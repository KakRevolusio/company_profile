<!DOCTYPE html>
<html>
<head>
    <title>Edit Berita Terkini</title>
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
        <h1>Edit Berita Terkini</h1>
        <form method="post" action="/admin/beritaterkini/update/<?= $beritaterkini['id'] ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $beritaterkini['judul'] ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $beritaterkini['deskripsi'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="current_gambar" class="form-label">Current gambar</label>
                <img src="/uploads/<?= $beritaterkini['gambar'] ?>" alt="<?= $beritaterkini['judul'] ?>" style="max-height: 100px;">
                <input type="hidden" name="current_gambar" value="<?= $beritaterkini['gambar'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
