@extends('backend.layouts.app')
{{-- {{-- @extends('frontend.inc.header') --}}

@section('content')


<main class="main">

<div class="container">
    <div class="row">
        <div class="col-2">
             <a href="{{route('category.create')}}" class="btn btn-primary btn_1">Add</a>
        </div>

    </div>
    <div class="row">
        @foreach ($categories as $category)
       <div class="card col-3">
        <div class="card-body ">
          <h5 class="card-title">{{ $category->name }}</h5>
           <p class="card-text">{{$category->description}}</p>
            <div class="ptn_parnt">
            <a href="{{route('category.edit',$category->id)}}" class="btn btn-success mx-2">Edit</a>
            <a href="{{route('category.destroy',$category->id)}}" class="btn btn-danger mx-1"
             onclick="return confirm('Are tou sure')">>delete</a>
         </div>
        </div>
      </div>
        @endforeach

    </div>
</div>

</main>
@endsection
