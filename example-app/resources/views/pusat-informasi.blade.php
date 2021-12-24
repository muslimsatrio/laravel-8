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
            <h2>Pusat Informasi</h2>
            <ol>
              <li><a href="index.php">Beranda</a></li>
              <li>Pusat Informasi</li>
            </ol>
          </div>
        </div>
      </section>
      <section class="inner-page" style="border-top: 1px solid silver;">
        <div class="container">
          <h2><b>PUSAT INFORMASI</b></h2>
          <p>Di halaman ini Anda bisa melihat pertanyaan yang sering ditanyakan (Frequently Asked Question).</p>
        </div>
        <hr>
        <div class="container">
          <ul class="nav nav-pills nav-tabs-custom">
            <li class="nav-item">
                <a href="#umum" class="nav-link active" data-bs-toggle="tab">UMUM</a>
            </li>
            <li class="nav-item">
                <a href="#akun" class="nav-link" data-bs-toggle="tab">AKUN</a>
            </li>
            <li class="nav-item">
                <a href="#penerbit" class="nav-link" data-bs-toggle="tab">PENERBIT</a>
            </li>
            <li class="nav-item">
                <a href="#investasi_di_bimo" class="nav-link" data-bs-toggle="tab">INVESTASI DI BIMO</a>
            </li>
            <li class="nav-item">
                <a href="#skema_keuntungan" class="nav-link" data-bs-toggle="tab">SKEMA & KEUNTUNGAN INVESTASI</a>
            </li>
            <li class="nav-item">
                <a href="#pengajuan" class="nav-link" data-bs-toggle="tab">PENGAJUAN</a>
            </li>
          </ul>
        </div>
        <hr>
        <div class="container tab-informasi" style="margin-top: 42.5px;">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="umum">
              <div class="accordion" id="accordionUmum">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hSatuUmum">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cSatuUmum" aria-expanded="true" aria-controls="cSatuUmum">
                      Apa itu investasi urun dana (Securities Crowdfunding atau “SCF”)?
                    </button>
                  </h2>
                  <div id="cSatuUmum" class="accordion-collapse collapse show" aria-labelledby="hSatuUmum" data-bs-parent="#accordionUmum">
                    <div class="accordion-body">
                      Securities Crowdfunding adalah suatu penawaran efek bersifat ekuitas maupun efek bersifat utang yang dilakukan menggunakan sistem informasi. Urun dana sendiri merupakan suatu mekanisme yang memungkinkan sekelompok besar pemodal untuk berinvestasi atau membeli Efek pada Perusahaan, umumnya Perusahaan dalam fase bisnis awal atau biasa disebut startup ataupun usaha skala kecil dan menengah, yang umumnya masih membutuhkan pendanaan yang jumlahnya maksimum Rp 10 miliar.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hDuaUmum">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cDuaUmum" aria-expanded="false" aria-controls="cDuaUmum">
                      Siapakah Bimo?
                    </button>
                  </h2>
                  <div id="cDuaUmum" class="accordion-collapse collapse" aria-labelledby="hDuaUmum" data-bs-parent="#accordionUmum">
                    <div class="accordion-body">
                      Bimo adalah penyedia platform BIMO dengan situs website https://bimo.id, Bimo dimiliki sebesar XX,X% oleh PT Saleh Sriwulan, sebuah perusahaan yang bergerak di bidang konsultasi keuangnan yang tercatat di Bursa Efek Indonesia.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hTigaUmum">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cTigaUmum" aria-expanded="false" aria-controls="cTigaUmum">
                      Mengapa harus berinvestasi pada bisnis atau usaha melalui Bimo?
                    </button>
                  </h2>
                  <div id="cTigaUmum" class="accordion-collapse collapse" aria-labelledby="hTigaUmum" data-bs-parent="#accordionUmum">
                    <div class="accordion-body">
                      Bimo yang merupakan entitas anak dari PT Saleh Sriwulan akan bertindak secara professional dalam melakukan <i>due diligence</i> bagi setiap penerbit yang akan mencatatkan perusahaannya pada platform Bimo, sehingga seluruh perusahaan tercatat telah melewati tahapan yang diperlukan. Sebagai bagian dari grup yang memliki konsentrasi usaha pada bidang keuangan, Bimo juga dapat bekerja sama dengan SF Sekuritas untuk membantu perusahaan tercatat untuk mencatatkan sahamnya pada Bursa Efek Indonesia (BEI).
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="akun">
              <div class="accordion" id="accordionAkun">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hSatuAkun">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cSatuAkun" aria-expanded="true" aria-controls="cSatuAkun">
                      Bagaimana cara menjadi pemodal?
                    </button>
                  </h2>
                  <div id="cSatuAkun" class="accordion-collapse collapse show" aria-labelledby="hSatuAkun" data-bs-parent="#accordionAkun">
                    <div class="accordion-body">
                      Anda dapat memulai dengan menekan tombol <b>Mulai Daftar</b> pada bagian beranda pojok kanan atas website bimo.id, pastikan memilih peran sebagai <b>Pemodal</b> dan lanjutkan dengan menekan <b>Daftar</b>. Anda akan menerima OTP pada akun email yang anda daftarkan dan ikuti langkah berikutnya yang sudah ditetapkan hingga akun menjadi aktif. Pembuatan rekening <!-- -->&amp;<!-- --> virtual account juga dibutuhkan sebelum melakukan pembelian Efek di situs website bimo.id
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hDuaAkun">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cDuaAkun" aria-expanded="false" aria-controls="cDuaAkun">
                      Bagaimana cara menjadi penerbit ?
                    </button>
                  </h2>
                  <div id="cDuaAkun" class="accordion-collapse collapse" aria-labelledby="hDuaAkun" data-bs-parent="#accordionAkun">
                    <div class="accordion-body">
                      Anda dapat memulai dengan menekan tombol <b>Mulai Daftar</b> pada bagian beranda pojok kanan atas website bimo.id, pastikan memilih peran sebagai <b>Penerbit </b>dan lanjutkan dengan menekan <b>Daftar</b>. Anda akan menerima OTP pada akun email yang anda daftarkan dan ikuti langkah berikutnya yang sudah ditetapkan hingga akun menjadi aktif. Lanjutkan pengisian informasi mengenai calon penerbit seperti struktur usaha, struktur penawaran yang diinginkan, dan jenis efek yang ingin diterbitkan, kemudian tekan submit dan menunggu hingga mendapatkan informasi lanjutan dari bimo.id.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hTigaAkun">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cTigaAkun" aria-expanded="false" aria-controls="cTigaAkun">
                      Apa yang dapet dilakukan setelah memiliki akun?
                    </button>
                  </h2>
                  <div id="cTigaAkun" class="accordion-collapse collapse" aria-labelledby="hTigaAkun" data-bs-parent="#accordionAkun">
                    <div class="accordion-body">
                      Masing-masing akun memiliki peran sebagai calon penerbit maupun calon pemodal. Calon penerbit dapat melakukan pengisian informasi yang dibutuhkan untuk proses <i>due diligence</i> dan calon pemodal dapat melihat dan melakukan analisa atas perusahaan tercatat sesuai dengan kriteria investasi yang diinginkan.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hEmpat">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cEmpatAkun" aria-expanded="false" aria-controls="cEmpatAkun">
                      Apakah dapat menggunakan 1 akun untuk mencari modal maupun berinvestasi?
                    </button>
                  </h2>
                  <div id="cEmpatAkun" class="accordion-collapse collapse" aria-labelledby="hEmpat" data-bs-parent="#accordionAkun">
                    <div class="accordion-body">
                      Tidak, masing-masing akun hanya dapat digunakan untuk melakukan tujuan yang telah ditentukan pada saat awal mendaftarkan diri.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hLimaAkun">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cLimaAkun" aria-expanded="false" aria-controls="cLimaAkun">
                      Apakah perusahaan dapat mencari pendanaan dengan menggunakan 1 akun?
                    </button>
                  </h2>
                  <div id="cLimaAkun" class="accordion-collapse collapse" aria-labelledby="hLimaAkun" data-bs-parent="#accordionAkun">
                    <div class="accordion-body">
                      Tidak, apabila pemilik perusahaan memiliki lebih dari 1 perusahaan dan bermaksud untuk mencari pendanaan bagi perusahaan lainnya, maka mereka harus membuat akun terpisah.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="penerbit">
              <div class="accordion" id="accordionPenerbit">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hSatuPenerbit">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cSatuPenerbit" aria-expanded="true" aria-controls="cSatuPenerbit">
                      Bagaimana cara mendaftakan bisnis di Bimo?
                    </button>
                  </h2>
                  <div id="cSatuPenerbit" class="accordion-collapse collapse show" aria-labelledby="hSatuPenerbit" data-bs-parent="#accordionPenerbit">
                    <div class="accordion-body">
                      Pemilik perusahaan harus memulainya dari proses pendaftaran akun di website https://bimo.id, yang kemudian diikuti memilih sebagai perusahaan penerbit. Pemilik perusahaan harus mengisikan terlebih dahulu informasi dan dokumen yang dibutuhkan pada website untuk proses <i>due diligence</i> oleh Bimo.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hDuaPenerbit">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cDuaPenerbit" aria-expanded="false" aria-controls="cDuaPenerbit">
                      Bagaimana proses seleksi bisnis di BIMO?
                    </button>
                  </h2>
                  <div id="cDuaPenerbit" class="accordion-collapse collapse" aria-labelledby="hDuaPenerbit" data-bs-parent="#accordionPenerbit">
                    <div class="accordion-body">
                      Proses seleksi bisnis yang akan dicatatkan pada halaman website BIMO akan dilakukan oleh tim professional BIMO dengan mempertimbangkan sebuah bisnis baik dari segi komersil, legal, maupun keuangan perusahaan tersebut.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hTigaPenerbit">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cTigaPenerbit" aria-expanded="false" aria-controls="cTigaPenerbit">
                      Apa saja syarat menjadi Penerbit di BIMO?
                    </button>
                  </h2>
                  <div id="cTigaPenerbit" class="accordion-collapse collapse" aria-labelledby="hTigaPenerbit" data-bs-parent="#accordionPenerbit">
                    <div class="accordion-body">
                      Terdapat beberapa kriteria dasar yang perlu dimiliki oleh calon penerbit antara lain:<br/>• Ethical<br/>• Profitable<br/>• Scalable<br/>• Sustainable<br/>• Compliance
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hEmpat">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cEmpatPenerbit" aria-expanded="false" aria-controls="cEmpatPenerbit">
                      Berapa biaya yang dibutuhkan untuk menjadi penerbit di BIMO?
                    </button>
                  </h2>
                  <div id="cEmpatPenerbit" class="accordion-collapse collapse" aria-labelledby="hEmpat" data-bs-parent="#accordionPenerbit">
                    <div class="accordion-body">
                      Sebagai <b>Penerbit</b>, Biaya yang dikenakan terdiri atas biaya penelaahan, biaya listing, dan biaya tahuhan
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="investasi_di_bimo">
              <div class="accordion" id="accordionInvestasiDiBimo">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hSatuInvestasiDiBimo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cSatuInvestasiDiBimo" aria-expanded="true" aria-controls="cSatuInvestasiDiBimo">
                      Bagaimana cara untuk berinvestasi?
                    </button>
                  </h2>
                  <div id="cSatuInvestasiDiBimo" class="accordion-collapse collapse show" aria-labelledby="hSatuInvestasiDiBimo" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Proses urun dana dimulai dengan melakukan pendaftaran akun Pemodal pada BIMO, setelah akun tersebut aktif maka kemudian pemodal dapat melihat daftar perusahaan yang sedang melakukan penawaran efek. Pemodal dapat melakukan analisa mandiri pada masing-masing perusahaan tercatat sesuai dengan kriteria investasi dan risiko dengan membaca informasi dan dokumen yang tersedia.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hDuaInvestasiDiBimo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cDuaInvestasiDiBimo" aria-expanded="false" aria-controls="cDuaInvestasiDiBimo">
                      Berapa besaran nilai investasi yang dibutuhkan untuk berinvestasi di BIMO?
                    </button>
                  </h2>
                  <div id="cDuaInvestasiDiBimo" class="accordion-collapse collapse" aria-labelledby="hDuaInvestasiDiBimo" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Penawaran yang dilakukan pada platform BIMO adalah menggunakan satuan <b>LOT</b>, dimana setiap <b>LOT</b> yang ditawarkan terdiri dari 500 lembar efek. Harga setiap lembar efek akan berbeda antar setiap Perusahaan, sehingga nilai investasi juga akan bervariasi.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hTigaInvestasiDiBimo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cTigaInvestasiDiBimo" aria-expanded="false" aria-controls="cTigaInvestasiDiBimo">
                      Berapa minimal dan maksimal investasi di BIMO?
                    </button>
                  </h2>
                  <div id="cTigaInvestasiDiBimo" class="accordion-collapse collapse" aria-labelledby="hTigaInvestasiDiBimo" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Minimum pembelian oleh pemodal adalah sebesar 1 lot, dan maksimal nilai investasi mengacu pada batasan pembelian Efek sebagaimana diatur pada <b>POJK57/POJK.04/2020</b>.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hEmpat">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cEmpatInvestasiDiBimo" aria-expanded="false" aria-controls="cEmpatInvestasiDiBimo">
                      Berapa biaya investasi di BIMO?
                    </button>
                  </h2>
                  <div id="cEmpatInvestasiDiBimo" class="accordion-collapse collapse" aria-labelledby="hEmpat" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Biaya ekYC, digital signature, dan virtual account ditanggung oleh Penyelenggara. Pemodal hanya akan dikenakan biaya administrasi penarikan dana sebesar Rp5.000/penarikan atau sesuai biaya yang dibebankan oleh bank atau penyedia layanan transfer.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hLimaInvestasiDiBimo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cLimaInvestasiDiBimo" aria-expanded="false" aria-controls="cLimaInvestasiDiBimo">
                      Risiko apa saja yang terdapat jika investasi SCF di BIMO?
                    </button>
                  </h2>
                  <div id="cLimaInvestasiDiBimo" class="accordion-collapse collapse" aria-labelledby="hLimaInvestasiDiBimo" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Risiko yang terdapat pada setiap perusahaan akan berbeda-beda sesuai dengan sektor usaha yang dijalankannya, untuk detail risiko atas perusahaan terkait dapat dibaca secara lengkap pada prospektus atau dokumen keterbukaan dalam masing-masing perusahaan. Namun demikian, terdapat risiko umum yang akan dihadapi oleh pemodal sebagai berikut:<br/>• Risiko usaha;<br/>• Risiko investasi;<br/>• Risiko likuiditas;<br/>• Risiko kegagalan Sistem Elektronik;<br/>• Risiko kelangkaan pembagian dividen dan/atau dilusi kepemilikan efek; dan<br/>• Risiko gagal bayar atas Efek bersifat Utang atau Sukuk (EBUS)
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hEnam">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cEnam" aria-expanded="false" aria-controls="cEnam">
                      Bagaimana cara saya untuk meminimalisir kerugian investasi?
                    </button>
                  </h2>
                  <div id="cEnam" class="accordion-collapse collapse" aria-labelledby="hEnam" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Pemodal dapat melakukan evaluasi secara mendalam dan selektif pada perusahaan target investasi serta melakukan diversifikasi investasi ke dalam beberapa produk atau penerbit.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hTujuh">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cTujuh" aria-expanded="false" aria-controls="cTujuh">
                      Apa langkah BIMO untuk meminimalisir kerugian? Apakah BIMO memberikan jaminan terhadap kerugian Pemodal?
                    </button>
                  </h2>
                  <div id="cTujuh" class="accordion-collapse collapse" aria-labelledby="hTujuh" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Untuk meminimalisasi risiko, BIMO tentunya akan melakukan proses seleksi dengan ketat, yang mencakup berbagai aspek, antara lain: aspek bisnis dan operasional, aspek legalitas, dan aspek keuangan. Namun demikian, sebagaimana umumnya investasi, khususnya investasi melalui SCF yang mengandung risiko jauh lebih tinggi dibandingkan dengan perusahaan publik, maka para Pemodal diharapkan melakukan proses analisa dan seleksi ketat secara mandiri. BIMO tidak memberikan jaminan apapun terhadap kerugian dan keuntungan yang diterima atau akan diterima oleh Pemodal.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hDelapan">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cDelapan" aria-expanded="false" aria-controls="cDelapan">
                      Apakah pembelian saya dapat dibatalkan?
                    </button>
                  </h2>
                  <div id="cDelapan" class="accordion-collapse collapse" aria-labelledby="hDelapan" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Ya, sesuai dengan <b>POJK57/POJK.04/2020</b>, pemodal dapat melakukan pembatalan dalam jangka waktu 2x24 jam setelah melakukan pembelian Efek.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hSembilan">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cSembilan" aria-expanded="false" aria-controls="cSembilan">
                      Kapan saya bisa mencairkan investasi saya?
                    </button>
                  </h2>
                  <div id="cSembilan" class="accordion-collapse collapse" aria-labelledby="hSembilan" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Sesuai dengan <b>POJK57/POJK.04/2020</b>, Pemodal yang membeli Efek bersifat Ekuitas dapat mentransaksikan Efeknya pada pasar sekunder yang akan dibuka setelah 1 (satu) tahun perusahaan terdaftar pada platform BIMO.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hSepuluh">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cSepuluh" aria-expanded="false" aria-controls="cSepuluh">
                      Berapa dan kapan dividen akan dibagikan kepada Pemodal?
                    </button>
                  </h2>
                  <div id="cSepuluh" class="accordion-collapse collapse" aria-labelledby="hSepuluh" data-bs-parent="#accordionInvestasiDiBimo">
                    <div class="accordion-body">
                      Setiap Penawaran Efek yang bersifat <b>Ekuitas</b> tidak dapat melibatkan janji atau jaminan <b>Pengembalian hasil </b>ataupun <b>Dividen</b>. Pengungkapan yang bertentangan adalah melanggar hukum dan dianggap tidak berlaku. Calon Pemodal diharapkan <b>berhati-hati</b> dan <b>mengkonfirmasikan</b> kembali kepada penyelenggara apabila ditemukan janji-janji <b>Pembagian Hasil Usaha</b> atau <b>Dividen</b> yang bersifat tetap/pasti
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="skema_keuntungan">
              <div class="accordion" id="accordionSkemaKeuntungan">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hSatuSkemaKeuntungan">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cSatuSkemaKeuntungan" aria-expanded="true" aria-controls="cSatuSkemaKeuntungan">
                      Bagaimana skema investasi dan kerjasama bisnis yang ditawarkan Penerbit melalui Bimo?
                    </button>
                  </h2>
                  <div id="cSatuSkemaKeuntungan" class="accordion-collapse collapse show" aria-labelledby="hSatuSkemaKeuntungan" data-bs-parent="#accordionSkemaKeuntungan">
                    <div class="accordion-body">
                      <p>Skema investasi bisnis yang akan ditawarkan oleh Penerbit di Bimo antara lain :</p><ol><li><strong><strong>Investasi Saham pada Holding Company</strong></strong></li><p>Biasanya skema ini merupakan kerjasama, dimana Bimo bekerja sama dengan pemilik bisnis untuk menerbitkan saham baru/ melepas kepemilikan saham Holding Company dan memberikan kesempatan kepada investor turut menjadi bagian dari pemegang saham di perusahaannya beserta seluruh cabang/ unit bisnis di dalamnya. Pemodal akan mendapatkan dividen selama bisnis berjalan sesuai dengan porsi kepemilikan saham.</p><li><strong><strong>Investasi Saham pada outlet Bisnis UKM dan Waralaba/Kemitraan (Saham)</strong></strong></li><p>Kerjasama dengan bisnis UKM dan Waralaba pada outlet dari penerbit. Pemodal akan mendapatkan dividen sesuai dengan porsi kepemilikan saham pada bisnis tersebut dan Kepemilikan saham berlaku selama bisnis berjalan. Untuk beberapa bisnis dengan sistem kemitraan/franchise, dapat diperpanjang dengan membayarkan biaya kemitraan, biaya sewa, renovasi. Dapat juga merupakan kerjasama dengan pemilik tanah (Landlord) untuk membuka suatu bisnis, sehingga tidak perlu lagi membayar sewa atau bahkan termasuk kepemilikan properti nya.</p><p>Kerjasama semacam ini, terdiri dari 2 jenis sistem yaitu pada outlet yang baru akan dibuka <strong>Grand Opening</strong> dan pada Outlet yang sudah berjalan yaitu <strong>Take Over</strong></p><p>Dalam sistem Grand Opening, Bimo bekerja sama dengan franchisor/ pengelola bisnis berpengalaman, untuk melakukan analisa kelayakan dalam pembukaan bisnis baru yang akan didirikan oleh penerbit, sehingga bisnis tersebut berjalan dengan baik dan terpercaya.</p><p>Untuk sistem Take Over, biasa dilakukan oleh penerbit dalam rangka ekspansi bisnis atau memperluas jaringan bisnisnya. Bisnis tersebut telah dilakukan analisis dan dapat terlihat rekam jejak bisnis yang baik, secara data historis dan ketika anda berinvestasi, sudah bisa langsung mendapatkan dividennya di bulan depan dari hasil bisnisnya, tanpa harus menunggu proses renovasi, seperti sistem Grand Opening.</p><li><strong><strong>Investasi Project Based Dengan Jangka Waktu Tertentu (Obligasi/Sukuk)</strong></strong></li><p>Kerjasama pada suatu proyek maupun operasi bisnis pada suatu perusahaan dengan jangka waktu tertentu hingga waktu jatuh tempo. Sebagai pemegang efek, anda akan mendapatkan keuntungan berupa imbal hasil kupon <em>fixed return </em>dengan nilai tertentu ,pada periode tertentu sesuai kesepakatan awal, hingga pembayaran pokok saat jatuh tempo. Biasanya investasi ini berbentuk efek Obligasi atau Sukuk.</p></ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hDuaSkemaKeuntungan">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cDuaSkemaKeuntungan" aria-expanded="false" aria-controls="cDuaSkemaKeuntungan">
                      Apa saja keuntungan berinvestasi melalui Bimo?
                    </button>
                  </h2>
                  <div id="cDuaSkemaKeuntungan" class="accordion-collapse collapse" aria-labelledby="hDuaSkemaKeuntungan" data-bs-parent="#accordionSkemaKeuntungan">
                    <div class="accordion-body">
                      <ol><li><strong>Fleksibilitas memilih Bisnis kualitas terbaik dalam satu genggaman</strong></li><p>Anda dapat bebas memilih untuk berinvestasi di berbagai pilihan bisnis yang telah kami sediakan, sesuai dengan preferensi anda.</p><li><strong><strong>Produk yang sesuai kebutuhan anda</strong></strong></li><p>Produk investasi bisnis di Bimo memiliki beragam produk yang sesuai kebutuhan anda yaitu saham, obligasi dan sukuk. Produk investasi saham melalui Bimo menggunakan pembagian dividen kepada investor sesuai persentase kepemilikan saham, sehingga tidak ada riba. Untuk produk investasi Bond (Obligasi) menggunakan pengembalian imbalan berupa kupon/imbal hasil tetap, dengan sistem pengembalian modal pada waktu jatuh tempo dan untuk produk investasi Sukuk (Syariah) merupakan sistem bagi hasil sesuai syariat agama islam.</p><li><strong><strong>Legal</strong></strong></li><p>Hanya dengan berinvestasi minimal 50 ribu/lembar sudah memiliki Legalitas kepemilikan perusahan dengan bukti kepemilikan efek melalui penitipan secara kolektif pada kustodian(KSEI) secara resmi, mirip ketika anda berinvestasi di pasar modal. Sebagai penyelenggara, Bimo juga sudah berizin dan diawasi oleh OJK sehingga aman dan jelas secara legal.</p><li><strong><strong>Transparansi Laporan keuangan dan laporan performa bisnis yang tepat waktu</strong></strong></li><p>Anda dapat memantau laporan keuangan dan laporan operasional bisnis dari penerbit setiap tanggal 20 setiap bulannya, serta dapat menanyakan tentang perkembangan bisnis anda, kepada tim support relation kami melalui Fitur Tanya Admin yang dapat diakses melalui dashboard investor di bagian “Bisnis Saya”.</p><li><strong><strong>Keuntungan</strong></strong></li><p>Anda akan mendapatkan pembagian keuntungan dari bisnis yang anda investasikan (dividen/imbal hasil) dan atau keuntungan dari potensi kenaikan harga saham melalui penjualan saham di pasar sekunder (capital gain), setelah minimal 1 tahun. Fitur pasar sekunder ini, hanya berlaku untuk jenis efek berupa saham, sesuai ketentuan OJK.</p></ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hTigaSkemaKeuntungan">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cTigaSkemaKeuntungan" aria-expanded="false" aria-controls="cTigaSkemaKeuntungan">
                      Sampai kapan saya akan mendapatkan keuntungan?
                    </button>
                  </h2>
                  <div id="cTigaSkemaKeuntungan" class="accordion-collapse collapse" aria-labelledby="hTigaSkemaKeuntungan" data-bs-parent="#accordionSkemaKeuntungan">
                    <div class="accordion-body">
                      <p>Pada jenis efek saham, anda akan mendapatkan keuntungan seterusnya selama bisnis berjalan dan menghasilkan keuntungan. Namun, jika selama bisnis tersebut berlangsung, ada renovasi atau perpanjangan franchise dan atau kemitraan maka investor akan diminta melakukan penambahan modal, sesuai persentase kepemilikan saham atau dapat dilakukan penerbitan saham baru (right issue), jika laba ditahan yang dicadangkan dalam kas PT tidak mencukupi, yang berpotensi menyebabkan kepemilikan saham terdilusi.</p><p>Pada jenis efek bond (obligasi), anda akan mendapatkan keuntungan sampai waktu jatuh tempo ditentukan, dengan pengembalian biaya investasi awal dan juga imbal hasil fixed return yang akan anda terima selama masa kerjasama berlangsung.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pengajuan">
              <div class="accordion" id="accordionPengajuan">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hSatuPengajuan">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cSatuPengajuan" aria-expanded="true" aria-controls="cSatuPengajuan">
                      Bagaimana tahapan skema pendanaan di Bimo?
                    </button>
                  </h2>
                  <div id="cSatuPengajuan" class="accordion-collapse collapse show" aria-labelledby="hSatuPengajuan" data-bs-parent="#accordionPengajuan">
                    <div class="accordion-body">
                      <p>Apa saja syarat kelengkapan data yang dibutuhkan untuk mengajukan pembukaan bisnis atau proyek dan pendaftaran penerbit melalui Bimo ?</p><p>Calon Penerbit dapat terlebih dahulu melakukan pengisian form pengajuan pendanaan melalui menu “Ajukan Pendanaan” di Mobile App Bimo atau website <a href="https://bimo.id/">bimo.id</a></p><p>Selanjutnya, Bimo sebagai penghubung antara pemodal dan penerbit memiliki syarat uji kelayakan bisnis untuk setiap Penerbit, wajib melampirkan berbagai dokumen kelengkapan, menyesuaikan dengan jenis efek yang akan ditawarkan oleh penerbit, antara lain :</p><ol><li><p> <strong>Saham</strong></p></li><ol type="a"><li>Profil perusahaan dan pemegang saham</li><li>Legalitas badan usaha</li><ul><li>Akta PT</li><li>SK KUMHAM</li><li>SIUP</li><li>TDP atau NIB</li><li>NPWP</li></ul><li>Laporan keuangan 1 tahun terakhir</li><li>Rekening koran 6 bulan terakhir</li><li>Prospektus perencanaan bisnis atau proyek dan rencana penggunaan dana</li><li>Kebutuhan dana dan valuasi perusahaan</li></ol><li><p> <strong>Bond (Obligasi)</strong></p></li><ol type="a"><li>Profil perusahaan dan pemegang saham</li><li>Legalitas badan usaha</li><ul><li>Akta PT/CV atau badan usaha lainnya</li><li>SK KUMHAM</li><li>SIUP</li><li>TDP atau NIB</li><li>NPWP</li></ul><li>Laporan keuangan minimal 1 tahun terakhir</li><li>Rekening koran minimal 6 bulan terakhir</li><li>Prospektus perencanaan bisnis atau proyek dan rencana penggunaan dana</li><li>Kebutuhan dana dan valuasi aset perusahaan</li><li>Jaminan aset/ invoice</li><li>Perjanjian kerjasama pengerjaan proyek atau landasan proyek</li><li>SLIK OJK</li></ol><li><p> <strong>Sukuk (Syariah)</strong></p></li><ol type="a"><li>Profil perusahaan dan pemegang saham</li><li>Legalitas badan usaha</li><ul><li>Akta PT/CV atau badan usaha lainnya</li><li>SK KUMHAM</li><li>SIUP</li><li>TDP atau NIB</li><li>NPWP</li></ul><li>Laporan keuangan 1 tahun terakhir</li><li>Rekening koran 6 bulan terakhir</li><li>Prospektus perencanaan bisnis atau proyek dan rencana penggunaan dana</li><li>Kebutuhan dana dan valuasi aset perusahaan</li><li>Jaminan aset/ invoice</li><li>Perjanjian kerjasama pengerjaan proyek atau landasan proyek</li><li>SLIK OJK</li></ol><p>Setelah form pengajuan tersubmit dan data yang dibutuhkan lengkap,proses selanjutnya akan dilakukan berbagai langkah berikut :</p><ol><li> <strong> <strong>Uji kelayakan secara Legal dan bisnis oleh tim analis</strong> </strong></li><p>Bimo akan melakukan analisa/Due Diligence secara legal dan bisnis untuk menyeleksi bisnis yang baik sehingga Investor akan merasa lebih aman dan memitigasi resiko yang mungkin terjadi. Uji kelayakan bisnis yang dilakukan seperti pengecekan dokumen legalitas dan finansial, seperti laporan 1 tahun, rekening koran, valuasi perusahaan dan sebagainya, biasanya memakan waktu 5 hari kerja, setelah data legalitas dan finansial dinyatakan lengkap.</p><p>Dihubungi dan Wawancara antara tim Bimo dengan anda, sebagai calon Penerbit yang pengajuan pendanaan.</p><p>Melakukan perjanjian antara Bimo dengan Penerbit, termasuk kuasa pengurusan legalitas, pengadministrasian efek dan hubungan dengan kustodian</p><li> <strong> <strong>Penawaran efek penerbit di Platform Bimo</strong> </strong></li><p>Setelah melakukan uji kelayakan bisnis, Bimo melakukan kampanye penawaran saham/ open investment bisnis selama maksimal 45 hari. Jika dalam 45 hari pendanaan diawal belum terkumpul 100% maka kami melakukan pengembalian uang kepada investor atau melanjutkan kegiatan bisnis nya sesuai dengan ketentuan minimal pendanaan yang disepakati oleh penerbit.</p><li> <strong> <strong>Bimo menyerahkan dana kepada Penerbit atau pengelola bisnis sesuai kesepakatan.</strong> </strong></li></ol><p>Penerbit atau pengelola bisnis wajib menyampaikan laporan keuangan dan laporan performa bisnis kepada Bimo setiap bulannya, serta pembagian dividen/imbal hasil setiap 1-3 bulan atau sesuai kesepakatan pada perjanjian penerbit.</p></ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hDuaPengajuan">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cDuaPengajuan" aria-expanded="false" aria-controls="cDuaPengajuan">
                      Saya memiliki lokasi strategis, Bagaimana cara saya mengajukan pembukaan bisnis di lokasi saya melalui Bimo?
                    </button>
                  </h2>
                  <div id="cDuaPengajuan" class="accordion-collapse collapse" aria-labelledby="hDuaPengajuan" data-bs-parent="#accordionPengajuan">
                    <div class="accordion-body">
                      <p>Ada beberapa tahapan dalam mengajukan lokasi pembukaan bisnis, yaitu :</p><ol><li>Pilih bisnis yang ingin diajukan di <a href="https://bimo.id/daftar-bisnis">https://bimo.id/daftar-bisnis</a> dan isikan form pengajuan lokasi anda.</li><li>Melengkapi data lokasi/ calon usulan lokasi (berupa lokasi google map, foto lokasi sekitar dan harga sewa/ beli properti), jika ingin dilakukan pengembangan berupa pembukaan cabang usaha.</li><li>Dihubungi dan Wawancara antara tim Bimo dengan anda, sebagai pengaju lokasi untuk sistem kerjasama yang diinginkan.</li><li>Proses pengecekan lokasi anda oleh tim analis Bimo bekerjasama dengan franchisor/brand owner untuk Uji kelayakan bisnisnya.&nbsp; Penyeleksian dan analisa bisnis kami lakukan dengan SOP dan mekanisme yang baik sehingga Investor akan merasa lebih aman dan memitigasi resiko yang mungkin terjadi. Uji kelayakan bisnis yang dilakukan seperti pengecekan laporan 1 tahun, rekening koran, valuasi perusahaan dan sebagainya.</li><li>Melakukan perjanjian antara Bimo dengan Penerbit, termasuk kuasa pengurusan legalitas, pengadministrasian efek dan hubungan dengan kustodian Penawaran saham penerbit di Platform Bimo.</li><li>Setelah melakukan uji kelayakan bisnis, Bimo melakukan kampanye penawaran saham/ open investment bisnis selama maksimal 45 hari. Jika dalam 45 hari pendanaan diawal belum terkumpul 100% maka kami melakukan pengembalian uang kepada investor atau melanjutkan kegiatan bisnis nya sesuai dengan ketentuan dan kebutuhan penerbit.</li><li>Bimo menyerahkan dana kepada Penerbit atau pengelola bisnis sesuai kesepakatan.</li><li>Penerbit atau pengelola bisnis wajib menyampaikan laporan keuangan dan laporan performa bisnis kepada Bimo setiap bulannya, serta pembagian dividen/bagi hasil setiap 1-3 bulan atau sesuai kesepakatan pada perjanjian penerbit.</li></ol>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hTigaPengajuan">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cTigaPengajuan" aria-expanded="false" aria-controls="cTigaPengajuan">
                      Jika saya adalah pemilik bisnis/pemilik Brand, Bagaimana cara saya mendaftarkan bisnis saya di Bimo?
                    </button>
                  </h2>
                  <div id="cTigaPengajuan" class="accordion-collapse collapse" aria-labelledby="hTigaPengajuan" data-bs-parent="#accordionPengajuan">
                    <div class="accordion-body">
                      <p>Anda bisa melengkapi form pengajuan pendanaan melalui menu “Ajukan Pendanaan” pada platform Bimo dan mengirimkan data kelengkapan pengajuannya melalui email ke partners@bimo.id, serta Whatsapp ke tim Business Acquisition kami WA: <a href="http://wa.me/6282129740544">0821-2974-0544</a> &nbsp;/ <a href="http://wa.me/6285155122910">0851-5512-2910</a>. Untuk instrumen efek Syariah dan Sukuk bisa menghubungi WA : <a href="http://wa.me/6282320337205">0823-2033-7205</a> untuk segera dibantu.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="hEmpatPengajuan">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cEmpatPengajuan" aria-expanded="false" aria-controls="cEmpatPengajuan">
                      Berapa biaya yang harus dibayarkan kepada Bimo pada saat berinvestasi?
                    </button>
                  </h2>
                  <div id="cEmpatPengajuan" class="accordion-collapse collapse" aria-labelledby="hEmpatPengajuan" data-bs-parent="#accordionPengajuan">
                    <div class="accordion-body">
                      <p><strong>Biaya Layanan</strong></p><p>sebesar 5% dari total nominal yang diinvestasikan oleh investor sebagai biaya atas penggunaan platform kami untuk membantu mempermudah anda memiliki bisnis atau obligasi/sukuk dengan modal minim , dengan skema securities crowdfunding. Contohnya : jika ingin berinvestasi Rp 5.000.000 maka biaya yang dikenakan hanya sebesar Rp 250.000 saja.</p><p><strong>Management Fee</strong></p><p>sebesar 5% dari setiap keuntungan bisnis/ bagi hasil. Kami selalu berusaha memberikan pelayanan terbaik, membantu melakukan distribusi laporan keuangan, operasional dan pembagian keuntungan bisnis secara otomatis di akun Saldo Efek anda. Contoh 1, untuk produk investasi saham: Jika sebuah bisnis menghasilkan keuntungan Rp 30.000.000 / bulan. Jika persentase kepemilikan bisnis anda sebesar 1% , berarti keuntungan yang anda terima adalah sebesar Rp 300.000, maka biaya yang dibayarkan untuk Bimo hanya sebesar Rp 15.000 saja. Contoh 2, untuk produk investasi Obligasi dan Sukuk : Jika anda mendapatkan bagi hasil/kupon sebesar Rp 30.000.000 / bulan dan persentase kepemilikan efek anda sebesar 1% , berarti keuntungan yang anda terima adalah sebesar Rp 300.000.</p>
                    </div>
                  </div>
                </div>
              </div>
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