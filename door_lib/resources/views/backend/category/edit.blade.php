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
                    <form action="{{ route('category.update',$temp->id) }}" method="POST">

                        @csrf

                        <input  accept="image/*" type='file' id="imgInp" />
                        <img id="blah" src="#" alt="your image" />
                        <div class="form-group">
                            <label for="name">عنوان الكتاب</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$temp->name}}">
                            @error('name') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="description">المؤلف</label>
                            <input type="text" name="description" id="description" class="form-control"  value="{{$temp->description}}">
                            @error('description') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="parent_id">اللغه </label>
                            <input type="text" name="parent_id" id="parent_id" class="form-control" value="{{$temp->parent_id}}">
                            @error('language') <span class="text-danger">{{$message}}</span>@enderror
                        </div> --}}
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

