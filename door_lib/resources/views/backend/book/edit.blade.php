@extends('frontend.layouts.app')

@section('content')
<br>
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card text-dark bg-info mb-3">
                    <h2>  تعديل كتابك  </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('book.update',$temp->id) }}" method="POST">

                        @csrf

                        <input  accept="image/*" type='file' id="imgInp" />
                        <img id="blah" src="#" alt="your image" />
                        <div class="form-group">
                            <label for="title">عنوان الكتاب</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{$temp->title}}">
                            @error('title') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="author">المؤلف</label>
                            <input type="text" name="author" id="author" class="form-control"  value="{{$temp->author}}">
                            @error('author') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="lang">اللغه </label>

                            <input type="text" name="language" id="language" class="form-control" value="{{$temp->language}}">
                            @error('language') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <button type="submit"class="btn btn-primary">update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

