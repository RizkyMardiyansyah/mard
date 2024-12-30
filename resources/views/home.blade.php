<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    {{-- <title>Mitra Adidaya Rekayasa Digital</title> --}}
    <title>Mitra Adidaya Rekayasa Digital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
  </head>
  <body id="home">
    <button id="floatingButton" onclick="topFunction()">
        <svg width="18px" height="18px" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" stroke="currentColor" stroke-width="1.5" d="m9 1.196 6.188 6.188 -0.746 0.746 -4.915-4.915v13.592h-1.054V3.213L3.556 8.13l-0.744-0.747Z"/>
        </svg>
    </button>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light" style="background-color: transparent; transition: background-color 0.5s;">
        <div class="container">
            <a class="navbar-brand blue" href="index.php"><img  src="img/NewLogoMardBlue.svg" height="50px" style="padding: 5px;"></a>
            <a class="navbar-brand white" href="index.php"><img src="img/NewLogoMardWhite.svg" height="50px" style="padding: 5px;"></a>
            <div class="language-selector order-lg-2">
                <div class="toggle-container">
                    <input type="checkbox" id="languageToggle" class="toggle-checkbox">
                    <label class="toggle-label" for="languageToggle">
                        <span class="toggle-inner">EN</span>
                        <span class="toggle-switch"></span>
                    </label>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="box-shadow: none;"></span>
            </button>
            <div class="collapse navbar-collapse order-lg-1" id="navbarNav">
              <ul style="margin-left: auto;" class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#partners">Partners</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

{{-- Jumbotron Section --}}
    <div class="hero-section">
        <div class="hero-overlay">
            <div class="container hero-text">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h1 data-lang-en="Digital Solutions for Optimal Innovation" data-lang-id="Solusi Digital untuk Inovasi Optimal"></h1>
                        <p data-lang-en="Bringing your ideas to life with our digital solutions and infinite innovations, elevating your business and setting a new standard of excellence." data-lang-id="Mewujudkan ide Anda dengan solusi digital dan inovasi tak terbatas untuk meningkatkan bisnis Anda dan menetapkan standar keunggulan baru."></p>
                        <a href="#contact">
                            <button type="submit" class="btn"><b style="color:white;">Get In Touch</b></button>
                        </a>
                    </div>
                    <div class="col-lg-6 col-12"></div>
                </div>
            </div>
        </div>
    </div>
    
{{-- About Section --}}
    <div id="about" class="about hero-text ">
        <div class="row">
            <div class="col-lg-6 col-12 order-lg-2">
                <img src="img/about.jpg">
            </div>
            <div class="col-lg-6 col-12 order-lg-1 textabout">
                <h1 data-lang-en="About Us" data-lang-id="Tentang Kami"></h1>
                <p data-lang-en="Mitra Adidaya Rekayasa Digital (MARD) also known as Mardsoft is committed to bringing your ideas to life with our advanced digital solutions and infinite innovations. Our mission is to elevate your business and set a new standard of excellence in the ever-evolving digital landscape. We focus on creating tailored strategies that address your unique challenges, optimize operations, and drive sustainable growth." 
                data-lang-id="Mitra Adidaya Rekayasa Digital (MARD) yang juga dikenal sebagai Mardsoft berkomitmen untuk mewujudkan ide Anda dengan solusi digital dan inovasi tak terbatas. Misi kami adalah untuk meningkatkan bisnis Anda dan menetapkan standar keunggulan baru di dunia digital yang terus berkembang. Kami fokus pada pembuatan strategi yang disesuaikan untuk mengatasi tantangan unik anda, dan mengoptimalkan operasional."></p>
            </div>
        </div>
    </div>
    
