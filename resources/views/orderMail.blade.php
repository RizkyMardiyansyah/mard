<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Pemberitahuan Pemesanan</title>
    <style>
        .total-price{
            color: #488EFE !important;
            font-size: 25px !important;
            text-transform: uppercase;
        }
        .detail{
            color: #488EFE;
        }
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
        .content a {
            color: #007BFF;
            text-decoration: none;
        }
        .content a:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
        h3 {
            margin-top: 0;
        }
        .order-details {
            margin-top: 20px;
            
        }
        .order-details p {
            margin: 5px 0;
        }
        .total-price {
            margin-top: 20px !important;
            padding-top: 20px;
            border-top: 1px solid;
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }
        .btn {
            font-family: "Raleway", sans-serif;
            border-radius: 10px;
            color: white !important;
            /* margin-top: 10px; */
            padding: 10px;
            width: auto;
            border:none;
            transition: 0.9s;
            background-color:#488EFE;
            backdrop-filter: blur(30px);
            text-decoration: none !important;
            padding: 10px !important;
        }
        .btn:hover{
            text-decoration: none !important;
        }
    </style>
</head>
<body>
    <div class="container" style="padding: 0px">
        
        <div class="header">
            <div class="kop">
                <img src="{{ $message->embed(public_path().'/img/kop.png') }}" alt="kop" style="max-width: 100%; height: auto;">

                {{-- <img src="{{ $message->embed(storage_path('app/public/kop.png')) }}" alt="Logo Perusahaan"> --}}
            </div>
        </div>
        <div class="content">
            <div class="content">
                <h2 class="tittle" style="font-size: bolder;">Checkout Information</h2>
                {{-- <p>Yth. Rizky Mardiyansyah,</p> --}}
                <p>Yth. {{ $data['name'] }},</p>
                <p>Terima kasih telah memilih layanan Instant Web Builder dari <a href="{{ config('app.url') }}" target="_blank"> {{ config('app.name') }}</a>. Kami dengan senang hati mengonfirmasi bahwa pemesanan Anda telah diterima dengan baik.</p>
                            
                <p class="detail"><strong>Detail Pemesanan Anda:</strong></p>
                <div class="container" style="border: none">
                    <div class="order-details">
                        <p style="display: flex; justify-content: space-between;">
                            <strong>Domain.{{ $subs['year'] }}</strong> 
                            <span>Rp. {{ number_format($data['domainCost'], 2, ',', '.') }}</span>
                        </p>
                        <span class="cart-des" id="selected-domain">{{ $data['domain'] }}</span>
                        <p style="display: flex; justify-content: space-between;">
                            <strong>Website Template:</strong>
                            <span>Rp. {{ $data['template_cost'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format($data['templateCost'], 2, ',', '.') }}</span>
                        </p>
                        <span class="cart-des" id="selected-template">{{ $template['title'] }}</span>
                
                        <p style="display: flex; justify-content: space-between;">
                            <strong>Langanan{{ $subs['year'] }}</strong>
                            <span>Rp. {{ number_format($data['subscriptionCost'], 2, ',', '.') }}</span>
                        </p>
                        <span class="cart-des" >Biaya langganan untuk layanan pengelolaan website</span>
                
                        <p class="total-price" style="display: flex; justify-content: space-between; font-weight: bold;">
                            <strong>Subtotal:</strong>
                            <span>Rp. {{ number_format($data['total_payment'], 2, ',', '.') }}</span>
                        </p>
                    </div>
                </div>
                
                <p>Website Anda akan siap paling lama dalam 2x24 jam setelah pembayaran selesai. Jika website Anda belum selesai dalam waktu tersebut, Anda akan mendapatkan refund 100%.</p>

                <p>Silakan melanjutkan pembayaran melalui tautan berikut:</p>
                <div class="justify-content-center">
                    <a class="btn btn-primary" href="{{ config('app.url') }}/payment/{{ $snapToken }}" target="_blank">Klik di sini untuk pembayaran</a>
                    {{-- <a href="{{ config('app.url') }}/payment/{{ $snapToken }}" target="_blank">Klik di sini untuk pembayaran</a> --}}
                </div>
            

                <p style="margin-top: 50px">Jika Anda membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami melalui layanan pelanggan kami.</p>
                <div class="d-flex row">
                    <div class=" col-md-6 col-12 flex-column ">
                            
                       
                    </div>
                    <div class=" col-md-6 col-12 flex-column ">
                            
                        <p style="margin-top: 50px;">Hormat kami,</p>
                        <p style="pa"><strong>{{ config('app.name') }}</strong></p>
                        <a style="color: black; text-decoration:inherit;" href="https://wa.me/62895340307548" target="_blank"> Rizky Mardiyansyah (0895340307548)</a>
                    </div>
                </div>
            
                
            </div>
            
        </div>
        <div class="footer">
            <div class="footer">
                <p>{{ config('app.name') }}</p>
                <p>Copyright © <span id="year"></span> Mardsoft.</p>
            </div>

    </div>
    </div>
</body>

</html>
