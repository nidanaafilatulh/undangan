{{-- Ini untuk halaman awal atau landing pagenya --}}

@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ route('landingpage') }}">
           Cerita Bahagianya
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto">
                
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a class="nav-link me-2" href="{{ route('register') }}">
                        <i class="fas fa-user-circle opacity-6  me-1"></i>
                        Coba Gratis
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Selamat Datang!</h1>
                    <p class="text-lead text-white">Pada Website Pembuatan Undangan Digital Berbasis Web</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-n11">
        <div class="row mb-12 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-body text-center pt-4">
                        <a class="nav-link me-2" href="{{ route('register') }}">
                            <h5>Daftar dan Coba Gratis</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="text-center">
                    <img width="463" height="335" class="w-100 h-auto" src="/images/ucapan-dan-rsvp.webp" loading="lazy" title="fitur undangan digital website" alt="fitur undangan digital website">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="heading-2 font-weight-bold mb-4">Undangan impian dengan beragam fitur andalan</h2>
                <p class="mb-4 opacity-90">Lengkapi <a href="https://www.tribunnews.com/lifestyle/2022/05/31/undangan-digital-disebut-jadi-solusi-terjangkau-hingga-ramah-lingkungan" title="undangan digital ramah lingkungan" target="_BLANK" rel="nofollow">website undangan digitalmu</a> dengan beragam fitur yang dapat disesuaikan dengan seleramu.</p>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <ul class="pl-0 mb-0">
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Custom Nama Tamu Undangan</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Tema Lengkap Bisa Custom</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Form RSVP & Ucapan</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Hitung Mundur Waktu Acara</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Integrasi Google Maps</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Galeri Foto</div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="pl-0 mb-0">
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">QR Code Check-In Acara</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Tambah / Kurangi Halaman</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Ubah Urutan Halaman</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Beragam Tata Letak Halaman</div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                <div class="pl-2">Ubah Warna & Ukuran Font</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tabel paket -->
    <div class="container my-5">
        <div class="row">
            <!-- Card untuk Paket 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/bg1.jpg')}}" class="card-img-top" alt="Paket 1">
                    <div class="card-body">
                        <h5 class="card-title">PAKET 1</h5>
                        <p class="card-text">Paket Dasar kami menawarkan semua yang Anda butuhkan untuk membuat kehadiran online yang profesional.</p>
                        <li class="d-flex align-items-center mb-2">
                            <svg width="24" height="25" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".3" d="M12 21.375a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" fill="#00B1A9" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m9 12.375 2 2 4-4" stroke="#00B1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <div class="pl-2">Waktu 7 hari</div>
                        </li>
                        <a href="#" class="btn btn-primary">Pilih Paket</a>
                    </div>
                </div>
            </div>
            <!-- Card untuk Paket 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/bg1.jpg')}}" class="card-img-top" alt="Paket 2">
                    <div class="card-body">
                        <h5 class="card-title">PAKET 2</h5>
                        <p class="card-text">Deskripsi singkat Paket 2.</p>
                        <a href="#" class="btn btn-primary">Pilih Paket</a>
                    </div>
                </div>
            </div>
            <!-- Card untuk Paket 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/bg1.jpg')}}" class="card-img-top" alt="Paket 3">
                    <div class="card-body">
                        <h5 class="card-title">PAKET 3</h5>
                        <p class="card-text">Deskripsi singkat Paket 3.</p>
                        <a href="#" class="btn btn-primary">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="step" class="bg-white py-5 px-0 px-xl-5">
        <div class="custom-container bg-primary rounded-tr-100">
            <div class="container hero py-5">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="heading-2 font-weight-bold mb-4 text-white">Kini Kamu bisa buat undangan digital hanya dengan 3 langkah mudah</h2>
                        <p class="mb-5 text-white opacity-90">Aplikasi undangan digital website online yang didesain khusus sehingga kamu dapat menggunakannya dengan mudah cukup 3 langkah sederhana untuk mewujudkan undangan website impian kamu.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <svg class="mb-2" width="42" height="43" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y=".375" width="42" height="42" rx="21" fill="#FFEFE8"/><path d="M24.009 12.92v17.455h-3.69V16.423h-.103l-3.997 2.506v-3.273l4.32-2.736h3.47Z" fill="#FE5800"/></svg>
                        <h3 class="text-white heading-3 font-weight-bold">Pilih Tema Undangan</h3>
                        <p class="text-white opacity-90">Telusuri koleksi tema undangan website kami dan pilih salah satu yang paling sesuai dari ratusan template yang berbeda dan kreatif.</p>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <svg class="mb-2" width="42" height="43" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y=".375" width="42" height="42" rx="21" fill="#FFEFE8"/><path d="M14.415 30.375v-2.66l6.213-5.752c.528-.511.971-.972 1.33-1.38.363-.41.639-.81.826-1.202a2.98 2.98 0 0 0 .281-1.287c0-.512-.116-.952-.35-1.321a2.294 2.294 0 0 0-.954-.861 2.992 2.992 0 0 0-1.372-.307c-.534 0-1 .108-1.398.324a2.232 2.232 0 0 0-.92.929c-.216.403-.324.883-.324 1.44h-3.503c0-1.142.259-2.133.776-2.974.517-.841 1.241-1.492 2.173-1.952.932-.46 2.006-.69 3.222-.69 1.25 0 2.338.221 3.264.665.932.437 1.656 1.045 2.173 1.824.517.778.776 1.67.776 2.676 0 .659-.13 1.31-.392 1.951-.256.642-.713 1.355-1.372 2.14-.66.778-1.588 1.713-2.787 2.803l-2.549 2.498v.119h7.33v3.017H14.415Z" fill="#FE5800"/></svg>
                        <h3 class="text-white heading-3 font-weight-bold">Edit Data Undangan</h3>
                        <p class="text-white opacity-90">Edit dan sesuaikan tema undangan dengan smart editor Satu Momen. Dalam beberapa klik, Kamu akan mendapatkan desain yang ideal!</p>
                    </div>
                    <div class="col-md-4">
                        <svg class="mb-2" width="42" height="43" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y=".375" width="42" height="42" rx="21" fill="#FFEFE8"/><path d="M20.866 30.614c-1.272 0-2.406-.22-3.4-.657-.989-.443-1.77-1.05-2.344-1.823-.568-.779-.86-1.677-.878-2.694h3.716c.023.426.162.801.418 1.125a2.57 2.57 0 0 0 1.04.742c.431.176.917.264 1.457.264.563 0 1.06-.1 1.491-.298.432-.2.77-.475 1.015-.827.244-.352.366-.759.366-1.219 0-.466-.13-.878-.392-1.236-.256-.363-.625-.647-1.108-.852-.477-.204-1.045-.307-1.704-.307h-1.628v-2.71h1.628c.556 0 1.048-.096 1.474-.29.432-.193.767-.46 1.006-.8a2.08 2.08 0 0 0 .358-1.211c0-.438-.105-.821-.316-1.15a2.081 2.081 0 0 0-.869-.785c-.37-.187-.801-.28-1.295-.28-.5 0-.958.09-1.373.272a2.399 2.399 0 0 0-.997.758c-.25.33-.383.716-.4 1.16h-3.537c.017-1.006.304-1.893.86-2.66.557-.767 1.307-1.366 2.25-1.798.95-.437 2.02-.656 3.214-.656 1.204 0 2.258.219 3.162.656.903.438 1.605 1.029 2.105 1.773.505.738.755 1.568.75 2.488.005.978-.299 1.793-.912 2.447-.608.653-1.4 1.068-2.378 1.244v.136c1.284.165 2.261.61 2.932 1.338.676.722 1.011 1.625 1.005 2.71.006.995-.28 1.878-.86 2.651-.574.773-1.367 1.38-2.378 1.824-1.012.443-2.17.665-3.478.665Z" fill="#FE5800"/></svg>
                        <h3 class="text-white heading-3 font-weight-bold">Kirim dan Pantau</h3>
                        <p class="text-white opacity-90">Undangan online buatanmu siap untuk dibagikan kepada tamu undangan dan buat semua orang terkesima.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="bg-white">
        <div class="container py-5">
            <h2 class="heading-2 font-weight-bold mb-4">FAQs</h2>
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="faq-item mb-4">
                        <h3 class="heading-3">Apakah membuat undangan digital gratis?</h3>
                        <p class="opacity-90">Undangan website Satu Momen gratis selama masa uji coba (free trial) 12 jam setelah itu kamu dapat memilih paket yang tersedia.</p>
                    </div>
                    <div class="faq-item mb-4">
                        <h3 class="heading-3">Apakah ada batas kirim undangan?</h3>
                        <p class="opacity-90">Tidak ada batas untuk kirim undangan digital website dari Satu Momen. Cukup satu undangan untuk banyak tamu.</p>
                    </div>
                    <div class="faq-item mb-4">
                        <h3 class="heading-3">Apakah ada batas revisinya?</h3>
                        <p class="opacity-90">Undangan website online di Satu Momen tidak ada batas revisi, kamu dapat merevisi kapan saja di mana saja selama akun masih aktif..</p>
                    </div>
                    <div class="faq-item mb-4">
                        <h3 class="heading-3">Berapa undangan yang bisa dibuat?</h3>
                        <p class="opacity-90">Untuk paket premium kamu bisa buat 1 undangan per hari, contoh hari senin kamu buat undangan digital pernikahan, hari selasa buat undangan syukuran.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item mb-4">
                        <h3 class="heading-3">Berapa lama proses pembuatannya?</h3>
                        <p class="opacity-90">Untuk membuat undangan link atau digital di Satu Momen membutuhkan waktu sekitar 10 menit dan bisa langsung mengirim.</p>
                    </div>
                    <div class="faq-item mb-4">
                        <h3 class="heading-3">Apa yang dimaksud dengan masa aktif?</h3>
                        <p class="opacity-90">Masa aktif pada undangan adalah masa undangan online dapat diakses. Jika masa aktif berakhir maka undangan tidak dapat diakses</p>
                    </div>
                    <div class="faq-item mb-4">
                        <h3 class="heading-3">Apakah tema bisa di custom?</h3>
                        <p class="opacity-90">Tentu saja kamu bisa custom desain website undangan nikah dan acara apapun di Satu momen dengan menambah Add On custom tema.</p>
                    </div>
                    <div class="faq-item mb-4">
                        <h3 class="heading-3">Apakah ada program reseller?</h3>
                        <p class="opacity-90">Ada! kami menawarkan <a href="https://satumomen.com/reseller-undangan-digital-website" title="paket usaha undangan digital">paket lengkap usaha undangan digital website</a> sudah termasuk: custom domain, custom branding, sales page dan lain-lain kamu bisa hubungi admin untuk info lebih lengkap.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mx-auto text-center">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Company
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    About Us
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Team
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Products
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Blog
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Pricing
                </a>
            </div>
            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-dribbble"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-pinterest"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-github"></span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> Soft by Creative Tim.
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection
