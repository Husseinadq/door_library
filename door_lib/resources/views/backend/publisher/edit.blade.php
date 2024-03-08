@extends('backend.layouts.app')

@section('content')
<main class="main">

<div class="container">
  <h1 class="h3 mb-3">تعديل دار نشر</h1>

  <form method="POST" action="{{ route('publisher.update', $publisher->id) }}" enctype="multipart/form-data">
    @csrf




    <div class="row mb-3">
      <label for="photo" class="col-sm-3 col-form-label">صورة دار النشر</label>
      <div class="col-sm-9">
        <input type="file" class="form-control" name="photo" value="{{ $publisher->photo}}"  required>
       
      </div>
    </div>  

    
   <div class="row mb-3">
      <label for="pub_name" class="col-sm-3 col-form-label">اسم دار النشر</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="pub_name" name="pub_name" value="{{ $publisher->name }}" required>
        @error('pub_name')
          <span class="invalid-feedback" role="alert">
            {{ $message }}
          </span>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="pub_websit" class="col-sm-3 col-form-label">الموقع الإلكتروني</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" id="pub_websit" name="pub_websit" value="{{ $publisher->pub_websit }}">
        @error('pub_websit')
          <span class="invalid-feedback" role="alert">
            {{ $message }}
          </span>
        @enderror
      </div>
    </div>

    

    <div class="row mb-3">
      <label for="pub_dec" class="col-sm-3 col-form-label">الوصف</label>
      <div class="col-sm-9">
        <textarea class="form-control" id="pub_dec" name="pub_dec" rows="3">{{ $publisher->decripton }}</textarea>
        @error('pub_dec')
          <span class="invalid-feedback" role="alert">
            {{ $message }}
          </span>
        @enderror
      </div>
    </div>

    <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
  </form>
</div>
</main>
@endsection
