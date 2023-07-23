<!DOCTYPE html>
<html>
<head>
    <title>Admin Page-Acara</title>
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
        <h1>Admin Page-Acara</h1>
        <a href="/admin/acara/create" class="btn btn-primary">Add New </a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($acaras as $acara) : ?>
                    <tr>
                        <td><?= $acara['id'] ?></td>
                        <td><?= $acara['jidul'] ?></td>
                        <td><?= $acara['keterangan'] ?></td>
                        <td>
                            <img src="/uploads/<?= $acara['poto'] ?>" alt="<?= $acara['poto'] ?>" style="max-height: 100px;">
                        </td>
                        <td>
                            <a href="/admin/acara/edit/<?= $acara['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/admin/acara/delete/<?= $acara['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
