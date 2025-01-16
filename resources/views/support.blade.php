<!doctype html>
<html lang="en">
  <head>
        
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="title" content="Mitra Adidaya Rekayasa Digital">
    <meta property="og:title" content="Mitra Adidaya Rekayasa Digital">
    <meta property="og:description" content="Penyedia solusi digital untuk optimasi bisnis Anda.">
    <meta property="og:url" content="https://www.mardsoft.com">
    <meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
    {{-- <title>Mitra Adidaya Rekayasa Digital</title> --}}
    <title>Mitra Adidaya Rekayasa Digital</title>
    <meta name="keywords" content="jasa buat website jakarta, jasa buat website jakarta timur, jasa buat website jaktim, digital solutions, business optimization, software development, IT consulting, buat website, domain, website, website jakarta, website jakarta timur, website jaktim, software, development, IT consultant jakarta, IT consultant jakarta timur, IT consulting jakarta, IT consulting jakarta timur, IT consultant jaktim, IT consulting jaktim">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
  </head>
  <body>
    
    

    {{-- navbar section --}}
    @include('partials.navbar')

    <div style="height: 80vh; background: url(img/support.jpg) no-repeat center center/cover;" class="hero-section">
        <div style="background-color: rgba(0, 0, 0, 0.5);" class="hero-overlay">
            <div class="container hero-text">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h1 style="text-align: left" data-lang-en="Application Maintenance and Support" data-lang-id="Application Maintenance and Support"></h1>
                    </div>
                    <div class="col-lg-6 col-12"></div>
                </div>
            </div>
        </div>
    </div>

{{-- Body Section --}}
<div class="servBody hero-text ">  
    <div class="">
    </div>
        <div class="container textabout blog">
            <p data-lang-en="Ensure the longevity and performance of your applications with our Application Maintenance and Support services. Our team of experts is dedicated to keeping your systems running smoothly, minimizing downtime, and optimizing performance. With a focus on continuous updates, monitoring, and troubleshooting, we ensure your applications remain secure, stable, and aligned with your business objectives." 
            data-lang-id="Pastikan aplikasi Anda tetap andal dan berfungsi optimal dengan layanan Pemeliharaan dan Dukungan Aplikasi kami. Tim ahli kami berkomitmen untuk menjaga sistem Anda berjalan lancar, meminimalkan waktu henti, dan mengoptimalkan kinerja. Dengan fokus pada pembaruan berkelanjutan, pemantauan, dan pemecahan masalah, kami memastikan aplikasi Anda tetap aman, stabil, dan sesuai dengan tujuan bisnis Anda."></p>
         
         <p data-lang-en="Our services go beyond routine maintenance; we proactively identify and resolve potential issues before they impact your business. Leveraging the latest tools and techniques, we provide updates, scalability enhancements, and performance tuning to keep your applications future-ready and aligned with technological advancements." 
            data-lang-id="Layanan kami melampaui pemeliharaan rutin; kami secara proaktif mengidentifikasi dan menyelesaikan potensi masalah sebelum berdampak pada bisnis Anda. Dengan memanfaatkan alat dan teknik terbaru, kami menyediakan pembaruan, peningkatan skalabilitas, dan penyempurnaan kinerja untuk memastikan aplikasi Anda siap menghadapi masa depan dan sejalan dengan perkembangan teknologi."></p>
         
         <p data-lang-en="Partner with us for reliable Application Maintenance and Support, and let us handle the technical complexities so you can focus on growing your business. Together, we will ensure your applications remain robust, efficient, and capable of supporting your business growth." 
            data-lang-id="Bermitra dengan kami untuk layanan Pemeliharaan dan Dukungan Aplikasi yang andal, dan biarkan kami menangani kompleksitas teknis sehingga Anda dapat fokus pada pertumbuhan bisnis Anda. Bersama-sama, kami akan memastikan aplikasi Anda tetap kuat, efisien, dan mampu mendukung pertumbuhan bisnis Anda."></p>
         
    </div>
</div>

   


{{-- Contact Us Section --}}
    <div class="servContact container contact hero-text" style="color: black; margin-top: 70px; padding: 30px;">
        <div class="row d-flex flex-wrap">
            
            <div class="col-lg-6 col-12">
                
                <img src="img/contactUs.svg" alt="Contact Us" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 8px;">
            </div>
           
            <div class="col-lg-6 col-12 mb-4">
                <h1 style="color: black;" data-lang-en="Contact Us" data-lang-id="Hubungi Kami"></h1>
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
                    <div style="text-align: right;">
                        <button id="message_btn" type="submit" class="btn btn-primary" style="padding: 10px 20px; border-radius: 5px;" data-lang-en="Send Message" data-lang-id="Kirim Pesan"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Footer Section --}}
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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