<!DOCTYPE html>
<html>
<head>
    <title>Admin Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="mt-3">
            <h3 class="text-center">Admin</h3>
        </div>
        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Pemesanan
            </div>
            <div class="card-body">
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Paket</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pesan as $item) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['telepon'] ?></td>
                            <td><?= $item['alamat'] ?></td>
                            <td><?= $item['paket'] ?></td>
                            <td>
                                <a href="/admin/pesan/delete/<?= $item['id_pesan'] ?>" class="btn btn-sm btn-danger">Delete</a>
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
