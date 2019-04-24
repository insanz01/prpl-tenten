<?php
include 'database/db.php';

if (isset($_GET['location'])) {
  $kategori = $_GET['category'];
  $lokasi = $_GET['location'];
  if ($_GET['date']) $tanggal = $_GET['date'];
  else $tanggal = "";

  if (!$tanggal) {
    $q = "select * from events where date_e >= curdate()";
    if ($kategori != "all") $q = $q . " and kategori = '$kategori'";
    if ($lokasi != "jabodetabek") $q = $q . " and lokasi = '$lokasi'";
  } else {
    $q = "select * from events where date_e = '$tanggal'";
    if ($kategori != "all") $q = $q . " and kategori = '$kategori'";
    if ($lokasi != "jabodetabek") $q = $q . " and lokasi = '$lokasi'";
  }

  $result = mysqli_query($c, $q);

  if (!$result) die('Something wrong...');
}
?>

<div class="container-fluid">
  <h1 class="text-center">Already Events</h1>
  <div class="row">
    <?php foreach ($result as $data) : ?>
      <div class="col-lg-3 my-2 mx-auto">
        <div class="card" style="width: 18rem;">
          <img src="<?= $data['image_url']; ?>" class="card-img-top" alt="this is image of event">
          <div class="card-body">
            <h5 class="card-title"><?= $data['title']; ?></h5>
            <p class="card-text"><?= $data['description']; ?></p>
            <a href="detail_event.php/id=<?php $data['id']; ?>" class="btn btn-success">Go Detail</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>