{{-- Service Section --}}
    <div id="services" class="services container hero-text ">
        <div class="row">
            <div class="serv our col-lg-3 col-md-6 col-12 order-lg-4">
                <h1 data-lang-en="Our Services" data-lang-id="Layanan Kami"></h1>
                <p data-lang-en="Mardsoft provides innovative digital solutions tailored to optimize your business processes, support growth, and set new standards of excellence in your industry." 
                   data-lang-id="Mardsoft menyediakan solusi digital inovatif yang sesuai untuk optimalisasi bisnis Anda, serta mendukung pertumbuhan, dan standar baru dalam industri."></p>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <div class="serContainer">
                    <a href="/web" style="text-decoration: none; color: black;">
                        <h3 style="color: black;" data-lang-en="Instant Web Builder" data-lang-id="Instant Web Builder"></h3>
                        <p data-lang-en="A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online." 
                           data-lang-id="Solusi cepat untuk membangun website profesional Anda. Pilih domain, pilih template, dan website Anda siap untuk online."></p>
                    </a>
                </div>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <div class="serContainer">
                        <h3 style="color: black;" data-lang-en="Custom App Development" data-lang-id="Custom App Development"></h3>
                        <p data-lang-en="Bring your ideas to life with our expert developers, delivering digital solutions and endless innovations to drive your business growth." 
                           data-lang-id="Wujudkan ide Anda dengan pengembang ahli kami, menghadirkan solusi digital dan inovasi tanpa batas untuk mendorong pertumbuhan bisnis Anda."></p>
                </div>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <div class="serContainer">
                        <h3 style="color: black;" data-lang-en="Support and Maintenance" data-lang-id="Support and Maintenance"></h3>
                        <p data-lang-en="We provide continuous maintenance and support to ensure the seamless operation and efficiency of your applications and systems." 
                           data-lang-id="Kami menawarkan pemeliharaan dan dukungan berkelanjutan untuk menjamin kelancaran dan efisiensi aplikasi serta sistem Anda."></p>
                </div>
            </div>
            
        </div>
    </div>

