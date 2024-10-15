{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Domain</title>
    <style>
        /* Tambahkan animasi loading */
        .loading {
            display: none;
            position: fixed;
            z-index: 999;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.7) url('/loading.gif') 50% 50% no-repeat;
        }
    </style>
</head>
<body>
    <h1>Cek Domain</h1>
    <form id="domainForm">
        <input type="text" id="domain" name="domain" placeholder="Masukkan nama domain" required>
        <button type="submit">Cek Domain</button>
    </form>

    <div class="loading"></div>
    <div id="result"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#domainForm').on('submit', function(e) {
            e.preventDefault();
            var domain = $('#domain').val();
            $('.loading').show();
            $.ajax({
                url: '{{ route("check.domain") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    domain: domain
                },
                success: function(response) {
                    $('.loading').hide();
                    $('#result').html(
                        <p>.com: ${response.com}</p>
                        <p>.id: ${response.id}</p>
                        <p>.co.id: ${response['co.id']}</p>
                    );
                },
                error: function() {
                    $('.loading').hide();
                    alert('Terjadi kesalahan, coba lagi nanti.');
                }
            });
        });
    </script>
</body>
</html> --}}