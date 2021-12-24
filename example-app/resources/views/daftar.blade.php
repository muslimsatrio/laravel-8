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
            <h2>Daftar</h2>
            <ol>
              <li><a href="index.php">Home</a></li>
              <li>Daftar</li>
            </ol>
          </div>
        </div>
      </section>
      <section class="inner-page" style="border-top: 1px solid silver;">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              {{-- <form action="{{ route('user.registration') }}" method="POST"> --}}
                <form action="create-user" method="POST">

                @csrf
              <h1>Pendaftaran</h1>
              <p>Sudah menjadi anggota? <a href="">Masuk</a> disini</p>
              <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                <input type="text" class="form-control" id="role_id"  name="role_id" value="" hidden>
                <label for="email">Email</label>
              
              </div>
              <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="name" placeholder="Nama Lengkap (Sesuai KTP)" name="name">
                <label for="name">Nama Lengkap (Sesuai KTP)</label>
               
              </div>
              <div class="form-floating mb-3 mt-3">
                <input type="number" class="form-control" id="no_hp" placeholder="Nomor HP" name="no_hp" >
                <label for="no_hp">Nomor HP</label>
               
              </div>
             
              <div class="form-floating mb-3 mt-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
                <label for="password">Password</label>
               
              </div>
              <div class="form-floating mb-3 mt-3">
                <input type="password" class="form-control" id="konfirmasi_password" placeholder="Konfirmasi Password" name="konfirmasi_password" >
                <label for="konfirmasi_password">Konfirmasi Password</label>
              </div>
              {{-- <div class="row">
                <div class="col-6">
                  <input type="radio" class="btn-check" name="radio">
                  <label class="btn btn-outline-primary" for="penerbit" style="display: block; width: 100%;">Mendaftar Sebagai Penerbit</label>
                </div>
                <div class="col-6">
                  <input type="radio" class="btn-check"  name="radio">
                  <label class="btn btn-outline-primary" for="pemodal" style="display: block; width: 100%;">Mendaftar Sebagai Pemodal</label>
                </div>
              </div> --}}
              <div class="form-floating mb-3 mt-3">
                <select class="form-control" id=role_select required name=role_select aria-label="Default select example" >
                  <option selected></option>
                  <option value="2">Mendaftar Sebagai Pemodal</option>
                  <option value="3">Mendaftar Sebagai Penerbit</option>
                </select>
              </div>
              <br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                <label class="form-check-label" for="defaultCheck1">
                  Saya menyatakan setuju dengan syarat dan ketentuan yang berlaku di Bimo.
                </label>
              </div>
              <br>
              <p>Aplikasi Bimo hanya tersedia dalam versi website, pastikan anda memiliki perangkat kamera pada komputer/laptop anda untuk melakukan proses KYC setelah mendaftar.</p>
              <div class="d-grid gap-2">
                <button class="btn btn-primary">Daftar</button>
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


  
    <script>
    $('select').on('change', function() {
      var role_choose=this.value;
      $("#role_id").val(role_choose);
     
    });  

  

  
      
    </script>
  </body>
</html>