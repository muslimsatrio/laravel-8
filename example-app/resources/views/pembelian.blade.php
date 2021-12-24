<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Securities Crowdfunding</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <main id="main" style="background-color: #fafafa; min-height: 100vh;">
      <nav class="navbar" style="background-color: white; height: 50px; border-bottom: 2px solid #eaebf0;">
        <div class="container-md" style="max-width: 600px;">
          <a class="navbar-brand" href="index.php">
            <i class='bx bx-arrow-back' style="font-size: 16px; margin-left: 0; padding-left: 0;"></i>
            &nbsp;&nbsp;&nbsp;
            Pembelian Saham
          </a>
        </div>
      </nav>
      <div class="container" style="margin-top: 35px; padding-bottom: 35px; max-width: 600px;">
        <div class="card" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 18px;">
          <div class="card-body">
            <h6><b>Detail Pembelian</b></h6>
            <hr>
            <div class="row mb-2" style="font-size: 13px;">
              <div class="col-7">Nama Saham</div>
              <div class="col-5" style="text-align: right; font-weight: bold;">Alfamart Kadaka Bogor</div>
            </div>
            <div class="row mb-2" style="font-size: 13px;">
              <div class="col-7">Periode Dividen</div>
              <div class="col-5" style="text-align: right; font-weight: bold;">3 Bulan</div>
            </div>
            <div class="row mb-2" style="font-size: 13px;">
              <div class="col-7">Rata-Rata Dividen Yield (%) / Tahun</div>
              <div class="col-5" style="text-align: right; font-weight: bold;">21.3 - 23 %</div>
            </div>
            <div class="row" style="font-size: 13px;">
              <div class="col-7">Waktu Balik Modal</div>
              <div class="col-5" style="text-align: right; font-weight: bold;">50 - 55 Bulan</div>
            </div>
          </div>
        </div>
        <div class="card mt-4" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 18px;">
          <div class="card-body">
            <div class="row" style="font-size: 13px;">
              <div class="col-4"><h6 style="margin-top: 8.5px;"><b>Kode Voucher</b></h6></div>
              <div class="col-6" style="text-align: right; font-weight: bold;">
                <input type="text" class="form-control form-control" id="kode_voucher">
              </div>
              <div class="col-2"><a class="btn btn-primary" href="javascript:void(0);">Pakai</a></div>
            </div>
          </div>
        </div>
        <div class="card mt-4" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 18px;">
          <div class="card-body">
            <div class="row" style="font-size: 13px;">
              <div class="col-6">Harga Per Lembar Saham</div>
              <div class="col-6" style="text-align: right; font-weight: bold;">Rp 50.000</div>
            </div>
          </div>
        </div>
        <div class="card mt-4" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 18px;">
          <div class="card-body">
            <h6><b>Metode Pembayaran</b></h6>
            <hr>
            <div class="row mb-4">
              <div class="col-12"><b>Bank Transfer (Dicek Otomatis)</b></div>
            </div>
            <div class="row mb-4" style="font-size: 13px;">
              <div class="col-7">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="metode_pembayaran" id="bca_va" value="bca_va">
                  <label class="form-check-label" for="bca_va">BCA Virtual Account</label>
                </div>
              </div>
              <div class="col-5" style="text-align: right; font-weight: bold;">
                <img src="https://storage.googleapis.com/go-merchant-production.appspot.com/uploads/2020/09/fc68a00838f69124fddaf64e30f5e958_ca45aac69ce87ce691c3e6582894b6f0_compressed.png" style="width: 60px;" alt="">
              </div>
            </div>
            <div class="row mb-4" style="font-size: 13px;">
              <div class="col-7">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="metode_pembayaran" id="permata_va" value="permata_va">
                  <label class="form-check-label" for="permata_va">Permata Virtual Account</label>
                </div>
              </div>
              <div class="col-5" style="text-align: right; font-weight: bold;">
                <img src="https://storage.googleapis.com/go-merchant-production.appspot.com/uploads/2020/09/3809ed0cf7907054f860ef4f64529ba0_bc5e15f9d4b3eedc3d459c45e2df7709_compressed.png" style="width: 60px;" alt="">
              </div>
            </div>
            <div class="row mb-4" style="font-size: 13px;">
              <div class="col-7">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="metode_pembayaran" id="bni_va" value="bni_va">
                  <label class="form-check-label" for="bni_va">BNI Virtual Account</label>
                </div>
              </div>
              <div class="col-5" style="text-align: right; font-weight: bold;">
                <img src="https://storage.googleapis.com/go-merchant-production.appspot.com/uploads/2020/09/f6f57e9126c57179cf729cc9586e47c0_e26ce4cce944fe379072ae509fe72ec1_compressed.png" style="width: 60px;" alt="">
              </div>
            </div>
            <div class="row mb-4" style="font-size: 13px;">
              <div class="col-7">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="metode_pembayaran" id="mandiri_bp" value="mandiri_bp">
                  <label class="form-check-label" for="mandiri_bp">Mandiri Bill Payment</label>
                </div>
              </div>
              <div class="col-5" style="text-align: right; font-weight: bold;">
                <img src="https://storage.googleapis.com/go-merchant-production.appspot.com/uploads/2020/09/11f8970a182ad8cf6aaf0a0cd22dd9ad_3948cb3bf5c4887c7cca7ca7ee421708_compressed.png" style="width: 60px;" alt="">
              </div>
            </div>
            <div class="row mb-4" style="font-size: 13px;">
              <div class="col-7">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="metode_pembayaran" id="atm_lainnya" value="atm_lainnya">
                  <label class="form-check-label" for="atm_lainnya">Jaringan ATM Lainnya</label>
                </div>
              </div>
              <div class="col-5" style="text-align: right; font-weight: bold;">
                <img src="https://storage.googleapis.com/go-merchant-production.appspot.com/uploads/2020/09/fd0b98e32adc5a52229b7be2e5872c92_bc5e15f9d4b3eedc3d459c45e2df7709_compressed.png" style="width: 60px;" alt="">
              </div>
            </div>
            <div class="row mt-4 mb-4">
              <div class="col-12"><b>Bank Transfer (Verifikasi Manual)</b></div>
            </div>
            <div class="row" style="font-size: 13px;">
              <div class="col-7">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="metode_pembayaran" id="bca_va" value="bca_va">
                  <label class="form-check-label" for="bca_va">BCA Virtual Account</label>
                </div>
              </div>
              <div class="col-5" style="text-align: right; font-weight: bold;">
              <img src="https://storage.googleapis.com/go-merchant-production.appspot.com/uploads/2020/09/fc68a00838f69124fddaf64e30f5e958_ca45aac69ce87ce691c3e6582894b6f0_compressed.png" style="width: 60px;" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-4" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 18px;">
          <div class="card-body">
            <div class="row mb-2" style="font-size: 13px;">
              <div class="col-7">Nilai Investasi</div>
              <div class="col-5" style="text-align: right; font-weight: bold;">Rp 5.000.000</div>
            </div>
            <div class="row mb-2" style="font-size: 13px;">
              <div class="col-7">Biaya Layanan</div>
              <div class="col-5" style="text-align: right; font-weight: bold;">Rp 250.000</div>
            </div>
            <hr>
            <div class="row mb-4" style="font-size: 13px;">
              <div class="col-7">Total Pembayaran</div>
              <div class="col-5" style="text-align: right; font-weight: bold; color: orange;">Rp 5.250.000</div>
            </div>
            <div class="row">
              <div class="col-12 d-grid">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKonfirmasi">Konfirmasi Pembayaran</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalKonfirmasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKonfirmasiLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalKonfirmasiLabel">Detail Pembelian Apakah Sudah Benar?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row mb-2" style="font-size: 13px;">
                <div class="col-7">Nama Saham</div>
                <div class="col-5" style="text-align: right; font-weight: bold;">Alfamart Kadaka Bogor</div>
              </div>
              <div class="row mb-2" style="font-size: 13px;">
                <div class="col-7">Nilai Investasi</div>
                <div class="col-5" style="text-align: right; font-weight: bold;">Rp 5.000.000</div>
              </div>
              <div class="row mb-2" style="font-size: 13px;">
                <div class="col-7">Biaya Layanan</div>
                <div class="col-5" style="text-align: right; font-weight: bold;">Rp 250.000</div>
              </div>
              <hr>
              <div class="row mb-2" style="font-size: 13px;">
                <div class="col-7">Total Pembayaran</div>
                <div class="col-5" style="text-align: right; font-weight: bold; color: orange;">Rp 5.250.000</div>
              </div>
              <div class="row" style="font-size: 10px; text-align: justify; padding-right: 0; margin-right: 0;">
                <div class="col-12">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="konfirmasi" id="konfirmasi" value="konfirmasi">
                    <label class="form-check-label" for="konfirmasi">Saya sudah membaca dan mengerti akan segala risiko yang dapat terjadi di kemudian hari, BIMO TIDAK BERTANGGUNG JAWAB atas segala risiko dan gugatan hukum yang timbul dikemudian hari atas hasil investasi bisnis saya.</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
              <button type="button" class="btn btn-primary">Lanjutkan Beli</button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>