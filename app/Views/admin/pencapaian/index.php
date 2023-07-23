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
        <div class="mt-3">
            <h3 class="text-center">Admin-Pencapaian</h3>
        </div>
        <div class="card">
            <div class="card-header bg-primary text-white">
                Data pencapaian Perusahaan
            </div>
            <div class="card-body">
                
                <a href="/admin/pencapaian/create" class="btn btn-primary">Add New alat</a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pencapaian as $item) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $item['judul'] ?></td>
                            <td><?= $item['deskripsi'] ?></td>
                            <td>
                                <img src="/uploads/<?= $item['foto'] ?>" alt="<?= $item['judul'] ?>" style="max-height: 100px;">
                            </td>
                            <td>
                                <a href="/admin/pencapaian/edit/<?= $item['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="/admin/pencapaian/delete/<?= $item['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php 
                    $no ++;
                    endforeach;  
                    ?>
                </tbody>
            </table>
        </div>        
    </div>
</body>
</html>
