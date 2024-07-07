<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    
    <!-- JQuery -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <style>
        .container{
            font-family: "PT Serif", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning shadow">
    <div class="container">
        <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="Logo" width="60" height="50" class="d-inline-block">
        Mamikost
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#">Cari apa?</a>
            <a class="nav-link" href="#">Pusat Bantuan</a>
            <a class="nav-link" href="#">Syarat dan Ketentuan</a>
            <a class="nav-link" href="#">Masuk</a>
        </div>
        </div>
    </div>
    </nav>
</body>
</html>