<style>
  @import url('https://fonts.googleapis.com/css?family=Hind:300,400&display=swap');

.faq {
margin: 0 auto;
/* padding: 4rem; */
h2{
  color:#488EFE;
  font-weight:bolder;
}
}

.accordion {
  margin-top:10px;
.accordion-item {
  border: none !important;
  border-bottom: 1px solid #E5E5E5 !important;
  button[aria-expanded='true'] {
    /* border-bottom: 1px solid #488EFE; */
  }
}
button {
  position: relative;
  display: block;
  text-align: left;
  width: 100%;
  padding: 1em 0;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border: none;
  background: none;
  outline: none;
  &:hover, &:focus {
    cursor: pointer;
    color: #488EFE;
    &::after {
      cursor: pointer;
      font-weight: bold;
      color: #488EFE;
      border: 1px solid #488EFE;
    }
  }
  .accordion-title {
    /* padding: 1em 1.5em 1em 0; */
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
    max-height: 100vh;
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
    padding-bottom:10px;
  }
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
</style>
<!doctype html>
<html lang="en">
<head>        
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/favicon.ico">
<meta name="title" content="Mitra Adidaya Rekayasa Digital">
<meta property="og:site_name" content="Mitra Adidaya Rekayasa Digital">
<meta property="og:title" content="Mardsoft - FAQ">
<meta property="og:description" content="No more papers, Let's bring your digital ideas to life with our solutions. We are committed to helping you optimize operations and unlock your business's full potential.">
<meta property="og:url" content="https://www.mardsoft.com">
<meta property="og:image" content="https://www.mardsoft.com/img/og-image.png">
<title>Mardsoft - FAQ</title>
<meta name="application-name" content="Mitra Adidaya Rekayasa Digital">
<meta name="description" content="No more papers, Let's bring your digital ideas to life with our solutions. We are committed to helping you optimize operations and unlock your business's full potential.">
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
    "@type": "Website",
    "name": "Mitra Adidaya Rekayasa Digital",
    "url": "https://www.mardsoft.com",
    "logo": "https://www.mardsoft.com/img/icon.png",
    "sameAs": [
      "https://www.facebook.com/mardsoft",
      "https://www.instagram.com/hi.mardsoft",
      "https://www.linkedin.com/company/mardsoft"
    ]
  }
  </script>

</head>
<body id="home">  

{{-- navbar section --}}
@include('partials.navbar')


{{-- Instal Build Website --}}
<div  class="container" style="margin-top: 80px">
<div  class="serv container hero-text row">
<div style="padding: 20px;" class="col-md-6 col-12 order-md-2 container">
  <img style="width: 100%" src="img/faq.svg" alt="">
</div>     
<div style="padding: 20px;" class="faq col-md-6 col-12 container"> 
  
    <h2 data-lang-en="Frequently Asked Questions" data-lang-id="Pertanyaan Populer">Frequently Asked Questions</h2>
    <div class="accordion">
      <div class="accordion-item">
        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title" data-lang-en="How do I use the instant web builder?" data-lang-id="Bagaimana cara menggunakan pembuat web instan?">How do I use the instant web builder?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
          <p data-lang-en="Select your domain and template, choose a subscription pakcage, then fill in your personal information accurately. Click checkout and complete the payment than your website ready to online."  
            data-lang-id="Pilih domain dan template, pilih paket berlangganan, lalu isi informasi pribadimu. Klik checkout dan segera selesaikan pembayaran maka website kamu siap untuk online.">
            Select your domain and template, choose a subscription pakcage, then fill in your personal information accurately. Click checkout and complete the payment than your website ready to online.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title" data-lang-en="Is a template an annual cost?" data-lang-id="Apakah template harus dibayar setiap tahun?">Is a template an annual cost?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
          <p data-lang-en="Absolutely not! You only pay once for the template, and it’s yours forever, no hidden fees, no annual renewals. Plus, we even offer free basic templates."
           data-lang-id="Tentu tidak! Anda hanya perlu membayar sekali dan itu menjadi milik Anda selamanya tanpa biaya tersembunyi, tanpa perpanjangan tahunan. Bahkan, kami menyediakan template basic secara gratis.">
           Absolutely not! You only pay once for the template, and it’s yours forever, no hidden fees, no annual renewals. Plus, we even offer free basic templates. 
        </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title" data-lang-en="What is Subscription Package?" data-lang-id="Apa itu Paket Berlanganan?">What is Subscription Package?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
          <p data-lang-en="A subscription package provides ongoing website management, including hosting, performance optimization, and technical support, ensuring your website stays online and runs smoothly."  
            data-lang-id="Paket langganan adalah layanan pengelolaan website berkelanjutan, termasuk hosting, optimalisasi performa, dan dukungan teknis, sehingga website Anda tetap online dan berjalan dengan lancar.">
            A subscription package provides ongoing website management, including hosting, performance optimization, and technical support, ensuring your website stays online and runs smoothly.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title" data-lang-en="What if I don’t get a response after payment?" data-lang-id="Bagaimana jika tidak ada update setelah pembayaran?"> What if I don’t get a response after payment? </span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
          <p data-lang-en="If you do not receive any updates from us within 24 hours after your payment, you are entitled to a 100% refund. To claim your refund, please contact us using the available contact options." 
            data-lang-id="Jika dalam waktu 24 jam setelah pembayaran Anda update dari kami, Anda berhak mendapatkan pengembalian dana 100%. Untuk klaim pengembalian dana, silakan hubungi kami melalui kontak yang tersedia.">
            If you do not receive any updates from us within 24 hours after your payment, you are entitled to a 100% refund. To claim your refund, please contact us using the available contact options.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title" data-lang-en="How can I get a business email?" data-lang-id="Bagaimana cara mendapatkan email bisnis?">How can I get a business email?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
          <p data-lang-en="You can contact our team directly to claim a business email that matches your purchased domain. We will assist you with to setup your business email for professional communication." 
            data-lang-id="Anda bisa langsung menghubungi tim kami untuk mengklaim email bisnis yang sesuai dengan domain yang telah Anda beli. Kami akan membantu setup email untuk kebutuhan profesional anda.">
            You can contact our team directly to claim a business email that matches your purchased domain. We will assist you with to setup your business email for professional communication.
          </p>
        </div>
      </div> 
      <div class="accordion-item">
        <button id="accordion-button-7" aria-expanded="false"><span class="accordion-title" data-lang-en="Can I request a custom web application?"  data-lang-id="Apakah bisa pembuatan aplikasi kustom?"> Can I request a custom web application?</span><span class="icon" aria-hidden="true"></span> </button>
        <div class="accordion-content">
            <p data-lang-en="Absolutely! If you need a tailored web application that fits your specific business needs, feel free to reach out to us through our Contact Us page or send us an email."
               data-lang-id="Tentu saja! Jika Anda membutuhkan aplikasi web kustom yang sesuai dengan kebutuhan bisnis Anda, jangan ragu untuk menghubungi kami melalui halaman Contact Us atau kirimkan email kepada kami.">
                Absolutely! If you need a tailored web application that fits your specific business needs, feel free to reach out to us through our Contact Us page or send us an email.
            </p>
        </div>
      </div>               
      
    </div>
  </div> 
  
</div>
</div>

{{-- Footer Section --}}
@include('partials.footer')  


{{-- baru --}}     
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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



</body>
</html>

{{-- end baru --}}