<?php include 'header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Event</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
  <!-- Content Row -->

  <div class="row">
    <!-- Form tambah event -->
    <div class="col-xl-9 col-lg-8 mx-auto">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Form Event Baru</h6>
        </div>
        <div class="card-body">
          <form class="user" action="actions/tambah.php" method="post">
            <div class="form-group">
              <label for="title">Judul</label>
              <input type="text" class="form-control form-control-user" name="title" id="title">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="row">
              <div class="col-xl-4 col-lg-4">
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" name="date" class="form-control" id="tanggal">
                </div>
              </div>
              <div class="col-xl-4 col-lg-4">
                <div class="form-group">
                  <label for="waktu_awal">Jam Mulai</label>
                  <input type="time" name="waktu_awal" class="form-control" id="waktu_awal">
                </div>
              </div>
              <div class="col-xl-4 col-lg-4">
                <div class="form-group">
                  <label for="waktu_akhir">Jam Berakhir</label>
                  <input type="time" name="waktu_akhir" class="form-control" id="waktu_akhir">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6">
                <div class="form-group">
                  <label for="lokasi">Lokasi</label>
                  <select name="location" id="lokasi" class="form-control form-control-user">
                    <option value="jabodetabek">Jabodetabek</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="bogor">Bogor</option>
                    <option value="depok">Depok</option>
                    <option value="tangerang">Tangerang</option>
                    <option value="bekasi">Bekasi</option>
                  </select>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select name="kategori" id="kategori" class="form-control form-control-user">
                    <option value="all">Pilih Semua</option>
                    <option value="education">Edukasi</option>
                    <option value="technology">Teknologi</option>
                    <option value="health">Kesehatan dan Kecantikan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="price">Harga</label>
              <input type="number" min="0" class="form-control form-control-user" name="price" id="price">
            </div>
            <div class="form-group">
              <label for="detail">Detail Lokasi</label>
              <textarea name="detail" id="detail" cols="30" rows="7" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Simpan Event
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'footer.php'; ?>