<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://cdn.discordapp.com/attachments/944243031954034739/1128933321066418206/836d17da46c048e58cf3a1829244483c.png" type="image/x-icon">
    <title>Admin - IndiGoGo</title>
    <style>
        .container-fluid {
            display: flex;
            flex-direction: row;
        }

        .sidebar {
            width: 280px;
        }

        .content {
            flex-grow: 1;
        }
    </style>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>


<body class="">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <?php include(APPPATH . 'Views/navdanfoot/beranda.php'); ?>

                <div class="container-fluid ">
                    <div class="table px-1 py-3">
                        <div class="table-wrapper">
                            <div class="table-title mb-3">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h2><b>Produk</b></h2>
                                    </div>
                                    <div class="col-sm-7">
                                        <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#modal-add">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle align-middle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                            </svg>
                                            <span class="align-text-middle">Tambahkan Produk</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <table id="mainTable" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Alamat Gambar</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach ($products as $elements) : ?>
                                        <tr>
                                            <td>
                                                <?php echo $no++ ?>
                                            </td>
                                            <td>
                                                <?php echo $elements["name"] ?>
                                            </td>
                                            <td>
                                                <?php echo substr_replace($elements["description"], "...", 100) ?>
                                            </td>
                                            <td>
                                                <?php
                                                $toRupiah = new NumberFormatter("id-ID", NumberFormatter::CURRENCY);
                                                echo $toRupiah->format($elements['price']);
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo substr_replace($elements["img_path"], "...", 20) ?>
                                            </td>
                                            <td>
                                                <a href="#" class="settings" title="Edit" data-bs-toggle="modal" data-bs-target="#modal-edit--<?php echo $elements['id'] ?>"><i class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg></i></a>
                                                <a href="<?= site_url('admin/produk/delete/' . $elements['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin Menghapus data?')" class="delete" title="Delete" data-bs-toggle="tooltip"><i class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-trash3" viewBox="0 0 16 16">
                                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                        </svg></i></a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <?php foreach ($products as $product) : ?>
                    <!-- Pop -->
                    <div class="modal fade" id="modal-edit--<?php echo $product['id'] ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Default Modal</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-0 m-0">
                                    <form method="post" action="<?= base_url('admin/produk/update') ?>">
                                        <div class="card-body m-3">
                                            <div class="form-group">
                                                <label>Nama Produk</label>
                                                <input name="name" type="text" class="form-control" value="<?php echo $product['name'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Type</label>
                                                <input name="type" type="number" class="form-control" value="<?php echo $product['type'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>URL gambar</label>
                                                <input name="img_path" type="url" class="form-control" value="<?php echo $product['img_path'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <textarea name="description" class="form-control" rows="3"><?php echo $product['description'] ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Harga dalam Rupiah</label>
                                                <input name="price" type="number" class="form-control" value="<?php echo $product['price'] ?>">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class=" d-flex card-footer justify-content-between m-3 pt-4">
                                            <button type="button" class="btn btn-outline-dark me-auto" data-bs-dismiss="modal">Tutup</button>
                                            &nbsp;
                                            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>


                <?php endforeach; ?>


                <!-- MODAL ADD -->
                <div class="modal fade" id="modal-add">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Default Modal</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-0 m-0">
                                <form method="post" action="<?= base_url('produk/create') ?>">
                                    <div class="card-body m-3">
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input name="name" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Type</label>
                                            <input name="type" type="number" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>URL gambar</label>
                                            <input name="img_path" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="description" class="form-control" rows="3"></textarea>
                                        </div>


                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input name="price" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="d-flex card-footer justify-content-between m-3 pt-4">
                                        <button type="button" class="btn btn-outline-dark me-auto" data-bs-dismiss="modal">Tutup</button>
                                        &nbsp;

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>


        </section>
        <!-- /.content -->

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <!-- <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">

    </script>

</body>

</html>