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

        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <form id="login-form" class="form" action="<?= base_url('admin/login') ?>" method="post">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="username" name="username" class="form-control form-control-lg" />
                                        <label class="form-label" for="username">Username</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>