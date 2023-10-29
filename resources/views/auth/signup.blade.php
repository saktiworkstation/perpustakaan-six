@extends('auth.main')

@section('container')
    <div class="self-container">
        <h2>Signup</h2>
        <form id="signupForm" action="javascript:void(0);">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" name="newUsername" required><br><br>

            <label for="newPassword">Password:</label>
            <input type="password" id="newPassword" name="newPassword" required><br><br>

            <button type="submit">Daftar</button>
        </form>
        <p>Sudah memiliki akun? <a href="/login">Login disini</a></p>
    </div>
@endsection
