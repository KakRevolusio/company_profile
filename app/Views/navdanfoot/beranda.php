<style>
    .nav-link:hover,
    .dropdown-item:hover {
        background-color: blue;
        color: blue;
    }
</style>
<div>
    <div class="sidebar d-flex flex-column vh-100 text-bg-dark">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Menu Admin</span>
        </a>
        <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="<?= base_url('http://localhost:8080/admin/beranda'); ?>" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Beranada
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Tentang Kami
                </a>
                <ul class="dropdown-menu bg-dark">
                    <li><a href="<?= base_url('http://localhost:8080/admin/perusahaan'); ?>" class="dropdown-item text-white">Struktur</a></li>
                    <li><a href="<?= base_url('http://localhost:8080/admin/alat'); ?>" class="dropdown-item text-white">Peralatan</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Devisi
                </a>
                <ul class="dropdown-menu bg-dark">
                    <li><a href="<?= base_url('http://localhost:8080/admin/progamer'); ?>" class="dropdown-item text-white">Progaming</a></li>
                    <li><a href="<?= base_url('http://localhost:8080/admin/marketing'); ?>" class="dropdown-item text-white">Markeeting</a></li>
                    <li><a href="<?= base_url('http://localhost:8080/admin/lapangan'); ?>" class="dropdown-item text-white">Lapangan</a></li>
                </ul>
            </li>
            <!-- Add other menu items and dropdowns similarly -->
            <li class="nav-item">
                <a href="<?= base_url('http://localhost:8080/admin/blog'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Blog
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#speedometer2"></use>
                    </svg>
                    Galeri
                </a>
                <ul class="dropdown-menu bg-dark">
                    <li><a href="<?= base_url('http://localhost:8080/admin/foto'); ?>" class="dropdown-item text-white">Foto</a></li>
                    <li><a href="<?= base_url('http://localhost:8080/admin/video'); ?>" class="dropdown-item text-white">Vidio</a></li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/acara'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Acara
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/tes'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Testimony
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/pendaftaran'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Daftar
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/pencapaian'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Pencapaian
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/produk'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Produk
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/kegiatan'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Kegiatan
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/pertanyaan'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Bantuan
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/saran'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Saran
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('/admin/beritaterkini'); ?>" class="nav-link text-white" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16">
                        <use xlink:href="#home"></use>
                    </svg>
                    Berita Terkini
                </a>
            </li>
        </ul>
        <hr class="mt-auto">
    </div>
</div>

<!-- Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>