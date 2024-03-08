@extends('backend.layouts.app')

@section('content')
    <main class="main">


        <div class="col-2" style="position: fixed;  z-index: 999; width:100%;">
            <a href="{{ route('publisher.create') }}" class="btn btn-white btn_1"
                style="width: 100%; background-color: #263238; color: white;">انقر لإضافة دار نشر</a>
        </div>
        <br>
        <br>

        <div class="container">



            

            @foreach ($publishers as $publisher)

                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('adminassets/images/offers/' . $publisher->photo) }}" alt="avatar"
                            class="card-img-top" style="width: 200px; height: 150px; border-radius:50% ">
                        <div class="card-body">
                            <h5 class="card-title">اسم الدار: {{ $publisher->name }}</h5>
                            <p class="card-text">الايميل: {{ $publisher->pub_websit }}</p>
                            <p class="card-text">الوصف: {{ $publisher->decripton }}</p>
                            <a href="{{ route('publisher.edit', $publisher->id) }}" class="btn btn-primary"
                                id="but1">تعديل</a>
                            <a href="{{ route('publisher.delete', $publisher->id) }}" class="btn btn-primary"
                                id="but2">حذف</a>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>



    </main>
@endsection
