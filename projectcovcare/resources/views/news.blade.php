<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
    <link rel="shortcut icon" href="{{ asset('/image/HomePage LOGO.png') }}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <section class="header">
            <div class="logo"><a href="{{ url('/') }}"><img src="/image/HomePage LOGO.png"></a></div>
            <a href="{{ url('/') }}" class="inactive">Home</a>
            <a href="{{ url('/landproduk') }}" class="inactive">See Covid Kits</a>
            <a href="{{ url('/news') }}" class="inactive">News</a>
            <a href="{{ url('/about') }}" class="inactive">About Us</a>
            <a href="{{ url('/covinfo') }}" class="inactive">What Is COVID-19?</a>
            <button class="login"> <a href="{{ url('/login') }}">
                    <div class="logintxt">Login</div>
                </a></button>
        </section>

        <section class="content">
            <div class="title">
                <h1>News</h1>
                <div class="underline"></div>
            </div>

            <div class="isi-content">

                <div class="isi-content-atas">
                    <div class="update">
                        <h2>Update Article</h2>
                        <a href="{{ route('detailberita', $news->first()->id) }}"><img
                                src="{{ asset('/image/simpan/' . $news->first()->image) }}" alt=""></a>
                    </div>
                    <div class="latest">
                        <h2>Latest Articles</h2>
                        @foreach ($news as $data)
                            @if ($loop->index < 3)
                                <a href="{{ route('detailberita', $data->id) }}" style="text-decoration: none">
                                    <div class="latest-isi">

                                        <img src="{{ asset('/image/simpan/' . $data->image) }}" alt=""
                                            style="object-fit: cover">
                                        <p>{{ $data->title }}</p>

                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="isi-content-bawah">
                    <h2>Most Popular Articles About Health</h2>
                    <div class="popular-area">
                        @foreach ($news as $data)
                            @if ($loop->index < 8)
                                @if ($loop->index % 4 == 0 && $loop->index != 0) </div> @endif
                                @if ($loop->index % 4 == 0 || $loop->index == 0)
                                    <div class="row-popular">
                                @endif
                                <a href="{{ route('detailberita', $data->id) }}"
                                    style="text-decoration: none; margin:auto ">
                                    <div class="popular-box">
                                        <img src="{{ asset('/image/simpan/' . $data->image) }}" alt="">
                                        <h3>{{ $data->title }}</h3>
                                        <p>{{ $data->content }}</p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="connect">
                <label class="conus">Connect with Us</label><br>
                <a href="https://www.facebook.com/" class="iconconnect"><img src="{{ asset('/image/Facebook.png') }}"
                        alt=""></a>
                <a href="https://www.instagram.com/" class="iconconnect"><img
                        src="{{ asset('/image/instagram.png') }}" alt=""></a>
            </div>
            <div class="contact">
                <label class="contus">Contact us:</label><br>
                <div class="baris">
                    <img src="{{ asset('/image/wa.png') }}" alt=""><label class="rightfooter">+62
                        822-1780-2911</label>
                </div>
                <div class="baris">
                    <img src="{{ asset('/image/email.png') }}" alt=""><label
                        class="rightfooter">covcare@gmail.com</label>
                </div>
            </div>
        </section>
    </div>

</body>
