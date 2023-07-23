
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Forum</title>
</head>
<body>
  <?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
  
  <section class="py-5">
    <div class="container">
      <h1 class="mb-4 text-center">Forum Diskusi</h1>
      <!-- Form untuk menambahkan pertanyaan -->
      <form method="post" action="<?= base_url('forum/simpan_pertanyaan') ?>">
        <div class="mb-3">
          <label for="inputPertanyaan" class="form-label">Pertanyaan</label>
          <textarea class="form-control" id="inputPertanyaan" rows="3" placeholder="Masukkan Pertanyaan Anda" name="pertanyaan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
      </form>
      <hr>
      <div class="row">
        <?php foreach ($pertanyaan as $pertanyaan_item) : ?>
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title"><?= $pertanyaan_item['isi'] ?></h5>
                <!-- Lihat Jawaban here -->
                <?php $answers = $pertanyaan_item['answers']; ?>
                <?php if (!empty($answers)) : ?>
                  <h6 class="card-subtitle mb-2 text-muted">Jawaban:</h6>
                  <p class="card-text"><b>Admin :</b><?= $pertanyaan_item['balasan'] ?></p>
                  <?php foreach ($answers as $answer) : ?>
                    <div class="mb-2">
                      <?= $answer['isi'] ?>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
                <!-- Menambahkan Jawaban -->
                <form method="post" action="<?= base_url('forum/simpan_jawaban') ?>">
                  <input type="hidden" name="question_id" value="<?= $pertanyaan_item['id'] ?>">
                  <div class="mb-3">
                    <label for="inputComment" class="form-label">Jawaban</label>
                    <textarea class="form-control" id="inputComment" rows="3" placeholder="Masukkan Jawaban Anda" name="jawaban"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
                </form>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
</body>
</html>
