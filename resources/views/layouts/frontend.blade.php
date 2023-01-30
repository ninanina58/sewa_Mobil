<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NaCar</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route ('homepage')}}">Start Bootstrap</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="{{route ('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#armada">Armada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#syarat">Syarat & Ketentuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('contact')}}">Kontak</a>
                    </li>
            
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
    <!-- footer -->
    <section bg-size="cover" style="background-color:#3d5a80">
        <div class="container py-5">
            <div class="row">
                <div class="col-3 text-center-white align-self-center">
                        <div class="">
                            <h5 class="title text-warning">CONTACT US </h5><hr>
                            <h5 class="bi bi-whatsapp text-white"> 0867580758</h5>
                            <h5 class="bi bi-envelope-at text-white"> NaCar.gmail.com</h5>
                            <h5 class="bi bi-instagram text-white"> PT.Na Company</h5>
                            <h5 class="bi bi-facebook text-white"> PT.Na Company</h5>
                        </div>
                    </div>
                    <div class="col-5 text-center-white align-self-center">
                        <div class="">
                            <h4 class="title text-warning">PT.Na Company </h4><hr>
                            <p class="text-white"> Selamat datang di Website NaCar rental car</p>
                            <p class="text-white"> NaCar adalah salah satu website dari PT.Na Company yang bertujuan memudahkan/mempersilahkan para pegawainya untuk mengunakan/menyewa mobil milik perusahaan.</p>
                            <p class="text-white"> Kami melayani :</p>
                            <ul class="text-white">
                                <li>Sewa mobil angkutan orang</li>
                                <li>Sewa mobil angkutan barang</li>
                            </ul>
                        </div>
                    </div>
                    
                <!--card title-->
                <div class="col-4 text-center-white align-self-center">
                    <img src="a.png" alt="" width="300">
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <nav class="navbar fixed-bottom navbar-dark" style="background-color:#3d5a80">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NaCar@2022</a>
            <a class="navbar-brand" href="#">&copyLina</a>
        </div>
    </nav>


    <!-- Bootstrap core JS-->
    <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
    <!-- Core theme JS-->
    <script src="{{asset('frontend/js/scripts.js')}}"></script>
  </body>
</html>
