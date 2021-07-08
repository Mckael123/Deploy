<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Covcare</title>
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <link rel="shortcut icon" href="{{asset('/image/HomePage LOGO.png')}}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <section class="header">
            <div class="logo"><a href="{{url('/index2')}}"><img src="/image/HomePage LOGO.png"></a></div>
            <a href="{{url('/index2')}}" class="inactive">Home</a>
            <a href="{{url('/landproduk2')}}" class="inactive">See Covid Kits</a>
            <a href="{{url('/news2')}}" class="inactive">News</a>
            <a href="{{url('/about2')}}" class="inactive">About Us</a>
            <a href="{{url('/covinfo2')}}" class="inactive">What Is COVID-19?</a>
            <div class="humicon"> <a href="{{url('/profile')}}"><img src="{{asset('/image/simpan/'.Auth::user()->gambar)}}"></a></div>
        </section>
        <section class="content">
            <h1>WHO WE ARE </h1>
            <div class="garis"></div>
            <h3>Covcare is a platform that provides information and assistance services for Covid-19. Covcare provides
                information in the form of news about Covid-19 and other health news. Covcare also provides information
                to the public about tools and materials, such as medicines needed when facing the Covid-19 pandemic.
            </h3>

        </section>
        <div class="virus1"></div>
        <div class="virus2"></div>
        <div class="virus3"></div>
        <div class="virus4"></div>
        <div class="orang"></div>
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



</body>

</html>