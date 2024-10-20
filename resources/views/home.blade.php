@php
 $sitename=get_setting_value('site_name');
@endphp

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    {{-- <title>Mitra Adidaya Rekayasa Digital</title> --}}
    <title>{{ $sitename }}</title>
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
    
  </head>
  <body id="home">
    <button id="floatingButton" onclick="topFunction()">
        <svg width="18px" height="18px" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" stroke="currentColor" stroke-width="1.5" d="m9 1.196 6.188 6.188 -0.746 0.746 -4.915-4.915v13.592h-1.054V3.213L3.556 8.13l-0.744-0.747Z"/>
        </svg>
    </button>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-light" style="background-color: transparent; transition: background-color 0.5s;">
        <div class="container">
            <a class="navbar-brand blue" href="index.php"><img  src="img/MardBlue.svg" height="50px" style="padding: 5px;"></a>
            <a class="navbar-brand white" href="index.php"><img src="img/MardWhite.svg" height="50px" style="padding: 5px;"></a>
            <div class="language-selector order-lg-2">
                <div class="toggle-container">
                    <input type="checkbox" id="languageToggle" class="toggle-checkbox">
                    <label class="toggle-label" for="languageToggle">
                        <span class="toggle-inner">EN</span>
                        <span class="toggle-switch"></span>
                    </label>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="box-shadow: none;"></span>
            </button>
            <div class="collapse navbar-collapse order-lg-1" id="navbarNav">
              <ul style="margin-left: auto;" class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="hero-overlay">
            <div class="container hero-text">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h1 data-lang-en="Digital Solutions for Optimal Innovation" data-lang-id="Solusi Digital untuk Inovasi Optimal"></h1>
                        <p data-lang-en="Delivering Cutting-Edge Digital Solutions to Achieve Optimal Innovation and Enhance Business Success." data-lang-id="Menyediakan Solusi Digital Terdepan untuk Mencapai Inovasi yang Optimal dan Meningkatkan Keberhasilan Bisnis."></p>
                        <a href="#contact">
                            <button type="submit" class="btn"><b style="color:white;">Get In Touch</b></button>
                        </a>
                    </div>
                    <div class="col-lg-6 col-12"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about hero-text">
        <div class="row">
            <div class="col-lg-6 col-12 order-lg-2" style="padding-left: 40px;">
                <img style="width: 100%; height: auto; position: relative; top: -50px; border-radius: 8px; box-shadow: -15px 30px 10px rgba(54, 64, 89, 0.2);" src="img/about.jpg" alt="">
            </div>
            <div class="col-lg-6 col-12 order-lg-1" style="padding-right: 40px;">
                <h1 data-lang-en="About Us" data-lang-id="Tentang Kami"></h1>
                <p data-lang-en="Mitra Adidaya Rekayasa Digital (MARD) is committed to delivering innovative solutions that help businesses overcome challenges and optimize their operations. By leveraging cutting-edge technology and in-depth industry knowledge, we create tailored digital strategies designed to enhance efficiency, drive sustainable growth, and ensure long-term success in an ever-evolving business landscape." data-lang-id="Mitra Adidaya Rekayasa Digital (MARD) berkomitmen untuk memberikan solusi inovatif yang membantu bisnis mengatasi tantangan dan mengoptimalkan operasional. Dengan memanfaatkan teknologi mutakhir serta wawasan industri yang mendalam, kami menciptakan strategi digital yang disesuaikan untuk meningkatkan efisiensi, mendorong pertumbuhan yang berkelanjutan, dan memastikan kesuksesan jangka panjang dalam lanskap bisnis yang terus berkembang."></p>
            </div>
        </div>
    </div>

    <div id="services" class="services container hero-text">
        <div class="row">
            <div class="serv col-lg-3 col-md-6 col-12">
                <div class="serContainer">
                    <a href="/web" target="_blank" style="text-decoration: none; color: black;">
                        <h3 style="color: black;" data-lang-en="Profile Website Development" data-lang-id="Pengembangan Website Profile"></h3>
                        <p data-lang-en="Boost your brand with a captivating profile website! We create professional, responsive sites that engage your audience." data-lang-id="Tingkatkan merek Anda dengan website profile yang menarik! Kami buat situs profesional dan responsif yang melibatkan audiens."></p>
                    </a>
                </div>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <div class="serContainer">
                    <h3 style="color: black;" data-lang-en="Customized Business Solutions" data-lang-id="Solusi Bisnis Kustom"></h3>
                    <p data-lang-en="We turn your ideas into reality with tailored technology solutions that enhance efficiency and optimize your business." data-lang-id="Kami mewujudkan ide-ide Anda dengan solusi teknologi yang dirancang khusus untuk meningkatkan efisiensi dan mengoptimalkan bisnis Anda."></p>
                </div>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <div class="serContainer">
                    <h3 style="color: black;" data-lang-en="Web Application Support" data-lang-id="Dukungan Aplikasi Web"></h3>
                    <p data-lang-en="Keep your applications running smoothly with our expert support, handling updates and fixes so you can focus on your business." data-lang-id="Jaga aplikasi Anda berjalan lancar dengan dukungan ahli kami, mengurus pembaruan dan perbaikan agar Anda bisa fokus pada bisnis."></p>
                </div>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <h1 data-lang-en="Our Services" data-lang-id="Layanan Kami"></h1>
                <p data-lang-en="Algoritme Digital Solutions supports your business growth with innovative digital solutions and tailored services to optimize your processes." data-lang-id="Algoritme Digital Solutions mendukung pertumbuhan bisnis Anda dengan solusi digital inovatif dan layanan yang disesuaikan untuk mengoptimalkan proses."></p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="contact">
        <div class="container" style="width:80%">
            <footer class="sk">
                <p>Copyright © <b>2024</b> Rizky Mardiyansyah. All Rights Reserved</p>
            </footer>
        </div>
    </div>

    <script>
window.onload = function() {
  document.getElementById('languageToggle').checked = true; // Toggle default ke 'true' untuk bahasa Inggris
    switchLanguage('en'); // Set bahasa default ke Bahasa Inggris
};

const toggleCheckbox = document.getElementById('languageToggle');
const toggleInner = document.querySelector('.toggle-inner');

toggleCheckbox.addEventListener('change', function() {
    const selectedLang = toggleCheckbox.checked ? 'en' : 'id';
    switchLanguage(selectedLang);

    // Ubah teks yang ditampilkan
    toggleInner.textContent = toggleCheckbox.checked ? 'EN' : 'IN';
});

function switchLanguage(lang) {
    const elements = document.querySelectorAll('[data-lang-en]');

    elements.forEach(element => {
        element.textContent = element.getAttribute('data-lang-' + lang);
    });
}
document.getElementById('languageToggle').addEventListener('change', function() {
    if (this.checked) {
        // Logic saat toggle aktif
        console.log('Bahasa diubah ke EN');
    } else {
        // Logic saat toggle tidak aktif
        console.log('Bahasa diubah ke IN');
    }
});

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

    document.querySelectorAll('a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');

        // Periksa apakah targetId dimulai dengan '#'
        if (targetId.startsWith('#')) {
            e.preventDefault(); // Mencegah perilaku default hanya untuk anchor yang dimulai dengan '#'
            const targetElement = document.querySelector(targetId);

            if (targetElement) { // Periksa apakah elemen target ada
                const offsetPosition = targetElement.getBoundingClientRect().top + window.scrollY - 60;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }
        // Jika targetId bukan '#' tidak perlu melakukan apa-apa dan biarkan tautan berfungsi seperti biasa
    });
});

</script>
  
</body>
</html>