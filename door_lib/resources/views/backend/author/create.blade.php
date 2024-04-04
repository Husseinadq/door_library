@extends('backend.layouts.app-web-layout')
@section('content')


   <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>

            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Add Authore
                        <a href="{{ url('authors')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('authors/create')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name')}}"/>
                            @error('name') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description')}}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="mb-3">
                                <label>Is Active</label>
                                <input type="checkbox" name="is_active" {{ old('is_active') == true ? checked: ''}}/>
                                @error('is_active') <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md-3">
                                <button type="submit" class="btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
