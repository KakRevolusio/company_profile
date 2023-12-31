
<!DOCTYPE html>
<html>
<head>
    <title>Pertanyaan dan Jawaban</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    .main-banner {
  background-image: url(./aset/KantorTelkom.jpg);
  height: 500px;
  width: auto;
  padding: 10px 200px;
  }
</style>
</head>
<body>
<?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
    <div class="">
    <div class="row">
      <div class="col bg-danger text-white">
        Beranda -> Bantuan
      </div>
    </div>
  </div>
    <div class=" main-banner ">
            <h1 class="text-center text-white
             p-1 mb-2 mt-3 col-8 mx-auto bg-danger rounded-pill">Pertanyaan Dan Jawaban</h1>
        <div class="container">
        <div id="accordion">
        <?php foreach ($pertanyaan as $pertanyaan) : ?>
            <div class="card">
                <div class="card-header" id="heading<?php echo $pertanyaan['id']; ?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $pertanyaan['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $pertanyaan['id']; ?>">
                            <?php echo $pertanyaan['question']; ?>
                        </button>
                    </h5>
                </div>

                <div id="collapse<?php echo $pertanyaan['id']; ?>" class="collapse" aria-labelledby="heading<?php echo $pertanyaan['id']; ?>" data-parent="#accordion">
                    <div class="card-body">
                        <?php echo $pertanyaan['answer']; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>