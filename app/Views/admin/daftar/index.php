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
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>
        <section class="w-100 mx-3">
            <tr>
                <h1 class="text-center">Data Pendaftar</h1>
            </tr>
            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Email</th>
                        <th>Nomor Handphone</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if ($daftar) : ?>
                        <?php foreach ($daftar as $row) : ?>
                            <tr>
                                <td><?= $row['nik']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['agama']; ?></td>
                                <td><?= $row['jenis_kelamin']; ?></td>
                                <td><?= $row['usia']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['nomor_handphone']; ?></td>
                                <td>

                                    <form action="/admin/delete/<?= $row['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="9">Tidak ada data.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>


</body>

</html>