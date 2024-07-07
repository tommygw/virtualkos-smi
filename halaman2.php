<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>List Kosan</title>

    <style>
        .col h1{
            font-family: "PT Serif", serif;
            font-weight: 700;
            font-style: normal;
        }
        .col h3{
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
            <div class="row mb-3">
                <div class="col">
                    <H1>Kost Kota Bandung</H1>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 17rem;">
                            <img src="images/depan.jpeg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <h3>Kost Gina Tipe Standard</h3>
                    <p>Rp.700.000/bulan</p>
                    <p>Keterangan biaya lainnya, range harga kamar 700-1.400.000/bulan.
                        Deposit 50% dari harga sewa per bulan.
                        Pesan tempat minimal 30% dari harga sewa per bulan; Mobil 100.000/
                        Tambah orang 150.000.
                        Kelebihan daya pemakaian listrik 50.000.</p>
                    <div class="container mb-2">
                        <a class="btn btn-warning" href="halaman3.php?id=1" role="button">Lihat Kost</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-3">
                    <div class="card" style="width: 17rem;">
                            <img src="images/kosan2depan.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <h3>Kost Alpha Tipe C</h3>
                    <p>Rp.700.000/bulan</p>
                    <p>Tipe ini bisa diisi maks 1 orang/kamar
                        Tidak untuk pasutri
                        Tidak boleh bawa anak
                        Wajib Deposit
                        Dikembalikan diakhir periode sewa jika tidak ditemukan kerusakan pada kamar.
                    </p>
                    <div class="container mb-2">
                        <a class="btn btn-warning" href="halaman3.php?id=2" role="button">Lihat Kost</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-3">
                    <div class="card" style="width: 17rem;">
                            <img src="images/kosan3depan.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col">
                    <h3>Kost Graha Hermawan</h3>
                    <p>Rp.700.000/bulan</p>
                    <p>Listrik akan ditagihkan tanggal 1, biaya penggunaan Rp.2.500/Kwh.
                        Perhitungan berdasarkan penggunaan setiap bulannya.
                        Keterangan biaya lainnya, listrik akan dihitung dari penggunaan perbulan.
                        Biaya listrik Rp.2.500/Kwh
                    </p>
                    <div class="container mb-2">
                        <a class="btn btn-warning" href="halaman3.php?id=3" role="button">Lihat Kost</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
</body>
</html>