{{-- Instal Build Website --}}
<div class="container" style="margin-top: 50px">
    <div class="hero-section-home-domain d-flex align-items-center justify-content-center">
        <div class="hero-overlay-home-domain">
            <div class="container hero-text-domain text-center"> 
                <div class="row webbuilder">
                    <div class="col-lg-8 mx-auto">
                        <div style="margin-bottom: 20px" class="container">
                        <h1 style="margin-bottom: 0px" data-lang-en="Instant Web Builder" data-lang-id="Instant Web Builder"></h1>
                        <span data-lang-en="A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online." data-lang-id="Solusi cepat untuk membangun website profesional Anda. Pilih domain, pilih template, dan website Anda siap untuk online."></span>
                        </div>
                        <!-- Form untuk memasukkan nama domain -->            
                        <form id="domainForm" class="mt-30 mt-lg-30 w-100" action="/web" method="GET">
                            <div style="margin:0px;" class="form-row d-flex align-items-center slider-search bg-white w-100">
                                <input type="text" id="domain" name="domain" class="rounded-pill border-0 mr-lg-50" placeholder="Find your domain..."/>
                                <button type="submit" class="btn cari rounded-pill " style="height:100%; margin:0px; opacity: 100%; background-color:#488EFE; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);"><b>Search</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div style="margin-top: 50px"  class="serv container hero-text">

        <div class="serv container hero-text">
            
            {{-- <h1>Our Template</h1> --}}
        
            <!-- Form Pencarian -->
            <form id="searchTemplateForm" action="{{ route('searchtemplate') }}" method="POST">
                @csrf <!-- Ini untuk melindungi dari CSRF -->
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Find your template..." required>
                    <button style="opacity: 100%;" class="btn cari btn-primary" type="submit">Search</button>
                </div>
                <!-- Spinner untuk loading animation -->
                <div style="margin-top: 50px" class="spinner" id="spinnerr" style="display: none;"></div>
            </form>
        
            <div class=" row" id="templateContainer">
                @foreach($templates as $template)
                    @include('partials.template_card', ['template' => $template])
                @endforeach
            </div>
        
            <!-- Menampilkan Pagination -->
            <div class="pagination justify-content-center mt-4" id="paginationLinks">
                {{ $templates->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
{{-- Partner Section --}}
    <div id="partners" class="partner hero-text " style="margin-top: 70px;">
        
        <div class="row d-flex flex-wrap">
            <div class="serv col-lg-4 col-12 " >
                <h1 data-lang-en="Partners and Clients" data-lang-id="Mitra dan Klien"></h1>
                <p data-lang-en="Trusted partners and satisfied clients who have collaborated to develop their business ideas." 
                data-lang-id="Mitra terpercaya dan klien puas yang telah bekerjasama mengembangkan ide bisnis mereka."></p>
            </div>
            <div class="partner-logos col-lg-8 col-12 d-flex flex-wrap">
                <img src="img/mendix.png" alt="Partner 1">
                <img src="img/aca.png" alt="Partner 2">
                <img src="img/bmc.png" alt="Partner 3">
                <img src="img/miligolas.png" alt="Partner 4">
                <img src="img/delano.png" alt="Partner 5">
                <img src="img/babagi.png" alt="Partner 2">
                <img src="img/big.png" alt="Partner 3">
            </div>
            
        </div>
    </div>



<script>    
    $(document).ready(function() {
        // Event untuk form pencarian
        $('#searchTemplateForm').on('submit', function(e) {
            e.preventDefault(); // Mencegah submit standar
            performSearchOrPagination($(this).attr('action'), 'POST', { 
                _token: '{{ csrf_token() }}',
                search: $('#search').val() 
            });
        });

        // Event untuk pagination link
        $(document).on('click', '#paginationLinks a', function(e) {
            e.preventDefault(); // Mencegah reload halaman
            let url = $(this).attr('href');
            performSearchOrPagination(url, 'GET'); // Pagination menggunakan GET
        });

        // Fungsi umum untuk Search atau Pagination
        function performSearchOrPagination(url, method, data = {}) {
            $('#spinnerr').show(); // Tampilkan spinner

            $.ajax({
                url: url,
                method: method,
                data: data,
                success: function(response) {
                    $('#spinnerr').hide(); // Sembunyikan spinner
                    $('#templateContainer').html(''); // Kosongkan kontainer

                    // Tampilkan template jika ada hasil
                    if (response.templates.length > 0) {
                        response.templates.forEach(template => {
                            const imageUrl = `{{ url('storage') }}/${template.image}`;
                            $('#templateContainer').append(`
                                <div class="card col-lg-4 col-md-6 col-12">
                                    <img src="${imageUrl}" alt="${template.title}" class="card-img-top">
                                    <div class="d-flex" style="padding: 0px">
                                        <div class="card-title">${template.title}</div>
                                        <div class="d-flex" style="margin-left: auto">
                                            <a href="#" class="view d-flex align-items-center justify-content-center">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="${template.link}" target="_blank" 
                                               class="view d-flex align-items-center justify-content-center">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            `);
                        });
                    } else {
                        $('#templateContainer').append('<p>No templates found.</p>');
                    }

                    // Update pagination links
                    $('#paginationLinks').html(response.pagination);
                },
                error: function() {
                    $('#spinnerr').hide(); // Sembunyikan spinner
                    alert('An error occurred. Please try again.');
                }
            });
        }
    });    
</script>


{{-- Contact Us Section --}}
{{-- <div id="contact" class="contact hero-text" style="margin-top: 70px; padding:30px;">
    <div class="row d-flex flex-wrap">
        <div class="col-lg-6 col-12">
            <h1 data-lang-en="Contact Us" data-lang-id="Hubungi Kami"></h1>
            <p data-lang-en="Feel free to contact us for any inquiries." data-lang-id="Jangan ragu untuk menghubungi kami jika ada pertanyaan."></p>
        </div>
        <div class="col-lg-6 col-12">
            <form id="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="company">Company:</label>
                    <input type="text" id="company" name="company" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
            <div id="notification" style="display:none;" class="alert alert-success">
                Your message has been sent successfully!
            </div>
            
        </div>
    </div>
</div> --}}



{{-- Footer --}}
    <div class="container-fluid py-5" id="contact">
        <div class="container" style="width:80%">
            <footer class="sk">
                <p>Copyright © <b>2024</b> Rizky Mardiyansyah. All Rights Reserved</p>
            </footer>
        </div>
    </div>
    

    <script>
// window.onload = function() {
//   document.getElementById('languageToggle').checked = true; // Toggle default ke 'true' untuk bahasa Inggris
//     switchLanguage('en'); // Set bahasa default ke Bahasa Inggris
// };

// const toggleCheckbox = document.getElementById('languageToggle');
// const toggleInner = document.querySelector('.toggle-inner');

// toggleCheckbox.addEventListener('change', function() {
//     const selectedLang = toggleCheckbox.checked ? 'en' : 'id';
//     switchLanguage(selectedLang);

//     // Ubah teks yang ditampilkan
//     toggleInner.textContent = toggleCheckbox.checked ? 'EN' : 'IN';
// });

// function switchLanguage(lang) {
//     const elements = document.querySelectorAll('[data-lang-en]');

//     elements.forEach(element => {
//         element.textContent = element.getAttribute('data-lang-' + lang);
//     });
// }
// document.getElementById('languageToggle').addEventListener('change', function() {
//     if (this.checked) {
//         // Logic saat toggle aktif
//         console.log('Bahasa diubah ke EN');
//     } else {
//         // Logic saat toggle tidak aktif
//         console.log('Bahasa diubah ke IN');
//     }
// });

    window.onload = function () {
        // Ambil preferensi bahasa dari localStorage
        const savedLanguage = localStorage.getItem('preferredLanguage') || 'en';

        // Atur posisi toggle sesuai bahasa tersimpan
        const languageToggle = document.getElementById('languageToggle');
        languageToggle.checked = (savedLanguage === 'en');
        
        // Set bahasa saat halaman dimuat
        switchLanguage(savedLanguage);
        updateToggleText(savedLanguage);
    };

    // Tambahkan event listener pada toggle
    const toggleCheckbox = document.getElementById('languageToggle');

    toggleCheckbox.addEventListener('change', function () {
        const selectedLang = toggleCheckbox.checked ? 'en' : 'id';

        // Simpan preferensi bahasa ke localStorage
        localStorage.setItem('preferredLanguage', selectedLang);

        // Ubah bahasa dan teks toggle
        switchLanguage(selectedLang);
        updateToggleText(selectedLang);
    });

    function switchLanguage(lang) {
        const elements = document.querySelectorAll('[data-lang-en]');

        elements.forEach(element => {
            element.textContent = element.getAttribute('data-lang-' + lang);
        });
    }

    function updateToggleText(lang) {
        const toggleInner = document.querySelector('.toggle-inner');
        toggleInner.textContent = lang === 'en' ? 'EN' : 'IN';
    }



    window.onscroll = function() {
        const navbar = document.getElementById('navbar');
        const floatingButton = document.getElementById("floatingButton");
        
        // Memeriksa scroll untuk navbar
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Menampilkan/menyembunyikan tombol berdasarkan scroll
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            floatingButton.style.display = "block";
        } else {
            floatingButton.style.display = "none";
        }
    };

    // Fungsi untuk menggulir ke atas saat tombol diklik
    function topFunction() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    document.querySelectorAll('a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');

        // Periksa apakah targetId dimulai dengan '#'
        if (targetId.startsWith('#')) {
            e.preventDefault(); // Mencegah perilaku default hanya untuk anchor yang dimulai dengan '#'
            const targetElement = document.querySelector(targetId);

            if (targetElement) { // Periksa apakah elemen target ada
                const offsetPosition = targetElement.getBoundingClientRect().top + window.scrollY - 60;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }
        // Jika targetId bukan '#' tidak perlu melakukan apa-apa dan biarkan tautan berfungsi seperti biasa
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contact-form').submit(function(e) {
            e.preventDefault(); // Mencegah form submit biasa

            var formData = $(this).serialize(); // Menyusun data form

            $.ajax({
                url: '{{ route('contact.store') }}', // URL untuk mengirim data
                method: 'POST',
                data: formData,
                success: function(response) {
                    // Menampilkan notifikasi jika berhasil
                    $('#notification').fadeIn().delay(3000).fadeOut(); // Munculkan dan sembunyikan setelah 3 detik
                    $('#contact-form')[0].reset(); // Mengosongkan form setelah submit
                },
                error: function(xhr, status, error) {
                    // Menangani error jika terjadi
                    alert('Something went wrong. Please try again later.');
                }
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let images = document.querySelectorAll('.partner-logos img');
        let index = 0;

        // Fungsi untuk merubah opacity secara acak
        function changeOpacityRandomly() {
            // Set opacity semua gambar ke 30%
            images.forEach(img => img.classList.remove('active'));

            // Pilih gambar secara acak
            let randomIndex = Math.floor(Math.random() * images.length);
            images[randomIndex].classList.add('active');
        }

        // Panggil fungsi untuk merubah opacity setiap detik
        setInterval(changeOpacityRandomly, 1000);
    });
</script>


 
</body>
</html>