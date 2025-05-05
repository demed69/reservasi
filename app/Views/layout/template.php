<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous" />

    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <!--navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark text-white">
        <div class="container">
            <a class="navbar-brand" href="/pages">
                <img src="img/Backup Logo1.png" alt="" width="35" height="35">
                <span class="text-white">CAFE</span> <i class="text-danger">shop</i>
            </a>
            <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/pages/keranjang">
                            <i class="bi bi-basket"></i> keranjang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar end-->

    <!-- Content Section -->
    <div class=" container mt-5">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>