@extends('layouts.frontend')

@section('content')
<!-- Header-->
<section bg-size="cover" style="background-color:#3d5a80">
        <div class="container py-5">
            <div class="row">
                <div class="col-7 text-center-white align-self-center">
                    <div class="">
                        <h1 class="title text-warning">Solusi </h1>
                        <h1 class="title text-white">Sewa <span class="text-warning">Mobil</span> Perusahaan </h1>
                        <h1 class="title text-white"> Murah dan <span class="text-warning">Bergaransi</span></h1>
                        <p class="text-white"> Penyewaan <span class="text-warning">Mobil </span>& Rental Mobil dengan
                            banyak pilihan unit armada <span class="text-warning">khusus
                                pegawai PT.Na Company.</span> Menyediakan unit rental mobil <span
                                class="text-warning">yang berkualitas dengan harga yang
                                bersaing </span>sehingga Anda dapat menemukan unit mobil yang sesuai dengan selera dan
                            budget Anda.
                        </p>
                    </div>
                </div>
                <!--card title-->
                <div class="col-5">
                    <img src="k1.png" alt="" width="600" class="text-center">
                </div>
            </div>
        </div>
    </section>

    <!--konten 2-->
    <div class="container py-5">
        <div class=" text-center">

            <h1 class="title">Kenapa Memilih Kami</h1>
            <div class="container mt-3"  >
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100" data-aos="fade-up-right" data-aos-duration="1000">
                            <a class="navbar-brand" href="#">
                                <img src="j.png" class="img-fluid" alt="" width="150" height="150" class="text-center">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">24/7 Pelayanan pelanggan</h5>
                                <p class="card-text">Tim NaCar siap membantu Anda 24/7 dan juga dalam keadaan darurat.
                                    NaCar selalu siap membantu kamu!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" data-aos="fade-up-right" data-aos-duration="1000">
                            <a class="navbar-brand" href="#">
                                <img src="dom.png" class="img-fluid" alt="" width="150" height="150" class="text-center">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Harga Kompetitif</h5>
                                <p class="card-text">Harga yang kami berikan sangat kompetitif dan murah, dan dijamin
                                    tidak mengurangi kualitas pelayanan yang kami berikan, sesuai Prinsip kami yaitu
                                    memberikan Kenyamanan, Keamanan dan Pelayanan Terbaik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100"data-aos="fade-up-right" data-aos-duration="1000">
                            <a class="navbar-brand" href="#">
                                <img src="d.png" class="img-fluid" alt="" width="150" height="150" class="text-center">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Transaksi</h5>
                                <p class="card-text">NaCar memberikan kenyamanan dalam bertransaksi dengan menyediakan
                                    beragam metode pembayaran yang mudah dan mudah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p> </p>
        <p> </p>
        <p> </p>
    </div>
<!-- Section-->
<p class="display-3" id="armada"> </p>
<div class="card text-center " style="background-color:#3d5a80">
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5"style="background-color:#3d5a80" >
    <div class="pricing-header p-3 pb-md-4 mx-auto text-white">
                <h1>Daftar Mobil</h1>
            </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge badge-custom bg-warning text-white position-absolute" style="top: 0; right: 0">
                        Tidak Tersedia
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body card-body-custom pt-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Special Item</h5>
                            <!-- Product price-->
                            <div class="rent-price mb-3">
                                <span class="text-primary">Rp.200.000/</span>day
                            </div>
                            <ul class="list-unstyled list-style-group">
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Bahan bakar</span>
                                    <span style="font-weight: 600">Bensin</span>
                                </li>
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Jumlah Kursi</span>
                                    <span style="font-weight: 600">5</span>
                                </li>
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Transmisi</span>
                                    <span style="font-weight: 600">Manual</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                            <a class="btn btn-info mt-auto text-white" href="{{route('detail')}}">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
                        Tersedia
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body card-body-custom pt-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Special Item</h5>
                            <!-- Product price-->
                            <div class="rent-price mb-3">
                                <span class="text-primary">Rp.200.000/</span>day
                            </div>
                            <ul class="list-unstyled list-style-group">
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Bahan bakar</span>
                                    <span style="font-weight: 600">Bensin</span>
                                </li>
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Jumlah Kursi</span>
                                    <span style="font-weight: 600">5</span>
                                </li>
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Transmisi</span>
                                    <span style="font-weight: 600">Manual</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                            <a class="btn btn-info mt-auto text-white" href="{{route('detail')}}">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
                        Tersedia
                    </div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body card-body-custom pt-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Special Item</h5>
                            <!-- Product price-->
                            <div class="rent-price mb-3">
                                <span class="text-primary">Rp.200.000/</span>day
                            </div>
                            <ul class="list-unstyled list-style-group">
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Bahan bakar</span>
                                    <span style="font-weight: 600">Bensin</span>
                                </li>
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Jumlah Kursi</span>
                                    <span style="font-weight: 600">5</span>
                                </li>
                                <li class="border-bottom p-2 d-flex justify-content-between">
                                    <span>Transmisi</span>
                                    <span style="font-weight: 600">Manual</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                            <a class="btn btn-info mt-auto text-white" href="./detail.html">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Syarat  -->
<p class="display-3" id="syarat"> </p>
    <div class="container py-5">
        <h6 class="title text-center text-primary">RESERVATIONS</h6>
        <h1 class="title text-center">SYARAT & KETENTUAN</h1>
        <p> Dalam Perjanjian Sewa, Penyewa adalah orang yang menyewa Kendaraan yang ditentukan dalam Perjanjian
            (selanjutnya disebut Kendaraan) dari Perusahaan PT.Na Company</p>
        <div class="container py-4">
            <div class="row">
                <div class="col-5 text-center-white">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <h6>PENYEWA HARUS MEMILIKI</h6>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Penyewa harus memiliki KTP</li>
                                        <li>Penyewa harus memiliki SIM C</li>
                                        <li>Penyewa harus memiliki id pegawai PT.Na Company</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <h6>PENYEWA DILARANG</h6>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Menyewakan kembali kepada orang lain</li>
                                        <li>Menggadaikan mobil</li>
                                        <li>Mengganti onderdil mobil selama proses sewa</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <h6>PEMBAYARAN</h6>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Pembayaran bisa melalui potong gaji,BNI,BRI,OVO,DANA bisa juga dibayar cash
                                        </li>
                                        <li>Harga sudah termasuk BBM</li>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card title-->
                <div class="col-7">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    <h6>DURATION</h6>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <P>Sewa mobil di hitung selama 10 jam per hari. Kelebihan waktu (over time) akan di
                                        kenakan biaya sebesar 10% dari harga sewa kendaraan per hari atau sesuai dengan
                                        biaya extra time.</P>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    <h6>CENCELING</h6>
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Pembatalan sewa kendaraan dapat dilakukan paling lambat selama 2x24 Jam sebelum
                                        jatuh hari sewa. Pembatalan sewa kendaraan 2x24 jam

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    <h6>DOWN PAYMENT</h6>
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Down Payment 50% dari total pembayaran sebagai tanda jadi booking dan keep armada
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseseven">
                                    <h6>CONFIRMATION</h6>
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Jika anda mengirim uang melalui Bank, cukup info kepada kami via SMS, email,
                                        telpon atau Whatsapp, kemudian kami akan mengirimkan invoice atau bukti
                                        pembayaran ke alamat email atau whatsapp.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
