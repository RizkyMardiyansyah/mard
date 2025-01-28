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
            border: 1.5px solid #EBEBEC;
            border-radius: 10px;
        }
        .order-details p {
            margin: 5px 0;
        }
        .total-price {
            margin-top: 20px !important;
            padding-top: 20px;
            padding: 5px;
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
        .berhasil{
            background-color: #51CB5F;
            text-transform: uppercase;
            color: white !important;
            font-weight: bolder;
            padding: 5px;
            padding-left: 10px !important;
            padding-right: 10px !important;
            border-radius: 30px;
            justify-content: center;
            text-align: center;
        }
        .orderDetail{
            padding: 5px;
        }
        .sectionBody{
            padding: 5px;
        }
        .sectionTitle{
            text-align: center !important;
            padding: 5px;
            border-bottom: 1.5px solid #EBEBEC;
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
                <h2 class="tittle" style="font-size: bolder;">Pembayaran Berhasil</h2>
                <p>Yth. {{ $order['name'] }},</p>
                <p>Terima kasih atas pembayaran Anda! Pembayaran Anda telah kami terima dengan sukses. Silakan lihat detail pesanan Anda di bawah ini:</p>
                <div style="padding: 0px" class="cart mb-4">
                            <div class="order-details">
                                <div class="sectionTitle">
                                    <p class="detail"><strong>Rincian Pembayaran</strong></p>
                                </div>
                                <div class="sectionBody">
                                    <div class="orderDetail mt-2" style="display: flex; justify-content: space-between;">
                                        <span>Status Pembayaran</span> 
                                        <div class="price berhasil">Berhasil</div>
                                    </div>
                                    <div class="orderDetail mt-2" style="display: flex; justify-content: space-between;">
                                        <span>ID Pemesanan</span>
                                        <div class="price "><strong>{{ $order['orderId']}}</strong></div>
                                    </div>                         
                                    <div class="orderDetail mt-2" style="display: flex; justify-content: space-between;">
                                        <span>Waktu Pembayaran</span>
                                        <div class="price"><strong>{{ $order['updated_at']->translatedFormat('d F Y | H:i:s') }}</strong></div>
                                    </div>
                                    <div class="orderDetail mt-2" style="display: flex; justify-content: space-between; text-transform: capitalize;">
                                        <span>Metode Pembayaran</span>
                                        <div class="price"><strong>{{ $order['paymentType'] }}</strong></div>
                                    </div>
                                </div>                        
                            </div>                       
                                        
                            <div class="order-details">
                                <div class="sectionTitle">
                                    <p class="detail mt-4"><strong>Rincian Pemesanan</strong></p>
                                </div>
                                <div class="sectionBody">
                                    <div class="orderDetail">
                                        <div class="mt-2" style="display: flex; justify-content: space-between; padding:5px; padding-bottom:0px;">
                                            <strong>Domain ({{ $subs['year'] }} Tahun)</strong>
                                            <span class="price">{{ $order['domainCost'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order['domainCost'], 2, ',', '.') }}</span>
                                        </div>
                                        <span class="cart-des" id="selected-domain" style="padding:5px; padding-top:0px;">{{ $order->domain }}</span>
                                    </div>
                                    <div class="orderDetail">
                                        <div class="mt-2" style="display: flex; justify-content: space-between; padding:5px; padding-bottom:0px;">
                                            <strong>Website Template</strong>
                                            <span class="price">{{ $order['templateCost'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order['templateCost'], 2, ',', '.') }}</span>
                                        </div>
                                        <span class="cart-des" style="padding:5px; padding-top:0px;">{{ $template['title'] }}</span>
                                    </div>
                                    <div class="orderDetail">
                                        <div  class="mt-2" style="display: flex; justify-content: space-between; padding:5px; padding-bottom:0px;">
                                            <strong>Langanan ({{ $subs['year'] }} Tahun)</strong>
                                            <div class="price"><span>{{ $subs->price == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $subs->price, 2, ',', '.') }}</span></div>
                                        </div>
                                        <span class="cart-des" style="padding:5px; padding-top:0px;">Biaya langganan untuk layanan pengelolaan website</span>
                                    </div>
                                    <div class="total-price" style="display: flex; justify-content: space-between; font-weight: bold; ">
                                        <strong>Total Biaya</strong>
                                        <div class="price"><span>{{ $order['total_payment'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order->total_payment, 2, ',', '.') }}</span></div>
                                    </div>
                                </div>
                            </div>
                        
                    <div class="order-details" style="border: 0px;">
                        <p class="detail mt-4"><strong>Catatan</strong></p>
                        <ul class="pl-5 pt-3 m-0">
                            <li>Websitemu akan selesai dan siap digunakan dalam waktu maksimal 24 jam setelah pembayaran ({{ $order['updated_at']->addHours(24)->format('d M F H:i:s') }}).</li>
                            <li>Setelah website Anda siap, Anda akan menerima kredensial website Anda beserta panduan mudah yang membantu Anda mengedit dan mengelola website Anda.</li>
                            <li>Anda juga akan mendapatkan email bisnis khusus yang sesuai dengan domain Anda, Anda bisa menghubungi kami untuk klaim email Anda.</li>
                            <li>Jika website Anda belum siap pada {{ $order['updated_at']->addHours(24)->format('d F Y H:i:s') }}, Anda akan mendapatkan refund 100%.</li>
                            <li>Untuk klaim refund atau jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.</li>                                             
                        </ul>
                    </div>
                </div>                
                
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
