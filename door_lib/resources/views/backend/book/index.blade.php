@extends('frontend.layouts.app')
{{-- @extends('frontend.inc.header')
@extends('frontend.inc.footer') --}}

@section('content')
<br>
<div class="container">
    <div class="row">
       @foreach ($books as $book )
       <div class="card col-4">
        <img src="{{ asset('assets/img/'.$book->image) }}">

        <div class="card-body ">
          <h5 class="card-title">{{$book->title}}</h5>
          <p class="card-text">{{$book->author}}</p>
         <div class="ptn_parnt">
            <a href="{{route('book.create')}}" class="btn btn-primary btn_1">تحميل الكتاب</a>
         </div>
        </div>
      </div>
      {{-- <div class="book read">
        <div class="cover">
          <img src="{{ asset('assets/img/book2.png') }}">
        </div>
        <div class="description">
          <p class="title">{{$book->title}}<br>
            <span class="author"> فهد البشارة</span></p>

        </div>
      </div> --}}
       @endforeach

    </div>
</div>
 {{-- <div id="large-th"> --}}
    {{-- <div class="container">
      <h1> A list of books</h1>  <a href="{{ view('backend.book.create')}}" class="btn btn-success mx-2">نشر كتاب</a>
      <br>
      <div class="choose">
        <a href="#list-th"><i class="fa fa-th-list" aria-hidden="true"></i></a>
        <a href="#large-th"><i class="fa fa-th-large" aria-hidden="true"></i></a>
      </div>
      <div id="list-th">

        <div class="book read">
          <div class="cover">
            <img src="{{ asset('assets/img/book2.png') }}">
          </div>
          <div class="description">
            <p class="title">ان الله معنا<br>
              <span class="author"> فهد البشارة</span></p>

          </div>
        </div> --}}
        {{-- <div class="book read">
          <div class="cover">
            <img src="{{ asset('assets/img/book3.png') }}">
          </div>
          <div class="description">
            <p class="title">  علمني سورة البثرة<br>
              <span class="author">علي بن حسين العلي</span></p>
          </div>

        </div>
        <div class="book unread">
          <div class="cover">
            <img src="{{ asset('assets/img/book4.png') }}">
          </div>
          <div class="description">
            <p class="title">فاني قريب</br>
              <span class="author">وجيه يعقوب</span></p>
          </div>
        </div>
        <div class="book unread">
          <div class="cover">
            <img src="{{ asset('assets/img/book5.png') }}">
          </div>
          <div class="description">
            <p class="title">كن مع الشخص الصح</br>
              <span class="author">إيناس سمير</span></p>
          </div>
        </div>
  <div class="book read">
          <div class="cover">
                  <img src="{{ asset('assets/img/book6.png') }}">
          </div>
          <div class="description">
            <p class="title">اعرف وجهك الاخر</br>
              <span class="author">يوسف الحسني</span></p>
          </div>
        </div>
  <div class="book read">
          <div class="cover">
            <img src="{{ asset('assets/img/book7.png') }}">
          </div>
          <div class="description">
            <p class="title">المنهج الذي لا يدرس</br>
              <span class="author">خوله فؤاد</span></p>
          </div>
        </div>
  <div class="book read">
          <div class="cover">
            <img src="{{ asset('assets/img/book8.png') }}">
          </div>
          <div class="description">
            <p class="title">نظريه يجب ان تعرفها </br>
              <span class="author">حمد بن فهد</span></p>
          </div>
        </div>
  <div class="book read">
          <div class="cover">
            <img src="{{ asset('assets/img/book9.png') }}">
          </div>
          <div class="description">
            <p class="title">للسعادة فكرة</br>
              <span class="author">سعيد النوبان</span></p>
          </div>
        </div> --}}



