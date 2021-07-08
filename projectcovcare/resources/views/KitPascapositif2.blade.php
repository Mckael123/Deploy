<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prevention Kits</title>
    <link rel="stylesheet" href="{{ asset('/css/KitPencegahan.css') }}">
    <link rel="shortcut icon" href="{{ asset('/image/HomePage LOGO.png') }}" type="image/x-icon">
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

        <div class="headproduct">
            <img src="{{asset('/image/stayhome.png')}}" alt="" id="stayhome">
            <img src="{{asset('/image/virus.png')}}" alt="" id="virus">
            <img src="{{asset('/image/masker.png')}}" alt="" id="masker">
        </div>

        <h2>RECOVERY KITS</h2>

        <section class="content">
            @foreach ($product as $data)
            @if ($loop->index < 16)
                <div>
                    <a href="{{ route('detailproduct2', $data->id) }}">
                        <div class="produk">
                            <img src="{{ asset('/image/simpan/' . $data->image) }}" alt="">
                        </div>
                    </a>
                    <h3>{{ $data->namaProduct }}</h3>
                    <h4>Rp. {{number_format($data->hargaProduct,0,',','.')}},00</h4>
                    <div class="addbtn">
                        <a href="{{ route('detailproduct2', $data->id) }}">
                            <button>Add</button>
                        </a>
                    </div>
                </div>
                
            @endif
        @endforeach
        </section>

        <hr>
        <div class="page">
            <a href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href=""><img src="/image/next1.png" alt=""></a>
            <a href=""><img src="/image/next2.png" alt=""></a>
        </div>

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
