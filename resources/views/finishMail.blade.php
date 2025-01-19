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
                <img src="{{ $message->embed(public_path('img/kop.png')) }}" alt="kop" style="max-width: 100%; height: auto;">
            </div>
        </div>
        <div class="content">
            <div class="content">
                <h2 class="tittle" style="font-size: bolder;">Payment Success</h2>
                {{-- <p>Yth. Rizky Mardiyansyah,</p> --}}
                <p>Yth. {{ $order['name'] }},</p>
                <p>Terima kasih atas pembayaran Anda! Pembayaran Anda telah kami terima dengan sukses. Silakan lihat detail pesanan Anda di bawah ini:</p>
                <div style="padding: 0px" class="cart mb-4">
                    <div class="section p-0">
                        <p  class="cart-title" style="text-align:center; font-weight:bold">Rincian Pembayaran</p>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="cart-title">Status Pembayaran</p>
                            <div id="discoutContainer" style="display: flex; align-items: center;">    
                                <p id="hemat" class="display-price">Berhasil</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="cart-title">ID Pemesanan</p>
                            <p class="cart-title value">{{ $order['orderId']}}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="cart-title">Waktu Pembayaran</p>
                            <p class="cart-title value">{{ $order['updated_at']->translatedFormat('d F Y | H:i:s') }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">                                                
                            <p class="cart-title">Metode Pembayaran</p>                                               
                            <p class="cart-title  value">{{ $order['paymentType'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-0 cart mb-4">
                    <div class="section p-0">
                        <p  class="cart-title" style="text-align:center; font-weight:bold">Rincian Pemesanan</p>
                    </div>
                    <div class="p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-left">
                                <p class="cart-title">Domain (</p><p style="margin-right: 2px" class="cart-title">{{ $subs['year'] }}</p><p class="cart-title">)Tahun</p>
                            </div>
                            <p class="cart-title" id="domain-price" class=" price">{{ $order['domainCost'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order['domainCost'], 2, ',', '.') }}</p>
                        </div>
                        <span class="cart-des">{{ $order->domain }}</span>
                        <div class="mt-2 d-flex justify-content-between align-items-center">
                            <p class="cart-title">Web Template</p>
                            <p class="cart-title" class=" price">{{ $order['templateCost'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order['templateCost'], 2, ',', '.') }}</p>
                        </div>
                        <span class="cart-des">{{ $template['title'] }}</span>

                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-left">
                                <p class="cart-title">Langanan (</p><p style="margin-right: 2px" class="cart-title">{{ $subs['year'] }}</p><p class="cart-title">Tahun)</p>
                            </div>
                                <p class="cart-title" id="subs-price-cart" class=" price">{{ $subs->price == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $subs->price, 2, ',', '.') }}</p>
                        </div>
                        <span class="cart-des">Biaya langganan untuk layanan pengelolaan website</span>

                        <div class="Subtotal d-flex justify-content-between align-items-center">
                            <h5 style="font-weight: 700 !important;" class="cart-title">Total Pembayaran</h5>
                            <h5 style="font-weight:  700 !important;" class="cart-title" class="price">{{ $order['total_payment'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order->total_payment, 2, ',', '.') }}</h5>
                        </div>  
                    </div>              
                </div>
                <div class="p-0 cart mb-4">
                    <div class="section p-0">
                        <p  class="cart-title" style="text-align:center; font-weight:bold" >Catatan</p>
                    </div>
                    <ul class="pl-5 pt-3 m-0">
                        <!-- Website readiness and guarantee -->
                        <li class="cart-title">Websitemu akan selesai dan siap digunakan dalam waktu maksimal 24 jam setelah pembayaran ({{ $order['updated_at']->addHours(24)->format('d M F H:i:s') }}).</li>
                        <!-- Credentials and guide for website management -->
                        <li class="cart-title">Setelah website Anda siap, Anda akan menerima kredensial website Anda beserta panduan mudah yang membantu Anda mengedit dan mengelola website Anda.</li>
                        <!-- Business email matching domain -->
                        <li class="cart-title">Anda juga akan mendapatkan email bisnis khusus yang sesuai dengan domain Anda, Anda bisa menghubungi kami untuk klaim email Anda.</li>
                        <!-- Refund guarantee if website is not ready on time -->
                        <li class="cart-title">Jika website Anda belum siap pada {{ $order['updated_at']->addHours(24)->format('d F Y H:i:s') }}, Anda akan mendapatkan refund 100%.</li>
                        <!-- Contact information for refund or further questions -->
                        <li class="cart-title">Untuk klaim refund atau jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.</li>                                             
                    </ul>
                </div>
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
                <p>Copyright © <span id="year"></span> | {{ ucfirst(strtolower(config('app.name'))) }}</p>
            </div>
        </div>
    </div>
</body>

</html>
