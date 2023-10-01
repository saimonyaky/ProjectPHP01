@extends('user.layout.main')
@section('content')
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Đăng nhập</h3>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" placeholder="email" name="email" value="{{ old('email') }}" required
                            autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="*****" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng nhập">
                </form>
            </div>
            <div class="forg">
                @if (Route::has('password.request'))
                    <a class="forg-left" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                @endif
                <a href="{{ route('register') }}" class="forg-right">Đăng kí tài khoản mới</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    @endsection
