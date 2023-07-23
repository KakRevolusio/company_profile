<?php if (!empty($komentars)): ?>
    <?php foreach ($komentars as $komentar): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= $komentar['nama'] ?></h5>
                <p class="card-text"><?= $komentar['komentar'] ?></p>
                <form action="<?= base_url('komentar/delete/'.$komentar['id_komentar']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus komentar?');">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <li class="list-group-item">Belum ada komentar.</li>
<?php endif; ?>
