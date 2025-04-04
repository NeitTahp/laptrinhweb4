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
                        <h3 class="card-header text-center">Cập nhật người dùng</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">

                                <div class="form-group mb-3">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label>like</label>
                                    <input type="like" class="form-control" name="like" value="{{ $user->like }}" required>
                                    @error('like')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label>Github</label>
                                    <input type="github" class="form-control" name="github" value="{{ $user->github }}" required>
                                    @error('github')
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
                                    <button type="submit" class="btn btn-dark btn-block">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer style="justify-content: center;">
                Lập trình web ©01/2024
            </footer>
        </div>
    </main>
@endsection