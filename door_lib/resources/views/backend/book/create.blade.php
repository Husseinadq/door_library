@extends('frontend.layouts.app')

@section('content')
<br>
<div class="card">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card text-dark bg-info mb-3">
                    <h2>  انشر كتابك الان </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('book.store') }}" method="post">
                        @csrf
                        <input  accept="image/*" type='file' id="imgInp" />
                        <img id="blah" src="#" alt="your image" />
                        <div class="form-group">
                            <label for="title">عنوان الكتاب</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">المؤلف</label>
                            <input type="text" name="author" id="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lang">اللغه </label>

                            <input type="text" name="language" id="language" class="form-control">
                        </div>
                        <br>
                        <div class="mb-3">
                            <button type="submit"class="btn btn-primary">save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



                        {{-- <br>
                        <div class="form-group">
                            <label for="publication_date">تاريخ النشر</label>
                            <input type="date" name="publication_date" id="publication_date" --}}
@endsection
<script>

imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
