<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    {{-- <title>Mitra Adidaya Rekayasa Digital</title> --}}
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
    <button id="floatingButton" onclick="topFunction()">
        <svg width="18px" height="18px" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" stroke="currentColor" stroke-width="1.5" d="m9 1.196 6.188 6.188 -0.746 0.746 -4.915-4.915v13.592h-1.054V3.213L3.556 8.13l-0.744-0.747Z"/>
        </svg>
    </button>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light" style="background-color: transparent; transition: background-color 0.5s;">
        <div class="container">
            <a class="navbar-brand blue" href="index.php"><img  src="img/MardBlue.svg" height="50px" style="padding: 5px;"></a>
            <a class="navbar-brand white" href="index.php"><img src="img/MardWhite.svg" height="50px" style="padding: 5px;"></a>
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
                    <li class="nav-item"><a class="nav-link" href="">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section-domain d-flex align-items-center justify-content-center" style="height: 100vh;"> <!-- Tambahkan d-flex dan align-items-center -->
        <div class="hero-overlay-domain">
            <div class="container-global hero-text-domain text-center">
                <div class="">
                    <div class="row">
                        <div class="col">
                            <div class="container">
                            <h1 data-lang-en="Create Your Own Website" data-lang-id="Buat Wesbsitemu Sendiri"></h1>
                            <span data-lang-en="Find Your Domain, Select Your Template, and Launch Your Website with Ease. Take Your Business Digital Today!" data-lang-id="Temukan Domain Anda, Pilih Template, dan Luncurkan Website dengan Mudah. Jadikan Bisnismu Digital Sekarang!"></span>
                            </div>
                            <!-- Form untuk memasukkan nama domain -->            
                            <form style="margin-top: 20px"  id="domainForm" class="mt-30 mt-lg-30 w-100">
                                <div style="margin:0px;" class="form-row  d-flex align-items-center slider-search bg-white w-100">
                                    <input type="text" id="domain" name="domain" class="rounded-pill border-0 mr-lg-50" required placeholder="Find your business domain..."/>
                                    <button type="submit" class="btn rounded-pill" style="height:100%; margin:0px; opacity: 100%; background-color:#FFCB47; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);"><b>Cari Domain</b></button>
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
    </div>


    <div class="serv container hero-text">

        <div class="serv container hero-text">
            
            <h1>Our Template</h1>
        
            <!-- Form Pencarian -->
            <form id="searchTemplateForm" action="{{ route('searchtemplate') }}" method="POST">
                @csrf <!-- Ini untuk melindungi dari CSRF -->
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search by title" required>
                    <button style="opacity: 100%; margin-top:0px" class="btn btn-primary" type="submit">Search</button>
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



<!-- Script untuk AJAX Pencarian -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


    <div class="container-fluid py-5" id="contact">
        <div class="container" style="width:80%">
            <footer class="sk">
                <p>Copyright © <b>2024</b> Rizky Mardiyansyah. All Rights Reserved</p>
            </footer>
        </div>
    </div>

    <script>
window.onload = function() {
  document.getElementById('languageToggle').checked = true; // Toggle default ke 'true' untuk bahasa Inggris
    switchLanguage('en'); // Set bahasa default ke Bahasa Inggris
};

const toggleCheckbox = document.getElementById('languageToggle');
const toggleInner = document.querySelector('.toggle-inner');

toggleCheckbox.addEventListener('change', function() {
    const selectedLang = toggleCheckbox.checked ? 'en' : 'id';
    switchLanguage(selectedLang);

    // Ubah teks yang ditampilkan
    toggleInner.textContent = toggleCheckbox.checked ? 'EN' : 'IN';
});

function switchLanguage(lang) {
    const elements = document.querySelectorAll('[data-lang-en]');

    elements.forEach(element => {
        element.textContent = element.getAttribute('data-lang-' + lang);
    });
}
document.getElementById('languageToggle').addEventListener('change', function() {
    if (this.checked) {
        // Logic saat toggle aktif
        console.log('Bahasa diubah ke EN');
    } else {
        // Logic saat toggle tidak aktif
        console.log('Bahasa diubah ke IN');
    }
});

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
                            <p>${domain}.com: ${response.com}</p>
                            ${response.com === 'available' ? '<button class="btn-select">Pilih Domain</button>' : ''}
                        </div>
                    </div>

                    <div class="carddomain ${response.id === 'available' ? 'available' : 'unavailable'}">
                        <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                            <p>${domain}.id: ${response.id}</p>
                            ${response.id === 'available' ? '<button class="btn-select">Pilih Domain</button>' : ''}
                        </div>
                    </div>

                    <div class="carddomain ${response['co.id'] === 'available' ? 'available' : 'unavailable'}">
                        <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                            <p>${domain}.co.id: ${response['co.id']}</p>
                            ${response['co.id'] === 'available' ? '<button class="btn-select">Pilih Domain</button>' : ''}
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
    });
</script>
  
</body>
</html>
