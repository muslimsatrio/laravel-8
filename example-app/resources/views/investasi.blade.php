<!DOCTYPE html>
<html lang="en">
  <head>
      @include('layout.header')
 </head>
  
  <body>
    <div>
      @include('layout.navbar')
     </div>
    <main id="main" data-aos="fade-up">
      <section class="breadcrumbs" style="border-top: 1px solid silver;">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Bisnis Investasi</h2>
            <ol>
              <li><a href="index.php">Beranda</a></li>
              <li>Bisnis Investasi</li>
            </ol>
          </div>
        </div>
      </section>
      <section class="inner-page">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h3>Investasi Bisnis</h3>
            <p>Yuk, mulai investasi bisnis sekarang juga!</p>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-lg-4 md-mb-sm">
                  <div style="background-color: whitesmoke; border-radius: 5px; height: 40px;">&nbsp;</div>
                </div>
                <div class="col-lg-2 md-mb-sm">
                  <div style="background-color: whitesmoke; border-radius: 5px; height: 40px;">&nbsp;</div>
                </div>
                <div class="col-lg-2 md-mb-sm">
                  <div style="background-color: whitesmoke; border-radius: 5px; height: 40px;">&nbsp;</div>
                </div>
                <div class="col-lg-2 md-mb-sm">
                  <div style="background-color: whitesmoke; border-radius: 5px; height: 40px;">&nbsp;</div>
                </div>
                <div class="col-lg-2">
                  <div style="background-color: whitesmoke; border-radius: 5px; height: 40px;">&nbsp;</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-up" data-aos-delay="100" style="margin-top: 20px;">
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1528698827591-e19ccd7bc23d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Saleh Sriwulan Indonesia</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> JAWA BARAT, KOTA BOGOR TENGAH</p>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Quae fuga dolores aliquam veritatis ipsam velit, reiciendis aliquid excepturi error natus. Lorem ipsum dolor sit amet.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp200.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((75/100)*200000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 1 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1571974448718-ac26a9af7d8b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Toko Makmur Sadayana</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> DKI JAKARTA, KOTA JAKARTA PUSAT</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Omnis maiores saepe quia voluptatum, voluptatibus, rerum quis eligendi quibusdam. Doloremque, tempora.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%">68%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp10.000.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((68/100)*10000000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 2 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1535401991746-da3d9055713e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Karya Bersama Harianto</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> DKI JAKARTA, KOTA JAKARTA SELATAN</p>
                  <p class="card-text">Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Vel explicabo natus debitis blanditiis, aperiam corporis architecto inventore repudiandae vero vitae. Lorem, ipsum dolor sit.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%">17%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp7.750.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((17/100)*7750000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1528698827591-e19ccd7bc23d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Saleh Sriwulan Indonesia</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> JAWA BARAT, KOTA BOGOR TENGAH</p>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Quae fuga dolores aliquam veritatis ipsam velit, reiciendis aliquid excepturi error natus. Lorem ipsum dolor sit amet.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp200.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((75/100)*200000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 1 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1571974448718-ac26a9af7d8b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Toko Makmur Sadayana</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> DKI JAKARTA, KOTA JAKARTA PUSAT</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Omnis maiores saepe quia voluptatum, voluptatibus, rerum quis eligendi quibusdam. Doloremque, tempora.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%">68%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp10.000.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((68/100)*10000000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 2 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1535401991746-da3d9055713e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Karya Bersama Harianto</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> DKI JAKARTA, KOTA JAKARTA SELATAN</p>
                  <p class="card-text">Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Vel explicabo natus debitis blanditiis, aperiam corporis architecto inventore repudiandae vero vitae. Lorem, ipsum dolor sit.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%">17%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp7.750.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((17/100)*7750000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1528698827591-e19ccd7bc23d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Saleh Sriwulan Indonesia</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> JAWA BARAT, KOTA BOGOR TENGAH</p>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Quae fuga dolores aliquam veritatis ipsam velit, reiciendis aliquid excepturi error natus. Lorem ipsum dolor sit amet.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp200.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((75/100)*200000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 1 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1571974448718-ac26a9af7d8b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Toko Makmur Sadayana</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> DKI JAKARTA, KOTA JAKARTA PUSAT</p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Omnis maiores saepe quia voluptatum, voluptatibus, rerum quis eligendi quibusdam. Doloremque, tempora.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%">68%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp10.000.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((68/100)*10000000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 2 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0px 6px 15px rgb(16 110 234 / 12%);">
                <img src="https://images.unsplash.com/photo-1535401991746-da3d9055713e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c3RvcmVmcm9udHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" class="card-img-top" alt="Ini Gambar">
                <div class="card-body">
                  <div style="margin-bottom: 10px;">
                    <span class="badge bg-primary">EKUITAS</span>
                  </div>
                  <h5 class="card-title">PT Karya Bersama Harianto</h5>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px; margin-top: -5px;"><i class="bx bx-map"></i> DKI JAKARTA, KOTA JAKARTA SELATAN</p>
                  <p class="card-text">Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Vel explicabo natus debitis blanditiis, aperiam corporis architecto inventore repudiandae vero vitae. Lorem, ipsum dolor sit.</p>
                  <hr>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%">17%</div>
                  </div>
                  <div class="row" style="margin-top: 10px;">
                    <div class="col-6">
                      Target
                      <br>
                      Rp7.750.000.000
                    </div>
                    <div class="col-6" style="text-align: right;">
                      Terkumpul
                      <br>
                      Rp<?= number_format((17/100)*7750000000,0,',','.'); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="d-grid" style="margin-top: 10px;">
                    <button class="btn btn-sm btn-primary" onclick="window.location.href='detail'">Lihat Lebih Detail</button>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <center>
            <button class="btn btn-secondary btn-md">Load More</button>
          </center>
        </div>
      </section>
     <div>
      @include('layout.disclaimer-bukan-landing')
     </div>
    </main>
    <div>
      @include('layout.footer')
     </div>
   
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