<!DOCTYPE html>
<html  dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    <main class="main" style="background-color: #ffffff;">
        <div class="container">

            <br>


            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif




            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf


                <section class="vh-100" style="background-color: #ffffff; ">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <br>
                                <h1 class="text-white mb-4" style="color: teal;">تسجيل دار نشر</h1>

                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body">

                                        <div class="row align-items-center pt-4 pb-3">
                                            <div class="col-md-3 ps-5">

                                                <h6 class="mb-0">اسم الدار</h6>

                                            </div>
                                            <div class="col-md-9 pe-5">

                                                <input type="text" class="form-control form-control-lg" id="user_name"
                                                    name="user_name" />

                                                @error('user_name')
                                                    <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror


                                            </div>
                                        </div>

                                        <hr class="mx-n3">

                                        <div class="row align-items-center py-3">
                                            <div class="col-md-3 ps-5">

                                                <h6 class="mb-0">الايميل</h6>

                                            </div>
                                            <div class="col-md-9 pe-5">

                                                <input type="email" class="form-control form-control-lg" id="user_email"
                                                    name="user_email" />

                                                @error('user_email')
                                                    <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror




                                            </div>
                                        </div>

                                        
                                        <div class="row align-items-center py-3">
                                            <div class="col-md-3 ps-5">

                                                <h6 class="mb-0">كلمة المرور</h6>

                                            </div>
                                            <div class="col-md-9 pe-5">

                                                <input type="password" class="form-control form-control-lg" id="user_pass"
                                                    name="user_pass" />

                                                @error('user_pass')
                                                    <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>

                                        
                                        <div class="row align-items-center py-3">
                                            <div class="col-md-3 ps-5">

                                                <h6 class="mb-0">تأكيد كلمة المرور</h6>

                                            </div>
                                            <div class="col-md-9 pe-5">

                                                <input type="password" class="form-control form-control-lg" id="user_repass"
                                                    name="user_repass" />

                                                @error('user_repass')
                                                    <small class="form-text text-danger">{{ $message }}</small>
                                                @enderror




                                            </div>
                                        </div>

                                       <br>

                                        <div class="px-5 py-4">


                                            <button type="submit" class="btn btn-primary" id="but1">إضافة المستخدم</button>

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
                    <br>
                    <br>
                    <br>
                    <hr>
                </section>

            </form>








        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>