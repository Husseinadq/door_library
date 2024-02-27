@extends('frontend.layouts.app')
@section('content')
<header class="header">
    <div class="container">
      <a href="{{ route('home') }}" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="شعار المكتبة">
        <h1>{{ config('app.name') }}</h1>
      </a>

      <nav class="navigation">
        <ul>
          <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
          <li><a href="{{ route('books') }}">الكتب</a></li>
          <li><a href="{{ route('about') }}">عن المكتبة</a></li>
          </ul>
      </nav>

      <form action="{{ route('search') }}" method="GET" class="search-form">
        <input type="text" name="q" placeholder="البحث عن الكتب">
        <button type="submit"><i class="fas fa-search"></i></button>
      </form>

      @auth
        <div class="user-actions">
          <a href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">تسجيل الخروج</button>
          </form>
        </div>
      @endauth
    </div>
  </header>

  @endsection
