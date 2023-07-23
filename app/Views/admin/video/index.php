<!DOCTYPE html>
<html>
<head>
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
        <h1>Admin Page-Vidio</h1>
        <a href="/admin/video/create" class="btn btn-primary">Add New video</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>video</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($videos as $video) : ?>
                    <tr>
                        <td><?= $video['id'] ?></td>
                        <td><?= $video['judul'] ?></td>
                        <td>
                        <iframe src="<?= base_url('uploads/' . $video['video']) ?>" alt="<?= $video['judul'] ?>" style="max-height: 100px;">
                        </iframe>
                        </td>
                        <td>
                            <a href="/admin/video/edit/<?= $video['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/admin/video//delete/<?= $video['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
