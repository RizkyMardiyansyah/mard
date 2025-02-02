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
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/favicon.ico">
      <meta name="title" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:site_name" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:title" content="Mardsoft | Instant Web Builder Step Three">
      <meta property="og:description" content="No more papers, Let's bring your digital ideas to life with our solutions. We are committed to helping you optimize operations and unlock your business's full potential.">
      <meta property="og:url" content="https://www.mardsoft.com">
      <meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
      <title>Mardsoft | Instant Web Builder Step Three</title>
      <meta name="keywords" content="jasa buat website jakarta, jasa buat website jakarta timur, jasa buat website jaktim, digital solutions, business optimization, software development, IT consulting, buat website, domain, website, website jakarta, website jakarta timur, website jaktim, software, development, IT consultant jakarta, IT consultant jakarta timur, IT consulting jakarta, IT consulting jakarta timur, IT consultant jaktim, IT consulting jaktim">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/css/intlTelInput.css">
      <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/intlTelInput.min.js"></script>
    </head>

  <body id="home">
    {{-- navbar section --}}
    @include('partials.navbar')

    <div id="services" class="services container hero-text ">
        <form id="personal-info-form" method="POST" action="{{ route('orderstore') }}" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <div class="serv col-lg-8 col-12">                
                    <div class="">                     
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
                                        <img class="stepIcon" src="img/hosting.svg" alt="Hosting">
                                      </div>
                                      <h6 data-lang-en="Subscription" data-lang-id="Langganan">Subscription</h6>
                                    </div>
                                    <div style="border-top-right-radius: 50px; border-bottom-right-radius: 50px; box-shadow: 4px 0 6px rgba(0, 0, 0, 0.2);" class="StepOfWizard col-3 active">
                                      <div class="step">
                                        <img class="stepIcon" src="img/form.svg" alt="Form">
                                      </div>
                                      <h6 data-lang-en="Profile" data-lang-id="Profil">Profile</h6>
                                    </div>
                                    <div class="StepOfWizard col-4">
                                      <div class="step">
                                        <img class="stepIcon" src="img/pay.svg" alt="Payment">
                                      </div>
                                      <h6 data-lang-en="Payment" data-lang-id="Pembayaran">Payment</h6>
                                    </div>
                                  </div>
                            </div>

                            <!-- Personal Information Section -->
                            <div class="cart">
                                
                                <div class="section">
                                    <h5 class="form-section" data-lang-en="Personal Information" data-lang-id="Informasi Personal"></h5>
                                    <h6 data-lang-en="Provide the essential information to secure your domain registration effortlessly." data-lang-id="Berikan informasi penting untuk mendaftarkan domain Anda dengan mudah."> </h6>
                                </div>
                               
                                    <input type="hidden" id="domain" name="domain">
                                    <input type="hidden" id="subscription" name="subscription">
                                    <input type="hidden" id="templateId" name="template">
                                    <input type="hidden" id="initial_domain_cost" name="domainCost">
                                    <input type="hidden" id="renewal_cost" name="template_cost">
                                    <input type="hidden" id="hosting_cost" name="subscriptionCost">
                                    <input type="hidden" id="total_payment" name="total_payment">
                                    <input type="hidden" id="status" name="status" value="Paying">
                                    <input type="hidden" id="snap-token" name="snap_token">
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="nik">Referral Code</label>
                                        <input  type="text" id="referal" name="referal" class="form-control" placeholder="Referral Code (Optional)" required mainlength="16">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="nik">NIK</label>
                                        <input  type="text" id="nik" name="nik" class="form-control" placeholder="Enter your NIK" required mainlength="16">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="name" data-lang-en="Name" data-lang-id="Nama"></label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required maxlength="255">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required maxlength="255">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="phone_number" data-lang-en="Phone Number" data-lang-id="Nomor Telepon"></label>
                                        <input type="tel" id="phone_number" name="phone_number" class="form-control" required maxlength="255">
                                    </div>
                                
                            </div>
                        
                            <!-- Additional Documents Section -->
                            <div id="doc" class="cart" style="margin-top: 20px">
                                <div class="section">
                                    <h5 class="form-section" style="color: black;" data-lang-en="Supporting Documents" data-lang-id="Dokumen Pendukung"></h5>
                                    <h6 data-lang-en="Submit the necessary documents to register your .co.id domain seamlessly." data-lang-id="Unggah dokumen yang diperlukan untuk mendaftarkan domain .co.id Anda dengan mudah."> </h6>
                                </div>                               
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
                            </div>
                        {{-- </div> --}}
                    </div>
                               
            </div> 
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
                                <p class="cart-title" data-lang-en="Website Template" data-lang-id="Template Website">Website Template</p>
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
                                <h5 style="color: rgba(0, 0, 0, 0.8) !important;" class="cart-title" data-lang-en="Total Amount" data-lang-id="Total Biaya">Total Amount</h5>
                                <h5 class="cart-title" id="Subtotal" class="price">Rp. 0</h5>
                            </div>                
                            <button id="next-button" type="submit"  class="nextBtn w-100 btn btn-primary" data-lang-en="Checkout" data-lang-id="Checkout" ></button>
                        </div>
                    </div>
            </div>           
        </div>
    </form> 
    </div>

{{-- Footer Section --}}
@include('partials.footer')

<!-- Script untuk AJAX Pencarian -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="MIDTRANS_CLIENT_KEY"></script>
<script>
    const input = document.querySelector("#phone_number");
    const iti = window.intlTelInput(input, {
        initialCountry: "id", 
        nationalMode: false,
        separateDialCode: true, 
        preferredCountries: ["id", "us", "gb"],
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/utils.js"
    });
