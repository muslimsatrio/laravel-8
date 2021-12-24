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
            <h2>Masuk</h2>
            <ol>
              <li><a href="index.php">Beranda</a></li>
              <li>Masuk</li>
            </ol>
          </div>
        </div>
      </section>
      <section class="inner-page" style="border-top: 1px solid silver;">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <h1>Masuk</h1>
             
              <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
              @csrf
              <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                <label for="email">Email</label>
              </div>
              <div class="form-floating mb-4 mt-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <label for="password">Password</label>
              </div>
              <p>Belum punya akun? <a href="">Daftar</a> disini</p>
              <div class="col-12" style="text-align: right;">
                <a href="">Lupa Password?</a>
                <br>
                <br>
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-primary">Masuk</button>
              </div>
            </form>
            </div>
            <div class="col-lg-8 d-none d-lg-block d-xl-block">
              <center>
                <img src="http://sfund.id/images/sign-in/portrait.png" class="img-fluid" alt="">
              </center>
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