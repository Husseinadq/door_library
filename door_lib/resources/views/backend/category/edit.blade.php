@extends('frontend.layouts.app')

@section('content')
<br>
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card text-dark bg-info mb-3">
                    <h2>  تعديل الفئه  </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update',$temp->id) }}" method="POST">

                        @csrf


                        <div class="form-group">
                            <label for="name"> المحتوى </label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$temp->name}}">
                            @error('name') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="description">وصفه</label>
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

