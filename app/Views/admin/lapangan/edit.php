
<!DOCTYPE html>
<html>
<head>
    <title>Edit lapangan</title>
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
        <h1>Edit lapangan</h1>
        <form method="post" action="/admin/lapangan/update/<?= $lapangan['id'] ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $lapangan['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">jabatan</label>
                <textarea class="form-control" id="jabatan" name="jabatan"><?= $lapangan['jabatan'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="current_image" class="form-label">Current Image</label>
                <img src="/uploads/<?= $lapangan['gambar'] ?>" alt="<?= $lapangan['nama'] ?>" style="max-height: 100px;">
                <input type="hidden" name="current_image" value="<?= $lapangan['gambar'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
