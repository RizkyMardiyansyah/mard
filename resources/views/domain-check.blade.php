</style>
<!doctype html>
    <html lang="en">
    <head>        
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/favicon.ico">
      <meta name="title" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:site_name" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:title" content="Mardsoft - Instant Web Builder">
      <meta property="og:description" content="No more papers, Let's bring your digital ideas to life with our solutions. We are committed to helping you optimize operations and unlock your business's full potential.">
      <meta property="og:url" content="https://www.mardsoft.com">
      <meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
      <title>Mardsoft - Instant Web Builder</title>
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

        <div class="hero-section-domain d-flex align-items-center justify-content-center">
            <div class="hero-overlay-domain">
                <div class="container hero-text-domain text-center"> 
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="container">
                                <h1 style="margin-bottom: 0px" data-lang-en="Instant Web Builder" data-lang-id="Pembuat Web Instan">Instant Web Builder</h1>
                                <span  data-lang-en="A quick solution to build your professional website. Choose your domain, select your template, and your website will be ready to go online." data-lang-id="Solusi cepat untuk membangun website profesional Anda. Pilih domain, pilih template, dan website Anda siap untuk online.">A quick solution to build your professional website. Choose your domain, select a template, and your website will be ready to go online.</span>
                            </div>
                            <!-- Form untuk memasukkan nama domain -->            
                            <form style="margin-top: 20px"  id="domainForm" class="mt-30 mt-lg-30 w-100">
                                <div style="margin:0px;" class="form-row  d-flex align-items-center slider-search bg-white w-100">
                                    <input type="text" id="domain" name="domain" class="rounded-pill border-0 mr-lg-50" value="{{ request('domain') }}" required placeholder="Find your domain..."/>
                                    <button type="submit" class="btn rounded-pill" style="width:150px; height:100%; margin:0px; opacity: 100%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);"><b data-lang-en="Search" data-lang-id="Cari">Search</b></button>
                                </div>
                            </form>
                            <div id="domainbox" class="justify-content-center" style="gap: 10px; display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
                                <div style="border: 2px solid #6cfc7d !important; box-shadow: 0 4px 6px rgba(108, 252, 125, 0.2); animation: float 3s ease-in-out infinite;" class="card domainBox">
                                    <h6 style="color: #6cfc7d;">.com</h6>
                                    <p class="old">Rp.199.900</p>
                                    <p style="color: #6cfc7d;" class="new">Rp.99.900</p>
                                </div>
                                <div class=" card domainBox">
                                    <h6>.id</h6>
                                    <p class="old">Rp.252.900</p>
                                    <p class="new">Rp.190.900</p>
                                </div>
                                <div class="card domainBox">
                                    <h6>.co.id</h6>
                                    <p class="old">Rp.300.000</p>
                                    <p class="new">Rp.230.900</p>
                                </div>
                            </div>
                            
                            <div style="margin-top: 50px" class="spinner" id="spinner"></div>

                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="template" class=" serv container hero-text">
            <div class="serv container hero-text">
                <div class="col-md-3 col-12"></div>
                <div class=" col-md-6 col-12 container justify-content-center text-center">
                    <h3 class="template" lang="en" data-lang-en="Our Template" data-lang-id="Template Kami">Our Templates
                    </h3>
                    <p class="template-description" lang="en" 
                    data-lang-en="Transform your business vision into reality with our user-friendly templates that prioritize performance and style."
                    data-lang-id="Wujudkan visi bisnis Anda dengan template intuitif yang mengutamakan performa dan tampilan elegan.">
                    Transform your business vision into reality with our user-friendly templates that prioritize performance and style.
                    </p>
                </div>
                <div class="col-md-3 col-12"></div>
                <div>
                <!-- Form Pencarian -->
                <form id="searchTemplateForm" action="{{ route('searchtemplate') }}" method="POST">
                    @csrf <!-- Ini untuk melindungi dari CSRF -->
                    
                    <div class="row d-flex justify-content-between align-items-center ">
                        <!-- Tabs untuk memilih tipe template -->
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
                    
                        <!-- Input Search -->
                        <div class="col-md-6 col-12 mt-4">
                            <div class="input-group" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); border-radius:10px;">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Find your template..." required>
                                <button style="opacity: 100%; margin-top:0px" class="btn btn-primary" type="submit" data-lang-en="Search" data-lang-id="Cari">Search</button>
                            </div>
                        </div>
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
        </div>
        

    {{-- Footer Section --}}
    @include('partials.footer')
    <!-- Script untuk AJAX Pencarian -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script> 
    sessionStorage.clear();
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
            $('#spinnerr').show();
           

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
                                <div class="card webtemplate col-lg-4 col-md-6 col-12">
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
                                            <a class="view select d-flex align-items-center justify-content-center" data-template-id="${template.id}" data-template-price="${template.price}" data-template-title="${template.title}" data-bs-toggle="tooltip" title="Pilih Template"><i class="fas fa-check"></i></a>
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
                    $('#domainbox').hide();
                    $('#result').html('');  // Kosongkan hasil sebelumnya
                },
                success: function(response) {
                    $('#spinner').hide();  // Sembunyikan spinner setelah request berhasil

                    // Memeriksa dan menampilkan hasil
                    let resultHtml = `                    
                    <div class="carddomain ${response.com === 'available' ? 'available' : 'unavailable'}">
                        <div class="domain-info" style="display: flex; justify-content: space-between; align-items: center;">
                            <p><b>${domain}.com</b> ${response.com === 'unavailable' ? 'Unavailable' : ''}</p>

                            ${response.com === 'available' ? 
                                `<div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <p class="oldPrice" style="font-size:14px !important; text-align:center !important;">Rp. 199.900</p>
                                        <p class="fixedPrice" style="font-size:20px !important; margin-top:5px !important;">Rp. 99.900</p>
                                    </div>
                                    <a>
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
                            <p><b>${domain}.id</b> ${response.id === 'unavailable' ? 'Unavailable' : ''}</p>

                            ${response.id === 'available' ? 
                                `<div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <p class="oldPrice" style="font-size:14px !important; text-align:center !important;">Rp. 252.900</p>
                                        <p class="fixedPrice" style="margin-top:5px !important; font-size:20px !important;">Rp. 190.900</p>
                                    </div>
                                    <a>
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
                            <p><b>${domain}.co.id</b> ${response['co.id'] === 'unavailable' ? 'Unavailable' : ''}</p>

                            ${response['co.id'] === 'available' ? 
                                `<div style="display: flex; align-items: center; gap: 10px;">
                                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                        <p class="oldPrice" style="font-size:14px !important; text-align:center !important;">Rp. 300.000</p>
                                        <p class="fixedPrice" style="margin-top:5px !important; font-size:20px !important;">Rp. 130.900</p>
                                    </div>
                                    <a>
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

        $(document).on('click', '.btn-select', function () {
        const domain = $(this).data('domain');
        const price = $(this).data('price');

        if (domain) {
            // Simpan ke sessionStorage
            sessionStorage.setItem('domain', domain);
            sessionStorage.setItem('domainPrice', price);

            // Arahkan ke halaman /website
            window.location.href = '/website';
        }
    });
        // Event handler untuk memilih template
        $(document).on('click', '.select', function () {
            const templateId = $(this).data('template-id');
            const templateTitle = $(this).data('template-title');
            const templatePrice = parseInt($(this).data('template-price'), 10);
            
            if (templateId) {
                // Simpan ke sessionStorage
                sessionStorage.setItem('template', templateTitle);
                sessionStorage.setItem('templateId', templateId);
                sessionStorage.setItem('templatePrice', templatePrice);

                // Arahkan ke halaman /website
                window.location.href = '/website';
            }
        });
       
    });

</script>  
</body>
</html>
