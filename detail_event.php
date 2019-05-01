<?php include_once('templates/header.php'); ?>
<?php
include 'database/db.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = "select * from events where id=$id";
  $sql = mysqli_query($c, $q);
  // echo $sql;
  $res = mysqli_fetch_object($sql);
}
?>

<div class="container py-5">
  <div class="row py-2">
    <div class="col-xl-8 col-md-8 mx-auto">
      <img class="d-block w-100" src="<?= $res->image_url; ?>" alt="">
    </div>
  </div>
  <div class="row container card shadow-lg rounded py-2">
    <div class="col-lg-8 col-md-8 py-3">
      <h1 class="display-5">
        <?= $res->title; ?>
      </h1>
      <hr>
      <h4 class="m-0 font-weight-bold">
        Deskripsi
      </h4>
      <p class="text-muted lead">
        <?= $res->description; ?>
      </p>
      <h4 class="m-0 font-weight-bold">
        Tanggal :
      </h4>
      <p class="text-muted lead">
        <?= $res->date_e; ?>
      </p>
      <h4 class="m-0 font-weight-bold">
        Waktu :
      </h4>
      <p class="text-muted lead">
        <?= $res->jam; ?> – <?= $res->jam_akhir; ?>
      </p>
      <h4 class="m-0 font-weight-bold">
        Lokasi :
      </h4>
      <p class="text-muted lead">
        <?= $res->detail_lokasi; ?>, <?= $res->lokasi; ?>
      </p>
    </div>
  </div>
</div>

<?php include_once('templates/footer.php'); ?>