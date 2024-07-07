<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style_detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Detail Kamar</title>

    <style>
        .margin-left-px{
            font-family: "PT Serif", serif;
            font-weight: 700;
            font-style: normal
        }
    </style>
</head>
<body>
    <?php 
    
    include 'header.php'; 
    include "sample.php";
    
    $kost_id = isset($_GET['id']) ? $_GET['id'] : null;
    $kost = isset($kosts[$kost_id]) ? $kosts[$kost_id] : null;
     
    if ($kost && $kost_id==1): ?>
    <br>
      <div class="container justify-content-start">
        <div class="row">
            <div class="col">
            <h2 class="margin-left-px"><?php echo $kost["name"]; ?></h2>
            <p class="margin-left-px">Rp.<?php echo $kost["price"]; ?>/bulan</p>
            </div>
        </div>
      </div>
      <div class="container margin-left-px">
        <?php
          $all_images = $kost["all_images"]; 
        ?>
        <div class="container">
        <div class="main-photo">
            <img src="images/<?php echo $all_images[0];?>" alt="Main Photo">
        </div>
        <div class="side-photos">
            <div class="side-photo">
                <img src="images/<?php echo $all_images[1];?>" alt="Side Photo 1">
            </div>
            <div class="side-photo">
                <img src="images/<?php echo $all_images[2];?>" alt="Side Photo 2">
            </div>
        </div>
        </div>
      </div>
      <br>
      <div class="container justify-content-start">
      <h3 class="margin-left-px">Detail - <?php echo $kost["name"]; ?></h3>
      </div>
      <div class="button-container">
            <input type="button" value="foto">
            <input type="button" value="360°" <?php
            if ($kost_id==1){ ?> onclick="window.location.href='360.html'" <?php } else{?>onclick="window.location.href='index.php'" <?php } ?>>
      </div>
      <div class="container">
      <table>
        <tr>
            <th>Spesifikasi Tipe Kamar</th>
            <th>Peraturan Khusus Tipe Kamar Ini</th>
        </tr>
        <tr>
            <td>
                <ul>
                    <?php foreach ($kost["spek"] as $spek) { ?>
                        <li><?php echo $spek; ?></li>
                    <?php } ?>
                </ul>
            </td>
            <td>
                <ul>
                    <?php foreach ($kost["rules"] as $rules) { ?>
                        <li><?php echo $rules; ?></li>
                    <?php } ?>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Fasilitas Kamar</th>
            <th>Cerita Pemilik Tentang Kos Ini</th>
        </tr>
        <tr>
            <td>
                <ul>
                    <?php foreach ($kost["fasilitas"] as $fasilitas) { ?>
                        <li><?php echo $fasilitas; ?></li>
                    <?php } ?>
                </ul>
            </td>
            <td>
                Akses jalan bisa via:
                <ul>
                    <?php foreach ($kost["lokasi"] as $loc) { ?>
                        <li><?php echo $loc; ?></li>
                    <?php } ?>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Catatan Tambahan Seputar Fasilitas</th>
            <th>Ketentuan Pengajuan Sewa</th>
        </tr>
        <tr>
            <td>
              <?php foreach ($kost["biaya_lain"] as $biaya_lain) { ?>
                  <li><?php echo $biaya_lain; ?></li>
              <?php } ?>
            </td>
            <td>
              <?php foreach ($kost["payment"] as $payment) { ?>
                  <li><?php echo $payment; ?></li>
              <?php } ?>
            </td>
        </tr>
    </table>
      </div>
    <?php else: ?>
      <center><h1>Kamar sudah tidak tersedia</h1></center>
    <?php endif; ?>
</body>
</html>
