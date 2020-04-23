<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <title><?php echo $judul ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href=<?= base_url(); ?>>Check Positif Corona</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <a class="nav-item nav-link" href="#">Beranda</a></li>
                    <a class="nav-item nav-link" href="#">Validasi Pasien</a></li>
                    <a class="nav-item nav-link" href="#">Input Hasil Test Pasien</a></li>
                    <a class="nav-item nav-link" href="#">Input Data Persebaran Corona</a></li>
                </div>
                <div class="navbar-nav">
                    <li><a class="nav-item nav-link" href="<?= site_url('login_view') ?>">Keluar</a></li>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>
