<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product edit page</title>
    <link rel="stylesheet" href={{asset('/css/editproduct.css')}}>
    <link rel="shortcut icon" href="{{asset('/image/HomePage LOGO.png')}}" type="image/x-icon">
</head>

<body>
    <div class="header">
        <div class="nav">
        <div class="logo">
                <!-- <a href="#"> <img src="/img/humicon.png"></a> -->
            </div>
            <div class="menu">
                <a href="{{url('/adminhome')}}">
                    <h1 class="menu-font"> Home</h1>
                </a>
                <a href="{{url('/editnews')}}">
                    <h1 class="menu-font"> Edit News</h1>
                </a>
                <a href="{{url('/editproduct')}}">
                    <h1 class="menu-font"> Edit Product</h1>
                </a>
                <a href="{{url('/verifylist')}}">
                    <h1 class="menu-font">Verification</h1>
                </a>
                <a href="{{url('/logout')}}">
                    <h1 class="menu-font">Log out</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <form class="tengah" action="{{route('productedit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title-content">
                <h1 class="judul">
                    Edit Product
                </h1>
                <div class="garis"> </div>
            </div>
            <div class="box">
                <div class="isi">
                    <div class="input">
                        <h3 class="judul-isi">Name</h3>
                        <input type="text" name="namaProduct" class="input-field" required>
                    </div>
                    <div class="input">
                        <h3 class="judul-isi">Price</h3>
                        <input type="number" name="hargaProduct" class="input-field" required>
                    </div>
                    <div class="input">
                        <h3 class="judul-isi">Expired Date</h3>
                        <input type="date" name="expired" class="input-field" >
                    </div>
                    <div class="input">
                        <h3 class="judul-isi">Stock</h3>
                        <input type="number" name="stock" class="input-field" required>
                    </div>
                    <div class="input-teks">
                        <h3 class="judul-isi">Description</h3>
                        <!-- <input type="text" class="input-field-txt" required> -->
                        <textarea name="description" class="input-field-txt" required></textarea>
                    </div>
                    <div class="input-image">
                        <h3 class="judul-isi">Image</h3>
                        <input type="file" name="image" class="input-fieldimg" accept="image/*"  required>
                    </div>
                </div>
            </div>
            <div class="button"> 
                 <button type="submit" class="btn txt-btn">Input</button>
                 <button type="reset" class="btn txt-btn">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>