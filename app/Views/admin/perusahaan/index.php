<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
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
        <h1>Admin Page-Struktur</h1>
        <a href="/admin/perusahaan/create" class="btn btn-primary">Add New perusahaan</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($perusahaan as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['deskripsi'] ?></td>
                        <td>
                            <img src="/uploads/<?= $item['gambar'] ?>" alt="<?= $item['nama'] ?>" style="max-height: 100px;">
                        </td>
                        <td>
                            <a href="/admin/perusahaan/edit/<?= $item['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/admin/perusahaan/delete/<?= $item['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
