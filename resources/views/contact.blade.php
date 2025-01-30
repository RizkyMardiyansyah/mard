<style>
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
</style>
<!doctype html>
<!doctype html>
    <html lang="en">
    <head>        
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/favicon.ico">
      <meta name="title" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:site_name" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:title" content="Mardsoft | Contact">
      <meta property="og:description" content="Penyedia solusi digital untuk optimasi bisnis Anda.">
      <meta property="og:url" content="https://www.mardsoft.com">
      <meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
      <title>Mardsoft | Contact</title>
      <meta name="keywords" content="jasa buat website jakarta, jasa buat website jakarta timur, jasa buat website jaktim, digital solutions, business optimization, software development, IT consulting, buat website, domain, website, website jakarta, website jakarta timur, website jaktim, software, development, IT consultant jakarta, IT consultant jakarta timur, IT consulting jakarta, IT consulting jakarta timur, IT consultant jaktim, IT consulting jaktim">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>

  <body>
    
    

    {{-- navbar section --}}
    @include('partials.navbar')

    {{-- <div style="height: 80vh; background: url(img/dev.jpg) no-repeat center center/cover;" class="hero-section">
        <div style="background-color: rgba(0, 0, 0, 0.3);" class="hero-overlay">
            <div class="container hero-text">
                <div class="row">
                    <div class="col-lg-6 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <h1 style="text-align: right" data-lang-en="Custom Application Development" data-lang-id="Custom Application Development"></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="servBody hero-text ">  
    <div class="">
    </div>
        <div class="container textabout blog">
        <p data-lang-en="Bring your ideas to life with our tailored digital solutions through our custom web application development services. Our expert team is dedicated to delivering unlimited innovations that drive your business growth. With a focus on advanced technologies such as web and mobile, we create web applications that are optimized, secure, and customized to meet your business’s unique needs." 
        data-lang-id="Wujudkan ide Anda dengan solusi digital yang disesuaikan melalui layanan pengembangan aplikasi web kami. Tim ahli kami berkomitmen untuk membawa inovasi tak terbatas yang mendorong pertumbuhan bisnis Anda. Dengan fokus pada teknologi canggih seperti web, dan mobile, kami menciptakan aplikasi web yang optimal dan aman, disesuaikan dengan kebutuhan unik bisnis Anda."></p>
        <p data-lang-en="We are committed not only to developing applications but also to providing trusted and professional services that support the continuous modernization and management of your applications. We leverage cutting-edge techniques and technologies to ensure your applications are always up-to-date, secure, and performing at their best." 
        data-lang-id="Kami tidak hanya berfokus pada pengembangan aplikasi, tetapi juga berkomitmen untuk menyediakan layanan yang terpercaya dan profesional untuk mendukung modernisasi serta pengelolaan aplikasi Anda secara berkelanjutan. Kami memanfaatkan teknik dan teknologi mutakhir untuk memastikan aplikasi Anda selalu diperbarui, aman, dan berfungsi dengan maksimal."></p>
        <p data-lang-en="Partner with us today to leverage our expertise and experience in designing and managing applications that will take your business to the next level. Together, we will use modern techniques and advanced technologies to help you stay at the forefront of innovation and gain a competitive edge in your industry." 
        data-lang-id="Partner dengan kami hari ini untuk memanfaatkan keahlian dan pengalaman kami dalam merancang dan mengelola aplikasi yang siap membawa bisnis Anda ke level berikutnya. Bersama-sama, kami akan menggunakan teknik modern dan teknologi maju untuk membantu Anda tetap berada di garis depan inovasi dan meraih keunggulan kompetitif di industri Anda."></p>
    </div>
</div> --}}

   


{{-- Contact Us Section --}}
<div class="servContact contact hero-text container" style="color: black; margin-bottom: 100px;">
    <div class="serv row d-flex" style="text-align: center">
        <div class="col-md-3 col-12"></div>
        <div class=" col-md-6 col-12 container justify-content-center text-center">
            <h3 class="template" lang="en" data-lang-en="Contact Us" data-lang-id="Hubungi Kami">Contact Us</h3>
            <p style="color: rgba(0, 0, 0, 0.9) !important;" class="template-description" lang="en" 
            data-lang-en="Partner with us today, and let’s transform your ideas into a successful future reality."
            data-lang-id="Bermitra dengan kami hari ini, dan mari wujudkan ide-ide Anda menjadi kenyataan yang sukses di masa depan.">
            Partner with us today, and let’s transform your ideas into a successful future reality.
            </p>
        </div>
        <div class="col-md-3 col-12"></div>
        
        <div class="col-lg-6 col-12">
            
            <img src="img/contactUs.svg" alt="Contact Us" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 8px;">
        </div>
       
        <div class="col-lg-6 col-12 mb-4">
            
            <form id="contact-form" style="max-width: 100%; margin-top: 20px;" method="POST" action="{{ route('contactStore') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" id="name" name="name" class="form-control" required placeholder="Name..." style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>
                <div class="form-group mb-3">
                    <input type="email" id="email" name="email" class="form-control" required placeholder="Email..." style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>
                <div class="form-group mb-3">
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number..." style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>
                <div class="form-group mb-3">
                    <input type="text" id="company" name="company" class="form-control" placeholder="Company..." style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                </div>
                <div class="form-group mb-3">
                    <textarea id="message" name="message" class="form-control" rows="4" required placeholder="How can we help you today?" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
                </div>
                <div >
                    <button id="message_btn" type="submit" class="nextBtn btn btn-primary w-100" data-lang-en="Send Message" data-lang-id="Kirim Pesan"></button>
                </div>
            </form>
        </div>
    </div>
</div>


    {{-- Footer Section --}}
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false
            });
        @elseif(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
    <script>
        document.getElementById('message_btn').addEventListener('click', function(event) {
                
            const inputs = {                
                name: document.getElementById('name'),
                email: document.getElementById('email'),
                phone_number: document.getElementById('phone'),
                company: document.getElementById('company'),
                message: document.getElementById('message')
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
    
            validateInput(inputs.name, null, 1, null, 'Name is required.');
            validateInput(inputs.email, /^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/, 1, null, 'A valid email is required.');
            validateInput(inputs.phone_number, /^\d{10,15}$/, 10, 15, 'A valid phone number is required.');
            validateInput(inputs.message, null, 1, null, 'Message is required.');
    
            if (!isValid) {
            event.preventDefault();
            }else{
            event.preventDefault();
            Swal.fire({
                title: "send a message?",
                text: "Do you want to send us a message?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#488EFE",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Send!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengkonfirmasi, lakukan submit form
                    document.getElementById('contact-form').submit();

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