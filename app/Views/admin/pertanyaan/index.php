<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
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
    </style>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="sidebar">
            <?php include(APPPATH . 'Views/navdanfoot/beranda.php'); ?>
        </div>
    <div class="container mt-5">
        <h1>Admin Page-Bantuan Instan</h1>
        <a href="/admin/pertanyaan/create" class="btn btn-primary">Add New pertanyaan</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>question</th>
                    <th>Description</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pertanyaan as $pertanyaan) : ?>
                    <tr>
                        <td><?= $pertanyaan['id'] ?></td>
                        <td><?= $pertanyaan['question'] ?></td>
                        <td><?= $pertanyaan['answer'] ?></td>
                        
                        <td>
                            <a href="/admin/pertanyaan/edit/<?= $pertanyaan['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/admin/pertanyaan/delete/<?= $pertanyaan['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
