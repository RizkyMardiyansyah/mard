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
      <meta property="og:site_name" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:title" content="Mardsoft | Instant Web Builder Payment">
      <meta property="og:description" content="Penyedia solusi digital untuk optimasi bisnis Anda.">
      <meta property="og:url" content="https://www.mardsoft.com">
      <meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
      <title>Mardsoft | Instant Web Builder Payment</title>
      <meta name="keywords" content="jasa buat website jakarta, jasa buat website jakarta timur, jasa buat website jaktim, digital solutions, business optimization, software development, IT consulting, buat website, domain, website, website jakarta, website jakarta timur, website jaktim, software, development, IT consultant jakarta, IT consultant jakarta timur, IT consulting jakarta, IT consulting jakarta timur, IT consultant jaktim, IT consulting jaktim">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>


  <body id="home">
    {{-- navbar section --}}
    @include('partials.navbar')

    <div id="services" class="services container hero-text ">
        
            <div class="row">
                @csrf
                <div class="serv col-lg-8 col-12">
                        <div class="cart stepHead">
                            <div class="d-flex align-items-center">
                                <div style="background: #66B2FF; border-top-left-radius: 10px; border-bottom-left-radius: 10px;" class="StepOfWizard col-3 active">
                                    <div class="step">
                                      <img class="stepIcon" src="../img/domain.svg" alt="domain">
                                    </div>
                                    <h6>Website</h6>
                                  </div>
                                <div style="background: #66B2FF;" class="StepOfWizard col-3 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/hosting.svg" alt="Hosting">
                                  </div>
                                  <h6 data-lang-en="Subscription" data-lang-id="Langganan">Subscription</h6>
                                </div>
                                <div style="background: #66B2FF;" class="StepOfWizard col-3 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/form.svg" alt="Form">
                                  </div>
                                  <h6 data-lang-en="Profile" data-lang-id="Profil">Profile</h6>
                                </div>
                                <div style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; box-shadow: 4px 0 6px rgba(0, 0, 0, 0.2);" class="StepOfWizard col-3 active">
                                  <div class="step">
                                    <img class="stepIcon" src="../img/pay.svg" alt="Payment">
                                  </div>
                                  <h6 data-lang-en="Payment" data-lang-id="Pembayaran">Payment</h6>
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
                <div class="serv col-lg-4 col-12">                
                    <div class="cart order">
                        <div>   
                            <h5 style="text-align:center" data-lang-en="Order Summary" data-lang-id="Ringkasan Pemesanan">Order Summary</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-left">
                                    <p class="cart-title">Domain (</p><p style="margin-right: 2px" class="cart-title" id="domainYears">1</p><p class="cart-title" data-lang-en="Years)" data-lang-id="Tahun)">Years)</p>
                                </div>
                                <p class="cart-title" id="domain-price" class=" price">Rp. 0</p>
                            </div>
                            <span class="cart-des" id="selected-domain">-</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="cart-title"  data-lang-en="Website Template" data-lang-id="Template Website">Website Template</p>
                                <p class="cart-title" id="template-price" class=" price">Rp. 0</p>
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
                                <h5 class="cart-title" data-lang-en="Total Amount" data-lang-id="Total Biaya">Total Amount</h5>
                                <h5 class="cart-title" id="Subtotal" class="price">Rp. 0</h5>
                            </div>                
                            <button data-lang-en="Pay" data-lang-id="Bayar" id="pay-button" type="submit" class="nextBtn w-100 btn btn-primary" disabled>Pay</button>
                        </div>
                    </div>
                </div>      
                {{-- End Cart --}}
            </div>
    </div>

{{-- Footer Section --}}
@include('partials.footer')
{{-- End Footer --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ config('midtrans.API') }}" data-client-key="MIDTRANS_CLIENT_KEY"></script>
<script>
    sessionStorage.clear();
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('acceptTerms');
        const payButton = document.getElementById('pay-button');
        payButton.disabled = true;    
        checkbox.addEventListener('change', function () {
            payButton.disabled = !this.checked;
        });
    });
</script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
  
        snap.pay('{{ $order->snapKey }}', {
          
          onSuccess: function(result)
          { 
            var snapKey = '{{ $order->snapKey }}';
            var orderId = result.order_id;
            var paymentType = result.payment_type;
            window.location.href = "/update-status?snapKey=" + snapKey + "&paymentType=" + paymentType;
            Swal.fire({
                title: 'Please wait...',
                html: `<div style="text-align: center;">
                       <div class="spinner" style="display: inline-block; margin: 10px auto;"></div>
                       </div>`,
                allowOutsideClick: false,
                showConfirmButton: false
            });
          },
         
          onPending: function(result){
            Swal.fire({
                title: 'Pending!',
                text: 'Your payment is pending. Please complete the payment.',
                icon: 'info',
                confirmButtonText: 'OK'
            }).then(() => {
                console.log(result);
            });
          },

          onError: function(result){
            Swal.fire({
                title: 'Error!',
                text: 'There was an error with your payment. Please try again.',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then(() => {
                console.error(result);
            });
          }
        });
      };
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
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
  
</body>
</html>
