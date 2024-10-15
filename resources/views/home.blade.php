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
<link rel="stylesheet" href="styles.css">
    <style type="text/css">
      .serContainer{
        transition: 0.3s;
        border: 1px solid #fff;
        padding: 40px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }
      .serv{
        padding: 10px;
      }
      .serv h3{
        font-family: "Raleway", sans-serif;
        font-weight: bolder;
        font-size: 25px;
        line-height: 30px;
        color: rgba(0, 0, 0, 0.8) !important;
      }
      .serContainer:hover{
        margin-top: -10px;
        box-shadow: 0 2px 10px rgba(92, 149, 255, 0.5);
        border: 1px solid rgba(92, 149, 255, 0.5);
        p{
          color: #010A44 !important;
        }
        h3{
        background: linear-gradient(to right, #5C95FF, #A7C6FF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;}
      }
      /* Styling button melayang */
      .services{
        margin-top: 50px;
      }
      /* .serv {
        background: linear-gradient(135deg, #5C95FF, #1E60FF);
        } */
      .serv h1{
        color: #5C95FF !important;
      }
      .serv p{
        line-height: 30px;
        color: rgba(0, 0, 0, 0.5) !important;
        font-size: 16px !important;
        /* text-align: justify; */
      }

      #floatingButton {
          font-weight: bolder;
          position: fixed;
          top: 90%; /* Jarak dari atas */
          right: 10px; /* Jarak dari kanan */
          background: transparent;
          border: 2px solid #FFCB47;
          color: #FFCB47;
          padding: 0; /* Kurangi padding agar tidak menggeser SVG */
          border-radius: 50px;
          width: 40px; /* Sedikit lebih besar untuk kenyamanan */
          height: 40px;
          cursor: pointer;
          display: none; /* Tombol disembunyikan secara default */
          z-index: 1000;    
          display: flex; /* Flexbox untuk memposisikan svg */
          justify-content: center; /* Horizontal align center */
          align-items: center; /* Vertical align center */
      }

      #floatingButton svg {
        transition: 0.9s;
          margin-top: -20%;
          width: 50%; /* Atur ukuran SVG sesuai tombol */
          height: 50%; /* Pastikan SVG proporsional */
      }
      #floatingButton:hover{
        background-color: #FFCB47;
        color: #fff;
      }


      .about h1{
        color: #5C95FF !important;
        margin-top: 20px;
      }
      .about p{
        line-height: 30px;
        color: #010A44 !important;
        font-size: 16px !important;
        text-align: justify;
      }
      .about{
        margin-top: 10px;
        margin-left: 50px;
        margin-right: 50px;
        padding-left: 40px;
        padding-right: 40px;
        background-color: rgba(92, 149, 255, 0.1);
        border-radius: 20px;
      }
/* Hero */
html {
    scroll-behavior: smooth;
}
#navbar.scrolled {
    background-color: rgba(255, 255, 255, 0.9) !important;
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan saat discroll */
    .nav-link{
      color: #000 !important;
    }
    .white{      
      display:none;   
    }
    .blue{
      display:block;
    }
}
  .white{  
    transition:   0.5s;    
    display:block;   
  }
  .blue{
    transition:   0.5s;
    display:none;
  }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }       
      
        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('img/bg.jpg') no-repeat center center/cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: rgba(255, 203, 71, 0.1); */
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            /* justify-content: center; */
            align-items: center;
        }

        .hero-text {
            font-family: "Inter", sans-serif;
            color: white;
            font-weight: bold;
        }
        .hero-text h1{
            
            color: white;
            font-weight:900;
            font-size: 55px;
        }

        .hero-text p {
            margin-bottom: 8px !important;
            margin-top: 10px;
            font-size: 15px;
            font-weight:lighter;
        }
/* Hero */

/* language selector */
.navbar-toggler {
    border: none; /* Menghilangkan border */
    outline: none; /* Menghilangkan outline */
}

