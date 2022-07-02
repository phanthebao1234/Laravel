<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        My template 2
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- Các file CSS và Js được thêm vào tại đây --}}
    @yield('css-home')
    @yield('css-product')
    @yield('css-news')
    @yield('css-contact')
</head>
<body>
    {{-- Sử dụng include để mở sử dụng header/footer trong file include (sử dụng dấu . thay vì dấu gạch /) --}}
    @include('include.header')
    <hr>
    {{-- Sử dụng @yield để liên kết đến các trang bên ngoài --}}
    @yield('home')
    @yield('about')
    @yield('product')
    @yield('lienhe')
    @yield('news')
    @yield('homnay')
    @yield('test')
    @yield('contact')
    @yield('giaiptb2')
    @yield('nhapmember')
    @yield('nhapproducts')
    @yield('nhapinvoices')
    @yield('xuatsanpham')
    @yield('nhaphinhanh')
    @yield('xemsanpham')
    <hr>
    @include('include.footer')
</body>
</html>
