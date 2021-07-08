<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
    </style>
    <title>
        login page
    </title>
    <link rel="stylesheet" href='css/loginform.css'>
    <link rel="shortcut icon" href="/image/HomePage LOGO.png" type="image/x-icon">
</head>

<body>
    <div id="header">
        <div class="head-form">
        </div>
        <div class="LOGO-form">
            <a href="{{url('/')}}"> <img src="/image/HomePage LOGO.png"></a>
        </div>
    </div>

    <div id="container">
        <div class="left">
            <div class="judul">
                <h1 class="textjudul">
                    Sign In
                </h1>
                <div class="line">
                </div>
            </div>
            <div class="content">
                <form id="input" method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="pass-input" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
                    <input id="password" type="password" class="pass-input" name="password" placeholder="password" required autocomplete="current-password">
                    
                    <button type="submit" class="login login-txt">Log In</button>
                </form>
                <div class="alt-signup">
                    <p1 class="alternative">
                        Alternatively you can
                    </p1><a href="{{url('/register')}}" id="signup">Sign up</a>
                </div>
            </div>
        </div>
        <div class="right">

        </div>
    </div>

    <div id="footer">
        <div class="contactus">
            <h1 class="textconnect">
                Contact Us :
            </h1>
            <div class="contactdetail">
                <div class="wa">
                    <img src="/image/wa.png">
                    <p1 class="textcontact-det">
                        +62 822-1780-2911
                    </p1>
                </div>
                <div class="email">
                    <img src="/image/email.png">
                    <p1 class="textcontact-det">
                        covcare@gmail.com
                    </p1>
                </div>
            </div>
        </div>
        <div class="connectus">
            <h1 class="textconnect">
                Connect with Us
            </h1>
            <div id="icon">
                <a href="https://www.instagram.com/"><img src="/image/instagram.png"></a>
                <a href="https://www.facebook.com/"><img src="/image/Facebook.png"></a>
            </div>
        </div>
    </div>

</body>

</html>