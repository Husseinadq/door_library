@extends('frontend.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>إضافة كتاب جديد</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('books.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">عنوان الكتاب</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">المؤلف</label>
                            <input type="text" name="author" id="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="publisher">الناشر</label>
                            <input type="text" name="publisher" id="publisher" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="publication_date">تاريخ النشر</label>
                            <input type="date" name="publication_date" id="publication_date"
@endsection
