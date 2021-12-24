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
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" rel="stylesheet" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
    <style id="_style">
      #mainCarousel {
        width: 600px;
        margin: 0 auto 1rem auto;

        --carousel-button-color: #170724;
        --carousel-button-bg: #fff;
        --carousel-button-shadow: 0 2px 1px -1px rgb(0 0 0 / 20%),
          0 1px 1px 0 rgb(0 0 0 / 14%), 0 1px 3px 0 rgb(0 0 0 / 12%);

        --carousel-button-svg-width: 20px;
        --carousel-button-svg-height: 20px;
        --carousel-button-svg-stroke-width: 2.5;
      }

      #mainCarousel .carousel__slide {
        width: 100%;
        padding: 0;
      }

      #mainCarousel .carousel__button.is-prev {
        left: -1.5rem;
      }

      #mainCarousel .carousel__button.is-next {
        right: -1.5rem;
      }

      #mainCarousel .carousel__button:focus {
        outline: none;
        box-shadow: 0 0 0 4px #A78BFA;
      }

      #thumbCarousel .carousel__slide {
        opacity: 0.5;
        padding: 0;
        margin: 0.25rem;
        width: 96px;
        height: 64px;
      }

      #thumbCarousel .carousel__slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 4px;
      }

      #thumbCarousel .carousel__slide.is-nav-selected {
        opacity: 1;
      }
    </style>
  </head>
  <body>
    <div>
      @include('layout.navbar')
     </div>
    <main id="main" data-aos="fade-up">
      <section class="breadcrumbs" style="border-top: 1px solid silver;">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Detail</h2>
            <ol>
              <li><a href="index.php">Beranda</a></li>
              <li>Detail</li>
            </ol>
          </div>
        </div>
      </section>
      <section class="inner-page" style="border-top: 1px solid silver; padding-bottom: 10px !important;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <!-- <div style="margin-bottom: 15px;">
                <img src="https://api.bizhare.id/base/commonFile/getFile?fileName=5be6f6a89bd64a17901cf8e58db1f8ba.png" class="img-fluid" alt="" style="border-radius: 10px; box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
              </div>
              <div class="md-mb-md">
                <img src="https://api.bizhare.id/base/commonFile/getFile?fileName=5be6f6a89bd64a17901cf8e58db1f8ba.png" alt="" style="width: 125px; border-radius: 10px; box-shadow: 0px 6px 15px rgb(16 110 234 / 5%); margin-right: 10px;">
                <img src="https://api.bizhare.id/base/commonFile/getFile?fileName=5be6f6a89bd64a17901cf8e58db1f8ba.png" alt="" style="width: 125px; border-radius: 10px; box-shadow: 0px 6px 15px rgb(16 110 234 / 5%); margin-right: 10px;">
                <img src="https://api.bizhare.id/base/commonFile/getFile?fileName=5be6f6a89bd64a17901cf8e58db1f8ba.png" alt="" style="width: 125px; border-radius: 10px; box-shadow: 0px 6px 15px rgb(16 110 234 / 5%); margin-right: 10px;">
              </div> -->
              <div id="mainCarousel" class="carousel" style="margin-top: 8px;">
                <div class="carousel__slide" data-src="https://lipsum.app/id/1/900x600" data-fancybox="gallery">
                  <img data-lazy-src="https://lipsum.app/id/1/600x400">
                </div>
                <div class="carousel__slide" data-src="https://lipsum.app/id/2/900x600" data-fancybox="gallery">
                  <img data-lazy-src="https://lipsum.app/id/2/600x400">
                </div>
                <div class="carousel__slide" data-src="https://lipsum.app/id/3/900x600" data-fancybox="gallery">
                  <img data-lazy-src="https://lipsum.app/id/3/600x400">
                </div>
                <div class="carousel__slide" data-src="https://lipsum.app/id/4/900x600" data-fancybox="gallery">
                  <img data-lazy-src="https://lipsum.app/id/4/600x400">
                </div>
                <div class="carousel__slide" data-src="https://lipsum.app/id/5/900x600" data-fancybox="gallery">
                  <img data-lazy-src="https://lipsum.app/id/5/600x400">
                </div>
                <div class="carousel__slide" data-src="https://lipsum.app/id/6/900x600" data-fancybox="gallery">
                  <img data-lazy-src="https://lipsum.app/id/6/600x400">
                </div>
                <div class="carousel__slide" data-src="https://lipsum.app/id/7/900x600" data-fancybox="gallery">
                  <img data-lazy-src="https://lipsum.app/id/7/600x400">
                </div>
              </div>
              <div id="thumbCarousel" class="carousel mx-auto" style="max-width: 36rem; margin-top: 30px;">
                <div class="carousel__slide">
                  <img class="panzoom__content" src="https://lipsum.app/id/1/100x100">
                </div>
                <div class="carousel__slide">
                  <img class="panzoom__content" src="https://lipsum.app/id/2/100x100">
                </div>
                <div class="carousel__slide">
                  <img class="panzoom__content" src="https://lipsum.app/id/3/100x100">
                </div>
                <div class="carousel__slide">
                  <img class="panzoom__content" src="https://lipsum.app/id/4/100x100">
                </div>
                <div class="carousel__slide">
                  <img class="panzoom__content" src="https://lipsum.app/id/5/100x100">
                </div>
                <div class="carousel__slide">
                  <img class="panzoom__content" src="https://lipsum.app/id/6/100x100">
                </div>
                <div class="carousel__slide">
                  <img class="panzoom__content" src="https://lipsum.app/id/7/100x100">
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="title">
                <b><h2>PT Bersama Saleh Sriwulan</h2></b>
              </div>
              <div class="subtitle">
                <i class="bx bx-label" style="position: relative; top: 2px; color: blueviolet;"></i>&nbsp;&nbsp;Bidang Teknologi dan Informasi
                <br>
                <i class="bx bx-map" style="position: relative; top: 2px; color: blueviolet;"></i>&nbsp;&nbsp;Berlokasi di Kota Bogor, Bogor Tengah
              </div>
              <hr>
              <div style="margin-bottom: 10px;">
                <small>Dana Terkumpul</small>
              </div>
              <div style="margin-bottom: 10px;">
                <div style="font-weight: bold; color: seagreen;">Rp 2.555.000.000</div>
              </div>
              <div class="row">
                <div class="col-11">
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                  </div>
                </div>
                <div class="col-1" style="padding-left: 0;">
                  <div style="margin-top: -3.5px; font-weight: bold;">75%</div>
                </div>
              </div>
              <hr>
              <div class="row mb-2">
                <div class="col-6">Berakhir Dalam</div>
                <div class="col-6" style="text-align: right; font-weight: bold;">4 Hari</div>
              </div>
              <div class="row mb-2">
                <div class="col-6">Jumlah Lot Yang Tersedia</div>
                <div class="col-6" style="text-align: right; font-weight: bold;">1.000.005</div>
              </div>
              <div class="row mb-2">
                <div class="col-6">Harga Per Lot</div>
                <div class="col-6" style="text-align: right; font-weight: bold;">Rp 1.000.000</div>
              </div>
              <div class="row">
                <div class="col-6">Lembar Efek Per Lot</div>
                <div class="col-6" style="text-align: right; font-weight: bold;">100</div>
              </div>
              <hr>
              <div class="row mb-2">
                <div class="col-6">Nilai Bisnis</div>
                <div class="col-6" style="text-align: right; font-weight: bold;">Rp 2.555.000.000</div>
              </div>
              <div class="row">
                <div class="col-6">Jumlah Investor Saat Ini</div>
                <div class="col-6" style="text-align: right; font-weight: bold;">541</div>
              </div>
              <hr>
              <div class="d-grid" style="margin-top: 20px;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInvestasi">Mulai Investasi</button>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="card">
            <div class="card-header">
              <b>Investor Highlight</b>
            </div>
            <div class="card-body">
              Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus quia eum iusto quos unde, dolorum asperiores, vel harum odit praesentium, dolor, tempora? Mollitia itaque laborum ex provident voluptas quaerat?
            </div>
          </div>
        </div>
      </section>
      <br>
      <section style="padding-top: 0;">
        <hr>
        <div class="container">
          <ul class="nav nav-pills nav-tabs-custom">
            <li class="nav-item">
                <a href="#finansial" class="nav-link active" data-bs-toggle="tab">FINANSIAL</a>
            </li>
            <li class="nav-item">
                <a href="#tentang_bisnis" class="nav-link" data-bs-toggle="tab">TENTANG BISNIS</a>
            </li>
            <li class="nav-item">
                <a href="#kategori_bisnis" class="nav-link" data-bs-toggle="tab">KATEGORI BISNIS</a>
            </li>
            <li class="nav-item">
                <a href="#lokasi" class="nav-link" data-bs-toggle="tab">LOKASI</a>
            </li>
            <li class="nav-item">
                <a href="#prospektus" class="nav-link" data-bs-toggle="tab">PROSPEKTUS</a>
            </li>
            <li class="nav-item">
                <a href="#updates" class="nav-link" data-bs-toggle="tab">UPDATES</a>
            </li>
            <li class="nav-item">
                <a href="#diskusi" class="nav-link" data-bs-toggle="tab">DISKUSI</a>
            </li>
            <li class="nav-item">
                <a href="#rups" class="nav-link" data-bs-toggle="tab">RUPS</a>
            </li>
          </ul>
        </div>
        <hr>
        <div class="container" style="margin-top: 42.5px;">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="finansial">
              <div class="row">
                <div class="col-md-6 md-mb-sm">
                  <img src="https://www.bizhare.id/icons-total-saham.e476d2ef1e7efd546cbe.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Total Saham Yang Dibagikan Ke Investor</small>
                    <h5><b>100%</b></h5>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="https://www.bizhare.id/icons-roi.b83e1877001f6422c5fe.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Rata-Rata Dividen Yield (%) / Tahun Berdasarkan Historis</small>
                    <h5><b>21.3 - 23%</b></h5>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 md-mb-sm">
                  <img src="https://www.bizhare.id/icons-est-profit.a4b59176a1cdd4b91401.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Total Keuntungan Investor / Tahun Berdasarkan Data Historis</small>
                    <h5><b>Rp 250.000.000 - Rp 270.000.000</b></h5>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="https://www.bizhare.id/icons-bep.438ddd4736673ac94c8d.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Waktu Balik Modal Berdasarkan Historis</small>
                    <h5><b>50 - 55 bulan</b></h5>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <img src="https://www.bizhare.id/icons-jangka-waktu.47edac6dfe539ffa08a5.svg" alt="" style="float: left; margin-right: 10px;">
                    <div style="margin-top: 7px;">
                      <small>Periode Dividen</small>
                      <h5><b>3 Bulan</b></h5>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12">
                    * Performa bisnis masa lalu tidak mencerminkan kinerja masa depan
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tentang_bisnis">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque vitae saepe quas itaque necessitatibus distinctio quisquam quibusdam veniam, laudantium blanditiis eius dignissimos similique dolorem harum maiores! Eius tempore aliquam ut sed similique. Architecto numquam soluta, minus doloremque natus porro sapiente nobis deserunt sit molestiae quidem in ad voluptatum vel cumque.</p>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Quos nostrum, impedit earum possimus porro a, alias natus nesciunt. Eaque impedit error corrupti tenetur cupiditate placeat, recusandae dolore eum vero dignissimos minima ipsa fugit rem optio deserunt officiis porro exercitationem architecto eos accusantium soluta? Voluptatem placeat dignissimos ducimus tempore harum expedita.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio magnam incidunt fugit vitae quam dicta esse ratione. Atque dolorem, voluptas illo reprehenderit consectetur animi natus laborum, est nemo perspiciatis dignissimos velit vero in at cumque?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio numquam ea dolor praesentium a sit animi ipsam omnis magnam doloremque?</p>
            </div>
            <div class="tab-pane fade" id="kategori_bisnis">
              <div class="row">
                <div class="col-md-6 md-mb-sm">
                  <img src="https://www.bizhare.id/icons-kb.2b5541c0ce16da061623.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Kategori Bisnis</small>
                    <h5><b>Ritel</b></h5>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="https://www.bizhare.id/icons-owner.46fb6f3f568ae147070d.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Penerbit</small>
                    <h5><b>PT Bersama Saleh Sriwulan</b></h5>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 md-mb-sm">
                  <img src="https://www.bizhare.id/icons-core-bis.8d21747c0164b51d4bcf.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Sistem Pengelolaan</small>
                    <h5><b>Auto Pilot</b></h5>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="https://www.bizhare.id/icons-jenis-bis.992c99b98eb0f364a6d2.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Skema Bisnis</small>
                    <h5><b>Take Over</b></h5>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6 md-mb-sm">
                  <img src="https://www.bizhare.id/icons-target.a9f81411b673c9e617cd.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Nilai Investasi</small>
                    <h5><b>Rp 2.555.000.000</b></h5>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="https://www.bizhare.id/icons-min-inv.fc9d9e938c4e52a6d469.svg" alt="" style="float: left; margin-right: 10px;">
                  <div style="margin-top: 7px;">
                    <small>Minimum Investasi / Lembar Saham</small>
                    <h5><b>Rp 50.000</b></h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="lokasi">
              <h6>Lokasi Outlet : Jl. Raya Jasinga , Cigudeg, Bogor, Jawa Barat.</h6>
              <p>Outlet tersebut memiliki lokasi strategis yang berada disekitar perumahan ramai penduduk, selain itu Toko Alfamart Jasinga Bogor ini sudah beroperasi sejak 2009, sehingga sudah ada market yang terbentuk dan masyarakat sudah aware mengenai alfamart di lokasi ini, outlet ini juga berada tepat di depan kantor PLN yang bisa menjadi srategi untuk memaksimalkan penjualan dari para karyawan PLN.</p>
              <h6>Lokasi di Maps</h6>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2904993925836!2d106.82618531476916!3d-6.225375795493564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3faf59e708f%3A0xe045fe9c46297309!2sSatrio%20Tower!5e0!3m2!1sid!2sid!4v1638313264408!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="tab-pane fade" id="prospektus">
              <div class="row">
                <div class="col-md-6 md-mb-md">
                  <center><h3>COMPANY PROFILE</h3></center>
                  <object type="application/pdf" width="100%" height="700vh" data="https://sf-ecf.sfund.id/public/projects-profiles/1633678972_Comprof%20Dummy_Apotik.pdf"></object>
                </div>
                <div class="col-md-6">
                  <center><h3>PROSPEKTUS</h3></center>
                  <object type="application/pdf" width="100%" height="700vh" data="https://sf-ecf.sfund.id/public/projects-profiles/1633678972_Comprof%20Dummy_Apotik.pdf"></object>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="updates">
              This company may be interested in raising funds from accredited investors. You must be an investor and already registration KYC to see more information about this company.
            </div>
            <div class="tab-pane fade" id="diskusi">
              This company may be interested in raising funds from accredited investors. You must already registration KYC to see more information about this company.
            </div>
            <div class="tab-pane fade" id="rups">
              This company may be interested in raising funds from accredited investors. You must be an investor to see more information about this company.
            </div>
          </div>
        </div>
      </section>
      <div>
        @include('layout.disclaimer-bukan-landing')
       </div>
    </main>
    <div>
      @include('layout.footer')
     </div>
    <div class="modal fade" id="modalInvestasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInvestasiLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalInvestasiLabel">Masukkan Jumlah Saham (Lot)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" name="inputJumlahSaham">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-dark btn-sm" id="minus-btn" onclick="kurang();" style="text-align: center; border-radius: 0;"><i class="fa fa-minus"></i></button>
                </div>
                <input type="number" id="qty_input" name="qty" class="form-control form-control-sm" value="1" min="1" style="text-align: center; border-radius: 0;">
                <div class="input-group-prepend">
                  <button type="button" class="btn btn-dark btn-sm" id="plus-btn" onclick="tambah();" style="text-align: center; border-radius: 0;"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" onclick="window.location='pembelian.php'">Lanjutkan</button>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // Initialise Carousel
      const mainCarousel = new Carousel(document.querySelector("#mainCarousel"), {
        Dots: false,
      });

      // Thumbnails
      const thumbCarousel = new Carousel(document.querySelector("#thumbCarousel"), {
        Sync: {
          target: mainCarousel,
          friction: 0,
        },
        Dots: false,
        Navigation: false,
        center: true,
        slidesPerPage: 1,
        infinite: false,
      });

      // Customize Fancybox
      Fancybox.bind('[data-fancybox="gallery"]', {
        Carousel: {
          on: {
            change: (that) => {
              mainCarousel.slideTo(mainCarousel.findPageForSlide(that.page), {
                friction: 0,
              });
            },
          },
        },
      });

      function tambah(){
        var el = document.forms['inputJumlahSaham']['qty'];
        el.setAttribute('value', parseInt(el.value) + 1);
      }

      function kurang(){
        var el = document.forms['inputJumlahSaham']['qty'];
        el.setAttribute('value', parseInt(el.value) - 1);
      }
    </script>
  </body>
</html>