<!DOCTYPE html>
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Pemberitahuan Pemesanan</title>
    <style>
        .container span {
            flex-grow: 1;
        }
        .price {
            text-align: right;
        }
        .detail{
            color: #488EFE;
        }
        .justify-content-center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .cart-des{
            color: rgba(0, 0, 0, 0.6) !important;
        }
        body {
            font-family: "Raleway", sans-serif !important;
            line-height: 1.6;
            color: #333;
            font-size: 12px !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        .tittle {
            font-weight: bolder;
            text-align: center;
            color: #488EFE;
        }
        .header img {
            width: 100%;
            height: auto;
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
            font-family: "Raleway", sans-serif;    
        }
        .note{
            font-size: 6px !important
            font-family: "Raleway", sans-serif;
        }
        .price{
            margin-left: auto;
        }
        .totalPayment{
            color: #488EFE !important;
            font-weight: bolder !important;
        }
    </style>
    
</head>
<body>
    <div style="margin: -45px; padding:0px;" class="header">
        <div class="kop">
            <img src="img/kop.png" alt="kop" style="max-width: 100%; height: auto;">
        </div>
    </div>    
    <div class="container" style="padding: 0px; margin-top:40px;">         
        <div class="order-details w-100">
            <h2 class="tittle" style="font-size: bolder;">INVOICE</h2>
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr>                                   
                    <td style="padding: 10px;">Pelangan</td>
                    <td style="padding: 10px;">:  {{ $order['name'] }}</td>
                    <td style="padding: 10px;">ID Pemesanan</td>
                    <td style="padding: 10px;">:  {{ $order['orderId'] }}</td>
                </tr>
                <tr>                                   
                    <td style="padding: 10px;">Tanggal</td>
                    <td style="padding: 10px;">:  {{ $order['updated_at']->translatedFormat('d F Y | H:i:s') }}</td>
                    <td style="padding: 10px;">Pembayaran</td>
                    <td style="padding: 10px;" style="text-transform: capitalize">:  {{ $order['paymentType'] }}</td>
                </tr>
            </table>
        </div>
        <div class="order-details">
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr style="background-color: #488EFE; color:white; font-weight:bolder;">
                    <th style="text-align: left; padding: 10px; border: 1px solid #ddd; width: 15%;">Item</th>
                    <th style="text-align: left; padding: 10px; border: 1px solid #ddd; width: 40%;">Deskripsi</th>
                    <th style="text-align: left; padding: 10px; border: 1px solid #ddd; width: 20%;">Durasi</th>
                    <th style="text-align: left; padding: 10px; border: 1px solid #ddd; width: 25%;">Harga</th>
                </tr>                    
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Domain</td>
                    <td style="padding: 10px; border: 1px solid #ddd;" class="cart-des">{{ $order->domain }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $subs['year'] }} Tahun</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $order['domainCost'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order['domainCost'], 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Templat</td>
                    <td style="padding: 10px; border: 1px solid #ddd;"class="cart-des">{{ $template['title'] }}</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">Selamanya</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $order['templateCost'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order['templateCost'], 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Langanan</td>
                    <td style="padding: 10px; border: 1px solid #ddd;"class="cart-des">Biaya langganan untuk layanan pengelolaan website</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $subs['year'] }} Tahun</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $subs->price == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $subs->price, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td class="totalPayment" colspan="3" style="padding: 10px; border-top: 1px solid #488EFE;border: 1px solid #ddd;">TOTAL PEMBAYARAN</td>
                    <td class="totalPayment" style="padding: 10px; border-top: 1px solid #488EFE;border: 1px solid #ddd;">{{ $order['total_payment'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order->total_payment, 2, ',', '.') }}</td>
                </tr>
            </table>
        </div>            
        <div>
            <p class="detail mt-4"><strong>Catatan</strong></p>            
            <ul class="pl-5">
                <li class="note">Websitemu akan selesai dan siap digunakan dalam waktu maksimal 24 jam setelah pembayaran ({{ $order['updated_at']->addHours(24)->format('d M F H:i:s') }}).</li>
                <li class="note">Setelah website Anda siap, Anda akan menerima kredensial website Anda beserta panduan mudah yang membantu Anda mengedit dan mengelola website Anda.</li>
                <li class="note">Anda juga akan mendapatkan email bisnis khusus yang sesuai dengan domain Anda, Anda bisa menghubungi kami untuk klaim email Anda.</li>
                <li class="note">Jika website Anda belum siap pada {{ $order['updated_at']->addHours(24)->format('d F Y H:i:s') }}, Anda akan mendapatkan refund 100%.</li>
                <li class="note">Untuk klaim refund atau jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.</li>                                             
            </ul>
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
    <div class="footer">
        <div class="footer">
            <p>Copyright © <span id="year"></span> | {{ ucwords(strtolower(config('app.name'))) }}</p>
        </div>
    </div>
</body>
</html>
