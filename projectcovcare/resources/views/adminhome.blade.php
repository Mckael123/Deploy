<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin landing page</title>
    <link rel="stylesheet" href="{{asset('css/adminhome.css')}}">
    <link rel="shortcut icon" href="{{asset('/image/HomePage LOGO.png')}}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h1>Admin Home Page</h1>
        <div class="horizontal">

            <a href="{{url('/editnews')}}">
                <div class="newscontain">
                    <div class="news">
                        <img src="{{asset('/image/newshover.png')}}" alt="" class="news-back">
                        <img src="{{asset('/image/news.png')}}" alt="" class="news-front">
                    </div>
            </a>
            <h2>News Editing</h2>
        </div>

        <div class="verificontain">
            <a href="{{url('/verifylist')}}">
                <div class="verifi">
                    <img src="{{asset('/image/verificationhover.png')}}"alt="" class="verifi-back">
                    <img src="{{asset('/image/verify.png')}}" alt="" class="verifi-front">
                </div>
            </a>
            <h2>Verification</h2>
        </div>
        <div class="newscontain">
            <a href="{{url('/editproduct')}}">
                <div class="news">
                    <img src="{{asset('/image/producthover.png')}}" alt="" class="news-back">
                    <img src="{{asset('/image/product.png')}}" alt="" class="news-front">
                </div>
            </a>
            <h2>Product Editing</h2>
        </div>
        <div class="newscontain">
            <a href="{{route('logout')}}">
                <div class="news">
                    <img src="{{asset('/image/logouthover.png')}}" alt="" class="news-back">
                    <img src="{{asset('/image/log out.png')}}" alt="" class="news-front">
                </div>
            </a>
            <h2>Log Out</h2>
        </div>
    </div>
    </div>
</body>

</html>