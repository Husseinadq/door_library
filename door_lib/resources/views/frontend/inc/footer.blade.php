@extends('frontend.layouts.app')
@section('content')
<footer class="footer">
    <div class="container">
      <div class="copyright">
        جميع الحقوق محفوظة &copy; {{ date('Y') }} {{ config('app.name') }}
      </div>

      <div class="social-links">
        <a href="{{ config('app.facebook') }}"><i class="fab fa-facebook-f"></i></a>
        <a href="{{ config('app.twitter') }}"><i class="fab fa-twitter"></i></a>
        <a href="{{ config('app.instagram') }}"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>
@endsection

