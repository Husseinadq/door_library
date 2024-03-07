@extends('backend.layouts.app')

@section('content')


<main class="main">
<div class="container mt-4">
    <div class="row">
        @foreach ($publishers as $publisher)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <img src="https://content.presentermedia.com/files/clipart/00009000/9078/front_facing_book_colored_800_wht.jpg"
                        alt="avatar" class="rounded-circle img-fluid mb-3" style="width: 150px;">
                    <h5 class="card-title mb-2">{{ $publisher->name }}</h5>
                    <p class="card-text text-muted mb-3">{{ $publisher->pub_websit }}</p>
                    <p class="card-text text-muted">{{ $publisher->decripton }}</p>

                    <div class="btn-group-vertical mt-3" role="group">
                        <a href="{{ route('publisher.create', $publisher->id) }}"
                            class="btn btn-primary btn-sm">إضافة كتاب جديد</a>
                        <a href="{{ route('publisher.edit', $publisher->id) }}"
                            class="btn btn-secondary btn-sm">تعديل كتاب</a>
                        <a href="{{ route('publisher.delete', $publisher->id) }}"
                            class="btn btn-danger btn-sm">حذف كتاب</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</main>
@endsection
