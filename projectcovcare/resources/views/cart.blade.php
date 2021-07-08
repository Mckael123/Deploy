<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Products</title>
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
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
                        src="{{ asset('image/simpan/' . Auth::user()->gambar) }}"></a></div>
        </section>

        <section class="content">
            <h1>Shopping Cart</h1>
            <form action="{{route('buycart')}}" method="POST">
                @csrf
                <div class="list">
                    <div class="item-list">
                        <hr class="line-item-list">
                        @foreach ($carts as $data)
                        <div class="item1">
                            <div><img src="{{asset('/image/simpan/' .$data->product->image)}}" alt=""></div>
                            <div>
                                <h3>{{($data->product->namaProduct)}}</h3>
                                <h3>Rp. {{number_format($data->product->hargaProduct,0,',','.')}},00</h3>
                            </div>
                            <div>
                                <div class="quantity">
                                    {{-- <img src="image/trash.png" alt=""> --}}
                                    <button type="button" onclick="min()">-</button>
                                    <input id=demoInput value="{{($data->quantity)}}" type=number name="quantity" min=0 max={{($data->product->stock)}} readonly>
                                    <button type="button" onclick="add()">+</button>
                                    <script>
                                        function add() {
                                            document.getElementById('demoInput').stepUp();
                                        }

                                        function min() {
                                            document.getElementById('demoInput').stepDown();
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <hr class="line-item-list">
                        @endforeach
                      
                    </div>

                    <div class="price-list">
                        <h2>Shopping List</h2>
                        <div class="price-list-detail">
                            <table>
                                <tr>
                                    <th >Total cost</th>
                                    <th id="subtotal"><b>Rp. </b> {{number_format($carts->sum('subprice'),0,',','.')}}</th>
                                    <input type="hidden" name="sumprice" value=" {{($carts->sum('subprice'))}}" placeholder="Rp.  {{number_format($carts->sum('subprice'),0,',','.')}}" readonly>
                                </tr>
                            </table>

                        </div>
                        <button  type="submit">Buy</button>
                    </div>
                </div>
            </form>
        </section>

        <section class="footer">
            <div class="connect">
                <label class="conus">Connect with Us</label><br>
                <a href="https://www.instagram.com" class="iconconnect"><img src="{{asset('image/instagram.png')}}" alt=""></a>
                <a href="https://www.facebook.com" class="iconconnect"><img src="{{asset('image/Facebook.png')}}" alt=""></a>
            </div>
            <div class="contact">
                <label class="contus">Contact us:</label><br>
                <div class="baris">
                    <img src="{{asset('image/wa.png')}}" alt=""><label class="rightfooter">+62 822-1780-2911</label>
                </div>
                <div class="baris">
                    <img src="{{asset('image/email.png')}}" alt=""><label class="rightfooter">covcare@gmail.com</label>
                </div>
            </div>
        </section>

    </div>
    </div>