</script>
<script>
    document.getElementById('next-button').addEventListener('click', function(event) {
        const inputs = {
            nik: document.getElementById('nik'),
            name: document.getElementById('name'),
            email: document.getElementById('email'),
            phone_number: document.getElementById('phone_number')
        };

        const docSection = document.getElementById('doc');
        const docFields = {
            ktp: document.getElementById('ktp'),
            siup: document.getElementById('siup'),
            npwp: document.getElementById('npwp')
        };

        let isValid = true;

        const validateInput = (input, regex, minLength, maxLength, customMessage) => {
            if (input.value.trim() === '' || 
                (minLength && input.value.length < minLength) || 
                (maxLength && input.value.length > maxLength) || 
                (regex && !regex.test(input.value.trim()))) {
                input.style.border = '1px solid red';
                input.setCustomValidity(customMessage);
                isValid = false;
            } else {
                input.style.border = '';
                input.setCustomValidity('');
            }
            input.reportValidity();
        };

        validateInput(inputs.nik, /^\d{16}$/, 16, 16, 'Required valid NIK.');
        validateInput(inputs.name, null, 1, null, 'Required.');
        validateInput(inputs.email, /^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/, 1, null, 'Required valid email.');

        if (docSection.classList.contains('visible')) {
        // Periksa file input dengan memeriksa files.length
        if (docFields.ktp.files.length === 0) {
            isValid = false;
            docFields.ktp.style.border = '1px solid red';
            docFields.ktp.setCustomValidity('KTP is required.');
        } else {
            docFields.ktp.style.border = '';
            docFields.ktp.setCustomValidity('');
        }

        if (docFields.siup.files.length === 0) {
            isValid = false;
            docFields.siup.style.border = '1px solid red';
            docFields.siup.setCustomValidity('SIUP is required.');
        } else {
            docFields.siup.style.border = '';
            docFields.siup.setCustomValidity('');
        }

        if (docFields.npwp.files.length === 0) {
            isValid = false;
            docFields.npwp.style.border = '1px solid red';
            docFields.npwp.setCustomValidity('NPWP is required.');
        } else {
            docFields.npwp.style.border = '';
            docFields.npwp.setCustomValidity('');
        }
    }

        if (!isValid) {
            event.preventDefault();
        }else{
            
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "Do you want to proceed with the checkout?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#488EFE",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Checkout!"
        }).then((result) => 
        {
            if (result.isConfirmed) 
            { document.getElementById('personal-info-form').submit();
                Swal.fire({
                    title: 'Please wait...',
                    html: `<div style="text-align: center;">
                            <div class="spinner" style="display: inline-block; margin: 10px auto;"></div>
                        </div>`,
                    allowOutsideClick: false,
                    showConfirmButton: false
                });

            } else {
                Swal.close();
            }
        });

        }
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const domain = sessionStorage.getItem("domain") || "-";
        const template = sessionStorage.getItem("template") || "-";
        const templateId = sessionStorage.getItem("templateId") || "-";
        const subYears = sessionStorage.getItem("year") || "1";
        const domainPrice = parseInt(sessionStorage.getItem("newDomainPrice")?.replace(/[^\d]/g, '') || "0", 10);
        const templatePrice = parseInt(sessionStorage.getItem("templatePrice")?.replace(/[^\d]/g, '') || "0", 10);
        const subsPrice = parseInt(sessionStorage.getItem("subsPrice")?.replace(/[^\d]/g, '') || "0", 10);
        const subtotal = parseInt(sessionStorage.getItem("subtotal")?.replace(/[^\d]/g, '') || "0", 10);
       
        if (domain.toLowerCase().includes('.co.id')) {
            $('#doc').addClass('visible');
        } else {
            $('#doc').removeClass('visible');
        }

        if (!domain || domain === "-" || !template || template === "-") {
            window.location.href = '/';
        }

        // const Subtotal = domainPrice + templatePrice + subsPrice;

        const formatRupiah = (value) => value >= 0 ? `Rp. ${value.toLocaleString('id-ID')}` : "-";

        document.getElementById("selected-domain").innerText = domain;
        document.getElementById("domain-price").innerText = formatRupiah(domainPrice);
        document.getElementById("selected-template").innerText = template;
        document.getElementById("template-price").innerText = formatRupiah(templatePrice);
        document.getElementById("domainYears").innerText = formatRupiah(subYears);
        document.getElementById("subYears").innerText = formatRupiah(subYears);
        document.getElementById("subs-price-cart").innerText = formatRupiah(subsPrice);
        document.getElementById("Subtotal").innerText = formatRupiah(subtotal);
        

        document.getElementById("domain").value = sessionStorage.getItem("domain") || "-";
        document.getElementById("templateId").value = sessionStorage.getItem("templateId") || "-";
        document.getElementById("subscription").value = sessionStorage.getItem("subId") || "-";
        document.getElementById("initial_domain_cost").value = sessionStorage.getItem("newDomainPrice")?.replace(/[^\d]/g, '') || "0";
        document.getElementById("renewal_cost").value = sessionStorage.getItem("templatePrice")?.replace(/[^\d]/g, '') || "0";
        document.getElementById("hosting_cost").value = sessionStorage.getItem("subsPrice")?.replace(/[^\d]/g, '') || "0";
        document.getElementById("total_payment").value = sessionStorage.getItem("subtotal")?.replace(/[^\d]/g, '') || "0";

    });

</script>  
</body>
</html>
