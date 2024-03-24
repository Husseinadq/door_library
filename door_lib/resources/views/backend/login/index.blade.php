@extends('backend.layouts.app')

@section('content')
    <main class="main" style="background-color: #ffffff;">
        <br>
        <div class="container">
            <div class="row">
     
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h2>المستخدمين</h2>
                        </div>
                        <div class="card-body">
                            
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>الايميل</th>
                                            <th>كلمة المرور</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
     
                                            <td>
                                                

                                               

                                                <a href="{{ url('/user/edit'.'/'.$user->id) }}" title="Edit User"><button class="btn btn-primary btn-sm" id="but1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> تعديل</button></a>
     
                                                <form method="POST" action="{{ url('/user/delete' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" id="but1" style="background-color:rgb(87, 7, 7); border:none;" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
     
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr>
    </main>

@endsection
