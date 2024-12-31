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
    <button id="floatingButton" onclick="topFunction()">
        <svg width="18px" height="18px" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" stroke="currentColor" stroke-width="1.5" d="m9 1.196 6.188 6.188 -0.746 0.746 -4.915-4.915v13.592h-1.054V3.213L3.556 8.13l-0.744-0.747Z"/>
        </svg>
    </button>
    <button id="whatsapp">
        <a href="https://wa.me/62895340307548" target="_blank">
            <svg width="50px" height="50px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z" fill="#BFC8D0"/>
                <path d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z" fill="url(#paint0_linear_87_7264)"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z" fill="white"/>
                <path d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z" fill="white"/>
                <defs>
                    <linearGradient id="paint0_linear_87_7264" x1="26.5" y1="7" x2="4" y2="28" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#5BD066"/>
                        <stop offset="1" stop-color="#27B43E"/>
                    </linearGradient>
                </defs>
            </svg>
        </a>
    </button>

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


    {{-- Footer Section --}}
    @include('partials.footer')

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
