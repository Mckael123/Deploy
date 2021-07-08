<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $product->namaProduct }}</title>
        <link rel="stylesheet" href="{{asset('css/select-product.css')}}">
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
            <form class="top" method="POST">
                @csrf
                <div class="image"><img src="{{ asset('/image/simpan/' . $product->image) }}" alt=""></div>
                <div class="title">
                    <h2>{{ $product->namaProduct }}</h2>
                    <h3>Rp. {{number_format($product->hargaProduct,0,',','.')}},00</h3>
                    <div class="quantity">
                        Quantity
                        <button type="button" onclick="increment()">+</button>
                        <input id=demoInput value="1" name="quantity" type=number min=0 max={{ $product->stock }}
                            readonly>
                        <button  type="button" onclick="decrement()">-</button>
                        <script>
                            function increment() {
                                document.getElementById('demoInput').stepUp();
                            }

                            function decrement() {
                                document.getElementById('demoInput').stepDown();
                            }
                        </script>
                    </div>

                    <div class="action">
                        <h3> stock : {{$product->stock}}</h3>
                        <h4> expired : {{$product->expired}}</h4>
                        @guest
                            <a href="{{ url('/login') }}">
                                <button type="submit" name="tipe" value="0" class="buynow">Buy Now</button>
                            </a>
                            <a href="{{ url('/login') }}">
                                <button type="submit" name="tipe" value="1" class="addcart">Add to Cart</button>
                            </a>
                        @endguest
                        @auth
                            <button type="submit" name="tipe" value="0" class="buynow">Buy Now</button>
                            <button type="submit" name="tipe" value="1" class="addcart">Add to Cart</button>
                        @endauth
                    </div>
                </div>
            </form>
            <hr>
            <div class="description">
                <h2>Description</h2>
                <p>{{ $product->description }}</p>
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
