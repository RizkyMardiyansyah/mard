<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>New Message from {{ $validated['name'] }}</title>
    <style>
        .justify-content-center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; /* opsional, untuk memberi jarak */
        }
        .cart-des{
            color: rgba(0, 0, 0, 0.6) !important;
        }
        body {
            font-family: "Raleway", sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            /* padding: 20px; */
        }
        .tittle {
            font-weight: bolder;
            text-align: center;
            color: #488EFE;
        }
        .header img {
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            width: 100%; /* Lebar penuh */
            height: auto;
        }
        .content {
            padding-top: 0px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container" style="padding: 0px; width:600px;">
        
        <div class="header">
            <div class="kop">
                <img src="{{ config('app.url') }}/img/kop.png" alt="kop" style="max-width: 100%; height: auto;">

            </div>
        </div>
        <div class="content">
            <div class="content">
                <h2 class="tittle" style="font-size: bolder;">New Message from {{ $validated['name'] }}</h2>
                <table>
                    <tr>
                        <td style="width: 20%">
                            <p>Name</p>
                            <p>Email</p>
                            <p>Phone</p>
                            <p>Company</p>
                        </td>
                        <td style="width: 1%">
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                            <p>:</p>
                        </td>                        
                        <td style="width: auto">
                            <p>{{ $validated['name'] }}</p>
                            <p><a href="mailto:{{ $validated['email'] }}" style="color: black; text-decoration: none;">{{ $validated['email'] }}</a></p>
                            <p><a href="https://wa.me/{{ preg_replace('/[^0-9+]/', '', preg_replace('/^0/', '62', $validated['phone'])) }}" style="color: black; text-decoration: none;">{{ $validated['phone'] }}</a></p>
                            <p>{{ $validated['company'] }}</p>
                        </td>
                    </tr>
                </table>
                <p class="mt-4">{{ $validated['message'] }}</p>
            </div>
        </div>
        <div class="footer">
            <div class="footer">
                <p>Copyright © <span id="year"></span> | {{ ucwords(strtolower(config('app.name'))) }}</p>
            </div>

    </div>
    </div>
</body>

</html>
