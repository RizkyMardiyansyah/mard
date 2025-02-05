<style>
    @import url('https://fonts.googleapis.com/css?family=Hind:300,400&display=swap');

/* $bg: #fff;
$text: #7288a2;
$gray: #4d5974;
$lightgray: #e5e5e5;
$blue: #03b5d2; */



.faq {
  margin: 0 auto;
  padding: 4rem;
  width: 80% !important;
  border: 1px solid black !important;
}

.accordion {
  .accordion-item {
    border-bottom: 1px solid #e5e5e5;
    button[aria-expanded='true'] {
      border-bottom: 1px solid #03b5d2;
    }
  }
  button {
    position: relative;
    display: block;
    text-align: left;
    width: 100%;
    padding: 1em 0;
    color: $text;
    font-size: 1.15rem;
    font-weight: 400;
    border: none;
    background: none;
    outline: none;
    &:hover, &:focus {
      cursor: pointer;
      color: $blue;
      &::after {
        cursor: pointer;
        color: $blue;
        border: 1px solid $blue;
      }
    }
    .accordion-title {
      padding: 1em 1.5em 1em 0;
    }
    .icon {
      display: inline-block;
      position: absolute;
      top: 18px;
      right: 0;
      width: 22px;
      height: 22px;
      border: 1px solid;
      border-radius: 22px;
      &::before {
        display: block;
        position: absolute;
        content: '';
        top: 9px;
        left: 5px;
        width: 10px;
        height: 2px;
        background: currentColor;
      }
      &::after {
        display: block;
        position: absolute;
        content: '';
        top: 5px;
        left: 9px;
        width: 2px;
        height: 10px;
        background: currentColor;
      }
    }
  }
  button[aria-expanded='true'] {
    color: $blue;
    .icon {
      &::after {
        width: 0;
      }
    }
    + .accordion-content {
      opacity: 1;
      max-height: 9em;
      transition: all 200ms linear;
      will-change: opacity, max-height;
    }
  }
  .accordion-content {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: opacity 200ms linear, max-height 200ms linear;
    will-change: opacity, max-height;
    p {
      font-size: 1rem;
      font-weight: 300;
      margin: 2em 0;
    }
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
      <meta property="og:site_name" content="Mitra Adidaya Rekayasa Digital">
      <meta property="og:title" content="Mardsoft | Custom App Development">
      <meta property="og:description" content="No more papers, Let's bring your digital ideas to life with our solutions. We are committed to helping you optimize operations and unlock your business's full potential.">
      <meta property="og:url" content="https://www.mardsoft.com">
      <meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
      <title>Mardsoft | Guide</title>
      <meta name="keywords" content="jasa buat website jakarta, jasa buat website jakarta timur, jasa buat website jaktim, digital solutions, business optimization, software development, IT consulting, buat website, domain, website, website jakarta, website jakarta timur, website jaktim, software, development, IT consultant jakarta, IT consultant jakarta timur, IT consulting jakarta, IT consulting jakarta timur, IT consultant jaktim, IT consulting jaktim">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/css/intlTelInput.css">
      <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/intlTelInput.min.js"></script>
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

  <body>

    {{-- navbar section --}}
    @include('partials.navbar')

    <div style="height: 80vh; background: url(img/develop.jpg) no-repeat center center/cover;" class="hero-section">
        <div style="background-color: rgba(0, 0, 0, 0.2);" class="hero-overlay">
            <div class="container hero-text">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h1 style="text-align: left" data-lang-en="Custom Application Development" data-lang-id="Pengembangan Aplikasi Kustom">Custom Application Development</h1>
                    </div>
                    <div class="col-lg-6 col-12"></div>
                </div>
            </div>
        </div>
    </div>

{{-- Body Section --}}
<div class="blogContainer container servBody hero-text ">     
    <div class="faq ">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion">
          <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is the moon sometimes out during the day?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is the sky blue?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we ever discover aliens?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much does the Earth weigh?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do airplanes stay up?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
            </div>
          </div>
        </div>
      </div>
        
        
</div>

   


{{-- Contact Us Section --}}
    


    {{-- Footer Section --}}
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
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
                title: "Send a Message?",
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
