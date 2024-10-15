<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Domain Availability</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Style untuk loading spinner */
        .spinner {
            border: 8px solid #f3f3f3; /* Warna dasar */
            border-top: 8px solid #3498db; /* Warna bagian atas */
            border-radius: 50%; /* Bentuk bulat */
            width: 60px; /* Ukuran spinner */
            height: 60px; /* Ukuran spinner */
            animation: spin 2s linear infinite; /* Animasi berputar */
            display: none; /* Tersembunyi secara default */
            margin: 20px auto; /* Memusatkan spinner */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Style untuk card */
        .card-container {
            display: flex;
            flex-wrap: wrap; /* Membuat card bisa berada di baris berikutnya */
            gap: 20px; /* Jarak antar card */
            margin-top: 20px;
        }

        .card {
            border: 1px solid #ddd; /* Border untuk card */
            border-radius: 8px; /* Sudut melengkung */
            width: calc(33.333% - 20px); /* Lebar card 1/3 dengan gap */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan */
            padding: 15px; /* Padding dalam card */
            text-align: center; /* Rata tengah untuk konten */
        }

        .card img {
            max-width: 100px; /* Gambar responsif */
            height: auto; /* Tinggi otomatis */
            border-radius: 8px; /* Sudut melengkung untuk gambar */
        }

        .card-title {
            font-size: 18px; /* Ukuran font untuk judul */
            margin: 10px 0; /* Margin atas dan bawah */
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .card {
                width: calc(50% - 20px); /* Lebar 50% untuk layar kecil */
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%; /* Lebar 100% untuk layar sangat kecil */
            }
        }
    </style>
</head>
<body>

    <h1>Check Domain Availability</h1>

    <!-- Form untuk memasukkan nama domain -->
    <form id="domainForm">
        <label for="domain">Nama Domain (tanpa ekstensi):</label>
        <input type="text" id="domain" name="domain" required>
        <button type="submit">Cek Domain</button>
    </form>

    <!-- Spinner untuk loading animation -->
    <div class="spinner" id="spinner"></div>

    <!-- Div untuk menampilkan hasil pencarian -->
    <div id="result"></div>

    <!-- Tampilkan Daftar Template dalam Bentuk Card -->
    <h2>Daftar Template</h2>
    <div class="card-container">
        @foreach($templates as $template)
        <div class="card">
            <img src="{{ asset('storage/' . $template->image) }}" alt="{{ $template->title }}">
            <div class="card-title">{{ $template->title }}</div>
            <div class="card-description">{{ $template->description }}</div>
            <input type="checkbox" id="template-{{ $template->id }}" name="template_ids[]" value="{{ $template->id }}">
            <label for="template-{{ $template->id }}">Select</label>
            <a href="{{ strpos($template->link, 'http://') === 0 || strpos($template->link, 'https://') === 0 ? $template->link : 'http://' . $template->link }}" class="live-preview-btn" target="_blank" rel="noopener noreferrer">Live Preview</a>

        </div>
        @endforeach
    </div>
    
    
    <!-- Tambahkan script untuk menangani Live Preview -->
    <script>
        function livePreview(templateId) {
            // Di sini Anda dapat menentukan logika untuk Live Preview
            // Misalnya, bisa menampilkan modal atau redirect ke halaman preview
            alert('Live Preview for Template ID: ' + templateId);
        }
    </script>
    

    <!-- Script untuk menangani AJAX tanpa refresh -->
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
                        $('#result').html('');  // Kosongkan hasil sebelumnya
                    },
                    success: function(response) {
                        $('#spinner').hide();  // Sembunyikan spinner setelah request berhasil

                        $('#result').html(`
                            <p>${domain}.com: ${response.com}</p>
                            <p>${domain}.id: ${response.id}</p>
                            <p>${domain}.co.id: ${response['co.id']}</p>
                        `);
                    },
                    error: function() {
                        $('#spinner').hide();  // Sembunyikan spinner jika terjadi kesalahan
                        alert('Terjadi kesalahan, coba lagi nanti.');
                    }
                });
            });
        });
    </script>

</body>
</html>
