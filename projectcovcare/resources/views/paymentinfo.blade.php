<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information {{old('name').Auth::user()->name}}</title>
    <link rel="stylesheet" href="{{asset('css/payment-information.css')}}">
    <link rel="shortcut icon" href="{{asset('image/HomePage LOGO.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <section class="header">
            <div class="logo"><a href="{{ url('/index2') }}"><img src="/image/HomePage LOGO.png"></a></div>
            <a href="{{ url('/index2') }}" class="inactive">Home</a>
            <a href="{{ url('/landproduk2') }}" class="inactive">See Covid Kits</a>
            <a href="{{ url('/news2') }}" class="inactive">News</a>
            <a href="{{ url('/about2') }}" class="inactive">About Us</a>
            <a href="{{ url('/covinfo2') }}" class="inactive">What Is COVID-19?</a>
            <div class="humicon"> <a href="{{ url('/profile') }}"><img
                        src="{{ asset('/image/simpan/' . Auth::user()->gambar) }}"></a></div>
        </section>

        <section class="content">
            <h1>Finish Your Payment</h1>
            <div class="box">
                <h2>Order ID : {{$carts->first()->orderId}}</h2>
                <h2>Total Payment : Rp. {{$carts->first()->sumprice}}</h2>
            </div>
            <div class="tombol">
               <a href="{{url('/payment')}}"> <button class="confirmation">Payment Confirmation</button></a>
                <a href="{{url('/paymentstatus')}}"><button class="status">Check Payment Status</button></a>
            </div>


        </section>

        <section class="footer">
            <div class="connect">
                <label class="conus">Connect with Us</label><br>
                <a href="https://www.facebook.com/" class="iconconnect"><img src="{{ asset('/image/Facebook.png')}}" alt=""></a>
                <a href="https://www.instagram.com/" class="iconconnect"><img src="{{ asset('/image/instagram.png')}}" alt=""></a>
            </div>
            <div class="contact">
                <label class="contus">Contact us:</label><br>
                <div class="baris">
                    <img src="{{ asset('/image/wa.png')}}" alt=""><label class="rightfooter">+62 822-1780-2911</label>
                </div>
                <div class="baris">
                    <img src="{{ asset('/image/email.png')}}" alt=""><label class="rightfooter">covcare@gmail.com</label>
                </div>


            </div>
        </section>

    </div>
    </div>
