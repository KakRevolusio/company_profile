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
</style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg text-white bg-white bg-opacity-50">
    <a class="navbar-brand" href="#">
      <img src="/aset/logo.png" alt="Logo" width="150" height="80">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('beranda'); ?>">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tentang Kami
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdown1">
            <li>
              <a class="dropdown-item" href="http://localhost:8080/perusahaan">Struktur Perusahaan</a>
              <a class="dropdown-item" href="<?= base_url('visi'); ?>">Visi Misi</a>
              <a class="dropdown-item" href="<?= base_url('http://localhost:8080/alat'); ?>">Peralatan</a>
              <a class="dropdown-item" href="<?= base_url('latar'); ?>">Latar Perusahaan</a>

              <a class="dropdown-item " href="<?= base_url('devisi'); ?>">Devisi Bagian</a>
              <a class="dropdown-item" href="<?= base_url('kebijakan'); ?>">Kebijakan Perusahaan</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href=<?= base_url('produk'); ?>>Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/beritaterkini">Berita Terkini</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/acara">Acara</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?= base_url('blog'); ?>>Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Galeri
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdown4">
            <li><a class="dropdown-item" href=<?= base_url('http://localhost:8080/foto'); ?>>Galeri Foto</a></li>
            <li><a class="dropdown-item" href=<?= base_url('http://localhost:8080/video'); ?>>Galeri Vidio</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?= base_url('kemitraan'); ?>>Kemitraan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown5" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lowongan
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdown5">
            <li><a class="dropdown-item" href=<?= base_url('alur'); ?>>Alur Pendaftaran</a></li>
            <li><a class="dropdown-item" href="<?= base_url('syarat'); ?>">Syarat Dan ketentuan</a></li>
            <li><a class="dropdown-item" href="<?= base_url('kebijakan2'); ?>">Kebijakan</a></li>
            <li><a class="dropdown-item" href="http://localhost:8080/pendaftaran">Daftar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>