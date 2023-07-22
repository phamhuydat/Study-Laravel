<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <title> {{ $title ?? 'admin' }} | ADMIN - STUDY - LARAVEL</title>
</head>
<body>
    <div class="app">
        <header>
            <div class="header__logo">
                <img class="header__logo--img" src="~/asset/img/logo.png" alt="logo-store" style="width:100px">
            </div>
            <div class="header__account">
                <div class="dropdown">
                    <i class="account-icon fa-solid fa-user-tie"></i>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{URL::to('/logout-admin')}}">Đăng xuất</a></li>
                    </ul>
                    {{-- {{$username_admin}} --}}
                    <i class="fa-solid fa-angle-down"></i>
                </div>
            </div>
        </header>

        <div class="aside-main">
            <aside>
                <ul class="list-group px-1">
                    <li class="list-group-item my-1">
                        <a href="{{URL::to('/')}}">QUẢN LÝ SẢN PHẨM</a>
                    </li>
                    <li class="list-group-item my-1">
                        <a href="">QUẢN LÝ ĐƠN HÀNG</a>
                    </li>
                    <li class="list-group-item my-1">
                        <a href="">QUẢN LÝ KHÁCH HÀNG</a>
                    </li>
                </ul>
            </aside>
            <section>

                @yield('admin_content')
            </section>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        (function ($) {
            let url = location.pathname.trim("/");
            $(".list-group >li > a").each((i, item) => {
                if ($(item).attr("href").trim("/") == url) {
                    $(item).closest("li").addClass("active");
                } else {
                    $(item).closest("li").removeClass("active");
                }
            });
        })(jQuery);
    </script>
</body>
</html>