.navbar-toggler:focus {
    box-shadow: none; /* Menghilangkan efek fokus */
}


.navbar-toggler:focus {
    box-shadow: none; /* Menghilangkan efek fokus */
}

     
      .language-selector {
          display: inline-block;
          position: relative;
      }

      .toggle-container {
          position: relative;
          width: 55px;
          height: 25px;
      }

      .toggle-checkbox {
          display: none;
      }

      .toggle-label {
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: #FFCB47;
          border-radius: 30px;
          cursor: pointer;
          height: 100%;
          position: relative;
      }

      .toggle-inner {
          color: white;
          font-weight: bold;
          position: absolute;
          width: 100%;
          top: 50%; 
          transform: translateY(-50%);
          transition: opacity 0.3s, left 0.3s;
          white-space: nowrap;
      }

      /* Switch */

      .toggle-switch {
          position: absolute;
          width: 23px; 
          height: 23px; 
          border-radius: 50%;
          top: 1px;
          left: 1px;
          transition: transform 0.3s;
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          background-image: url('img/in.svg'); /* Bendera Indonesia */
      }

      .toggle-checkbox:checked + .toggle-label .toggle-switch {
          transform: translateX(30px);
          background-image: url('img/en.svg'); /* Bendera Inggris */
      }


      .toggle-checkbox:checked + .toggle-label {
          background-color: #FFCB47;
      }

      .toggle-checkbox:checked + .toggle-label .toggle-switch {
          transform: translateX(30px);
      }

      /* Tampilkan IN di kanan saat tidak aktif */
      .toggle-checkbox:not(:checked) + .toggle-label .toggle-inner {
          left: calc(100% - 25px); 
          content: 'IN'; 
          opacity: 1; 
      }

      /* Tampilkan EN di kiri saat aktif */
      .toggle-checkbox:checked + .toggle-label .toggle-inner {
          left: 5px; 
          content: 'EN'; 
          opacity: 1; 
      }
