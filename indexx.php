<?php
// Sample kost data
$kosts = [
  [
    "id" => 1,
    "name" => "Kost Gina Tipe Standard",
    "price" => 700000,
    "location" => "Bandung",
    "image" => "kost1.jpg",
    "description" => "Keterangan biaya lainnya Range harga kamar 700.000 - 1.000.000/bulan. Deposit 50% dari harga sewa per bulan. Pesan tempat minimal 30% dari harga sewa per bulan. Mobil 100.000; Tambahan orang 150.000; Kelebihan daya pemakaian listrik 50.000."
  ],
  [
    "id" => 2,
    "name" => "Kost Alpha Tipe C",
    "price" => 700000,
    "location" => "Bandung",
    "image" => "kost2.jpg",
    "description" => "Tipe ini bisa diisi maks. 1 orang/kamar Tidak untuk pasutri Tidak boleh bawa anak Deposit Dikembalikan di akhir periode sewa jika tidak ditemukan kerusakan pada kamar."
  ],
  [
    "id" => 3,
    "name" => "Kost Graha Hermawan",
    "price" => 700000,
    "location" => "Bandung",
    "image" => "kost3.jpg",
    "description" => "Listrik akan ditagihkan setiap tanggal 1, biaya penggunaan Rp. 2.500/Kwh. Perhitungan berdasarkan penggunaan setiap bulannya. Keterangan biaya lainnya Listrik akan ditagih dari penggunaan perbulan. Biaya listrik: Rp. 2.500,00/Kwh"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mamikost</title>
  <link rel="stylesheet" href="style_rizki.css">
</head>
<body id="page-top">
  <header>
    <h1>Booking Kost Hanya di Mamikost</h1>
    <p>Nah ini untuk kalimat yang ditujukan pada isi website nanti, pakenya font podkova sherif yaa.</p>
    <form action="index.php" method="GET">
      <input type="text" name="query" placeholder="Masukan nama lokasi/area/alamat">
      <button type="submit">Cari</button>
    </form>
  </header>
  <main>
    <section>
      <h2>Rekomendasi Kost di Kota Bandung</h2>
      <div class="kost-list">
        <?php
        foreach ($kosts as $kost) {
          echo "<div class='kost-item'>";
          echo "<img src='images/" . $kost["image"] . "' alt='" . $kost["name"] . "'>";
          echo "<h3>" . $kost["name"] . "</h3>";
          echo "<p>Rp." . $kost["price"] . "/bulan</p>";
          echo "<p>" . $kost["location"] . "</p>";
          echo "<a href='kost_detail.php?id=" . $kost["id"] . "'>Lihat Kost</a>";
          echo "</div>";
        }
        ?>
      </div>
    </section>
  </main>
</body>
</html>
