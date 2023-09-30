@extends('user.layout.main')

@section('content')
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Reset Your Password Account</h3>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <label for="email">E-Mail Address</label>
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" name="email" value="{{ old('email') }}">
                        <div class="clearfix"></div>
                    </div>
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
@endsection
