<!doctype html>
<html lang="en">
  <head>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="title" content="Mitra Adidaya Rekayasa Digital">
    <meta property="og:title" content="Mitra Adidaya Rekayasa Digital">
    <meta property="og:description" content="Penyedia solusi digital untuk optimasi bisnis Anda.">
    <meta property="og:url" content="https://www.mardsoft.com">
    <meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
    {{-- <title>Mitra Adidaya Rekayasa Digital</title> --}}
    <title>Mitra Adidaya Rekayasa Digital</title>
    <meta name="keywords" content="jasa buat website jakarta, jasa buat website jakarta timur, jasa buat website jaktim, digital solutions, business optimization, software development, IT consulting, buat website, domain, website, website jakarta, website jakarta timur, website jaktim, software, development, IT consultant jakarta, IT consultant jakarta timur, IT consulting jakarta, IT consulting jakarta timur, IT consultant jaktim, IT consulting jaktim">
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
    
    

    {{-- navbar section --}}
    @include('partials.navbar')

    

{{-- Jumbotron Section --}}
    <div class="hero-section">
        <div class="hero-overlay">
            <div class="container hero-text">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h1 data-lang-en="Digital Solutions for Optimal Innovation" data-lang-id="Solusi Digital untuk Inovasi Optimal"></h1>
                        <p data-lang-en="Bringing your ideas to life with our digital solutions and infinite innovations, elevating your business and setting a new standard of excellence." data-lang-id="Mewujudkan ide Anda dengan solusi digital dan inovasi tak terbatas untuk meningkatkan bisnis Anda dan menetapkan standar keunggulan baru."></p>
                        <a href="/contact">
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
                <a href="/web" style="text-decoration: none; color: black;">
                    <div class="serContainer">
                        <h3 style="color: black;" data-lang-en="Instant Web Builder" data-lang-id="Instant Web Builder"></h3>
                        <p data-lang-en="A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online." 
                           data-lang-id="Solusi cepat untuk membangun website profesional Anda. Pilih domain, pilih template, dan website Anda siap untuk online."></p>
                    </div>
                </a>
                
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <a href="/dev" style="text-decoration: none; color: black;">
                    <div class="serContainer">
                        <h3 style="color: black;" data-lang-en="Custom App Development" data-lang-id="Custom App Development"></h3>
                        <p data-lang-en="Bring your ideas to life with our expert developers, delivering digital solutions and endless innovations to drive your business growth." 
                        data-lang-id="Wujudkan ide Anda dengan pengembang ahli kami, menghadirkan solusi digital dan inovasi tanpa batas untuk mendorong pertumbuhan bisnis Anda."></p>
                    </div>
                </a>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <a href="/support" style="text-decoration: none; color: black;">
                    <div class="serContainer">
                        <h3 style="color: black;" data-lang-en="Support and Maintenance" data-lang-id="Support and Maintenance"></h3>
                        <p data-lang-en="We provide continuous maintenance and support to ensure the seamless operation and efficiency of your applications and systems." 
                           data-lang-id="Kami menawarkan pemeliharaan dan dukungan berkelanjutan untuk menjamin kelancaran dan efisiensi aplikasi serta sistem Anda."></p>
                    </div>
                </a>
            </div>
            
        </div>
    </div>

