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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
      #msform {
        position: relative;
        margin-top: 20px
      }
      #msform ul * {
        text-align: center;
      }
      #msform fieldset {
        border: 0 none;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        position: relative
      }
      #msform fieldset:not(:first-of-type) {
        display: none
      }
      .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
      }
      .fieldlabels {
        color: gray;
        text-align: left
      }
      #progressbar {
          margin-bottom: 20px;
          overflow: hidden;
          color: lightgrey
      }
      #progressbar .active {
          color: #106eea
      }
      #progressbar li {
        list-style-type: none;
        font-size: 10px;
        width: 20%;
        float: left;
        position: relative;
        font-weight: 400
      }
      #progressbar #data_diri:before {
        font-family: FontAwesome;
        content: "\f007"
      }
      #progressbar #pendidikan_pekerjaan:before {
        font-family: FontAwesome;
        content: "\f007"
      }
      #progressbar #dokumen:before {
        font-family: FontAwesome;
        content: "\f007"
      }
      #progressbar #bank:before {
        font-family: FontAwesome;
        content: "\f007"
      }
      #progressbar #preferensi:before {
        font-family: FontAwesome;
        content: "\f007"
      }
      #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
      }
      #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
      }
      #progressbar li.active:before,
      #progressbar li.active:after {
        background: #106eea
      }
      .progress {
        height: 20px
      }
      .progress-bar {
        background-color: #106eea
      }
      .fit-image {
        width: 100%;
        object-fit: cover
      }
      .form-control-sm {
        font-size: 14px;
        padding: 12.5px;
      }
      .form-check-label {
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <?php require('template/header.php'); ?>
    <main id="main" data-aos="fade-up">
      <section class="inner-page" style="border-top: 1px solid silver;">
        <div class="container">
          <form id="msform">
              <ul id="progressbar" style="padding-left: 0;">
                  <li class="active" id="data_diri"><strong>DATA DIRI</strong></li>
                  <li id="pendidikan_pekerjaan"><strong>PENDIDIKAN & PEKERJAAN</strong></li>
                  <li id="dokumen"><strong>DOKUMEN</strong></li>
                  <li id="bank"><strong>BANK</strong></li>
                  <li id="preferensi"><strong>PREFERENSI</strong></li>
              </ul>
              <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <br>
              <fieldset>
                <div class="form-card">
                  <div class="card" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 20px;">
                    <div class="card-body">
                      <h3 class="card-title"><b>Hai Saleh, Ayo Lengkapi Data Dirimu!</b></h3>
                      <p>Tinggal Selangkah Lagi Untuk Menjadi Investor Di Bimo</p>
                      <hr>
                      <div class="mt-4 mb-4">
                        <label class="form-label"><b>Jenis Kelamin</b></label>
                        <br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_pria" value="Pria">
                          <label class="form-check-label" for="jk_pria">Pria</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk_wanita" value="Wanita">
                          <label class="form-check-label" for="jk_wanita">Wanita</label>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="tempat_lahir" class="form-label"><b>Tempat Lahir</b></label>
                        <input type="text" class="form-control form-control-sm" id="tempat_lahir">
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="tanggal_lahir" class="form-label"><b>Tanggal Lahir</b></label>
                        <div class="row">
                          <div class="md-mb-sm col-md-4">
                            <input type="text" class="form-control form-control-sm" id="tanggal_lahir" placeholder="Tanggal">
                          </div>
                          <div class="md-mb-sm col-md-4">
                            <select class="form-control form-control-sm" id="bulan_lahir">
                              <option value="Januari">Januari</option>
                              <option value="Februari">Februari</option>
                              <option value="Maret">Maret</option>
                              <option value="April">April</option>
                              <option value="Mei">Mei</option>
                              <option value="Juni">Juni</option>
                              <option value="Juli">Juli</option>
                              <option value="Agustus">Agustus</option>
                              <option value="September">September</option>
                              <option value="Oktober">Oktober</option>
                              <option value="November">November</option>
                              <option value="Desember">Desember</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <input type="text" class="form-control form-control-sm" id="tahun_lahir" placeholder="Tahun">
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="kewarganegaraan" class="form-label"><b>Kewarganegaraan</b></label>
                        <select class="form-control form-control-sm" id="kewarganegaraan">
                          <option value="WNI Tinggal Di Indonesia">WNI Tinggal Di Indonesia</option>
                          <option value="WNI Tinggal Di Luar Negeri">WNI Tinggal Di Luar Negeri</option>
                          <option value="WNA Tinggal Di Indonesia">WNA Tinggal Di Indonesia</option>
                          <option value="WNA Tinggal Di Luar Negeri">WNA Tinggal Di Luar Negeri</option>
                        </select>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="status_pernikahan" class="form-label"><b>Status Pernikahan</b></label>
                        <select class="form-control form-control-sm" id="status_pernikahan">
                          <option value="Belum Menikah">Belum Menikah</option>
                          <option value="Sudah Menikah">Sudah Menikah</option>
                        </select>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="latar_belakang" class="form-label"><b>Latar Belakang</b></label>
                        <textarea name="" class="form-control form-control-sm" id="latar_belakang" rows="5" placeholder="Ceritakan tentang diri Anda..."></textarea>
                      </div>
                      <div class="mt-4 mb-4">
                        <div class="row">
                          <div class="col-md-6 md-mb-md">
                            <label for="no_ponsel" class="form-label"><b>No. Ponsel</b></label>
                            <input type="text" class="form-control form-control-sm" id="no_ponsel">
                          </div>
                          <div class="col-md-6">
                            <label for="no_telepon_rumah" class="form-label"><b>No. Telepon Rumah</b></label>
                            <input type="text" class="form-control form-control-sm" id="no_telepon_rumah">
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="alamat_sesuai_ktp" class="form-label"><b>Alamat (sesuai dengan KTP)</b></label>
                        <textarea name="" class="form-control form-control-sm" id="alamat_sesuai_ktp" rows="5"></textarea>
                      </div>
                      <div class="mt-4 mb-4">
                        <div class="row">
                          <div class="col-md-4 md-mb-md">
                            <label for="provinsi" class="form-label"><b>Provinsi</b></label>
                            <select class="form-control form-control-sm" id="provinsi">
                              <option value="Jawa Barat">Jawa Barat</option>
                              <option value="Jawa Tengah">Jawa Tengah</option>
                              <option value="Jawa Timur">Jawa Timur</option>
                            </select>
                          </div>
                          <div class="col-md-4 md-mb-md">
                            <label for="kota_kabupaten" class="form-label"><b>Kota/Kabupaten</b></label>
                            <select class="form-control form-control-sm" id="kota_kabupaten">
                              <option value="Kota Bogor">Kota Bogor</option>
                              <option value="Kabupaten Bogor">Kabupaten Bogor</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <label for="kecamatan" class="form-label"><b>Kecamatan</b></label>
                            <select class="form-control form-control-sm" id="kecamatan">
                              <option value="Bogor Tengah">Bogor Tengah</option>
                              <option value="Bogor Timur">Bogor Timur</option>
                              <option value="Bogor Barat">Bogor Barat</option>
                              <option value="Bogor Selatan">Bogor Selatan</option>
                              <option value="Bogor Utara">Bogor Utara</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-4 mb-4">
                          <div class="row">
                            <div class="col-md-4 md-mb-md">
                              <label for="kelurahan" class="form-label"><b>Kelurahan</b></label>
                              <input type="text" class="form-control form-control-sm" id="kelurahan">
                            </div>
                            <div class="col-md-4 md-mb-md">
                              <label for="rt" class="form-label"><b>RT</b></label>
                              <input type="text" class="form-control form-control-sm" id="rt">
                            </div>
                            <div class="col-md-4">
                              <label for="rw" class="form-label"><b>RW</b></label>
                              <input type="text" class="form-control form-control-sm" id="rw">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="alamat_tinggal_sekarang" class="form-label mb-0"><b>Alamat Tinggal Sekarang </b></label>
                        <div class="form-check mt-0 mb-2"><input class="form-check-input" type="checkbox" value="" id="samaKayaKTP"><label class="form-check-label" for="samaKayaKTP">Sama Seperti KTP</label></div>
                        <textarea name="" class="form-control form-control-sm" id="alamat_tinggal_sekarang" rows="5"></textarea>
                      </div>
                      <div class="mt-4 mb-4">
                        <div class="row">
                          <div class="col-md-4 md-mb-md">
                            <label for="provinsi_sekarang" class="form-label"><b>Provinsi</b></label>
                            <select class="form-control form-control-sm" id="provinsi_sekarang">
                              <option value="Jawa Barat">Jawa Barat</option>
                              <option value="Jawa Tengah">Jawa Tengah</option>
                              <option value="Jawa Timur">Jawa Timur</option>
                            </select>
                          </div>
                          <div class="col-md-4 md-mb-md">
                            <label for="kota_kabupaten_sekarang" class="form-label"><b>Kota/Kabupaten</b></label>
                            <select class="form-control form-control-sm" id="kota_kabupaten_sekarang">
                              <option value="Kota Bogor">Kota Bogor</option>
                              <option value="Kabupaten Bogor">Kabupaten Bogor</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <label for="kecamatan_sekarang" class="form-label"><b>Kecamatan</b></label>
                            <select class="form-control form-control-sm" id="kecamatan_sekarang">
                              <option value="Bogor Tengah">Bogor Tengah</option>
                              <option value="Bogor Timur">Bogor Timur</option>
                              <option value="Bogor Barat">Bogor Barat</option>
                              <option value="Bogor Selatan">Bogor Selatan</option>
                              <option value="Bogor Utara">Bogor Utara</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-4 mb-4">
                          <div class="row">
                            <div class="col-md-4 md-mb-md">
                              <label for="kelurahan_sekarang" class="form-label"><b>Kelurahan</b></label>
                              <input type="text" class="form-control form-control-sm" id="kelurahan_sekarang">
                            </div>
                            <div class="col-md-4 md-mb-md">
                              <label for="rt_sekarang" class="form-label"><b>RT</b></label>
                              <input type="text" class="form-control form-control-sm" id="rt_sekarang">
                            </div>
                            <div class="col-md-4">
                              <label for="rw_sekarang" class="form-label"><b>RW</b></label>
                              <input type="text" class="form-control form-control-sm" id="rw_sekarang">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <p style="text-align: justify; margin: 0; padding: 0; font-size: 12px;">* Saya menjamin bahwa informasi yang saya cantumkan diatas adalah benar dan siap bertanggung jawab atas segala konsekuensi yang terjadi di kemudian hari, serta memiliki analisa risiko terhadap saham penerbit dan memenuhi kriteria pemodal sesuai peraturan yang berlaku.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-6">&nbsp;</div>
                    <div class="col-6">
                      <button type="button" class="next btn btn-primary btn-md" style="float: right;">Simpan & Lanjutkan</button>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="card" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 20px;">
                    <div class="card-body">
                      <h3 class="card-title"><b>Pekerjaan</b></h3>
                      <hr>
                      <div class="mt-4 mb-4">
                        <label for="pendidikan_terakhir" class="form-label"><b>Pendidikan Terakhir</b></label>
                        <div class="row">
                          <div class="col-12">
                            <select class="form-control form-control-sm" id="pendidikan_terakhir">
                              <option>SD</option>
                              <option>SMP</option>
                              <option>SMA</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="pekerjaan" class="form-label"><b>Pekerjaan</b></label>
                        <div class="row">
                          <div class="col-12">
                            <select class="form-control form-control-sm" id="pekerjaan">
                              <option>Karyawan Swasta</option>
                              <option>PNS</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="industri_pekerjaan" class="form-label"><b>Industri Pekerjaan</b></label>
                        <div class="row">
                          <div class="col-12">
                            <select class="form-control form-control-sm" id="industri_pekerjaan">
                              <option>Finansial</option>
                              <option>Keuangan</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="pendapatan_per_bulan" class="form-label"><b>Pendapatan Per Bulan</b></label>
                        <div class="row">
                          <div class="col-12">
                            <select class="form-control form-control-sm" id="pendapatan_per_bulan">
                              <option>Dibawah 5 Juta</option>
                              <option>5 - 10 Juta</option>
                              <option>10 - 100 Juta</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="sumber_pendapatan" class="form-label"><b>Sumber Pendapatan</b></label>
                        <div class="row">
                          <div class="col-12">
                            <select class="form-control form-control-sm" id="sumber_pendapatan">
                              <option>Gaji</option>
                              <option>Saham</option>
                              <option>Crypto</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="deskripsi_bisnis" class="form-label"><b>Deskripsi Bisnis</b></label>
                        <textarea name="" class="form-control form-control-sm" id="deskripsi_bisnis" rows="5">Deskripsikan bisnis Anda...</textarea>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="deskripsi_sumber_pendapatan" class="form-label"><b>Deskripsi Sumber Pendapatan</b></label>
                        <textarea name="" class="form-control form-control-sm" id="deskripsi_sumber_pendapatan" rows="5">Deskripsikan sumber pendapatan Anda...</textarea>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <p style="text-align: justify; margin: 0; padding: 0; font-size: 12px;">* Jika penghasilan anda <= Rp 500.000.000 / tahun, maka maksimal investasi anda 5% dari total penghasilan / tahun.</p>
                          <p style="text-align: justify; margin: 0; padding: 0; font-size: 12px;">** Jika penghasilan anda > Rp 500.000.000 / tahun, maka maksimal investasi anda 10% dari total penghasilan / tahun.</p>
                          <p style="text-align: justify; margin: 0; padding: 0; font-size: 12px;">*** Saya menjamin bahwa informasi yang saya cantumkan diatas adalah benar dan siap bertanggung jawab atas segala konsekuensi yang terjadi di kemudian hari, serta memiliki analisa risiko terhadap saham penerbit dan memenuhi kriteria pemodal sesuai peraturan yang berlaku.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-6">
                      <button type="button" class="previous btn btn-secondary btn-md">Kembali</button>
                    </div>
                    <div class="col-6">
                      <button type="button" class="next btn btn-primary btn-md" style="float: right;">Simpan & Lanjutkan</button>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="card" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 20px;">
                    <div class="card-body">
                      <h3 class="card-title"><b>Dokumen</b></h3>
                      <hr>
                      <div class="mt-4 mb-4">
                        <label for="sid" class="form-label"><b>SID</b></label>
                        <input type="text" class="form-control form-control-sm" id="sid">
                        <p style="text-align: justify; margin: 0; margin-top: 2px; padding: 0; font-size: 12px;">Bila memiliki SID selama 2 tahun anda bisa berinvestasi tanpa batas</p>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="no_ktp" class="form-label"><b>No. KTP</b></label>
                        <input type="text" class="form-control form-control-sm" id="no_ktp">
                      </div>
                      <div class="mt-4 mb-4">
                        <div class="row">
                          <div class="col-md-6 md-mb-md">
                            <label for="foto_ktp" class="form-label"><b>Foto KTP</b></label>
                            <input type="file" class="form-control form-control-sm" id="foto_ktp">
                          </div>
                          <div class="col-md-6">
                          <label for="foto_selfie" class="form-label"><b>Foto Selfie</b></label>
                            <input type="file" class="form-control form-control-sm" id="foto_selfie">
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="no_npwp" class="form-label"><b>No. NPWP (opsional)</b></label>
                        <input type="text" class="form-control form-control-sm" id="no_npwp">
                        <p style="text-align: justify; margin: 0; padding: 0; font-size: 12px;">Jika anda belum memiliki NPWP dan ingin berinvestasi, bisa dikosongkan terlebih dahulu. Namun, NPWP merupakan <b>syarat wajib untuk bisa melakukan penarikan dividen</b> pada saldo efek. Anda bisa membuat NPWP secara online di ereg.pajak.go.id</p>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="tanggal_penerbitan_npwp" class="form-label"><b>Penerbitan NPWP (opsional)</b></label>
                        <div class="row">
                          <div class="col-4">
                            <input type="text" class="form-control form-control-sm" id="tanggal_penerbitan_npwp" placeholder="Tanggal">
                          </div>
                          <div class="col-4">
                            <select class="form-control form-control-sm" id="bulan_penerbitan_npwp">
                              <option value="Januari">Januari</option>
                              <option value="Februari">Februari</option>
                              <option value="Maret">Maret</option>
                              <option value="April">April</option>
                              <option value="Mei">Mei</option>
                              <option value="Juni">Juni</option>
                              <option value="Juli">Juli</option>
                              <option value="Agustus">Agustus</option>
                              <option value="September">September</option>
                              <option value="Oktober">Oktober</option>
                              <option value="November">November</option>
                              <option value="Desember">Desember</option>
                            </select>
                          </div>
                          <div class="col-4">
                            <input type="text" class="form-control form-control-sm" id="tahun_penerbitan_npwp" placeholder="Tahun">
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <div class="row">
                          <div class="col-md-6 md-mb-md">
                            <label for="foto_npwp" class="form-label"><b>Foto NPWP (opsional)</b></label>
                            <input type="file" class="form-control form-control-sm" id="foto_npwp">
                          </div>
                          <div class="col-md-6">
                          <label for="foto_kartu_keluarga" class="form-label"><b>Foto Kartu Keluarga (opsional)</b></label>
                            <input type="file" class="form-control form-control-sm" id="foto_kartu_keluarga">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <p style="text-align: justify; margin: 0; padding: 0; font-size: 12px;">* Saya menjamin bahwa informasi yang saya cantumkan diatas adalah benar dan siap bertanggung jawab atas segala konsekuensi yang terjadi di kemudian hari, serta memiliki analisa risiko terhadap saham penerbit dan memenuhi kriteria pemodal sesuai peraturan yang berlaku.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-6">
                      <button type="button" class="previous btn btn-secondary btn-md">Kembali</button>
                    </div>
                    <div class="col-6">
                      <button type="button" class="next btn btn-primary btn-md" style="float: right;">Simpan & Lanjutkan</button>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="card" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 20px;">
                    <div class="card-body">
                      <h3 class="card-title"><b>Bank</b></h3>
                      <hr>
                      <div class="mt-4 mb-4">
                        <label for="nama_bank" class="form-label"><b>Nama Bank</b></label>
                        <select class="form-control form-control-sm" id="nama_bank">
                          <option>Bank Central Asia TBK</option>
                          <option>Bank Rakyat Indonesia TBK</option>
                        </select>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="no_rekening" class="form-label"><b>No. Rekening</b></label>
                        <input type="text" class="form-control form-control-sm" id="no_rekening">
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="nama_pemilik_rekening" class="form-label"><b>Nama Pemilik Rekening</b></label>
                        <input type="text" class="form-control form-control-sm" id="nama_pemilik_rekening">
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="nama_ibu_kandung" class="form-label"><b>Nama Ibu Kandung</b></label>
                        <input type="text" class="form-control form-control-sm" id="nama_ibu_kandung">
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="nama_ahli_waris" class="form-label"><b>Nama Ahli Waris</b></label>
                        <input type="text" class="form-control form-control-sm" id="nama_ahli_waris">
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="hubungan_ahli_waris" class="form-label"><b>Hubungan Ahli Waris</b></label>
                        <input type="text" class="form-control form-control-sm" id="hubungan_ahli_waris">
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <p style="text-align: justify; margin: 0; padding: 0; font-size: 12px;">* Saya menjamin bahwa informasi yang saya cantumkan diatas adalah benar dan siap bertanggung jawab atas segala konsekuensi yang terjadi di kemudian hari, serta memiliki analisa risiko terhadap saham penerbit dan memenuhi kriteria pemodal sesuai peraturan yang berlaku.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-6">
                      <button type="button" class="previous btn btn-secondary btn-md">Kembali</button>
                    </div>
                    <div class="col-6">
                      <button type="button" class="next btn btn-primary btn-md" style="float: right;">Simpan & Lanjutkan</button>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="form-card">
                  <div class="card" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%); padding: 20px;">
                    <div class="card-body">
                      <h3 class="card-title"><b>Preferensi</b></h3>
                      <hr>
                      <div class="mt-4 mb-4">
                        <label for="bugget_investasi" class="form-label"><b>Budget Investasi</b></label>
                        <select class="form-control form-control-sm" id="bugget_investasi">
                          <option>5 - 10 Juta</option>
                          <option>10 Juta - 100 Juta</option>
                        </select>
                      </div>
                      <div class="mt-4 mb-4">
                        <label for="tujuan_investasi" class="form-label"><b>Tujuan Investasi</b></label>
                        <select class="form-control form-control-sm" id="tujuan_investasi">
                          <option>Investasi Jangka Panjang</option>
                          <option>Investasi Jangka Menengah</option>
                          <option>Investasi Jangka Pendek</option>
                        </select>
                      </div>
                      <div class="mt-4 mb-4">
                        <div class="row">
                          <div class="col-md-4 md-mb-md">
                            <label for="preferensi_resiko" class="form-label"><b>Preferensi Resiko</b></label>
                            <select class="form-control form-control-sm" id="preferensi_resiko">
                              <option>Rendah</option>
                              <option>Sedang</option>
                              <option>Tinggi</option>
                            </select>
                          </div>
                          <div class="col-md-4 md-mb-md">
                            <label for="preferensi_investasi" class="form-label"><b>Preferensi Investasi</b></label>
                            <select class="form-control form-control-sm" id="preferensi_investasi">
                              <option>Rendah</option>
                              <option>Sedang</option>
                              <option>Tinggi</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <label for="preferensi_peran" class="form-label"><b>Preferensi Peran</b></label>
                            <select class="form-control form-control-sm" id="preferensi_peran">
                              <option>Investor Pasif</option>
                              <option>Investor Aktif</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4 mb-4">
                        <label class="form-label"><b>Darimana Anda Mengetahui tentang Bimo?</b></label>
                        <div class="row">
                          <div class="col-md-2 md-mb-sm">
                            <input type="radio" class="btn-check" name="options-outlined" id="facebook" autocomplete="off">
                            <label class="btn btn-outline-primary" for="facebook" style="display: block; width: 100%;">Facebook</label>
                          </div>
                          <div class="col-md-2 md-mb-sm">
                            <input type="radio" class="btn-check" name="options-outlined" id="twitter" autocomplete="off">
                            <label class="btn btn-outline-primary" for="twitter" style="display: block; width: 100%;">Twitter</label>
                          </div>
                          <div class="col-md-2 md-mb-sm">
                            <input type="radio" class="btn-check" name="options-outlined" id="instagram" autocomplete="off">
                            <label class="btn btn-outline-primary" for="instagram" style="display: block; width: 100%;">Instagram</label>
                          </div>
                          <div class="col-md-2 md-mb-sm">
                            <input type="radio" class="btn-check" name="options-outlined" id="media_massa" autocomplete="off">
                            <label class="btn btn-outline-primary" for="media_massa" style="display: block; width: 100%;">Media Massa</label>
                          </div>
                          <div class="col-md-2 md-mb-sm">
                            <input type="radio" class="btn-check" name="options-outlined" id="pencarian_google" autocomplete="off">
                            <label class="btn btn-outline-primary" for="pencarian_google" style="display: block; width: 100%;">Google</label>
                          </div>
                          <div class="col-md-2">
                            <input type="radio" class="btn-check" name="options-outlined" id="lainnya" autocomplete="off">
                            <label class="btn btn-outline-primary" for="lainnya" style="display: block; width: 100%;">Lainnya</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <p style="text-align: justify; margin: 0; padding: 0; font-size: 12px;">* Saya menjamin bahwa informasi yang saya cantumkan diatas adalah benar dan siap bertanggung jawab atas segala konsekuensi yang terjadi di kemudian hari, serta memiliki analisa risiko terhadap saham penerbit dan memenuhi kriteria pemodal sesuai peraturan yang berlaku.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-6">
                      <button type="button" class="previous btn btn-secondary btn-md">Kembali</button>
                    </div>
                    <div class="col-6">
                      <button type="submit" class="submit btn btn-primary btn-md" style="float: right;">Submit Data</button>
                    </div>
                  </div>
                </div>
              </fieldset>
          </form>
        </div>
      </section>
      <?php require('template/disclaimer-bukan-landing.php'); ?>
    </main>
    <?php require('template/footer.php'); ?>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      $(function(){
        var current_fs, next_fs, previous_fs;
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){
          window.scrollTo({top: 0, behavior: 'smooth'});
          current_fs = $(this).parent().parent().parent().parent();
          next_fs = $(this).parent().parent().parent().parent().next();
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
          next_fs.show();
          current_fs.animate({opacity: 0},{
            step: function(now) {
              opacity = 1 - now;
              current_fs.css({'display': 'none', 'position': 'relative'});
              next_fs.css({'opacity': opacity});
            },
            duration: 500
          });
          setProgressBar(++current);
        });

        $(".previous").click(function(){
          window.scrollTo({top: 0, behavior: 'smooth'});
          current_fs = $(this).parent().parent().parent().parent();
          previous_fs = $(this).parent().parent().parent().parent().prev();
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
          previous_fs.show();
          current_fs.animate({opacity: 0},{
            step: function(now) {
              opacity = 1 - now;
              current_fs.css({'display': 'none', 'position': 'relative'});
              previous_fs.css({'opacity': opacity});
            },
            duration: 500
          });
          setProgressBar(--current);
        });

        function setProgressBar(curStep){
          var percent = parseFloat(100/steps)*curStep;
          percent = percent.toFixed();
          $(".progress-bar").css("width",percent+"%")
        }

        $(".submit").click(function(){alert("Proses submit data..."); return false;})
      });
    </script>
  </body>
</html>