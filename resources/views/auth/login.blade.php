@extends('layouts.app')

@section('content')
<section class="login-block ">
    <div class="container shadow-lg">
        <div class="row">
            <div class="col-md-4 login-sec ">
                <h2 class="text-center product-sans">Log In</h2>
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="">Email</label>
                        <input id="email" type="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="off" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-check">
                        <button type="submit" class="btn btn-border border-warning float-right">Log In</button>
                    </div>
                </form>
                <img src="{{asset('img/kokeru.svg')}}" alt="kokeru">
            </div>
            <div class="col-md-8 banner-sec">
            </div>
        </div>
</section>
@endsection