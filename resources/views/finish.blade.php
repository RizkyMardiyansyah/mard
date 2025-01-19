<style>
    #pay-button:disabled {
    opacity: 0.3;
    cursor: not-allowed;
    }

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
    
    ul{
        margin-top: 20px !important;
        font-size: 14px;
        font-weight: normal;
        li{
            margin-bottom:10px;
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
                <div class="finishCart container serv">                
                    <div class="container">
                        <div class="cart stepHead">
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="background: #66B2FF; border-top-left-radius: 10px; border-bottom-left-radius: 10px;" class="StepOfWizard col-4 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/hosting.svg" alt="Hosting">
                                  </div>
                                  <h6 data-lang-en="Subscription" data-lang-id="Langganan"></h6>
                                </div>
                                <div style="background: #66B2FF;" class="StepOfWizard col-4 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/form.svg" alt="Form">
                                  </div>
                                  <h6 data-lang-en="Personal Information" data-lang-id="Informasi Personal"></h6>
                                </div>
                                <div style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;" class="StepOfWizard col-4 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/pay.svg" alt="Payment">
                                  </div>
                                  <h6 data-lang-en="Payment" data-lang-id="Pembayaran"></h6>
                                </div>
                              </div>
                        </div>

                        <div class="cart">
                            <div class="section">
                                <h5 style="text-align: center; font-size:30px !important;" class="form-section mb-4" data-lang-en="Payment Success" data-lang-id="Pembayaran Behasil">Payment Success</h5>
                                    <h6 style="text-align:center; font-family: Poppins;">{{ $order->updated_at->translatedFormat('d F Y | H:i:s') }}</h6>
                            </div>
                            <div>
                                <p class="cart-title" data-lang-en="Dear" data-lang-id="Yth">Dear <b class="cart-title">{{ $order->name }}</b>,</p>
                                <p class="cart-title" data-lang-en="Thank you for your payment! We have successfully received your payment. Please find your order details below:" data-lang-id="Terima kasih atas pembayaran Anda! Pembayaran Anda telah kami terima dengan sukses. Silakan lihat detail pesanan Anda di bawah ini:">
                                    Thank you for your payment! We have successfully received your payment. Please find your order details below:
                                </p>

                                
                                <div style="padding: 20px">
                                    <div style="border: none" class="cart order">   
                                        
                                        <div style="padding: 0px" class="cart mb-4">
                                            <div class="section p-0">
                                                <p  class="cart-title" style="text-align:center; font-weight:bold" data-lang-en="Payment Details" data-lang-id="Rincian Pembayaran">Payment Details</p>
                                            </div>
                                            <div class="p-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="cart-title" data-lang-en="Payment Status" data-lang-id="Status Pembayaran">Payment Status</p>
                                                    <div id="discoutContainer" style="display: flex; align-items: center;">    
                                                        <p id="hemat" class="display-price" data-lang-en="Success" data-lang-id="Berhasil"></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="cart-title" data-lang-en="Order ID" data-lang-id="ID Pemesanan">Order ID</p>
                                                    <p class="cart-title value">{{ $order->orderId }}</p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="cart-title" data-lang-en="Payment Time" data-lang-id="Waktu Pembayaran">Payment Time</p>
                                                    <p class="cart-title value">{{ $order->updated_at->translatedFormat('d F Y | H:i:s') }}</p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">                                                
                                                    <p class="cart-title" data-lang-en="Payment Method" data-lang-id="Metode Pembayaran">Payment Method</p>                                               
                                                    <p class="cart-title  value">{{ $order->paymentType }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-0 cart mb-4">
                                            <div class="section p-0">
                                                <p  class="cart-title" style="text-align:center; font-weight:bold" data-lang-en="Order Details" data-lang-id="Rincian Pemesanan">Order Details</p>
                                            </div>
                                            <div class="p-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex justify-content-left">
                                                        <p class="cart-title">Domain (</p><p style="margin-right: 2px" class="cart-title">{{ $subs->year }}</p><p class="cart-title" data-lang-en="Years)" data-lang-id="Tahun)">Years)</p>
                                                    </div>
                                                    <p class="cart-title" id="domain-price" class=" price">{{ $order->domainCost == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order->domainCost, 2, ',', '.') }}</p>
                                                </div>
                                                <span class="cart-des">{{ $order->domain }}</span>
                                                <div class="mt-2 d-flex justify-content-between align-items-center">
                                                    <p class="cart-title">Web Template</p>
                                                    <p class="cart-title" class=" price">{{ $order->tetemplateCostmola == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order->tetemplateCostmola, 2, ',', '.') }}</p>
                                                </div>
                                                <span class="cart-des">{{ $template->title }}</span>
                    
                                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex justify-content-left">
                                                        <p class="cart-title" data-lang-en="Subscription (" data-lang-id="Langanan (">Subscription (</p><p style="margin-right: 2px" class="cart-title">{{ $subs->year }}</p><p class="cart-title" data-lang-en="Years)" data-lang-id="Tahun)">Years)</p>
                                                    </div>
                                                        <p class="cart-title" id="subs-price-cart" class=" price">{{ $subs->price == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $subs->price, 2, ',', '.') }}</p>
                                                </div>
                                                <span class="cart-des" id="" data-lang-en="Subscription fee for website management service." data-lang-id="Biaya langganan untuk layanan pengelolaan website"></span>
                    
                                                <div class="Subtotal d-flex justify-content-between align-items-center">
                                                    <h5 style="font-weight: 700 !important;" class="cart-title" data-lang-en="Total Payment" data-lang-id="Total Pembayaran">Total Payment</h5>
                                                    <h5 style="font-weight:  700 !important;" class="cart-title" class="price">{{ $order->total_payment == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order->total_payment, 2, ',', '.') }}</h5>
                                                </div>  
                                            </div>              
                                        </div>
                                        <div class="p-0 cart mb-4">
                                            <div class="section p-0">
                                                <p  class="cart-title" style="text-align:center; font-weight:bold" data-lang-en="Note" data-lang-id="Catatan">Note</p>
                                            </div>
                                            <ul class="pl-5 pt-3 m-0">
                                                <!-- Website readiness and guarantee -->
                                                <li class="cart-title" 
                                                    data-lang-en="Your website will be ready and fully operational within 24 hours after payment ({{ $order->updated_at->addHours(24)->format('d M F H:i:s') }})." 
                                                    data-lang-id="Websitemu akan selesai dan siap digunakan dalam waktu maksimal 24 jam setelah pembayaran ({{ $order->updated_at->addHours(24)->format('d M F H:i:s') }}).">
                                                    Your website will be ready and fully operational within 24 hours after payment ({{ $order->updated_at->addHours(24)->format('d F Y H:i:s') }}).
                                                </li>
                                            
                                                <!-- Credentials and guide for website management -->
                                                <li class="cart-title" 
                                                    data-lang-en="Once your website is ready, you will receive your website credentials along with an easy-to-follow guide to help you edit and manage your website." 
                                                    data-lang-id="Setelah website Anda siap, Anda akan menerima kredensial website Anda beserta panduan mudah yang membantu Anda mengedit dan mengelola website Anda.">
                                                    Once your website is ready, you will receive your website credentials along with an easy-to-follow guide to help you edit and manage your website.
                                                </li>
                                                <!-- Business email matching domain -->
                                                <li class="cart-title" 
                                                    data-lang-en="You will also get a custom business email matching your domain, You can contact us to claim your email." 
                                                    data-lang-id="Anda juga akan mendapatkan email bisnis khusus yang sesuai dengan domain Anda, Anda bisa menghubungi kami untuk klaim email Anda.">
                                                    You will also get a custom business email matching your domain, You can contact us to claim your email.
                                                </li>

                                                <!-- Refund guarantee if website is not ready on time -->
                                                <li class="cart-title" 
                                                    data-lang-en="If your website is not ready at {{ $order->updated_at->addHours(24)->format('d F Y H:i:s') }}, you will receive a 100% refund." 
                                                    data-lang-id="Jika website Anda belum siap pada {{ $order->updated_at->addHours(24)->format('d F Y H:i:s') }}, Anda akan mendapatkan refund 100%.">
                                                    If your website is not ready at {{ $order->updated_at->addHours(24)->format('d M Y H:i:s') }}, you will receive a 100% refund.
                                                </li>
                                            
                                                <!-- Contact information for refund or further questions -->
                                                <li class="cart-title" 
                                                    data-lang-en="To claim your refund or if you have any further questions, please don't hesitate to contact us." 
                                                    data-lang-id="Untuk klaim refund atau jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.">
                                                    To claim your refund or if you have any further questions, please don't hesitate to contact us.
                                                </li>                                          
                                            </ul>
                                        </div>
                                        <a href="/" style="font-weight: bolder" data-lang-en="Home Page" data-lang-id="Halaman Utama" type="submit" class="w-100 btn btn-primary">Home Page</a>
                                    </div>
                                </div>

                            </div>
                                                       
                        </div>
                    </div>
                </div> 
            </div>
        
    </div>

{{-- Footer Section --}}
@include('partials.footer')

<!-- Script untuk AJAX Pencarian -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>



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
