<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home product</title>
    <link rel="stylesheet" href="{{asset('/css/produk.css')}}">
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

        <section class="isi">
            <div class="isi-atas">
                <div class="content-atas">
                    <h1>CovKit Care</h1>
                    <img src="{{asset('/image/show.png')}}" alt="">
                </div>
                <h3>In this pandemic era, cases of corona virus transmission in various parts of the world are quite
                    worrying for many people. Several preventive measures are recommended, namely using masks, washing
                    hands regularly, and carrying out social restrictions. However, a number of these methods are not
                    effective enough to prevent us from the corona virus. Apart from preventive measures, it turns out
                    that we also need several tools and materials that are thought to be able to prevent us from
                    contracting the corona virus.
                </h3>
                <h3> Here covcare provides some information about the tools and materials needed for users to be able to
                    do activities at home, which is where Covcare has grouped them into three categories, namely
                    equipment and the need for prevention while at home and outdoors, equipment and needs during
                    positive for covid, and equipment and needs after recovering from covid.</h3>
            </div>
            <div class="isi-bawah">
                <h2>Category : </h2>
                <div class="isi-category">
                    <a href="{{url('/KitPencegahan2')}}" style="text-decoration: none;margin :auto;">
                        <div class="box-content">
                            <img src="{{asset('/image/pencegahan.png')}}" alt="">
                            <div class="text-content">
                                <h3>Prevention Kits</h3>
                                <p>
                                    Preventing corona can also be done from within the body, namely by strengthening the
                                    immune system. You can buy vitamins to prevent corona, such as ASTRIA, IMBOOST,
                                    Enervon-C, Stimuno, Holisticare Ester C, Blackmores, or so on.</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{url('/KitPositif2')}}" style="text-decoration: none;margin :auto;">
                        <div class="box-content">
                            <img src="{{'/image/positif.png'}}" alt="">
                            <div class="text-content">
                                <h3>Positif Kits</h3>
                                <p>perform self-isolation or work from Home with the tools and materials needed during
                                    Covid-19 self treatment</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{url('/KitPascapositif2')}}" style="text-decoration: none; margin :auto;">
                        <div class="box-content">
                            <img src="{{'/image/recovery.png'}}" alt="">
                            <div class="text-content">
                                <h3>Recovery Kits</h3>
                                <p>take care and self-protection after recovering from Covid-19 with the tools and medicines
                                    that we provide</p>
                            </div>
                        </div>
                    </a>
                </div>
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
</body>

</html>