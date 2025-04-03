@extends('dashboard')

@section('content')
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-header text-center">Màn hình đăng nhập</h3>
                        <div class="card-body">
                            <form action="{{ route('user.authUser') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required autofocus>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" required>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Đăng nhập</button>
                                </div>
                            </form>
                            <a href="#" class="forgot-password">Quên mật khẩu?</a>
                            <a href="{{ route('user.createUser') }}" class="already-account">Chưa có tài khoản? Đăng ký ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                Lập trình web ©01/2024
            </footer>
        </div>
    </main>
@endsection