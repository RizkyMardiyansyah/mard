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
    }
    #domain {
    border: 1px solid #ccc;
    outline: none; /* Hilangkan outline bawaan */
    transition: border-color 0.3s; /* Animasi transisi saat warna berubah */
    }

    #domain:focus {
        border-color: #488EFE !important;
    }

</style>
<!doctype html>
    <html lang="en">
    <head>        
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/favicon.ico">
      <meta name="title" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:site_name" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:title" content="Mardsoft | Instant Web Builder Step One">
      <meta property="og:description" content="No more papers, Let's bring your digital ideas to life with our solutions. We are committed to helping you optimize operations and unlock your business's full potential.">
      <meta property="og:url" content="https://www.mardsoft.com">
      <meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
      <title>Mardsoft | Instant Web Builder Step One</title>
      <meta name="keywords" content="jasa buat website jakarta, jasa buat website jakarta timur, jasa buat website jaktim, digital solutions, business optimization, software development, IT consulting, buat website, domain, website, website jakarta, website jakarta timur, website jaktim, software, development, IT consultant jakarta, IT consultant jakarta timur, IT consulting jakarta, IT consulting jakarta timur, IT consultant jaktim, IT consulting jaktim">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
      <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "Mitra Adidaya Rekayasa Digital",
          "alternateName": ["Mardsoft", "Mard", "Mard Software"],
          "url": "https://mardsoft.com/"
        }
    </script>
    </head>

  <body id="home">
    {{-- navbar section --}}
    @include('partials.navbar')

    <div id="services" class="services container hero-text ">
        <div class="row">
            
            <div class="serv col-lg-8 col-12">                
                    {{-- <div class="container"> --}}                       
                        <div class="cart stepHead">
                            <div class="d-flex align-items-center">
                                <div style="border-radius:10px; border-top-right-radius: 50px; border-bottom-right-radius: 50px; box-shadow: 4px 0 6px rgba(0, 0, 0, 0.2);" class=" StepOfWizard col-3 active">
                                    <div class="step">
                                      <img class="stepIcon" src="img/domain.svg" alt="Hosting">
                                    </div>
                                    <h6>Website</h6>
                                  </div>
                                <div class=" StepOfWizard col-3">
                                    <div class="step">
                                      <img class="stepIcon" src="img/hosting.svg" alt="Hosting">
                                    </div>
                                    <h6 data-lang-en="Subscription" data-lang-id="Langganan">Subscription</h6>
                                  </div>
                                <div class="StepOfWizard col-3 ">
                                  <div class="step">
                                    <img class="stepIcon" src="img/form.svg" alt="Form">
                                  </div>
                                  <h6 data-lang-en="Profile" data-lang-id="Profil">Profile</h6>
                                </div>
                                <div class="StepOfWizard col-3">
                                  <div class="step">
                                    <img class="stepIcon" src="img/pay.svg" alt="Payment">
                                  </div>
                                  <h6 data-lang-en="Payment" data-lang-id="Pembayaran">Payment</h6>
                                </div>
                            </div>
                        </div>
                        
                        <div id="searchDomain" class="visible cart domain" style="height: auto; min-height:443px">
                            <div class="stepBody">
                                <div class="section" style="margin-bottom: 20px">
                                    <h5 class="form-section">Domain</h5>
                                    <h6 data-lang-en="Get a domain name that reflects your business and builds trust with your audience, Your success starts with the right choice." data-lang-id="Dapatkan nama domain yang mencerminkan bisnis Anda dan membangun kepercayaan dengan audiens Anda, Kesuksesan Anda dimulai dari pilihan yang tepat.">Get a domain name that reflects your business and builds trust with your audience, Your success starts with the right choice.</h6>
                                </div>           
                                <form  id="domainForm" class="d-flex align-items-center w-100" style="gap: 16px;">                                            
                                    <input type="text" id="domain" name="domain" required placeholder="Find your domain..."/>
                                    <button id="domainBtn" type="submit" class="btn btn-primary" style="opacity: 100%; padding:15px;"><b data-lang-en="Search" data-lang-id="Cari">Search</b></button>
                                </form>
                                    <div style="margin-top: 50px" class="spinner" id="spinner"></div>
                                    <div style="margin-top: 20px;" id="result"></div>
                            </div>                            
                        </div>

                        <div style="margin-top: 20px" id="searchTemplate" class="visible cart">                              
                            <div class="stepBody">
                                <div class="section" style="margin-bottom: 12px">
                                    <h5 class="form-section">Template</h5>
                                    <h6 data-lang-en="Select a template that perfectly suits your vision and style, and get started with ease!" data-lang-id="Pilih template yang sesuai dengan visi dan gaya Anda, dan mulailah dengan mudah!"></h6>
                                </div>                                                               
                                <form id="searchTemplateForm" action="{{ route('website') }}" method="POST">
                                    @csrf 
                                    
                                    <div class="row d-flex justify-content-between align-items-center ">
                                        <div class="col-md-6 col-12 mt-4">
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
                                    
                                       
                                        <div class="col-md-6 col-12 mt-4">
                                            <div class="input-group" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); border-radius:10px;">
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
                                        @include('partials.template_card_web', ['template' => $template])
                                    @endforeach
                                </div>
                            
                                <!-- Menampilkan Pagination -->
                                <div class="pagination justify-content-center mt-4" id="paginationLinks">
                                    {{ $templates->appends(request()->query())->links('pagination::bootstrap-4') }}
                                </div>
                
                                </div>
                            </div>
                    {{-- </div> --}}
            </div> 
            <div id="order" class="serv col-lg-4 col-12">                
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
                                    <p class="cart-title" data-lang-en="Subscription (" data-lang-id="Langanan (">Langanan(</p><p style="margin-right: 2px" class="cart-title" id="subYears">1</p><p class="cart-title" data-lang-en="Years)" data-lang-id="Tahun)">Year)</p>
                                </div>
                                    <p class="cart-title" id="subs-price-cart" class=" price">Rp. 0</p>
                            </div>
                            <span class="cart-des" id="" data-lang-en="Subscription fee for website management service." data-lang-id="Biaya langganan untuk layanan pengelolaan website">Subscription fee for website management service.</span>

                            <div class="Subtotal d-flex justify-content-between align-items-center">
                                <h5 style="color: rgba(0, 0, 0, 0.8) !important;" class="cart-title" data-lang-en="Total Amount" data-lang-id="Total Biaya">Total Amount</h5>
                                <h5 class="cart-title" id="Subtotal" class="price">Rp. 0</h5>
                            </div>

                            <button id="next-button"  class="w-100 nextBtn btn btn-primary" data-lang-en="Next" data-lang-id="Selanjutnya">Next</button>
                        </div>
                    </div>
                
            </div>           
        </div>
    </div>

    {{-- Footer Section --}}
    @include('partials.footer')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script> 
    
        $(document).ready(function() {

            function updateSubtotal(subsPrice = 0) {
                const updatedDomainPrice = parseInt(sessionStorage.getItem("domainPrice") || "0", 10);
                const templatePrice = parseInt(sessionStorage.getItem("templatePrice")?.replace(/[^\d]/g, '') || "0", 10);
                const Subtotal = updatedDomainPrice + templatePrice + subsPrice;
                const formatRupiah = value => value >= 0 ? `Rp. ${value.toLocaleString('id-ID')}` : "";
                document.getElementById("Subtotal").innerText = formatRupiah(Subtotal);
                sessionStorage.setItem('subtotal', Subtotal);
             }

        
            function toggleSections() {
            const formatRupiah = value => value >= 0 ? `Rp. ${value.toLocaleString('id-ID')}` : "";
            const domain = sessionStorage.getItem('domain');
            const domainPrice = parseInt(sessionStorage.getItem("domainPrice") || "0", 10);

            const templateId = sessionStorage.getItem('templateId');
            const templateTitle = sessionStorage.getItem('template');
            const templateType = sessionStorage.getItem('templateType');
            const templatePrice = sessionStorage.getItem('templatePrice');

            if (domain) {  
                $('#searchTemplate').addClass('visible').show();
                $('#searchDomain').removeClass('visible').hide();
                document.getElementById("selected-domain").innerText = domain;
                document.getElementById("domain-price").innerText = formatRupiah(domainPrice);
                updateSubtotal();
                                 
            } else if (templateId) {
                $('#searchDomain').addClass('visible').show();
                $('#searchTemplate').removeClass('visible').hide();
                document.getElementById("selected-template").innerText = templateTitle;
                document.getElementById("template-price").innerText = formatRupiah(templatePrice);
                updateSubtotal();

            }else {
                window.location.href = '/';
            }
        }

        toggleSections();

       
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
            performSearchOrPagination(url, 'GET');
            
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
                        $('html, body').animate({scrollTop: $('#searchTemplateForm').offset().top - 80}, 'fast');
                        response.templates.forEach(template => {
                            const imageUrl = `{{ url('storage') }}/${template.image}`;
                            $('#templateContainer').append(`
                                <div class="card webtemplate col-md-6 col-12">
                                    <a href="${template.link}" target="_blank">
                                        <img src="${imageUrl}" alt="${template.title}">
                                    </a>
                                    <div class="d-flex" style="padding: 0px">
                                        {{-- <div class="card-title">${template.title}</div> --}}
                                        <div class="card-title">
                                            <a href="${template.link}" target="_blank" style="text-decoration: none; color: inherit;">
                                                ${template.title}
                                            </a>
                                        </div>
                                        <div class="d-flex" style="margin-left: auto">
                                            <a href="/#order" class="view select d-flex align-items-center justify-content-center" data-template-id="${template.id}" data-template-price="${template.price}" data-template-title="${template.title}" data-bs-toggle="tooltip" title="Pilih Template"><i class="fas fa-check"></i></a>
                                            <a href="${template.link}" target="_blank" class="view d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" title="Live Preview"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="" style="padding: 0px; Opacity:50%; font-size:14px; margin-top:auto">       
                                        <div class="card-title"> <i class="fa fa-shopping-bag me-2"></i>${template.purchases} Purchased</div>
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
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                            <p style="color:#000000 !important;"><b>${domain}.com</b> ${response.com === 'unavailable' ? 'Unavailable' : ''}</p>

                            ${response.com === 'available' ? 
                                `<div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <p class="oldPrice" style="font-size:14px !important; text-align:center !important;">Rp. 199.900</p>
                                        <p class="fixedPrice" style="color:#000000 !important; font-size:20px !important;">Rp. 99.900</p>
                                    </div>
                                    <a href="#order">
                                        <button class="btn-select" data-domain="${domain}.com" data-price="99900" data-lang-en="Select Domain" data-lang-id="Pilih Domain">Select Domain</button>
                                    </a>
                                </div>` 
                                : ''
                            }

                            ${response.com === 'unavailable' ? 
                                '<button class="btn-select" style="opacity: 0; pointer-events: none;"></button>' 
                                : ''
                            }
                        </div>
                    </div>
                    <div class="carddomain ${response.id === 'available' ? 'available' : 'unavailable'}">
                        <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                            <p style="color:#000000 !important;"><b>${domain}.id</b> ${response.id === 'unavailable' ? 'Unavailable' : ''}</p>

                            ${response.id === 'available' ? 
                                `<div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <p class="oldPrice" style="font-size:14px !important; text-align:center !important;">Rp. 252.900</p>
                                        <p class="fixedPrice" style="color:#000000 !important; font-size:20px !important;">Rp.190.900</p>
                                    </div>
                                    <a href="#order">
                                        <button class="btn-select" data-domain="${domain}.id" data-price="190900" data-lang-en="Select Domain" data-lang-id="Pilih Domain">Select Domain</button>
                                    </a>
                                </div>` 
                                : ''
                            }

                            ${response.id === 'unavailable' ? 
                                '<button class="btn-select" style="opacity: 0; pointer-events: none;"></button>' 
                                : ''
                            }
                        </div>
                    </div>
                    <div class="carddomain ${response['co.id'] === 'available' ? 'available' : 'unavailable'}">
                        <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                            <p style="color:#000000 !important;"><b>${domain}.co.id</b> ${response['co.id'] === 'unavailable' ? 'Unavailable' : ''}</p>

                            ${response['co.id'] === 'available' ? 
                                `<div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <p class="oldPrice" style="font-size:14px !important; text-align:center !important;">Rp. 300.000</p>
                                        <p class="fixedPrice" style="color:#000000 !important; font-size:20px !important;">Rp.130.900</p>
                                    </div>
                                    <a href="#order">
                                        <button class="btn-select" data-domain="${domain}.co.id" data-price="130900" data-lang-en="Select Domain" data-lang-id="Pilih Domain">Select Domain</button>
                                    </a>
                                </div>` 
                                : ''
                            }

                            ${response.id === 'unavailable' ? 
                                '<button class="btn-select" style="opacity: 0; pointer-events: none;"></button>' 
                                : ''
                            }
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


        function updateSubtotal(subsPrice = 0) {
                const updatedDomainPrice = parseInt(sessionStorage.getItem("domainPrice") || "0", 10);
                const templatePrice = parseInt(sessionStorage.getItem("templatePrice")?.replace(/[^\d]/g, '') || "0", 10);
                const Subtotal = updatedDomainPrice + templatePrice + subsPrice;
                const formatRupiah = value => value >= 0 ? `Rp. ${value.toLocaleString('id-ID')}` : "";
                document.getElementById("Subtotal").innerText = formatRupiah(Subtotal);
                sessionStorage.setItem('subtotal', Subtotal);
             }
   

        // Event listener untuk tombol "Pilih Template"
        $(document).on('click', '.btn-select', function() {
            const selectedDomain = $(this).data('domain'); 
            const selectedPrice = $(this).data('price');
            $('#selected-domain').text(selectedDomain); 
            $('#domain-price').text('Rp. ' + selectedPrice.toLocaleString());

            sessionStorage.setItem('domain', selectedDomain);
            sessionStorage.setItem('domainPrice', selectedPrice);

            updateSubtotal();
        });

        $(document).on('click', '.select', function() {
            var selectedTemplate = $(this).data('template-title');
            var selectedTemplatePrice = parseInt($(this).data('template-price'), 10);
            var selectedTemplateId = $(this).data('template-id');
            $('#selected-template').text(selectedTemplate);
            $('#selected-template-id').text(selectedTemplateId);
            $('#template-price').text('Rp. ' + selectedTemplatePrice.toLocaleString());

            sessionStorage.setItem('template', selectedTemplate);
            sessionStorage.setItem('templateId', selectedTemplateId);
            sessionStorage.setItem('templatePrice', selectedTemplatePrice);
            
            updateSubtotal();
            
        });
        
            $('#next-button').on('click', function () {
                // Periksa apakah ada data yang kosong
                if (!sessionStorage.getItem("domain") || !sessionStorage.getItem("templateId")) {
                        Swal.fire({
                            title: 'Oops!',
                            text: 'Please select Domain and Template.',
                            icon: 'warning',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#3085d6',
                            background: '#fff',
                            customClass: {
                                popup: 'animated tada', // Animasi alert
                            },
                        });
                        return; // Jangan lakukan apapun jika ada data yang kosong
                    }

                // Navigasi ke halaman /cart
                window.location.href = '/subscription';
            });

       
    });

</script> 
<script>
        
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
