<!DOCTYPE html>
<html>
<head>
    <title>Createtes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
</head>
<body>
    
      
            <?php include(APPPATH . 'Views/navdanfoot/navbar.php'); ?>
        
    <div class="container mt-5">
        <h1>Tuiskan Testimoni Anda</h1>
        <form method="post" action="/admin/tes/store" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="judul" class="form-label">judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="gambar/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <?php include(APPPATH . 'Views/navdanfoot/footer.php'); ?>
</body>
</html>
