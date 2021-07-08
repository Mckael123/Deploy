<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/profiles.css')}}">
    <link rel="shortcut icon" href="{{asset('/image/HomePage LOGO.png')}}" type="image/x-icon">
</head>

<body>
    <div class="containers">
        <section class="header">
            <div class="logo"><a href="{{url('/index2')}}"><img src="/image/HomePage LOGO.png"></a></div>
            <a href="{{url('/index2')}}" class="inactive">Home</a>
            <a href="{{url('/landproduk2')}}" class="inactive">See Covid Kits</a>
            <a href="{{url('/news2')}}" class="inactive">News</a>
            <a href="{{url('/about2')}}" class="inactive">About Us</a>
            <a href="{{url('/covinfo2')}}" class="inactive">What Is COVID-19?</a>
            <div class="humicon"> <a href="{{url('/profile')}}"><img src="{{asset('/image/simpan/'.Auth::user()->gambar)}}"></a></div>
        </section>

        <section class="content">
            <form class="container " action="{{ route('UpdateProfile',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="cardbg">
                                    <div class="account-settings">
                                        <div class="user-profile">
                                            <div class="user-avatar">
                                                <img src="{{asset('/image/simpan/'.Auth::user()->gambar)}}" alt="covcare Admin">
                                            </div>
                                            <h5 class="user-name">{{old('name') !=null ? old('name') : Auth::user()->name}}</h5>
                                            <h6 class="user-email">{{old('email') !=null ? old('email') : Auth::user()->email}}</h6>
                                        </div>
                                        <div class="about">
                                            <input  type="file" name="gambar" accept='image/*' class="custom-file-input">
                                            <!-- <button type="button" id="submit" name="submit" class="btn btn-primary"> 
                                            Upload foto
                                        </button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mb-2 text-primary">Personal Details</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">User-Name</label>
                                            <input value="{{old('name') != null ? old('name') : Auth::user()->name}}" type="text" name="name" class="form-control col-md-9"
                                                placeholder="Enter New User-Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">password</label>
                                            <input  type="password" class="form-control" id="password" name="password" placeholder="Enter new password">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input value="{{old('phone') !=null ? old('phone') : Auth::user()->phone}}" type="text" class="form-control" id="phone" name='phone' placeholder="Enter phone number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input value="{{old('email') !=null ? old('email') : Auth::user()->email}}" type="email" name="email" class="form-control" id="eMail"placeholder="Enter email ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="Street">Street</label>
                                            <input value="{{old('address')!=null ? old('address') : Auth::user()->address}}" type="name" class="form-control" name="address" id="Street"placeholder="Enter Street">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="ciTy">City</label>
                                            <input value="{{old('city')!=null ? old('city') : Auth::user()->city}}" type="name" class="form-control" name="city" id="ciTy" placeholder="Enter City">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">

                                            <a href="{{url('/index2')}}"><button type="button" id="submit" name="submit" class="btn btn-danger">
                                                 Cancel 
                                            </button></a>

                                            <button type="submit" id="submit" name="submit"
                                                class="btn btn-primary">Update
                                            </button>
                                            <a href="{{route('logout')}}"> <button type="button" id="submit" name="submit"
                                             class="btn btn-success">Log Out</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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