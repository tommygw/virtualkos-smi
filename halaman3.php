<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Detail Kosan</title>

    <style>
        .container h1{
            font-family: "PT Serif", serif;
            font-weight: 700;
            font-style: normal;
        }
        .container h3{
            font-family: "PT Serif", serif;
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
    <?php include "header.php";
    $kost_id = isset($_GET['id']) ? $_GET['id'] : null;
    $kost = isset($kosts[$kost_id]) ? $kosts[$kost_id] : null;
    ?>
    <section>
        <div class="container">
            <?php if ($kost_id==1) {?>
            <div class="container">
                <h1>Kost Gina Tipe Satandard</h1>
                <p>Rp.700.000/bulan</p>
            </div>
            <div class="container mb-5">
                <div class="container text-center">
                    <img src="images/depan.jpeg" alt="MAMIKOST" width="50%">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="container">
                            <h3>Kost disewakan oleh Gina</h3>
                            <p>Online 2 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <h3>List Kamar yang Tersedia</h3>
                            <p>Berikut daftar listnya<br>
                                Klik untuk melihat detail kamar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo "<a class='btn btn-warning' href='full_detailkost.php?id=" . $kost_id . "'>Lihat Detail Kost</a>"; }

            else if ($kost_id==2) {?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="container">
                            <h1>Kost Alpha Tipe C</h1>
                        <p>Rp.700.000/bulan</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container text-center">
                    <img src="images/kosan2depan.jpg" alt="MAMIKOST" width="70%">
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <div class="container">
                            <h3>Kost disewakan oleh Gani</h3>
                            <p>Online 2 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <h3>List Kamar yang Tersedia</h3>
                            <p>Berikut daftar listnya<br>
                                Klik untuk melihat detail kamar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo "<a class='btn btn-warning' href='full_detailkost.php?id=" . $kost_id . "'>Lihat Detail Kost</a>"; }

            else if ($kost_id==3) {?>
                <div class="container">
                    <h1>Kost Graha Hermawan</h1>
                    <p>Rp.700.000/bulan</p>
                </div>
                <div class="container">
                    <div class="container text-center">
                        <img src="images/kosan3depan.jpg" alt="MAMIKOST" width="70%">
                    </div>
                </div>
                <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <div class="container">
                            <h3>Kost disewakan oleh Gina</h3>
                            <p>Online 2 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <h3>List Kamar yang Tersedia</h3>
                            <p>Berikut daftar listnya<br>
                                Klik untuk melihat detail kamar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                <?php echo "<a class='btn btn-warning' href='full_detailkost.php?id=" . $kost_id . "'>Lihat Detail Kost</a>"; }?>
        </div>
    </section>
    <br>
    <br>
    <br>
</body>
</html>