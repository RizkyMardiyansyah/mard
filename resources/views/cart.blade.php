<style>
    .form-group{
        margin-top: 20px;
        font-size: 12px !important;
        input{
            font-size: 12px !important;
            padding:10px;
        }
    }
    .navbar{
        background-color: rgba(255, 255, 255, 0.9) !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan saat discroll */
        .nav-link{
        color: #191250 !important;
        }
        .white{      
        display:none;   
        }
        .blue{
        display:block;
        }
    }

    #home{
        background-color: #FAFAFA;
        /* background-color: rgba(0, 0, 0, 0.9) !important; */
    }

</style>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="title" content="Mitra Adidaya Rekayasa Digital">
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

    <div id="services" class="services container hero-text ">
        <div class="row">
            
            <div class="serv col-md-8 col-12">                
                <div class="">
                    <div class="container">
                        <!-- Website Information Section -->
                        {{-- <div class="section serv col-md-8 col-12">
                            <h5 style="color: black;" data-lang-en="Personal Information" data-lang-id="Informasi Personal"></h5>
                            <form>
                                <div class="form-group">
                                    <label for="domain">Domain</label>
                                    <input type="text" id="domain" name="domain" class="form-control" placeholder="Enter your domain" required maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label for="template">Template</label>
                                    <select id="template" name="template" class="form-control" required>
                                        <!-- Options would be dynamically populated -->
                                        <option value="1">Template 1</option>
                                        <option value="2">Template 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="Paying">Paying</option>
                                        <option value="Developing">Developing</option>
                                        <option value="Online">Online</option>
                                        <option value="Renewing">Renewing</option>
                                        <option value="Offline">Offline</option>
                                    </select>
                                </div>
                            </form>
                        </div> --}}
                    
                        <!-- Personal Information Section -->
                        <div class="cart">
                            <h5 class="form-section" data-lang-en="Personal Information" data-lang-id="Informasi Personal"></h5>
                            <form>
                                <div class="form-group">
                                    <label class="form-label" for="nik">NIK</label>
                                    <input type="text" id="nik" name="nik" class="form-control" placeholder="Enter your NIK" required maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required maxlength="255">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="Enter your phone number" required maxlength="255">
                                </div>
                            </form>
                        </div>
                    
                        <!-- Additional Documents Section -->
                        <div class="cart" style="margin-top: 20px">
                            <h5 class="form-section" style="color: black;" data-lang-en="Supporting Documents" data-lang-id="Dokumen Pendukung"></h5>
                            <form>
                                <div class="form-group">
                                    <label class="form-label" for="ktp">KTP</label>
                                    <input type="file" id="ktp" name="ktp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="siup">SIUP</label>
                                    <input type="file" id="siup" name="siup" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="npwp">NPWP</label>
                                    <input type="file" id="npwp" name="npwp" class="form-control">
                                </div>
                            </form>
                        </div>
                    
                        <!-- Payment Information Section -->
                        {{-- <div class="section serv col-md-8 col-12">
                            <h4>Payment Information</h4>
                            <form>
                                <div class="form-group">
                                    <label for="subscription">Subscription</label>
                                    <select id="subscription" name="subscription" class="form-control">
                                        <!-- Options would be dynamically populated -->
                                        <option value="1">Subscription 1</option>
                                        <option value="2">Subscription 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="initial_domain_cost">Initial Domain Cost</label>
                                    <input type="number" id="initial_domain_cost" name="initial_domain_cost" class="form-control" placeholder="Enter the cost">
                                </div>
                                <div class="form-group">
                                    <label for="renewal_cost">Renewal Cost</label>
                                    <input type="number" id="renewal_cost" name="renewal_cost" class="form-control" placeholder="Enter the cost">
                                </div>
                                <div class="form-group">
                                    <label for="hosting_cost">Hosting Cost</label>
                                    <input type="number" id="hosting_cost" name="hosting_cost" class="form-control" placeholder="Enter the cost">
                                </div>
                                <div class="form-group">
                                    <label for="total_payment">Total Payment</label>
                                    <input type="number" id="total_payment" name="total_payment" class="form-control" placeholder="Enter the total payment">
                                </div>
                                <div class="form-group">
                                    <label for="va">Virtual Account</label>
                                    <input type="text" id="va" name="va" class="form-control" placeholder="Enter the virtual account">
                                </div>
                            </form>
                        </div> --}}
                    </div>
                    
                </div>                
            </div> 
            <div class="serv col-md-4 col-12">                
                    <div class="cart order">
                        <div>   
                            <h5 style="text-align:center" data-lang-en="Order Summary" data-lang-id="Ringkasan Pemesanan"></h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="cart-title" data-lang-en="Domain (1 Year)" data-lang-id="Domain (1 Tahun)"></p>
                                <p class="cart-title" id="domain-price" class=" price"></p>
                            </div>
                            <span class="cart-des" id="selected-domain">-</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="cart-title" data-lang-en="Web Template" data-lang-id="Web Template"></p>
                                <p class="cart-title" id="template-price" class=" price"></p>
                            </div>
                            <span class="cart-des" id="selected-template">-</span>

                            <div class="Subtotal d-flex justify-content-between align-items-center">
                                <h5 class="cart-title" data-lang-en="Subtotal" data-lang-id="Subtotal"></h5>
                                <h5 class="cart-title" id="Subtotal" class="price"></h5>
                            </div>

                            <button  class="w-100 btn btn-primary" data-lang-en="Next" data-lang-id="Selanjutnya"></button>
                        </div>
                    </div>
                
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
    document.addEventListener("DOMContentLoaded", function () {
        // Ambil data dari localStorage
        const domain = localStorage.getItem("domain") || "-";
        const template = localStorage.getItem("template") || "-";
        const domainPrice = parseInt(localStorage.getItem("domainPrice")?.replace(/[^\d]/g, '') || "0", 10);
        const templatePrice = parseInt(localStorage.getItem("templatePrice")?.replace(/[^\d]/g, '') || "0", 10);
        
        const Subtotal = domainPrice + templatePrice;

        // Format harga ke dalam format Rupiah
        const formatRupiah = (value) => value >= 0 ? `Rp. ${value.toLocaleString('id-ID')}` : "-";

        // Tampilkan data di halaman
        document.getElementById("selected-domain").innerText = domain;
        document.getElementById("domain-price").innerText = formatRupiah(domainPrice);
        document.getElementById("selected-template").innerText = template;
        document.getElementById("template-price").innerText = formatRupiah(templatePrice);
        document.getElementById("Subtotal").innerText = formatRupiah(Subtotal);
    });
</script>
  
</body>
</html>
