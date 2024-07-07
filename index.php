
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style_rizki.css">
    
    <!-- JQuery -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-wid-th, initial-scale=1.0">
    <title>Home</title>

    <style>
        .col-md-7 h1 {
            font-family: "PT Serif", serif;
            font-weight: 700;
            font-style: normal;
        }
        .col-md-7 {
            font-family: "PT Serif", serif;
            font-weight: 700;
            font-style: normal;
        }
        .search-form input[type="search"] {
        width: 350px; /* Ubah lebar sesuai keinginan Anda */            
        }
        h2{
            font-family: "PT Serif", serif;
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
    <?php include "header.php";?>
    <?php include "sample.php";?>
    
    <section>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-7 text-between">
                    <h1 class="display-4">Booking Kost, Hanya di Mamikost</h1> <br>
                    <p class="lead">Temukan kost idamanmu dengan mudah di Mamikos, aplikasi terpercaya untuk pencarian kost di seluruh Indonesia. Dengan fitur pencarian cepat dan lengkap, kamu bisa menemukan kost berdasarkan harga, lokasi, fasilitas, dan tipe yang sesuai kebutuhanmu. Kami menyediakan informasi terbaru dan akurat tentang ketersediaan kamar, serta foto-foto asli dan ulasan penghuni sebelumnya untuk membantu kamu membuat pilihan tepat. Pesan kamar kost secara online dengan aman dan nyaman melalui aplikasi kami, tanpa perlu repot datang langsung. Dapatkan pengalaman mencari kost yang lebih mudah dan menyenangkan dengan layanan pelanggan 24/7 dari Mamikos. Download aplikasi Mamikos sekarang dan nikmati kemudahan mencari kost bersama jutaan pengguna lainnya yang telah mempercayai kami.</p>
                    <img src="images/icon-removebg-preview.png" alt="icon" width="200">
                </div>
                <div class="col">
                    <div class="container text-end">
                        <img src="images/section1.png" alt="MAMIKOST" width="400" >
                    </div>
                </div>
                <hr class="my-4">
                <h2 class="display-5">Mau Cari Kost?</h2>
                <p>Dapatkan info dan langsung booking di Mamikost</p>
                <form class="d-flex search-form" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </section>

    <section id="listkosan">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h2>Rekomendasi Kos di Kota Bandung</h2>
            </div>
        </div>
        <div class="container mb-2">
            <a class="btn btn-warning" href="halaman2.php" role="button">Lihat Semua</a>
        </div>
        <div class="row">
            <?php
            foreach ($kosts as $kost) {
                echo "<div class='col-md-4 mb-3'>";
                echo "<div class='card' style='width: 18rem;'>";
                echo "<img src='images/" . $kost["image"] . "' class='card-img-top' alt='" . $kost["id"] . "'>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>" . $kost["name"] . "</p>";
                echo "<p class='card-text'>Rp." . $kost["price"] . "/bulan</p>";
                echo "<p class='card-text'>" . $kost["location"] . "</p>";
                echo "<a href='kost_detail.php?id=" . $kost["id"] . "' class='btn btn-warning'>Lihat Kost</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>