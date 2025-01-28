<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Pemberitahuan Pemesanan</title>
    <style>
        .containerButton{
            padding-top: 50px;
            text-align: center;
        }
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
        .price{
            margin-left: auto;
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
                <h2 class="tittle" style="font-size: bolder;">Checkout Information</h2>
                {{-- <p>Yth. Rizky Mardiyansyah,</p> --}}
                <p>Yth. {{ $data['name'] }},</p>
                <p>Terima kasih telah memilih layanan Pembuat Web Instan dari <a href="{{ config('app.url') }}" target="_blank"> {{ config('app.name') }}</a>. Kami dengan senang hati mengonfirmasi bahwa pemesanan Anda telah diterima dengan baik.</p>
                            
                <p class="detail"><strong>Detail Pemesanan Anda:</strong></p>
                <div class="container" style="border: none">
                    <div class="order-details">
                        <div style="display: flex; justify-content: space-between;">
                            <strong>Domain ({{ $subs['year'] }} Tahun)</strong> 
                            <div class="price"><span >Rp. {{ number_format($data['domainCost'], 2, ',', '.') }}</span></div>
                        </div>
                        <span class="cart-des" id="selected-domain">{{ $data['domain'] }}</span>
                        <div style="display: flex; justify-content: space-between;">
                            <strong>Template Website</strong>
                            <div class="price"><span>Rp. {{ $data['template_cost'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format($data['templateCost'], 2, ',', '.') }}</span></div>
                        </div>
                        <span class="cart-des" id="selected-template">{{ $template['title'] }}</span>
                
                        <div style="display: flex; justify-content: space-between;">
                            <strong>Langanan ({{ $subs['year'] }} Tahun)</strong>
                            <div class="price"><span>Rp. {{ number_format($data['subscriptionCost'], 2, ',', '.') }}</span></div>
                        </div>
                        <span class="cart-des" >Biaya langganan untuk layanan pengelolaan website</span>
                
                        <div class="total-price" style="display: flex; justify-content: space-between; font-weight: bold;">
                            <strong>Total Biaya</strong>
                            <div class="price"><span>Rp. {{ number_format($data['total_payment'], 2, ',', '.') }}</span></div>
                        </div>
                    </div>
                </div>
                <p>Lakukan pembayaran sebelum 48 jam setelah checkout ({{ $order['updated_at']->addHours(48)->format('d M F H:i:s') }}) untuk menjaga pesanan Anda tetap berlaku. Jika tidak, pesanan akan dibatalkan otomatis.</P>
                <p>Website Anda akan selesai dan siap digunakan dalam waktu maksimal 24 jam setelah pembayaran.</p>
                <p>Setelah website Anda siap, Anda akan menerima kredensial website Anda beserta panduan mudah yang membantu Anda mengedit dan mengelola website Anda.</p>
                <p>Anda juga akan mendapatkan email bisnis khusus yang sesuai dengan domain Anda, Anda bisa menghubungi kami untuk klaim email Anda.</p>
                <p>Jika website Anda belum siap dalam 24 jam Anda akan mendapatkan refund 100%.</p>
                <p>Untuk klaim refund atau jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.</p>

                
                <div class="containerButton">
                    <a class="btn btn-primary" href="{{ config('app.url') }}/payment/{{ $snapToken }}" target="_blank">Klik di sini untuk pembayaran</a>
                </div>
            

                <p style="margin-top: 50px">Jika Anda membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami melalui layanan pelanggan kami.</p>
                <table style="margin-top: 50px;">
                    <tr>
                        <td style="width: 50%"></td>
                        <td style="width: 50%">
                            <div class="flex-column ">  
                                <p>Hormat kami,</p>
                                <p><strong>{{ config('app.name') }}</strong></p>
                                <a style="color: black; text-decoration:inherit; margin-top:20px;" href="https://wa.me/62895340307548" target="_blank"> Rizky Mardiyansyah</a>
                                <a style="color: black; text-decoration:inherit;" href="https://wa.me/62895340307548" target="_blank">0895340307548</a>
                            </div>
                        </td>
                    </tr>
                </table>
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
