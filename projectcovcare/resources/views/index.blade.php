@extends('oriheadfoot')
@section('title', 'Home Page')

@section('headerlink')
    <div class="logo"><a href="{{ url('/') }}"><img src="/image/HomePage LOGO.png"></a></div>
    <a href="{{ url('/') }}" class="inactive">Home</a>
    <a href="{{ url('/landproduk') }}" class="inactive">See Covid Kits</a>
    <a href="{{ url('/news') }}" class="inactive">News</a>
    <a href="{{ url('/about') }}" class="inactive">About Us</a>
    <a href="{{ url('/covinfo') }}" class="inactive">What Is COVID-19?</a>
@endsection
@section('login')
    <button class="login"> <a href="{{ url('/login') }}">
            <div class="logintxt">Login</div>
        </a></button>
@endsection
<!-- image slider start -->
@section('slider')
    <section class="slider">
        <div class="slides">
            <!-- radio button start -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <!-- radio button end -->
            <!-- slide image start -->
            <div class="slide first">
                <img class="img-slide" src="/image/slide1.png" alt="">
            </div>
            <div class="slide">
                <img class="img-slide" src="/image/slide2.png" alt="">
            </div>
            <div class="slide">
                <img class="img-slide" src="/image/slide3.png" alt="">
            </div>
            <!-- slide image end-->
        </div>
        <!-- automatic navigation start -->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
        </div>
        <!-- automatic navigation end -->
        <!-- manual navigation start -->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
        </div>
        <!-- manual navigation end -->
        <!-- JS for slide -->
        <script type="text/javascript">
            var counter = 1;
            setInterval(function() {
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if (counter > 3) {
                    counter = 1;
                }
            }, 4200);
        </script>

    </section>
@endsection

@section('content')
    <section class="content">
        <div class="top-content">
            <div class="news-header">
                <h1 class="title-content">News</h1>
                <div class="garis"></div>
            </div>
            <a id="link-news" href="{{ url('/news') }}"><button class="more-btn">
                    <div class="txt-btn">See More</div>
                    <div class="iconnext">
                        <img src="{{asset('/image/nextbtn.png')}}" alt="">
                    </div></a>
            </button>
        </div>
        <div class="isi-content">
            @foreach ($news as $data)
                @if ($loop->index < 3)
                    <div class="boxcontent">
                        <div class="insidebox">
                            <div class="gambarbox">
                                <img src="{{ asset('/image/simpan/' . $data->image) }}" alt="">
                            </div>
                            <div class="contenttxt">
                                <h2>
                                    {{ $data->title }}
                                </h2>
                                <p>
                                    {{ $data->content }}
                                </p>
                                <a href="{{ route('detailberita', $data->id) }}" style="text-decoration: none">
                                    <span> Read More >></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection
