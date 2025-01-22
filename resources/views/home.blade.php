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
                        <h1 data-lang-en="Digital Solutions for Optimal Innovation" data-lang-id="Solusi Digital untuk Inovasi Optimal">Digital Solutions for Optimal Innovation</h1>
                        <p data-lang-en="Bringing your ideas to life with our digital solutions and infinite innovations, elevating your business and setting a new standard of excellence." data-lang-id="Mewujudkan ide Anda dengan solusi digital dan inovasi tak terbatas untuk meningkatkan bisnis Anda dan menetapkan standar keunggulan baru.">Bringing your ideas to life with our digital solutions and infinite innovations, elevating your business and setting a new standard of excellence.</p>
                        <a href="/contact">
                            <button type="submit" class="btn"><b style="color:white;" data-lang-en="Get In Touch" data-lang-id="Hubungi Kami">Get In Touch</b></button>
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
                <h1 data-lang-en="About Us" data-lang-id="Tentang Kami">About Us</h1>
                <p data-lang-en="Mitra Adidaya Rekayasa Digital (MARD) also known as Mardsoft, is committed to bringing your ideas to life with our advanced digital solutions and infinite innovations. Our mission is to elevate your business and set a new standard of excellence in the ever-evolving digital landscape. We focus on creating tailored strategies that address your unique challenges, optimize operations, and drive sustainable growth." 
                data-lang-id="Mitra Adidaya Rekayasa Digital (MARD) yang juga dikenal sebagai Mardsoft, berkomitmen untuk mewujudkan ide Anda dengan solusi digital dan inovasi tak terbatas. Misi kami adalah untuk meningkatkan bisnis Anda dan menetapkan standar keunggulan baru di dunia digital yang terus berkembang. Kami fokus pada pembuatan strategi yang disesuaikan untuk mengatasi tantangan unik anda, dan mengoptimalkan operasional.">Mitra Adidaya Rekayasa Digital (MARD) also known as Mardsoft is committed to bringing your ideas to life with our advanced digital solutions and infinite innovations. Our mission is to elevate your business and set a new standard of excellence in the ever-evolving digital landscape. We focus on creating tailored strategies that address your unique challenges, optimize operations, and drive sustainable growth.</p>
            </div>
        </div>
    </div>
    
{{-- Service Section --}}
    <div id="services" class="services container hero-text ">
        <div class="row">
            <div class="serv our col-lg-3 col-md-6 col-12 order-lg-4">
                <h1 data-lang-en="Our Services" data-lang-id="Layanan Kami">Our Services</h1>
                <p data-lang-en="Mardsoft provides innovative digital solutions tailored to optimize your business processes, support growth, and set new standards of excellence in your industry." 
                   data-lang-id="Mardsoft menyediakan solusi digital inovatif yang sesuai untuk optimalisasi bisnis Anda, serta mendukung pertumbuhan, dan standar baru dalam industri.">Mardsoft provides innovative digital solutions tailored to optimize your business processes, support growth, and set new standards of excellence in your industry.</p>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">                
                <a href="/web" style="text-decoration: none; color: black;">
                    <div class="serContainer">
                        <h3 style="color: black;" data-lang-en="Instant Web Builder" data-lang-id="Pembuat Web Instan">Instant Web Builder</h3>
                        <p data-lang-en="A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online." 
                           data-lang-id="Solusi cepat untuk membangun website profesional Anda. Pilih domain, pilih template, dan website Anda siap untuk online.">A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online.</p>
                    </div>
                </a>
                
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <a href="/dev" style="text-decoration: none; color: black;">
                    <div class="serContainer">
                        <h3 style="color: black;" data-lang-en="Custom App Development" data-lang-id="Pengembangan Aplikasi Kustom">Custom App Development</h3>
                        <p data-lang-en="Bring your ideas to life with our expert developers, delivering digital solutions and endless innovations to drive your business growth." 
                        data-lang-id="Wujudkan ide Anda dengan pengembang ahli kami, menghadirkan solusi digital dan inovasi tanpa batas untuk mendorong pertumbuhan bisnis Anda.">Bring your ideas to life with our expert developers, delivering digital solutions and endless innovations to drive your business growth.</p>
                    </div>
                </a>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <a href="/iot" style="text-decoration: none; color: black;">
                    <div class="serContainer">
                        <h3 style="color: black;" data-lang-en="One Stop IoT Solutions" data-lang-id="Solusi Lengkap IoT">One Stop IoT Solutions</h3>
                        <p data-lang-en="Our One Stop IoT Solutions offer more than just technology, we bring a future for your business processes. With our solutions."
                        data-lang-id="Solusi IoT One Stop kami menawarkan lebih dari sekadar teknologi, kami menghadirkan masa depan untuk proses bisnis Anda. Dengan solusi kami, kami mengoptimalkan operasi dan mendorong efisiensi bisnis Anda.">Our One Stop IoT Solutions offer more than just technology, we bring a future for your business processes. With our solutions.</p>

                    </div>
                </a>
            </div>
            
        </div>
    </div>

