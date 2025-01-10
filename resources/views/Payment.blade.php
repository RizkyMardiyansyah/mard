<style>
    .form-group{
        margin-top: 20px;
        font-size: 14px !important;
        input{
            font-size: 14px !important;
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
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="title" content="Mitra Adidaya Rekayasa Digital">
    <title>Mitra Adidaya Rekayasa Digital</title>
    {{-- <title>{{ $sitename }}</title> --}}
    <meta name="keywords" content="digital solutions, business optimization, software development, IT consulting, buat website, domain, website, software, development, IT consultant">
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
                @csrf
                <div class="serv col-md-8 col-12">                
                    <div class="container">
                        <div class="cart">
                            <div class="section">
                                <h5 class="form-section" data-lang-en="Personal Information" data-lang-id="Informasi Personal"></h5>
                                <h6 data-lang-en="The required information needed to register your domain" data-lang-id="Informasi yang diperlukan untuk mendaftarkan domain Anda"> </h6>
                            </div>                                
                        </div>
                    </div>                               
                </div> 
                {{-- Cart --}}
                <div class="serv col-md-4 col-12">                
                    <div class="cart order">
                        <div>   
                            <h5 style="text-align:center" data-lang-en="Order Summary" data-lang-id="Ringkasan Pemesanan"></h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-left">
                                    <p class="cart-title" data-lang-en="Domain (" data-lang-id="Domain ("></p><p style="margin-right: 2px" class="cart-title" id="domainYears">1</p><p class="cart-title" data-lang-en="Years)" data-lang-id="Tahun)"></p>
                                </div>
                                <p class="cart-title" id="domain-price" class=" price"></p>
                            </div>
                            <span class="cart-des" id="selected-domain">-</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="cart-title" data-lang-en="Web Template" data-lang-id="Web Template"></p>
                                <p class="cart-title" id="template-price" class=" price"></p>
                            </div>
                            <span class="cart-des" id="selected-template">-</span>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-left">
                                    <p class="cart-title" data-lang-en="Subscription (" data-lang-id="Langanan ("></p><p style="margin-right: 2px" class="cart-title" id="subYears">1</p><p class="cart-title" data-lang-en="Years)" data-lang-id="Tahun)"></p>
                                </div>
                                    <p class="cart-title" id="subs-price-cart" class=" price">Rp. 0</p>
                            </div>
                            <span class="cart-des" id="" data-lang-en="Subscription fee for website management service." data-lang-id="Biaya langganan untuk layanan pengelolaan website"></span>

                            <div class="Subtotal d-flex justify-content-between align-items-center">
                                <h5 class="cart-title" data-lang-en="Subtotal" data-lang-id="Subtotal"></h5>
                                <h5 class="cart-title" id="Subtotal" class="price"></h5>
                            </div>                
                            <button id="pay-button" type="submit"  class="w-100 btn btn-primary" data-lang-en="Pay" data-lang-id="Bayar"></button>
                            {{-- <pre><div id="result-json">JSON result will appear here after payment:<br></div></pre>  --}}
                        </div>
                    </div>
                </div>      
                {{-- End Cart --}}
            </div>
        
    </div>

{{-- Footer Section --}}
@include('partials.footer')

<!-- Script untuk AJAX Pencarian -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="MIDTRANS_CLIENT_KEY"></script>

    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('{{ $order->snapKey }}', {
          // Optional
          onSuccess: function(result){
            Swal.fire({
                title: 'Success!',
                text: 'Your payment was successful.',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {              

                var snapKey = '{{ $order->snapKey }}';
                var orderId = result.order_id; // order_id yang didapat dari Snap API result

                // Arahkan ke route updateStatus dengan parameter snapKey dan orderId
                window.location.href = "/update-status?snapKey=" + snapKey + "&orderId=" + orderId;
            });

          },
          // Optional
          onPending: function(result){
            Swal.fire({
                title: 'Pending!',
                text: 'Your payment is pending. Please complete the payment.',
                icon: 'info',
                confirmButtonText: 'OK'
            }).then(() => {
                // Lakukan tindakan tambahan jika diperlukan
                console.log(result); // Untuk debugging
            });
          },
          // Optional
          onError: function(result){
            Swal.fire({
                title: 'Error!',
                text: 'There was an error with your payment. Please try again.',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then(() => {
                // Lakukan tindakan tambahan jika diperlukan
                console.error(result); // Untuk debugging
            });
          }
        });
      };
    </script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Memastikan nilai variabel Blade dibungkus dengan tanda kutip jika merupakan string
        const domain = "{{ $order->domain }}" || "-";
        const template = "{{ $template->title }}" || "-";
        const subYears = "{{ $subs->year }}" || "1";
        const domainPrice = Math.floor(parseFloat("{{ $order->domainCost }}") || 0);
        const templatePrice = Math.floor(parseFloat("{{ $order->templateCost }}") || 0);
        const subsPrice = Math.floor(parseFloat("{{ $subs->price }}") || 0);
        const subtotal = Math.floor(parseFloat("{{ $order->total_payment }}") || 0);

        // Fungsi untuk format nilai menjadi format Rupiah
        const formatRupiah = (value) => value >= 0 ? `Rp. ${value.toLocaleString('id-ID')}` : "-";

        // Menampilkan nilai yang sudah diformat pada elemen yang sesuai
        document.getElementById("selected-domain").innerText = domain;
        document.getElementById("domain-price").innerText = formatRupiah(domainPrice);
        document.getElementById("selected-template").innerText = template;
        document.getElementById("template-price").innerText = formatRupiah(templatePrice);
        document.getElementById("domainYears").innerText = subYears;
        document.getElementById("subYears").innerText = subYears;
        document.getElementById("subs-price-cart").innerText = formatRupiah(subsPrice);
        document.getElementById("Subtotal").innerText = formatRupiah(subtotal);
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

  
</body>
</html>
