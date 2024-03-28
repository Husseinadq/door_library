@extends('frontend.layouts.app')

@section('content')

    <div class="banner-text">
     <div class="wrapper">
        <form action="">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></ion-icon></span>
                <input type="text" placeholder="Email"
                required>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" placeholder="Password"
                required>
            </div>
            <div class="Forgot-pass">
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
     </div>
    </div>

    @endauth



     {{-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 --}}
