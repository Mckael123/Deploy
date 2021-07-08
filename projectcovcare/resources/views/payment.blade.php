<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        </style>
        <title>Payment</title>
        <link rel="stylesheet" href="{{asset('css/payment.css')}}">
        <link rel="shortcut icon" href="{{asset('/image/HomePage LOGO.png')}}" type="image/x-icon">
    </head>

    <body>
        <div class="container">
            <section class="header">
                <div class="logo"><a href="{{url('/')}}"><img src="/image/HomePage LOGO.png"></a></div>
                <a href="{{url('/')}}" class="inactive">Home</a>
                <a href="{{url('/landproduk2')}}" class="inactive">See Covid Kits</a>
                <a href="{{url('/news2')}}" class="inactive">News</a>
                <a href="{{url('/About2')}}" class="inactive">About Us</a>
                <a href="{{url('/covinfo2')}}" class="inactive">What Is COVID-19?</a>
                <div class="humicon"> <a href="{{url('/profile')}}"><img src="{{asset('/image/simpan/'.Auth::user()->gambar)}}"></a></div>
            </section>

            <section class="content">
                <div class="con-title"> <p1 class="title">Payment</p1> </div>
                <div class="line"></div>
                <div class="form" >
                    <form action="{{route('buktibayar')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form1">
                            <label class="subtittle">Order ID:</label><br>
                            <input type="text" name="orderId" placeholder="Enter your ID" >
                        </div>
                        <div class="form1">
                            <label class="subtittle">Amount transferred:</label><br>
                            <input type="number" name="amountPayment" placeholder="Enter your Amount" >
                        </div>
                        <div class="form1">
                            <label class="subtittle">Payment date:</label><br>
                            <input type="date" name="paymentDate" placeholder="Enter your Amount" >
                        </div>
                        <div class="form1">
                            <label class="subtittle">Payment method:</label><br>
                            <select class="method" name="bankname">
                                <option disabled selected >Select method</option>
                                <option {{old('bankname') == 'Bank1' ? 'selected' : ''}} value="Bank BNI">Bank BNI</option>
                                <option {{old('bankname') == 'Bank2' ? 'selected' : ''}} value="Bank Mandiri">Bank Mandiri</option>
                                <option {{old('bankname') == 'Bank3' ? 'selected' : ''}} value="Bank BRI">Bank BRI</option>
                            </select>
                        </div>
                        <div>
                            <label class="subtittle">Fund transfer receipt</label><br>
                            <div class="upload-image">
                                <input type="file" name="evidenceTransfer"  id="uploadImage" accept="image/*">
                            </div>
                        </div>

                        <div class="action">
                            <div class="btn-submit">
                                <button class="btn_submit" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <section class="footer">
                <div class="connect">
                    <label class="conus">Connect with Us</label><br>
                    <a href="https://www.instagram.com" class="iconconnect"><img src="{{asset('/image/instagram.png')}}" alt=""></a>
                    <a href="https://www.facebook.com" class="iconconnect"><img src="{{asset('/image/Facebook.png')}}" alt=""></a>
                </div>
                <div class="contact">
                    <label class="contus">Contact us:</label><br>
                    <div class="baris">
                        <img src="{{asset('/image/wa.png')}}" alt=""><label class="rightfooter">+62 822-1780-2911</label>
                    </div>
                    <div class="baris">
                        <img src="{{asset('/image/email.png')}}" alt=""><label class="rightfooter">covcare@gmail.com</label>
                    </div>
                    
            
                </div>
            </section>
        </div>
            
    </body>