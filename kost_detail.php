<?php

include "sample.php";
include "header.php";
// Get the kost ID from the URL
$kost_id = isset($_GET['id']) ? $_GET['id'] : null;
$kost = isset($kosts[$kost_id]) ? $kosts[$kost_id] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kost Detail</title>
  <link rel="stylesheet" href="style_rizki.css">
</head>
<body>
  <div class="container">
  <div class="container mt-2">
      <a class="btn btn-warning" href="halaman2.php" role="button">Back to List</a>
    </div>
    <h1><?php echo $kost["name"]; ?></h1>
  </div>
  <section>
    <div class="container">
      <div class="row">
        <div class="col">
        <?php if ($kost): ?>
        <div class="kost-detail">
        <div class="container">
          <img src="images/<?php echo $kost["image"]; ?>" alt="<?php echo $kost["name"]; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-5">
        <h1><?php echo $kost["name"]; ?></h1>
        <p>Rp.<?php echo $kost["price"]; ?>/bulan</p>
        <p><?php echo $kost["location"]; ?></p>
        <p><?php echo $kost["description"]; ?></p>
        <a class="btn btn-warning" href="mailto:owner@example.com">Tanya Pemilik Kost</a>
        </div>
      </div>
    <?php else: ?>
      <p>Kost not found.</p>
    <?php endif; ?>
        </div>
      </div>
    </div>  
  </section>
  <br>
  <br>
  <br>
</body>
</html>
