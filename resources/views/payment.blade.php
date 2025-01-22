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
                <div class="serv col-md-8 col-12">                
                    {{-- <div class="container"> --}}
                        <div class="cart stepHead">
                            <div class="d-flex align-items-center">
                                <div style="background: #66B2FF; border-top-left-radius: 10px; border-bottom-left-radius: 10px;" class="StepOfWizard col-3 active">
                                    <div class="step">
                                      <img class="stepIcon" src="img/domain.svg" alt="domain">
                                    </div>
                                    <h6>Website</h6>
                                  </div>
                                <div style="background: #66B2FF;" class="StepOfWizard col-3 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/hosting.svg" alt="Hosting">
                                  </div>
                                  <h6 data-lang-en="Subscription" data-lang-id="Langganan"></h6>
                                </div>
                                <div style="background: #66B2FF;" class="StepOfWizard col-3 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/form.svg" alt="Form">
                                  </div>
                                  <h6 data-lang-en="Personal Information" data-lang-id="Informasi Personal"></h6>
                                </div>
                                <div style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;" class="StepOfWizard col-3 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/pay.svg" alt="Payment">
                                  </div>
                                  <h6 data-lang-en="Payment" data-lang-id="Pembayaran"></h6>
                                </div>
                              </div>
                        </div>

                        <div class="cart">
                            <div class="section">
                                <h5 class="form-section" data-lang-en="Terms and Conditions" data-lang-id="Syarat dan Ketentuan">Terms and Conditions</h5>
                                    <h6 data-lang-en="Take a moment to review the terms before completing your payment, including delivery time, refund policy, and contact information for support." 
                                        data-lang-id="Harap baca syarat dan ketentuan berikut sebelum menyelesaikan pembayaran Anda, termasuk waktu pengiriman website, kebijakan pengembalian dana, dan info kontak untuk bantuan.">
                                        Take a moment to review the terms before completing your payment, including delivery time, refund policy, and contact information for support.</h6>
                            </div>
                            <ul>
                                <!-- New Point: Checkout Information Email -->
                                <li data-lang-en="You have been sent a checkout information email containing details of your order and payment instructions." 
                                    data-lang-id="Anda telah dikirimi email informasi checkout yang berisi detail pesanan dan instruksi pembayaran.">
                                    You have been sent a checkout information email containing details of your order and payment instructions.
                                </li>
                                <li data-lang-en="Make your payment within 48 hours after checkout to keep your order valid. Otherwise, it will be automatically canceled." 
                                    data-lang-id="Lakukan pembayaran sebelum 48 jam setelah checkout untuk menjaga pesanan Anda tetap berlaku. Jika tidak, pesanan akan dibatalkan otomatis.">
                                    Make your payment within 48 hours after checkout to keep your order valid. Otherwise, it will be automatically canceled.
                                </li>
                                <li data-lang-en="Your website will be ready and fully operational within 24 hours after payment." 
                                    data-lang-id="Website Anda akan selesai dan siap digunakan dalam waktu maksimal 24 jam setelah pembayaran.">
                                    Your website will be ready and fully operational within 24 hours after payment.
                                </li>
                                <li data-lang-en="If your website is not ready in 24 hours , you will receive a 100% refund." 
                                    data-lang-id="Jika website Anda belum siap dalam 24 jam, Anda akan mendapatkan refund 100%.">
                                    If your website is not ready in 24 hours, you will receive a 100% refund.
                                </li>
                                <li data-lang-en="If your website is not ready within the specified time frame, you will receive a 100% refund." 
                                    data-lang-id="Jika website Anda belum siap dalam waktu tersebut, Anda akan mendapatkan refund 100%.">
                                    If your website is not completed within the specified time frame, you will receive a 100% refund.
                                </li>
                                <li data-lang-en="Ensure the information provided during registration is accurate and complete." 
                                    data-lang-id="Pastikan informasi yang diberikan selama pendaftaran akurat dan lengkap.">
                                    Ensure the information provided during registration is accurate and complete.
                                </li>                                
                                <!-- Deliverables Section -->
                                <li data-lang-en="Once your website is ready, you will receive your website credentials along with an easy-to-follow guide to help you edit and manage your website." 
                                    data-lang-id="Setelah website Anda siap, Anda akan menerima kredensial website Anda beserta panduan mudah yang membantu Anda mengedit dan mengelola website Anda.">
                                    Once your website is ready, you will receive your website credentials along with an easy-to-follow guide to help you edit and manage your website.
                                </li>
                                <!-- Business email matching domain -->
                                <li
                                    data-lang-en="You will also get a custom business email matching your domain, You can contact us to claim your email." 
                                    data-lang-id="Anda juga akan mendapatkan email bisnis khusus yang sesuai dengan domain Anda, Anda bisa menghubungi kami untuk klaim email Anda.">
                                    You will also get a custom business email matching your domain, You can contact us to claim your email.
                                </li>  
                                <li data-lang-en="By completing your payment, you agree to our Privacy Policy and Terms of Service." 
                                    data-lang-id="Dengan menyelesaikan pembayaran, Anda menyetujui Kebijakan Privasi dan Syarat Layanan kami.">
                                    By completing your payment, you agree to our Privacy Policy and Terms of Service.
                                </li>                              
                                <!-- Contact Information Section -->
                                <li data-lang-en="To claim your refund or if you have any further questions, please don't hesitate to contact us." 
                                    data-lang-id="Untuk klaim pengembalian dana atau jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.">
                                    To claim your refund or if you have any further questions, please don't hesitate to contact us.
                                </li>
                            </ul>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="acceptTerms" required>
                                <label class="form-check-label" for="acceptTerms">
                                    I agree to the Terms and Conditions
                                </label>
                            </div>                             
                        </div>
                    {{-- </div>--}}
                </div> 
                {{-- Cart --}}
                <div class="serv col-md-4 col-12">                
                    <div class="cart order">
                        <div>   
                            <h5 style="text-align:center" data-lang-en="Order Summary" data-lang-id="Ringkasan Pemesanan">Order Summary</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-left">
                                    <p class="cart-title">Domain (</p><p style="margin-right: 2px" class="cart-title" id="domainYears">1</p><p class="cart-title" data-lang-en="Years)" data-lang-id="Tahun)">Years)</p>
                                </div>
                                <p class="cart-title" id="domain-price" class=" price"></p>
                            </div>
                            <span class="cart-des" id="selected-domain">-</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="cart-title">Web Template</p>
                                <p class="cart-title" id="template-price" class=" price"></p>
                            </div>
                            <span class="cart-des" id="selected-template">-</span>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-left">
                                    <p class="cart-title" data-lang-en="Subscription (" data-lang-id="Langanan (">Subscription (</p><p style="margin-right: 2px" class="cart-title" id="subYears">1</p><p class="cart-title" data-lang-en="Years)" data-lang-id="Tahun)">Years)</p>
                                </div>
                                    <p class="cart-title" id="subs-price-cart" class=" price">Rp. 0</p>
                            </div>
                            <span class="cart-des" id="" data-lang-en="Subscription fee for website management service." data-lang-id="Biaya langganan untuk layanan pengelolaan website"></span>

                            <div class="Subtotal d-flex justify-content-between align-items-center">
                                <h5 class="cart-title">Total</h5>
                                <h5 class="cart-title" id="Subtotal" class="price"></h5>
                            </div>                
                            <button style="font-weight: bolder" data-lang-en="Pay" data-lang-id="Bayar" id="pay-button" type="submit" class="w-100 btn btn-primary" disabled>Pay</button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<script src="{{ config('midtrans.API') }}" data-client-key="MIDTRANS_CLIENT_KEY"></script>

<script>
    sessionStorage.clear();
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('acceptTerms');
        const payButton = document.getElementById('pay-button');

        // Pastikan tombol "Pay" awalnya dinonaktifkan
        payButton.disabled = true;

        // Tambahkan event listener untuk checkbox
        checkbox.addEventListener('change', function () {
            payButton.disabled = !this.checked;
        });
    });
</script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        
        snap.pay('{{ $order->snapKey }}', {
          
          onSuccess: function(result){           
            Swal.fire({
                title: 'Success!',
                text: 'Your payment was successful.',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {        
                var snapKey = '{{ $order->snapKey }}';
                var orderId = result.order_id;
                var paymentType = result.payment_type;
                

                // Arahkan ke route updateStatus dengan parameter snapKey dan orderId
                window.location.href = "/update-status?snapKey=" + snapKey + "&paymentType=" + paymentType;
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
