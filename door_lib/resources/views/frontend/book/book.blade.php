@extends('frontend.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $book->title }}</h2>
                </div>
                <div class="card-body">
                    <img src="{{ $book->image }}" alt="{{ $book->title }}" class="img-fluid">
                    <p>{{ $book->description }}</p>
                    <p><strong>المؤلف:</strong> {{ $book->author }}</p>
                    <p><strong>الناشر:</strong> {{ $book->publisher }}</p>
                    <p><strong>تاريخ النشر:</strong> {{ $book->publication_date }}</p>
                    <p><strong>رقم ISBN:</strong> {{ $book->isbn }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2>شراء الكتاب</h2>
                </div>
                <div class="card-body">
                    <p>سعر الكتاب: {{ $book->price }}</p>
                    <form action="{{ route('books.purchase') }}" method="post">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <button type="submit" class="btn btn-primary">شراء الكتاب</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
