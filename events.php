<?php include_once('templates/header.php'); ?>

<?php
// untuk menghubungkan database ke dalam file events.php ini
include 'database/db.php';

// jika tombol telah disubmit makan akan mengirimkan get location
if (isset($_GET['location'])) {
  $kategori = $_GET['category']; // mengambil get kategori dan disimpan ke dalam variabel kategori
  $lokasi = $_GET['location']; // mengambil get lokasi dan disimpan ke dalam variabel lokasi
  if ($_GET['date']) $tanggal = $_GET['date']; // jika tanggal sudah diset, maka akan disimpan ke dalam variabel tanggal
  else $tanggal = ""; // jika tanggal tidak diset

  // jika isi variabel tanggal kosong
  if (!$tanggal) {
    // jika isi variabel tanggal kosong maka otomatis akan mengambil query menampilkan seluruh tanggal
    // menampilkan seluruh tanggal mulai hari ini hingga yang akan mendatang
    $q = "select * from events where date_e >= curdate()";
    if ($kategori != "all") $q = $q . " and kategori = '$kategori'"; // menambahkan query filter kategori jika isi variabel kategori bukan "all"
    if ($lokasi != "jabodetabek") $q = $q . " and lokasi = '$lokasi'"; // menambahkan query filter lokasi jika isi variabel lokasi bukan "jabodetabek"
  } else {
    // jika isi variabel tanggal ada isinya
    // maka query nya hanya akan menampilkan yang tanggal nya sesuai dengan isi filternya
    $q = "select * from events where date_e = '$tanggal'";
    if ($kategori != "all") $q = $q . " and kategori = '$kategori'"; // menambahkan query filter kategori jika isi variabel kategori bukan "all"
    if ($lokasi != "jabodetabek") $q = $q . " and lokasi = '$lokasi'"; // menambahkan query filter lokasi jika isi variabel lokasi bukan "jabodetabek"
  }

  // menghubungkan query dengan database, dan akan dieksekusi kemudian hasil querynya disimpan ke dalam variabel result
  $result = mysqli_query($c, $q);

  // jika variabel result kosong maka akan melempar teks something wrong
  if (!$result) die('Something wrong...');
}
?>

<div class="container-fluid">
  <h1 class="text-center pt-4">Already Events</h1>
  <div class="row">
    <!-- perulangan jika variabel mempunyai isi dan lebih dari 1 -->
    <?php foreach ($result as $data) : ?>
      <div class="col-lg-3 my-2 mx-auto">
        <div class="card" style="width: 18rem;">
          <img src="<?= $data['image_url']; ?>" class="card-img-top" alt="this is image of event">
          <div class="card-body">
            <h5 class="card-title"><?= $data['title']; ?></h5>
            <p class="card-text"><?= $data['description']; ?></p>
            <a href="detail_event.php?id=<?= $data['id']; ?>" class="btn btn-success">Go Detail</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

<?php include_once('templates/footer.php'); ?>