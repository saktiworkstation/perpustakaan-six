@extends('auth.main')

@section('container')
    <div class="self-container">
        <h1>SigIn</h1>
        <form id="loginForm" action="javascript:void(0);">
            <div class="self-form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
            </div>
            <div class="self-form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
            </div>

            <button type="submit">SigIn</button>
        </form>
        <p>Belum memiliki akun? <a href="/register">Daftar disini</a></p>
    </div>
@endsection
