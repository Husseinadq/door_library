@extends('backend.layouts.app')

@section('content')
<main class="main"style="background-color: #ffffff;">

    <br>


    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

<div class="container">


  <form method="POST" action="{{ route('publisher.update', $publisher->id) }}" enctype="multipart/form-data">
    @csrf



    <section class="vh-100" style="background-color: #ffffff; ">
      <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-xl-9">
                      <br>
                  <h1 class="text-white mb-4" style="color: teal;">تعديل دار نشر</h1>

                  <div class="card" style="border-radius: 15px;">
                      <div class="card-body">

                          <div class="row align-items-center pt-4 pb-3">
                              <div class="col-md-3 ps-5">

                                  <h6 class="mb-0">اسم دار النشر</h6>

                              </div>
                              <div class="col-md-9 pe-5">

                                  <input type="text" class="form-control form-control-lg" id="pub_name"
                                      name="pub_name" value="{{ $publisher->name }}" required>


                                      @error('pub_name')
                                      <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                      </span>
                                    @enderror
                            

                              </div>
                          </div>

                          <hr class="mx-n3">

                          <div class="row align-items-center py-3">
                              <div class="col-md-3 ps-5">

                                  <h6 class="mb-0">الايميل</h6>

                              </div>
                              <div class="col-md-9 pe-5">

                                  <input type="email" class="form-control form-control-lg" id="pub_websit"
                                      name="pub_websit" value="{{ $publisher->pub_websit }}">

                                      @error('pub_websit')
                                      <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                      </span>
                                    @enderror
                            

                              </div>
                          </div>

                          <hr class="mx-n3">

                          <div class="row align-items-center py-3">
                              <div class="col-md-3 ps-5">

                                  <h6 class="mb-0">الوصف</h6>

                              </div>
                              <div class="col-md-9 pe-5">

                                  <textarea class="form-control" id="pub_dec" name="pub_dec" rows="3">{{$publisher->decripton}}</textarea>
                                  @error('pub_dec')
                                  <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                  </span>
                                @enderror
                        

                              </div>
                          </div>

                          <hr class="mx-n3">

                          <div class="row align-items-center py-3">
                              <div class="col-md-3 ps-5">

                                  <h6 class="mb-0">شعار الدار</h6>

                              </div>
                              <div class="col-md-9 pe-5">

                                  <input class="form-control form-control-lg" id="formFileLg" type="file"
                                      name="photo"   placeholder="fghjkl" >

                                     

                                     


                              </div>
                          </div>

                          <hr class="mx-n3">

                          <div class="px-5 py-4">
                             

                                  <button type="submit" class="btn btn-primary" id="but1">حفظ التعديلات</button>

                          </div>

                      </div>
                  </div>

              </div>
          </div>
      </div>
   
  <br>
  <br>
  <br>
  <br>
    <hr>
  </section>
  </form>
</div>
</main>
@endsection