{{-- Instal Build Website --}}
<div class="container" style="margin-top: 100px">
    <div class="hero-section-home-domain align-items-center justify-content-center">
        <div class="hero-overlay-home-domain">
            <div class="container hero-text-domain text-center"> 
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="container">
                            <h1 style="margin-bottom: 0px" data-lang-en="Instant Web Builder" data-lang-id="Pembuat Web Instan">Instant Web Builder</h1>
                            <span data-lang-en="A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online." data-lang-id="Solusi cepat untuk membangun website profesional Anda. Pilih domain, pilih template, dan website Anda siap untuk online.">A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online.</span>
                        </div>
                        <!-- Form untuk memasukkan nama domain -->            
                        <form style="margin-top: 20px"  id="domainForm" class="mt-30 mt-lg-30 w-100">
                            <div style="margin:0px;" class="form-row  d-flex align-items-center slider-search bg-white w-100">
                                <input type="text" id="domain" name="domain" class="rounded-pill border-0 mr-lg-50" required placeholder="Find your domain..."/>
                                <button type="submit" class="btn rounded-pill" style="height:100%; margin:0px; opacity: 100%; background-color:#488EFE; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);"><b data-lang-en="Search" data-lang-id="Cari">Search</b></button>
                            </div>
                        </form>
                        <!-- Spinner untuk loading animation -->
                        <div style="margin-top: 50px" class="spinner" id="spinner"></div>

                        <!-- Div untuk menampilkan hasil pencarian -->
                        <div style="margin-top: 50px;" id="result"></div>
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
    <div id="partners" class="partner hero-text " style="margin-top: 100px;">
        <div class="row d-flex flex-wrap">
            <div class="serv col-lg-4 col-12 " >
                <h1 data-lang-en="Partners and Clients" data-lang-id="Mitra dan Klien">Partners and Clients</h1>
                <p data-lang-en="Trusted partners and satisfied clients who have collaborated to develop their business ideas." 
                data-lang-id="Mitra terpercaya dan klien puas yang telah bekerjasama mengembangkan ide bisnis mereka.">Trusted partners and satisfied clients who have collaborated to develop their business ideas.</p>
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
     {{-- Footer Section --}}
     @include('partials.footer')


     {{-- baru --}}     
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
     <script> 
         sessionStorage.clear();
          $(document).ready(function() {
             $('#domainForm').on('submit', function(e) {
                 e.preventDefault();  // Mencegah refresh halaman
     
                 let domain = $('#domain').val();
                 domain = domain.replace(/\..*/, '');  // Hapus ekstensi jika ada
     
                 $.ajax({
                     url: '{{ route("check.domain") }}',
                     method: 'POST',  // Menggunakan POST
                     data: {
                         _token: '{{ csrf_token() }}',  // Token CSRF wajib
                         domain: domain
                     },
                     beforeSend: function() {
                         // Tampilkan spinner sebelum request dimulai
                         $('#spinner').show();
                         $('#result').html('');  // Kosongkan hasil sebelumnya
                     },
                     success: function(response) {
                         $('#spinner').hide();  // Sembunyikan spinner setelah request berhasil
     
                         // Memeriksa dan menampilkan hasil
                         let resultHtml = `
                         <div class="carddomain ${response.com === 'available' ? 'available' : 'unavailable'}">
                             <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                                 <p><b>${domain}.com</b> ${response.com === 'unavailable' ? 'Unvailable' : ''}</p>
                                 
                                 <!-- Tombol hanya tampil jika domain tersedia -->
                                 ${response.com === 'available' ? 
                                     '<p class="price">Rp. 200.000</p><a> <button class="btn-select" data-domain="' + domain + '.com" data-price="200000" data-price="200000" data-lang-en="Select Domain" data-lang-id="Pilih Domain">Select Domain</button></a>' : 
                                     ''}
     
                                 <!-- Tombol ini hanya akan ditampilkan jika domain tidak tersedia, namun di-disable agar tidak bisa diklik -->
                                 ${response.com === 'unavailable' ? 
                                     '<button class="btn-select" style="opacity: 0; pointer-events: none;"></button>' : 
                                     ''}
                             </div>
                         </div>
     
                         <div class="carddomain ${response.id === 'available' ? 'available' : 'unavailable'}">
                             <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                                 <p><b>${domain}.id</b> ${response.id === 'unavailable' ? 'Unvailable' : ''}</p>
                                 
                                 <!-- Tombol hanya tampil jika domain tersedia -->
                                 ${response.id === 'available' ? 
                                     '<p class="price">Rp. 290.000</p><a><button class="btn-select" data-domain="' + domain + '.id" data-price="290000" data-price="200000" data-lang-en="Select Domain" data-lang-id="Pilih Domain">Select Domain</button></a>' : 
                                     ''}        
     
                                 <!-- Tombol ini hanya akan ditampilkan jika domain tidak tersedia, namun di-disable agar tidak bisa diklik -->
                                 ${response.id === 'unavailable' ? 
                                     '<button class="btn-select" style="opacity: 0; pointer-events: none;"></button>' : 
                                     ''}
                             </div>
                         </div>
     
                         <div class="carddomain ${response['co.id'] === 'available' ? 'available' : 'unavailable'}">
                             <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                                 <p><b>${domain}.co.id</b> ${response['co.id'] === 'unavailable' ? 'Unvailable' : ''}</p>
                                 
                                 <!-- Tombol hanya tampil jika domain tersedia -->
                                 ${response['co.id'] === 'available' ? 
                                     '<p class="price">Rp. 330.000</p><a><button class="btn-select" data-domain="' + domain + '.co.id"data-price="330000" data-price="200000" data-lang-en="Select Domain" data-lang-id="Pilih Domain">Select Domain</button></a>' : 
                                     ''}
                                    
     
                                 <!-- Tombol ini hanya akan ditampilkan jika domain tidak tersedia, namun di-disable agar tidak bisa diklik -->
                                 ${response['co.id'] === 'unavailable' ? 
                                     '<button class="btn-select" style="opacity: 0; pointer-events: none;"></button>' : 
                                     ''}
                             </div>
                         </div>
                         `;
     
                         $('#result').html(resultHtml);
                     },
                     error: function() {
                         $('#spinner').hide();  // Sembunyikan spinner jika terjadi kesalahan
                         alert('Terjadi kesalahan, coba lagi nanti.');
                     }
                 });
             });
     
     
     
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
                             $('html, body').animate({scrollTop: $('#searchTemplateForm').offset().top - 80}, 'fast');
                             response.templates.forEach(template => {
                                 const imageUrl = `{{ url('storage') }}/${template.image}`;
                                 $('#templateContainer').append(`
                                 
     
                                 <div class="card webtemplate col-lg-4 col-md-6 col-12">
                                     <a href="${template.link}" target="_blank">
                                         <img src="${imageUrl}" alt="${template.title}">
                                     </a>
                                     <div class="d-flex" style="padding: 0px">
                                         {{-- <div class="card-title">${template.title}</div> --}}
                                         <div class="card-title">
                                             <a href="${template.link}" target="_blank" style="text-decoration: none; color: inherit;">
                                                 ${template.title}
                                             </a>
                                         </div>
                                         <div class="d-flex" style="margin-left: auto">
                                             <a class="view select d-flex align-items-center justify-content-center" data-template-id="${template.id}" data-template-type="${template.type}" data-template-title="${template.title}" data-bs-toggle="tooltip" title="Pilih Template"><i class="fas fa-check"></i></a>
                                             <a href="${template.link}" target="_blank" class="view d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" title="Live Preview"><i class="fas fa-eye"></i></a>
                                         </div>
                                     </div>
                                     <div class="" style="padding: 0px; Opacity:50%; font-size:14px; margin-top:auto">       
                                         <div class="card-title"> <i class="fa fa-shopping-bag me-2"></i>${template.total_pembelian} Purchased</div>
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
     
     $(document).on('click', '.btn-select', function () {
             const domain = $(this).data('domain');
             const price = $(this).data('price');
     
             if (domain) {
                 // Simpan ke sessionStorage
                 sessionStorage.setItem('domain', domain);
                 sessionStorage.setItem('domainPrice', price);
     
                 // Arahkan ke halaman /website
                 window.location.href = '/website';
             }
         });
             // Event handler untuk memilih template
             $(document).on('click', '.select', function () {
                 const templateId = $(this).data('template-id');
                 const templateTitle = $(this).data('template-title');
                 const templateType = $(this).data('template-type');
                 const templatePrice = (templateType === 'Basic') ? 0 : 500000;
     
                 if (templateId) {
                     // Simpan ke sessionStorage
                     sessionStorage.setItem('template', templateTitle);
                     sessionStorage.setItem('templateId', templateId);
                     sessionStorage.setItem('templateType', templateType);
                     sessionStorage.setItem('templatePrice', templatePrice);
     
                     // Arahkan ke halaman /website
                     window.location.href = '/website';
                 }
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

     {{-- end baru --}}