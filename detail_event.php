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
    <div class="col-lg-8 col-md-8">
      <img class="d-block w-100" src="<?= $res->image_url; ?>" alt="">
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="row">
        <div class="col-lg-12 col-md-12 py-5 card">
          <p class="text-center">
            <?= $res->title; ?>
          </p>
        </div>
        <div class="col-lg-12 col-md-12 py-5 card my-2">
          <p class="text-center">
            REGULER
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5 col-md-6 py-3 card">
      <p class="text-muted">
        <?= $res->description; ?>
      </p>
    </div>
    <div class="mx-auto"></div>
    <div class="col-lg-5 col-md-6 py-3 card">
      <p class="text-muted">Date : <?= $res->date_e; ?></p>
      <p class="text-muted">Time : Belum punya data untuk waktu. hehe</p>
    </div>
  </div>
</div>

<?php include_once('templates/footer.php'); ?>