<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Mitra Adidaya Rekayasa Digital</title>
    {{-- <title>{{ $sitename }}</title> --}}
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
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/heroicons@2.0.16/css/heroicons.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
  </head>
  <body id="home">
    {{-- navbar section --}}
    @include('partials.navbar')

        <div class="hero-section-domain d-flex align-items-center justify-content-center">
            <div class="hero-overlay-domain">
                <div class="container hero-text-domain text-center"> 
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="container">
                                <h1 style="margin-bottom: 0px" data-lang-en="Instant Web Builder" data-lang-id="Instant Web Builder"></h1>
                                <span data-lang-en="A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online." data-lang-id="Solusi cepat untuk membangun website profesional Anda. Pilih domain, pilih template, dan website Anda siap untuk online."></span>
                            </div>
                            <!-- Form untuk memasukkan nama domain -->            
                            <form style="margin-top: 20px"  id="domainForm" class="mt-30 mt-lg-30 w-100">
                                <div style="margin:0px;" class="form-row  d-flex align-items-center slider-search bg-white w-100">
                                    <input type="text" id="domain" name="domain" class="rounded-pill border-0 mr-lg-50" value="{{ request('domain') }}" required placeholder="Find your domain..."/>
                                    <button type="submit" class="btn rounded-pill" style="height:100%; margin:0px; opacity: 100%; background-color:#488EFE; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);"><b>Search</b></button>
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


        <div id="template" class=" serv container hero-text">

            <div class="serv container hero-text">
                <div class="col-md-3 col-12"></div>
                <div class=" col-md-6 col-12 container justify-content-center text-center">
                    <h3 class="template" lang="en" data-lang-en="Our Templates" data-lang-id="Template Kami">
                    </h3>
                    <p class="template-description" lang="en" 
                    data-lang-en="Transform your business vision into reality with our user-friendly templates that prioritize performance and style."
                    data-lang-id="Ubah visi bisnis Anda menjadi kenyataan dengan template kami yang mudah digunakan dan mengutamakan kinerja serta gaya.">
                    </p>

                </div>
                <div class="col-md-3 col-12"></div>
                
                <div>
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

        <div class="card" id="cart"> 
            <div>   
                <h5 data-lang-en="Order Summary" data-lang-id="Ringkasan Pemesanan"></h5>
                <div class="d-flex justify-content-between align-items-center">
                    <p data-lang-en="Domain (1 Year)" data-lang-id="Domain (1 Tahun)"></p>
                    <p id="domain-price" class=" price"></p>
                </div>
                <span id="selected-domain">-</span>
                <div class="d-flex justify-content-between align-items-center">
                    <p data-lang-en="Web Template" data-lang-id="Web Template"></p>
                    <p id="template-price" class=" price"></p>
                </div>
                <span id="selected-template">-</span>
            </div>
            <div style="margin-top: auto;">
                <button class="w-100 btn btn-primary" data-lang-en="Next" data-lang-id="Selanjutnya"></button>
            </div>
        </div>
        





    {{-- Footer Section --}}
    @include('partials.footer')
    <!-- Script untuk AJAX Pencarian -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>    
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
    <script>
//   JS untuk toggle bahasa
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
//   End JS untuk toggle bahasa


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
<script>
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
                            <p><b>${domain}.com</b> ${response.com}</p>
                            
                            <!-- Tombol hanya tampil jika domain tersedia -->
                            ${response.com === 'available' ? 
                                '<p class="price">Rp. 200.000</p><a href="#template"> <button class="btn-select" data-domain="' + domain + '.com" data-price="200000">Pilih Domain</button></a>' : 
                                ''}

                            <!-- Tombol ini hanya akan ditampilkan jika domain tidak tersedia, namun di-disable agar tidak bisa diklik -->
                            ${response.com === 'unavailable' ? 
                                '<button class="btn-select" style="opacity: 0; pointer-events: none;">Pilih Domain</button>' : 
                                ''}
                        </div>
                    </div>

                    <div class="carddomain ${response.id === 'available' ? 'available' : 'unavailable'}">
                        <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                            <p><b>${domain}.id</b> ${response.id === 'unavailable' ? 'Sudah Terdaftar' : ''}</p>
                            
                            <!-- Tombol hanya tampil jika domain tersedia -->
                            ${response.id === 'available' ? 
                                '<p class="price">Rp. 290.000</p><a href="#template"><button class="btn-select" data-domain="' + domain + '.id" data-price="290000">Pilih Domain</button></a>' : 
                                ''}        

                            <!-- Tombol ini hanya akan ditampilkan jika domain tidak tersedia, namun di-disable agar tidak bisa diklik -->
                            ${response.id === 'unavailable' ? 
                                '<button class="btn-select" style="opacity: 0; pointer-events: none;">Pilih Domain</button>' : 
                                ''}
                        </div>
                    </div>

                    <div class="carddomain ${response['co.id'] === 'available' ? 'available' : 'unavailable'}">
                        <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                            <p><b>${domain}.co.id</b> ${response['co.id'] === 'unavailable' ? 'Sudah Terdaftar' : ''}</p>
                            
                            <!-- Tombol hanya tampil jika domain tersedia -->
                            ${response['co.id'] === 'available' ? 
                                '<p class="price">Rp. 330.000</p><a href="#template"><button class="btn-select" data-domain="' + domain + '.co.id"data-price="330000">Pilih Domain</button></a>' : 
                                ''}
                               

                            <!-- Tombol ini hanya akan ditampilkan jika domain tidak tersedia, namun di-disable agar tidak bisa diklik -->
                            ${response['co.id'] === 'unavailable' ? 
                                '<button class="btn-select" style="opacity: 0; pointer-events: none;">Pilih Domain</button>' : 
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

        // Fungsi untuk memeriksa apakah domain atau template sudah dipilih
        function updateCartVisibility() {
            const isDomainSelected = $('#selected-domain').text().trim() !== '';
            const isTemplateSelected = $('#selected-template').text().trim() !== '';

            if (isDomainSelected || isTemplateSelected) {
                $('#cart').addClass('visible'); // Tampilkan cart dengan menambahkan kelas
            } else {
                $('#cart').removeClass('visible'); // Sembunyikan cart dengan menghapus kelas
            }
        }

        // Event listener untuk tombol "Pilih Domain"
        
            $(document).on('click', '.btn-select', function() {
            const selectedDomain = $(this).data('domain'); // Domain yang dipilih
            const selectedPrice = $(this).data('price');  // Harga domain

            $('#selected-domain').text(selectedDomain); // Tampilkan nama domain
            $('#domain-price').text('Rp. ' + selectedPrice.toLocaleString()); // Tampilkan harga domain
            updateCartVisibility();
        });

        // Event listener untuk tombol "Pilih Template"
        $(document).on('click', '.select', function() {
            var selectedTemplate = $(this).data('template-title');
            var selectedTemplateType = $(this).data('template-type');
            var selectedTemplatePrice = (selectedTemplateType === 'Basic') ? 0 : 500000;
            $('#selected-template').text(selectedTemplate); // Tampilkan judul template yang dipilih di order summary
            $('#template-price').text('Rp. ' + selectedTemplatePrice.toLocaleString()); // Tampilkan harga domain
            
            updateCartVisibility();
        });

       
    });

</script>  
</body>
</html>
