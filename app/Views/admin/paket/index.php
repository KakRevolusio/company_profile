<!DOCTYPE html>
<html>
<head>
    <title>Admin Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="mt-3">
            <h3 class="text-center">Admin-Paket</h3>
        </div>
        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Penambahan Paket
            </div>
            <div class="card-body">
                <a type="button" class="btn btn-success mb-3" data-bs-toggle="modal" href="/admin/paket/create">
                    Tambah Data
                </a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kecepatan</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($paket as $item) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $item['kecepatan'] ?></td>
                            <td><?= $item['harga'] ?></td>
                            <td><?= $item['deskripsi'] ?></td>
                            <td><?= $item['detail'] ?></td>
                            <td>
                                <a href="/admin/paket/edit/<?= $item['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="/admin/paket/delete/<?= $item['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
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
