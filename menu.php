<?php
$data = file_get_contents('data/wisata.json');

$menu = json_decode($data, true);

$menu = $menu["menu"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MENU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <!-- navbar untuk tema daftar wisata -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" width="125">
                <a class="nav-link active" aria-current="page" href="#"> Booking </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">

                    </div>
                </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <h1> Tempat daftar wisata </h1>
            </div>
        </div>
        <div class="row">
            <!-- perulangan yang mana sesuai dengan data dari file j.son wisata -->
            <?php foreach($menu as $row) : ?>
            <di class="col-md-4">
                <!-- membuat card content /daftar wisata -->
                <div class="card  mb-3">
                    <img src="images/<?= $row["gambar"]; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> <?= $row["nama"]; ?> </h5>
                        <p class="card-text"><?= $row["deskripsi"]; ?> </p>
                        <a href="#" class="btn btn-primary"> Rp. <?= $row["harga"]; ?> </a>
                    </div>
                </div>
            </di>
            <?php endforeach; ?>
        </div>



    </div>
</body>

</html>