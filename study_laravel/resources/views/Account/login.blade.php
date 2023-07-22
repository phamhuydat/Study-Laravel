<x-layout title="Login | Study Laravel">
    <section class="main">
        <article class="grid registration-page">
            <div class="page-body mt-5">
                <div class="customer">
                    <div class="wrapper">
                        <img class="wrapper-img" src="frontend/img/Form/img_dangky.jpeg" alt="wrapper sign up">
                    </div>
                    <form class="form-signup" action="{{URL::to('/login')}}" method="POST">
						@csrf
                    	<div class="form-signup__item">
                            <h1 class="form-signup__item-title">Đăng nhập</h1>
                            @if (session('login-err-msg'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('login-err-msg') }}
                                    </div>
                                @endif
                            <div class="form-signup__item-username mb-15">
                                <label class="label-signup" for="Username">Username</label>
                                <input class="input-singup" type="text" name="user_name">
                            </div>
                            <div class="form-signup__item-password mb-15">
                                <label class="label-signup" for="Username">Mật khẩu</label>
                                <input class="input-singup" type="password" name="password">
                            </div>

                            <div class="form-signup__item-btn">
                                <button type="submit">Đăng nhập</button>
                            </div>

                            <div class="buttons-forgot">
                                <label> Bạn Chưa Có Tài Khoản?? </label> <a href="{{url::to('/register')}}"
                                    class="link_access">Tạo tài khoản ngay</a>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>
</x-layout>
