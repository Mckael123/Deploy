<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title}}</title>
    <link rel="shortcut icon" href="{{ asset('/image/HomePage LOGO.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/isiberita.css') }}">
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
            <div class="top">
                <h1>{{$news->title}}</h1>
                <img src="{{ asset('/image/simpan/' . $news->image) }}" alt="">
            </div>
            <div class="bottom">
                <div id="date">
                    <h3>Posted {{$news->date}}</h3>
                </div>
                <div class="" id="isi">
                    <p>{{$news->content}}</p>

                    {{-- <p> Where lunchtime queues would usually stretch out of the door, only five or six people were
                        allowed in at a time. Perspex screens separated customers and staff at till points, while
                        markings on the floor signalled how close people could stand. The menu, which normally includes
                        about 60 products, had been cut to 11 and was for takeaway only.</p>

                    <p> “Pret will be a very different operator,” admitted chief executive Pano Christou, adding that
                        after coronavirus, footfall in its more than 500 UK outlets would be “a considerable step down”.
                    </p>

                    <p> Pret is one of the first big food chains to tentatively restart part of its business, after
                        governments across Europe imposed full lockdowns to slow the spread of coronavirus.</p>

                    <p> Burger King and KFC also opened a handful of their UK restaurants for takeaway and delivery last
                        week, with similar measures in place to adhere to social distancing and stricter rules on
                        cleanliness.</p>

                    <p> The closures of restaurants, cafés, cinemas and gyms are expected to last several weeks, if not
                        months, longer. Operators in countries including the UK, France and Germany have been warned
                        they will be among the last to exit lockdown. Alasdair Murdoch, Burger King’s UK chief
                        executive, said the group’s “bear scenario” was a 24-week restriction, although he thought 12
                        weeks more likely.
                    </p> --}}
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
