@extends('backend.layouts.app')

@section('content')

<div class="container">

<form method="POST" action="{{route('publisher.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 row">
        <label for="inputName" class="col-sm-2 col-form-label">اسم دار النشر</label>
        <div class="col-sm-10">
          <input type="text" name="pub_name" class="form-control" id="inputPub">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="inputWebsit" class="col-sm-2 col-form-label">الموقع الالكتروني</label>
        <div class="col-sm-10">
          <input type="text" name="input_websit" class="form-control" id="inputWebsit">
        </div>
      </div>


      <div class="mb-3">
        <label for="formFileSm" class="form-label">شعار دار النشر</label>
        <input class="form-control form-control-sm" name="pub_cov" id="formFileSm" type="file">
      </div>
      


     


      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"> الوصف</label>
        <textarea class="form-control"  name="pub_dec" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>



      <div class="d-grid gap-2">
       
        <button class="btn btn-primary" type="submit">ادخال</button>
      </div>

      <br>

     
</form>

</div>





@endsection