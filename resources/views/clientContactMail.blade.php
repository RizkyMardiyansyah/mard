<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Message Has Been Received</title>
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
        /* .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        } */
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
                <h2 class="tittle" style="font-size: bolder;">Pesan Berhasil Diterima</h2>
                <p>Yth. {{ $validated['name'] }},</p>
                <p>Terima kasih telah menghubungi <a href="{{ config('app.url') }}" target="_blank"> {{ config('app.name') }}</a>, Pesan Anda telah kami terima dengan baik.</p>
                <p>Kami sangat menghargai ketertarikan Anda. Tim kami akan segera menghubungi Anda untuk mendiskusikan lebih lanjut mengenai peluang kerja sama yang dapat kita jalin.</p>
                <p>Kami percaya bahwa melalui kolaborasi yang tepat, kita dapat menciptakan solusi inovatif yang memberikan nilai tambah bagi bisnis Anda. Kami menantikan kesempatan untuk bekerja sama dengan Anda.</p> 
                <p>Jika Anda membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami.</p>
                <p style="display: flex; align-items: center; gap: 8px; margin-left:10px;">
                    <a style="color: black; text-decoration: none; display: flex; align-items: center; gap: 8px;" href="mailto:hi@mardsoft.com" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 1.25 1.25" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#488EFE" fill-rule="evenodd" d="m0.448 0.708 0.177 0.121 0.171 -0.118 0.382 0.377q-0.015 0.005 -0.032 0.005H0.104c-0.014 0 -0.027 -0.003 -0.039 -0.007zM1.25 0.399v0.591c0 0.015 -0.003 0.03 -0.009 0.043l-0.375 -0.37zM0 0.402l0.378 0.258 -0.371 0.366A0.106 0.106 0 0 1 0 0.99zM1.146 0.156c0.058 0 0.104 0.047 0.104 0.104v0.037L0.625 0.728 0 0.301v-0.04C0 0.203 0.047 0.156 0.104 0.156z"/>
                        </svg> 
                        hi@mardsoft.com
                    </a>
                </p>                
                <p style="display: flex; align-items: center; gap: 8px; margin-left:10px;">
                    <a style="color: black; text-decoration: none; display: flex; align-items: center; gap: 8px;" href="https://wa.me/62895405543809" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 1.5 1.5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.282.218A.74.74 0 0 0 .756 0a.744.744 0 0 0-.743.743.74.74 0 0 0 .099.371L.007 1.5l.394-.103a.74.74 0 0 0 .355.09c.41 0 .743-.333.743-.743a.74.74 0 0 0-.217-.526m-.187.681C1.076.89.985.845.968.838S.939.829.926.847C.914.866.878.907.867.92Q.852.938.827.925C.802.912.749.896.678.833.623.784.585.723.575.704S.574.675.583.666L.611.633C.62.622.623.614.63.602Q.637.584.628.569C.619.554.586.468.571.431.556.395.541.4.529.399L.493.398a.07.07 0 0 0-.05.023C.426.44.378.485.378.576s.067.18.076.192.131.2.317.28q.052.022.106.039a.25.25 0 0 0 .117.007c.036-.005.11-.045.125-.088s.015-.081.011-.088C1.125.91 1.113.906 1.095.897z" fill="#488EFE"/>
                        </svg>  
                        0895-4055-43809
                    </a>
                </p>
                <div style="margin-top: 50px;" class="flex-column">  
                    <p>Best regards,</p>                    
                    <p style="color: black; text-decoration: inherit; margin-top: 20px;" href="https://wa.me/62895405543809" target="_blank"><span>Rizky Mardiyansyah</span></p>
                    <p><strong>PT {{ config('app.name') }}</strong></p>
                </div>
            </div>
            
            <hr style="margin: 20px 0; border: 1px solid #ccc;">
            
            <div class="content">
                <h2 class="tittle" style="font-size: bolder;">Your Message Has Been Received</h2>
                <p>Dear {{ $validated['name'] }},</p>
                <p style="margin-top: 50px;">Thank you for contacting <a href="{{ config('app.url') }}" target="_blank">{{ config('app.name') }}</a>. We have successfully received your message.</p>
                <p>We greatly appreciate your interest. Our team will reach out to you shortly to further discuss potential collaboration opportunities.</p>
                <p>We believe that through the right collaboration, we can create innovative solutions that add value to your business. We look forward to the opportunity to work together.</p>
                <p>If you need further assistance, please do not hesitate to contact us:</p>
    
                <p style="display: flex; align-items: center; gap: 8px; margin-left:10px;">
                    <a style="color: black; text-decoration: none; display: flex; align-items: center; gap: 8px;" href="mailto:hi@mardsoft.com" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 1.25 1.25" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#488EFE" fill-rule="evenodd" d="m0.448 0.708 0.177 0.121 0.171 -0.118 0.382 0.377q-0.015 0.005 -0.032 0.005H0.104c-0.014 0 -0.027 -0.003 -0.039 -0.007zM1.25 0.399v0.591c0 0.015 -0.003 0.03 -0.009 0.043l-0.375 -0.37zM0 0.402l0.378 0.258 -0.371 0.366A0.106 0.106 0 0 1 0 0.99zM1.146 0.156c0.058 0 0.104 0.047 0.104 0.104v0.037L0.625 0.728 0 0.301v-0.04C0 0.203 0.047 0.156 0.104 0.156z"/>
                        </svg> 
                        hi@mardsoft.com
                    </a>
                </p>                
                <p style="display: flex; align-items: center; gap: 8px; margin-left:10px;">
                    <a style="color: black; text-decoration: none; display: flex; align-items: center; gap: 8px;" href="https://wa.me/62895405543809" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 1.5 1.5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.282.218A.74.74 0 0 0 .756 0a.744.744 0 0 0-.743.743.74.74 0 0 0 .099.371L.007 1.5l.394-.103a.74.74 0 0 0 .355.09c.41 0 .743-.333.743-.743a.74.74 0 0 0-.217-.526m-.187.681C1.076.89.985.845.968.838S.939.829.926.847C.914.866.878.907.867.92Q.852.938.827.925C.802.912.749.896.678.833.623.784.585.723.575.704S.574.675.583.666L.611.633C.62.622.623.614.63.602Q.637.584.628.569C.619.554.586.468.571.431.556.395.541.4.529.399L.493.398a.07.07 0 0 0-.05.023C.426.44.378.485.378.576s.067.18.076.192.131.2.317.28q.052.022.106.039a.25.25 0 0 0 .117.007c.036-.005.11-.045.125-.088s.015-.081.011-.088C1.125.91 1.113.906 1.095.897z" fill="#488EFE"/>
                        </svg>  
                        0895-4055-43809
                    </a>
                </p>
                <div style="margin-top: 50px;" class="flex-column">  
                    <p>Best regards,</p>                    
                    <p style="color: black; text-decoration: inherit; margin-top: 20px;" href="https://wa.me/62895405543809" target="_blank"><span>Rizky Mardiyansyah</span></p>
                    <p><strong>PT {{ config('app.name') }}</strong></p>
                </div>                        
            </div>
        </div>
        <div style="background-color: #222; color: #fff; padding: 20px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <div style="max-width: 600px; margin: auto;">
                
                
                <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="width: 48%; margin-bottom: 20px;">
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
                 <hr style="color: #fff">            
                <div style="margin-top: 20px; text-align: center;">
                    <p>Copyright <?php echo date('Y'); ?>, <span style="margin-left: 10px">PT {{ ucwords(strtolower(config('app.name'))) }}.</span></p>
                </div>
            </div>
        </div>
      
    </div>
</body>

</html>
