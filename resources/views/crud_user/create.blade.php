@extends('dashboard')

@section('content')
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-header text-center">Màn hình đăng ký</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUser') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="name" required autofocus>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label>phone</label>
                                    <input type="phone" class="form-control" name="phone" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label>address</label>
                                    <input type="address" class="form-control" name="address" required>
                                    @error('address')
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
                                
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Đăng ký</button>
                                </div>
                            </form>
                            <a href="{{ route('login') }}" class="already-account">Đã có tài khoản?</a>
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