{{-- Instal Build Website --}}
<div class="container" style="margin-top: 70px">
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
        
            <!-- Form Pencarian -->
            <form id="searchTemplateForm" action="{{ route('searchtemplate') }}" method="POST">
                @csrf <!-- Ini untuk melindungi dari CSRF -->
                
                <div class="row d-flex justify-content-between align-items-center ">
                    <!-- Tabs untuk memilih tipe template -->
                    <div class="col-md-6 col-12">
                        <div class="btn-group tabs" role="group" aria-label="Tipe Template">
                            <input type="radio" class="btn-check" name="type" id="all" value="all" 
                                {{ request('type') == 'all' ? 'checked' : '' }} checked>
                            <label class="btn btn-outline-primary" for="all">ALL</label>
                    
                            <input type="radio" class="btn-check" name="type" id="basic" value="Basic"
                                {{ request('type') == 'basic' ? 'checked' : '' }}>
                            <label class="btn btn-outline-primary" for="basic">BASIC</label>
                    
                            <input type="radio" class="btn-check" name="type" id="premium" value="Premium"
                                {{ request('type') == 'premium' ? 'checked' : '' }}>
                            <label class="btn btn-outline-primary" for="premium">PREMIUM</label>
                        </div>
                    </div>
                
                    <!-- Input Search -->
                    <div class="col-md-6 col-12">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Find your template..." required>
                            <button style="opacity: 100%; margin-top:0px" class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
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
                <a href="https://www.mendix.com" target="_blank">
                    <img src="img/mendix.png" alt="Partner 1">
                </a>
                <a href="https://www.aca-apac.com/id" target="_blank">
                    <img src="img/aca.png" alt="Partner 2">
                </a>
                <a href="https://www.bmc.com" target="_blank">
                    <img src="img/bmc.png" alt="Partner 3">
                </a>
                <a href="https://www.miligolas.co.id" target="_blank">
                    <img src="img/miligolas.png" alt="Partner 4">
                </a>
                <a href="https://www.delano-comm.com" target="_blank">
                    <img src="img/delano.png" alt="Partner 5">
                </a>
                <a href="https://www.babagi-tech.co.id" target="_blank">
                    <img src="img/babagi.png" alt="Partner 6">
                </a>
                <a href="https://www.big-solutions.co.id/" target="_blank">
                    <img src="img/big.png" alt="Partner 7">
                </a>
                <a href="https://www.miligolas.co.id" target="_blank">
                    <img src="img/milian.png" alt="Partner 8">
                </a>
                <a href="https://www.pakarangan.id/" target="_blank">
                    <img src="img/pakarangan.png" alt="Partner 9">
                </a>
                <a href="https://www.spyros.co.id" target="_blank">
                    <img src="img/spyros.png" alt="Partner 10">
                </a>
            </div>
            
            
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script> 
    sessionStorage.clear();
     $(document).ready(function() {

        // Event untuk form pencarian
        $('#searchTemplateForm').on('submit', function(e) {
            e.preventDefault(); // Mencegah submit standar
            performSearchOrPagination($(this).attr('action'), 'POST', { 
                _token: '{{ csrf_token() }}',
                search: $('#search').val(),
                type: $('input[name="type"]:checked').val() // Tambahkan tipe yang dipilih
            });
        });

        // Event untuk tab tipe template
        $('input[name="type"]').on('change', function() {
            $('#searchTemplateForm').submit(); // Submit form saat tab berubah
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


    {{-- Footer Section --}}
    @include('partials.footer')
    

    

    <script>
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

    // Smooth scroll untuk navigasi di halaman yang sama
document.querySelectorAll('a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');

        if (targetId && targetId.startsWith('/#')) {
            const targetElement = document.querySelector(targetId.slice(1)); // Menghapus '/' agar selector valid

            if (targetElement) { // Periksa apakah elemen target ada
                e.preventDefault(); // Mencegah navigasi default
                const offsetPosition = targetElement.getBoundingClientRect().top + window.scrollY - 80;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }
    });
});

// Pindah ke posisi elemen setelah halaman dimuat
window.addEventListener('load', () => {
    const hash = window.location.hash; // Mendapatkan bagian hash dari URL
    if (hash) {
        const targetElement = document.querySelector(hash); // Mencari elemen dengan ID hash
        if (targetElement) {
            const offsetPosition = targetElement.getBoundingClientRect().top + window.scrollY - 80;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth' // Bisa juga diubah menjadi 'auto' jika tidak ingin animasi di sini
            });
        }
    }
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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