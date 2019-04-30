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
          <p class="text-muted">
            <p><b>Materi Seminar :</b>
              Human Model of The World
              Belief System, Value, State & Perception
              Limiting Belief & Life Traps
              Meta Model & Meta Program
              Surface & Deep Structure
              Suggestion, Visualisasi & Afirmasi
            </p>
            <p> <b>Speakers :</b>
              Antonius Kurniawan
              (@Daudantonius)
              Body Language Practitioner
              NLP Master & Trainer
              Best Seller Author (10 Books)
              National Public Speakers
            </p>
            <p><b>Investasi & Cara Pembayaran :</b>
              Pelajar / Mahasiswa : Rp. 150.000
              Umum : Rp. 175.000
              Kolektif (3 Orang ) : Rp. 400.000
              *Kolektif Maks 2 Minggu Sebelum Acara</p>
            <p><b>Fasilitas Peserta :</b>
              -Coffee Break + Snack
              -Seminar Kit
              -Student Tools (Modul, Worksheet)
              -Sertifikat dari Psikologid</p>
            <p><b>Kontak pendaftaran :</b>
              082210302030 (SMS / WA)
              psikolog.id (Line)</p>
            <p><b>Sistem Pembayaran :</b>
              Via transfer BCA & Mandiri, akan di tukarkan dengan E-Tiket yang pada waktu pelaksanaan akan ditukar dengan seminar Kit dan sertifikat</p>
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
      <p class="text-muted">
        <p><b>Date : </b><?= $res->date_e; ?></p>
      </p>
      <p class="text-muted">
        <p><b>Time : </b><?= $res->jam; ?> – Selesai
          LEARN Coworking Space
          Ruko Pasar Modern Blok R46
          Kota Harapan Indah – <?= $res->lokasi; ?></p>
      </p>
    </div>
  </div>
</div>

<?php include_once('templates/footer.php'); ?>