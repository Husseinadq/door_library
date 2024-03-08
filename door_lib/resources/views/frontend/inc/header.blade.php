<<<<<<< HEAD
@extends('frontend.layouts.app')
@section('content')
<header class="header">
    <div class="container">
      <a href="#" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="شعار المكتبة">
        <h1>{{ config('app.name') }}</h1>
      </a>

      <nav class="navigation">
        <ul>
          <li><a href="">الصفحة الرئيسية</a></li>
          <li><a href="">الكتب</a></li>
          <li><a href="">عن المكتبة</a></li>
          </ul>
      </nav>

      <form action="" method="GET" class="search-form">
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
=======

    <header>
        <div class="logo">
            <h1>Electronic Library</h1>
>>>>>>> 5bc68ebc8e3795dae5c066055fffc7998a6b90c7
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Browse</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Create Account</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Search...">
            <button id="search-btn">Search</button>
        </div>
    </header>
    <!-- Rest of the page content -->

