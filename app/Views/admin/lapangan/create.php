<!DOCTYPE html>
<html>
<head>
    <title>Create lapangan</title>
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
        <h1>Create  lapangan</h1>
        <form method="post" action="/admin/lapangan/store" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">nama	</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">jabatan</label>
                <textarea class="form-control" id="jabatan" name="jabatan" required></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="gambar/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>
