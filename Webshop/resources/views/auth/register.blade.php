@extends('user.layout.main')
@section('content')
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Đăng kí tài khoản</h3>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="user name" class="@error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" placeholder="email" class="@error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}">
                        <div class="clearfix"></div>
                    </div>

                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="*****" class="@error('password') is-invalid @enderror"
                            name="password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="*****" name="password_confirmation">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng kí">
                </form>
            </div>
        </div>
    </div>
@endsection
