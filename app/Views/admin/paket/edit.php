
<!DOCTYPE html>
<html>
<head>
    <title>Edit Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <h3><center>Edit Paket</center></h3>
            <div class="card-body">
                <form method="post" action="/admin/paket/update/<?= $paket['id'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="kecepatan" class="form-label">Kecepatan</label>
                        <input type="text" class="form-control" id="kecepatan" name="kecepatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <textarea class="form-control" id="harga" name="harga" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">Detail</label>
                        <textarea class="form-control" id="detail" name="detail" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
