<!doctype html>
<html>

<head>
    <title> from registrasi covcare</title>
    <link rel="stylesheet" href="{{asset('css/registrasi.css')}}">
    <link rel="shortcut icon" href="{{asset('/image/HomePage LOGO.png')}}" type="image/x-icon">
</head>

<body>
    <div id="header">
        <div class="head-form">
        </div>
        <div class="LOGO-form">
            <a href="{{url('/')}}"> <img src="{{asset('/image/HomePage LOGO.png'}}"></a>
        </div>
    </div>

    <div class="box">

        <div id="konten">
            <div id="title">
                <div class="judul">
                    <h3> Create a New Account </h3>
                </div>
                <div id="garis-line"> </div>
            </div>
            <!-- <form id="input-group" method="POST" action="{{ route('register') }}">
                @csrf
                <input id="name" type="text" class="input-field" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Username" autofocus>
                <input id="password" type="password" class="input-field" name="password" required autocomplete="new-password" placeholder="Password">
                <input id="email" type="email" class="input-field" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">
                <input id="address" type="text" class="input-field" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="address" autofocus>
                <input id="phone" type="text" class="input-field" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone Number" autofocus>
                <button type="submit" class="submit-btn input-field">Sign Up</button>
            </form> -->
            <form id="input-group" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control @error('name') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
            <div id="sign-login">

                <div class="txt-bawah">
                    Already have an account?
                </div>
                <a href="{{url('/login')}}" id="sign">Log In</a>
            </div>

        </div>
    </div>

    <div class="foot-form">
        <div id="connect-sosmed">
            <h3 class="h3-foot"> Connect with Us </h3>
            <div id="sosmed-icons">
                <a href="https://www.facebook.com/"><img src="{{assset('/image/Facebook.png')}}"> </a>
                <a href="https://www.instagram.com/"> <img src="{{assset('/image/instagram.png')}}"></a>
            </div>
        </div>
        <div id="contact-sosmed">
            <h3 class="h3-foot"> Contact Us : </h3>
            <div id="contact-detail">
                <div id="phone-contact"> <img src="{{assset('/image/telp.png')}}">
                    <p1 class="text-p1">+62 822-1780-2911</p1>>
                </div>
                <div id="msg-contact"><img src="{{assset('/image/msg.png')}}">
                    <p1 class="text-p1">covcare@gmail.com</p1>
                </div>
            </div>
        </div>
    </div>

</body>

</html>