@extends('layouts.app-web-layout')
@section('content')

   <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Wishlist
                        <a href="{{ url('wishlists/create')}}" class="btn btn-primary float-end">Add Wishlist</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Is Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlists as $item)
                            <tr>
                                <td> {{$item->id}}  </td>
                                <td>{{$item->name}}  </td>
                                <td>{{$item->description}}  </td>
                                <td>
                                   @if ($item->is_active)
                                   Active
                                   @else
                                   In-Active
                                   @endif
                                </td>
                                <td>
                                    <a href="{{ url('wishlists/'.$item->id.'/edit')}}" class="btn btn-succss mx-2">Edit</a>

                                    <a href="{{ route('wishlist.delete',$item->id) }}" class="btn btn-danger mx-1">Delete</a>
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </taple>
                </div>
            </div>
        </div>
    </div>
   </div>

@endsection
