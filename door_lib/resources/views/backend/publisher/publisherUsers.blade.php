@extends('backend.layouts.app')

@section('content')
    <main class="main" style="background-color: #ffffff;">
        <br>
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: white">
                            <h2>مستخدمين دور النشر</h2>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>الايميل</th>
                                            <th>الحالة</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>

                                                    <a href="{{route('change-pub-status',$user->id)}}" class="btn btn-sm btn-{{$user->status ? 'success' : 'danger'}}">
                                                        {{$user->status ? 'Enable' : 'Disable'}}
                                                    </a>
                                                </td>



                                                <td>




                                                    <a class="btn btn-primary" href="#" data-toggle="modal"
                                                        data-target="#ModalEdit{{ $user->id }}"
                                                        style="border-radius: 14%;">{{ _('تعديل') }}</a>

                                                    <a class="btn btn-primary" href="#" data-toggle="modal"
                                                        data-target="#ModalPassword{{ $user->id }}"
                                                        style="border-radius: 14%;background-color:rgb(114, 128, 133)">{{ _('تغيير كلمة المرور') }}</a>

                                                    <a class="btn btn-primary" href="#" data-toggle="modal"
                                                        data-target="#ModalDelete{{ $user->id }}"
                                                        style="border-radius: 14%; background-color:rgb(87, 7, 7)">{{ _('حذف المستخدم') }}</a>






                                                    {{-- <form method="POST" action="{{ url('/user/delete' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-primary"  style="background-color:rgb(87, 7, 7); border:none;border-radius: 14%; " title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
                                                </form> --}}


                                                </td>
                                            </tr>
                                            @include('backend.login.modal.edit2')
                                            @include('backend.login.modal.restPassword')
                                            @include('backend.login.modal.delete')
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
