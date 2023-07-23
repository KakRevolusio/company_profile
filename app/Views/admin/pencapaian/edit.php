
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
        <div class="card">
            <h3><center>Edit Pencapaian</center></h3>
            <div class="card-body">
                <form method="post" action="/admin/pencapaian/update/<?= $pencapaian['id'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $pencapaian['judul'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $pencapaian['deskripsi'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="mb-3">
                        <label for="current_image" class="form-label">Edit Image</label>
                        <img src="/uploads/<?= $pencapaian['foto'] ?>" alt="<?= $pencapaian['judul'] ?>" style="max-height: 100px;">
                        <input type="hidden" name="current_image" value="<?= $pencapaian['foto'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