/* end language selector */
      ::-webkit-scrollbar {
         width: 0px;
      }
      .way{
        font-size: 25px;
      }
      .gb1:hover{
          
          transform: rotate(03deg) scale(1.2);
          
        }
        .gb2:hover{
         
          transform: rotate(-03deg) scale(1.2);
          
        }
        .gb3:hover{
          
          transform: rotate(03deg) scale(1.2);
          
        }
      .cn:hover{
         
          transform: scale(1.05) !important;
        }
      .btn {
            font-family: "Raleway", sans-serif;
            border-radius: 10px;
            color: white;
            margin-top: 10px;
            padding: 10px;
            width: 150px;
            border:none;
            transition: 0.9s;
            background-color:#FFCB47;
            opacity: 60%; 
            backdrop-filter: blur(30px);
        }

        .btn:hover{
            color: white;
            border:none;
            background-color:#FFCB47; 
            
            opacity: 100%;
            
        }

        .garis{
          content: "";
          border-top: 3px solid #FF0000;
          border-left: 3px solid #FF0000;
          width: 5%;
          padding-left: 20px;
          padding-top: 10px;
          margin-left: -22px;
        }
        .navbar{
          padding: 0px;
          /* background-color: rgba(46,47,52, 1); */
          left: 0;
          top: 0;
          position: fixed;
          background-position: bottom;
          width:100%;
          z-index: 1;
        }
        .nav-link{
          color: #fff;
          transition:   0.5s;
          font-family: "Raleway", sans-serif;
          font-weight: 700;
          font-size: 15px;
          position: relative;
          display: inline-block;
          padding-bottom: 2px;
        }     

        .nav-link::after {
            color: #fff;
            content: '';
            position: absolute;
            width: 0;
            height: 2.5px;
            background-color: #FFCB47;
            left: 0;
            bottom: 0;
            border-radius: 3px;
            transition: width 0.4s ease;
        }
        .nav-link:hover::after {
            width: 50%;
            left: 25%;
        }
        .nav-link:hover{
          color: #fff;
        }
        .wrapper{
          margin-left: 30px;
          margin-top: 10px;
          display: inline-flex;
          font-family: "Raleway", sans-serif;
          letter-spacing: 3px;
    
        }
        .wrapper .statistic-txt{
          color: white;

        }
        .wrapper .dynamic-txts{
          margin-left: 15px;
          height: 23px;
          overflow: hidden;

        }
        .dynamic-txts li{
          margin-left: -30px;
          list-style: none;
          position: relative;
          top: 0;
          animation: slide 6s steps(4) infinite;
        }
        @keyframes slide{
          100%{
            top: -99px;
          }
        }
        .dynamic-txts li span{
          position:relative ;
        }
        .dynamic-txts li span::after{
          content: "";
          position: absolute;
          left: 0;
          height: 120%;
          width: 120%;
          background: #2e2f34;
          border-left: 2px solid white;
          margin-bottom: -10px;
          animation: typing 1.5s steps(10) infinite;
        }
        @keyframes typing{
          100%{
            left: 100%;
            margin: 0 -35px 0 35px;
          }
        }
        .nm{
          font-family: russo one; 
          letter-spacing: 5px; 
          font-weight: 500; color: white;
          font-size: 45px;
        }
        .nm .r{
          font-size: 50px;
        }
        .halo{
          font-family: "Raleway", sans-serif;
          width: 70%;
          font-size: 12px;
          color: #d3d3d3;
          letter-spacing: 3px;
          margin-left: 30px;
        }
        .sk{
          font-family: "Raleway", sans-serif;
          text-align: center;
          font-size: 12px;
          color:#d3d3d3 ;
          letter-spacing: 3px;
        }
        .col-sm-6{
          max-width: 767.98px;
        }
        .skil{
          width:50%;
        }
        .carousel-caption {
          background-color: rgba(0, 0, 0, 0.8);
          font-size: 12px;
          font-family: "Raleway", sans-serif;
          letter-spacing: 3px;
        }
        
/* phone View */
         @media (max-width: 767.98px) 
         {      
          .way{
            font-size: 20px;
          }
        

        .skil{
          width: 100%;
        }

        .navbar{
          background-color: rgba(41,42,47, 1);
          left: 0;
          top: 0;
          position: fixed;
          background-position: bottom;
          width:100%;
          z-index: 1;
        }
          .nm{
            font-size: 20px;
            letter-spacing: 1px;
          }
          .nm .r{
            font-size: 23px;
            margin-bottom: 10px;
          }
          .wrapper{
            margin-left: -15px;
            font-size: 10px;
          }
          .dynamic-txts li {
            margin-top: 2.5px;
          }
          .dynamic-txts li span::after{
          height: 127%;
          }
          @keyframes slide{
            100%{
              top: -69px;
            }
          }
          .statistic-txt{
            font-size: 0px;
            margin-top: 3px;
          }
          .gbr{
            margin-top: -250px;
            margin-left: auto;
            width: 50%;
          }
          .btn{
            margin-top: -10px;
            margin-left: 15px;
            font-size: 10px;
          }
          .halo{
            margin-top: -10px;
            margin-left: 15px;
            font-size: 8px;
          }

         }
/* end phone view */
/* tab view */
         @media (min-width: 767.98px) and (max-width: 991.98px){
          .skil{
          width: 70%;
        }

          .nm{
            font-size: 30px;
            
          }
          .nm .r{
            font-size: 35px;
            margin-bottom: 10px;
          }

          .gbr{
            margin-top: -350px;
            margin-left: auto;
            width: 40%;
          }

         }
/* end tab view */
    
    </style>
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
                    <li class="nav-item"><a class="nav-link" href="">Services</a></li>
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

    <div class="services container hero-text">
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
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        const offsetPosition = targetElement.getBoundingClientRect().top + window.scrollY - 60;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});





</script>
  
</body>
</html>