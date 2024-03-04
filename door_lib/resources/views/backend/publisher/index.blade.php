@extends('backend.layouts.app')

@section('content')

<div class="container">
   


    <div class="row">
        @foreach ($publishers as $publisher )
        <div class="col-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                  class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">{{$publisher->name}} </h5>
                <p class="text-muted mb-1">{{$publisher->pub_websit}}</p>
                <p class="text-muted mb-4">{{$publisher->decripton}}</p>
              </div>
            </div>
        </div>
              
        @endforeach

    </div>
</div>


@endsection




