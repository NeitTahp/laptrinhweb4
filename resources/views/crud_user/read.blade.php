@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
            <div class="detail-box">
            <h4 class="text-center">Màn hình chi tiết</h4>
            <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                            <td>{{$messi->phone}}</td>
                            <td>{{$messi->address}}</td>
                        </tr>
                    </tbody>
            </tbody>
        </table>
        </div>
    </div>

    <div style="text-align: center; padding: 20px;">
        Lập trình web © 01/2024
    </div>
            </div>
        </div>
    </main>
@endsection