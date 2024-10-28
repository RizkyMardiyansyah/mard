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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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
                            {{-- <form style="margin-top: 20px"  id="domainForm">
                                <div class="form-row">
                                    <input type="text" id="domain" name="domain" required placeholder="Find your business domain...">
                                    <button type="submit" class="btn" style="opacity: 100%; background-color:#FFCB47"><b>Cari Domain</b></button>
                                </div>
                            </form> --}}
                            <form style="margin-top: 20px"  id="domainForm" class="mt-30 mt-lg-30 w-100">
                                <div style="margin:0px;" class="form-row  d-flex align-items-center slider-search p-10 bg-white w-100">
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

        <h1>Our Template</h1>

    <!-- Form Pencarian -->
<form id="searchTemplateForm" action="{{ route('searchtemplate') }}" method="POST">
    @csrf <!-- Ini untuk melindungi dari CSRF -->
    <input type="text" name="search" id="search" placeholder="Search by title" required>
    <button type="submit">Search</button>
   <!-- Spinner untuk loading animation -->
   <div style="margin-top: 50px" class="spinner" id="spinnerr"></div>
</form>

<div class="card-container container row" id="templateContainer">
    @foreach($templates as $template)
    <div class="card col-lg-4 col-md-6 col-12">
        <img src="{{ asset('storage/' . $template->image) }}" alt="{{ $template->title }}" class="card-img-top">        
        <div class=" d-flex" style="padding: 0px">
            <div class="card-title">{{ $template->title }}</div>            
            <div class="d-flex" style="margin-left: auto">
                <a href="#"  class="view d-flex align-items-center justify-content-center"><i class="fas fa-check"></i></a>
                <a href="{{ $template->link }}" target="_blank" class="view d-flex align-items-center justify-content-center" ><i class="fas fa-eye"></i></a>
            </div>
        </div>
    </div>
    
    @endforeach
</div>
<div class="order-section container hero-text" style="margin-top: 50px;">
    <h2>Order Your Website</h2>
    <form id="orderForm" action="{{ route('orderstore') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="domain" class="form-label">DOMAIN</label>
            <input type="text" class="form-control" id="domain" name="domain" required placeholder="Enter your Domain">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" required placeholder="Enter your NIK">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your full name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone_number" name="phone_number" required placeholder="Enter your phone number">
        </div>
        <div class="mb-3">
            <label for="template" class="form-label">Selected Template</label>
            <select class="form-select" id="template" name="template" required>
                <option value="" disabled selected>Select a template</option>
                @foreach($templates as $template)
                    <option value="{{ $template->id }}">{{ $template->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="Pending Payment">Pending Payment</option>
                <option value="In Progress">In Progress</option>
                <option value="Active">Active</option>
                <option value="Pending Renewal">Pending Renewal</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>
</div>



<!-- Menampilkan Pagination -->
<div class="pagination">
    {{ $templates->links() }} <!-- Menampilkan link pagination -->
</div>
<script>
    document.getElementById('orderForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Mencegah pengiriman form normal

        const formData = new FormData(this); // Ambil data dari form

        fetch('{{ route('orderstore') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Lihat respons dari server
            alert('Order submitted successfully!');
        })
        .catch(error => console.error('Error:', error));
    });
</script>


<!-- Script untuk AJAX Pencarian -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchTemplateForm').on('submit', function(e) {
            e.preventDefault(); // Mencegah form dari submit standar

            let searchQuery = $('#search').val(); // Ambil nilai input pencarian
            $('#spinnerr').show(); // Tampilkan spinner

            $.ajax({
                url: $(this).attr('action'), // URL action form
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // Token CSRF
                    search: searchQuery // Data pencarian
                },
                success: function(response) {
                    $('#spinnerr').hide(); // Sembunyikan spinner
                    $('#templateContainer').html(''); // Kosongkan kontainer template

                    // Jika ada template yang ditemukan, tambahkan ke kontainer
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
                                        <a href="${template.link}"target="_blank"
                                        class="view d-flex align-items-center justify-content-center">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            `);
                        });
                    } else {
                        $('#templateContainer').append('<p>No templates found.</p>'); // Pesan jika tidak ada template ditemukan
                    }
                },
                error: function() {
                    $('#spinnerr').hide(); // Sembunyikan spinner
                    alert('An error occurred while searching. Please try again.'); // Pesan error
                }
            });
        });
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
