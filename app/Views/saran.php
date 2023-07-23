<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<head>
    <title>Produk</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        .navbar {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: red !important;

        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            position: absolute;
            left: 100%;
            top: 0;
            margin-top: 0;
        }

        .dropdown-submenu:hover .dropdown-menu {
            display: block;
        }

        .gradient-custom {
            /* fallback for old browsers */
            background: #f093fb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>

<body>


    <?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <form method="post" action="<?= base_url('saran/') ?>">
                                <div class="container-fluid">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Saran dan Masukan</label>
                                        <textarea name="content" class="form-control" id="content" rows="3"> </textarea>
                                    </div>
                                    <input style="display: none;" type="datetime-local" name="entry_date" value="<?= date_create()->format('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






</body>

</html>