    {{-- Footer --}}
    <div class="footer container-fluid bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div style="margin-bottom: 20px;"  class="col-lg-3 col-md-6 col-12 flex-column ">
                    <img src="../img/MardPutih.svg" alt="Logo" class="footer-logo me-3" style="height: 40px;">
                    <a href="#" style="color: inherit; text-decoration: none;">
                        <p style="margin-top:20px;"><b>Cakung Timur</b>, Jakarta Timur, DKI Jakarta, 13910, Indonesia</p>
                    </a>
                </div>
                
                <!-- About us -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder" data-lang-en="About Us" data-lang-id="Tentang Kami">About Us</h6>
                    <a href="/#about" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="About Us" data-lang-id="Tentang Kami">About Us</p>
                    </a>
                    <a href="/#services" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="Our Services" data-lang-id="Layanan Kami">Our Services</p>
                    </a>
                    <a href="/#partners" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="Partner and Client" data-lang-id="Mitra dan Klien">Partner and Client</p>
                    </a>
                </div>

                <!-- Our Services -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder" data-lang-en="Our Services" data-lang-id="Layanan Kami">Our Services</h6>
                    <a href="/instant-web-builder" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="Instant Web Builder" data-lang-id="Pembuat Web Instan">Instant Web Builder</p>
                    </a>
                    <a href="/custom-app-development" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="Custom App Development" data-lang-id="Pengembangan Aplikasi Kustom">Custom App Development</p>
                    </a>
                    <a href="/one-stop-iot-solutions" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="One Stop IoT Solutions" data-lang-id="Solusi IoT Lengkap">One Stop IoT Solutions</p>
                    </a>
                </div>

                <!-- Contact Us -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder" data-lang-en="Contact Us" data-lang-id="Hubungi Kami">Contact Us</h6>
                    <a href="mailto:hi@mardsoft.com" style="color: inherit; text-decoration: none;">
                        <p>hi@mardsoft.com</p>
                    </a>
                    <a style="margin-top: 10px;" href="/contact" class="btn btn-primary" data-lang-en="Get in Touch" data-lang-id="Hubungi Kami">
                        Get in Touch
                    </a>
                </div>
            </div>

            <!-- Footer Bawah -->
            <div style="margin-top: 10px" class="row align-items-center">
                <!-- Social Media Icons Section -->
                <div class="order-md-2 col-lg-6 col-md-6 col-12 d-flex justify-content-lg-end justify-content-md-end justify-content-start">
                    <footer class="mt-4 ml-md-auto">
                        <a href="#" class="me-3" style="color: inherit; text-decoration: none;">
                            <i class="fab fa-github fs-5"></i>
                        </a>
                        <a href="#" class="me-3" style="color: inherit; text-decoration: none;">
                            <i class="fab fa-x-twitter fs-5"></i>
                        </a>
                        <a href="#" class="me-3" style="color: inherit; text-decoration: none;">
                            <i class="fab fa-instagram fs-5"></i>
                        </a>
                        <a href="#" style="color: inherit; text-decoration: none;">
                            <i class="fab fa-linkedin fs-5"></i>
                        </a>
                    </footer>
                </div>
                <!-- Copyright Section -->
                <div class="order-md-1 copyright col-lg-6 col-md-6 col-12 ">
                    <footer class="mt-4 text-left">
                        <p style="text-transform:capitalize;" class="mb-0">
                            Copyright © <span id="year"></span> | {{ ucfirst(strtolower(config('app.name'))) }}.
                        </p>
                        
                        <script>
                            document.getElementById("year").textContent = new Date().getFullYear();
                        </script>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    