<style>
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
</style>
<!doctype html>
<html lang="en">
<head>        
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/favicon.ico">
<meta name="title" content="Mitra Adidaya Rekayasa Digital">
<meta property="og:site_name" content="Mardsoft - Page Not Found">
<meta property="og:title" content="Mitra Adidaya Rekayasa Digital">      
{{-- <meta property="og:description" content="Penyedia solusi digital untuk optimasi bisnis Anda."> --}}
<meta property="og:description" content="No more papers, Let's bring your digital ideas to life with our solutions. We are committed to helping you optimize operations and unlock your business's full potential.">
<meta property="og:url" content="https://www.mardsoft.com">
<meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
<title>Mard | Page Not Found</title>
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


{{-- Instal Build Website --}}
<div  class="container" style="margin-top: 80px">
<div  class="serv container hero-text row justify-content-center">
  
{{-- <h1 style="text-align: center; color:rgba(0, 0, 0, 0.3) !important; text-shadow:none; font-weight:bold;">Page Not found</h1> --}}
  <img style="width: 100%;" src="img/404.svg" alt="">
  <a href="/" style="font-weight: bolder; border-radius:30px; width:300px; margin :30px;" data-lang-en="Back to home page" data-lang-id="Kembali Ke halaman utama" type="submit" class="nextBtn btn btn-primary">Home Page</a>
</div>
</div>

{{-- Footer Section --}}
@include('partials.footer')  


{{-- baru --}}     
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

{{-- end baru --}}