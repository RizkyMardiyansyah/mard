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
                <p>Yth {{ $order['name'] }},</p>
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
                            <a style="width:200px; display: flex; align-items: center; gap: 8px;  padding:10px; color: #000; text-decoration: none; display: flex; align-items: center; gap: 8px;" href="mailto:hi@mardsoft.com" target="_blank">
                                <img width="20px"  style="margin-right: 10px;" src="{{ config('app.url') }}/img/email.png" alt="">
                                hi@mardsoft.com
                            </a>       
                          
                            <a style=" width:200px; display: flex; align-items: center; gap: 8px; padding:10px; color: #000; text-decoration: none; display: flex; align-items: center; gap: 8px;" href="https://wa.me/62895405543809" target="_blank">
                                <img width="20px" style="margin-right: 10px;" src="{{ config('app.url') }}/img/whatsapp.png" alt="">  
                                0895-4055-43809
                            </a>                                              
                        </ul>
                    </div>
                </div>              
                <div style="margin-top: 50px;" class="flex-column">  
                    <p>Hormat Kami,</p>                    
                    <p style="margin:0px; color: black; text-decoration: inherit; margin-top: 30px;" href="https://wa.me/62895405543809" target="_blank">Rizky Mardiyansyah</p>
                    <p style="margin: 0px; margin-top:10px;"><b>PT {{ config('app.name') }}</b></p>
                </div>       
            </div>

            <hr style="margin: 20px 0; border: 1px solid #ccc;">

            <div class="content">
                <h2 class="tittle" style="font-size: bolder;">Pembayaran Berhasil</h2>
                <p>Dear {{ $order['name'] }},</p>
                <p>Thank you for your payment! We have successfully received your payment. Please find your order details below:</p>
                <div style="padding: 0px" class="cart mb-4">
                            <div class="order-details">
                                <div class="sectionTitle">
                                    <p class="detail"><strong>Payment Details</strong></p>
                                </div>
                                <div class="sectionBody">
                                    <div class="orderDetail mt-2" style="display: flex; justify-content: space-between;">
                                        <span>Payment Status</span> 
                                        <div class="price berhasil">Successful</div>
                                    </div>
                                    <div class="orderDetail mt-2" style="display: flex; justify-content: space-between;">
                                        <span>Order ID</span>
                                        <div class="price "><strong>{{ $order['orderId']}}</strong></div>
                                    </div>                         
                                    <div class="orderDetail mt-2" style="display: flex; justify-content: space-between;">
                                        <span>Payment Time</span>
                                        <div class="price"><strong>{{ $order['updated_at']->translatedFormat('d F Y | H:i:s') }}</strong></div>
                                    </div>
                                    <div class="orderDetail mt-2" style="display: flex; justify-content: space-between; text-transform: capitalize;">
                                        <span>Payment Method</span>
                                        <div class="price"><strong>{{ $order['paymentType'] }}</strong></div>
                                    </div>
                                </div>                        
                            </div>                       
                                        
                            <div class="order-details">
                                <div class="sectionTitle">
                                    <p class="detail mt-4"><strong>Order Details</strong></p>
                                </div>
                                <div class="sectionBody">
                                    <div class="orderDetail">
                                        <div class="mt-2" style="display: flex; justify-content: space-between; padding:5px; padding-bottom:0px;">
                                            <strong>Domain ({{ $subs['year'] }} Year)</strong>
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
                                            <strong>Subscription ({{ $subs['year'] }} Year)</strong>
                                            <div class="price"><span>{{ $subs->price == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $subs->price, 2, ',', '.') }}</span></div>
                                        </div>
                                        <span class="cart-des" style="padding:5px; padding-top:0px;">Subscription fee for website management services</span>
                                    </div>
                                    <div class="total-price" style="display: flex; justify-content: space-between; font-weight: bold; ">
                                        <strong>Total Cost</strong>
                                        <div class="price"><span>{{ $order['total_payment'] == 0 ? 'Rp. 0' : 'Rp. ' . number_format( $order->total_payment, 2, ',', '.') }}</span></div>
                                    </div>
                                </div>
                            </div>
                        
                    <div class="order-details" style="border: 0px;">
                        <p class="detail mt-4"><strong>Notes</strong></p>
                        <ul class="pl-5 pt-3 m-0">
                            <li>Your website will be completed and ready to use within a maximum of 24 hours after payment ({{ $order['updated_at']->addHours(24)->format('d M F H:i:s') }}).</li>
                            <li>Once your website is ready, you will receive your website credentials along with an easy-to-follow guide to help you edit and manage your website.</li>
                            <li>You will also receive a custom business email matching your domain. Contact us to claim your email.</li>
                            <li>If your website is not ready by {{ $order['updated_at']->addHours(24)->format('d F Y H:i:s') }}, you will receive a 100% refund.</li>
                            <li>To claim a refund or if you have any further questions, please do not hesitate to contact us.</li>
                            <a style="width:200px; display: flex; align-items: center; gap: 8px;  padding:10px; color: #000; text-decoration: none; display: flex; align-items: center; gap: 8px;" href="mailto:hi@mardsoft.com" target="_blank">
                                <img width="20px"  style="margin-right: 10px;" src="{{ config('app.url') }}/img/email.png" alt="">
                                hi@mardsoft.com
                            </a>       
                          
                            <a style=" width:200px; display: flex; align-items: center; gap: 8px; padding:10px; color: #000; text-decoration: none; display: flex; align-items: center; gap: 8px;" href="https://wa.me/62895405543809" target="_blank">
                                <img width="20px" style="margin-right: 10px;" src="{{ config('app.url') }}/img/whatsapp.png" alt="">  
                                0895-4055-43809
                            </a>                                              
                        </ul>
                    </div>
                </div>              
                <div style="margin-top: 50px;" class="flex-column">  
                    <p>Best Regards,</p>                    
                    <p style="margin:0px; color: black; text-decoration: inherit; margin-top: 30px;" href="https://wa.me/62895405543809" target="_blank">Rizky Mardiyansyah</p>
                    <p style="margin: 0px; margin-top:10px;"><b>PT {{ config('app.name') }}</b></p>
                </div>       
            </div>
            
        </div>
        <div style="background-color: #222; color: #fff; padding: 20px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <div style="max-width: 600px; margin: auto;">               
                
                <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="width: 48%; margin-bottom: 20px; display: flex; align-item:center;">
                        <img src="https://mardsoft.com/img/MardPutih.png" alt="Logo" style="width: 50%;">
                    </div>                    
                    <div style="width: 48%; margin-bottom: 20px;">
                        <span>PT {{ ucfirst(strtolower(config('app.name'))) }}.</span>
                        <p><b>Cakung Timur</b>, Jakarta Timur, DKI Jakarta, 13910, Indonesia</p>
                        
                        <div style="text-align: center; margin-top:20px;">
                            <a href="https://web.facebook.com/mardsoft" style="text-decoration: none; margin: 0 10px;">
                                <img src="{{ config('app.url') }}/img/facebook.png" alt="Facebook" width="30" height="30">
                            </a>
                            <a href="https://www.instagram.com/hi.mardsoft/" style="text-decoration: none; margin: 0 10px;">
                                <img src="{{ config('app.url') }}/img/instagram.png" alt="Instagram" width="30" height="30">
                            </a>
                            <a href="https://www.linkedin.com/company/mardsoft/" style="text-decoration: none; margin: 0 10px;">
                                <img src="{{ config('app.url') }}/img/linkedin.png" alt="Linkedin" width="30" height="30">
                            </a>
                        </div>                        
                    </div>
                </div>
                 <hr style="color: #EBEBEC">            
                <div style="margin-top: 20px; text-align: center; font-size: 0.9em;">
                    <p>Copyright <?php echo date('Y'); ?>, <span style="margin-left: 10px">PT {{ ucwords(strtolower(config('app.name'))) }}.</span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
