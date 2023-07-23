<!DOCTYPE html>
<html>
<head>
    <title>Edit Galeri Video</title>
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
        <h1>Edit Galeri Video</h1>
        <form method="post" action="/admin/video/update/<?= $video['id'] ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $video['judul'] ?>">
            </div>
            <div class="mb-3">
                <label for="video" class="form-label">video</label>
                <input type="file" class="form-control" id="video" name="video">
            </div>
            <div class="mb-3">
                <label for="current_video" class="form-label">Current video</label>
                <iframe src="/uploads/<?= $video['video'] ?>" alt="<?= $video['judul'] ?>" style="max-height: 100px;">
        </iframe>
                <input type="hidden" name="current_video" value="<?= $video['video'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
