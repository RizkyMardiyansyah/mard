mix.js('resources/js/LanguageToggle.js', 'public/js');

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
