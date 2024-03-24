@extends('backend.layouts.app')

@section('content')

<main class="main">
   <!-- Breadcrumb -->
   <ol class="breadcrumb">
    <li class="breadcrumb-item">بيت</li>
    <li class="breadcrumb-item"><a href="#">إدارة</a>
    </li>
    <li class="breadcrumb-item active">لوحة القيادة</li>

    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
            <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;لوحة القيادة</a>
            <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;إعدادات</a>
        </div>
    </li>


    

</ol>

<div class="container-fluid">

    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-primary">
                    <div class="card-block p-b-0">
                        <div class="btn-group pull-left">
                           
                        </div>
                        <h4 class="m-b-0">200</h4>
                        <p>عدد الكتب</p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart1" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-info">
                    <div class="card-block p-b-0">
                       
                        <h4 class="m-b-0">70</h4>
                        <p>عدد المؤلفين</p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart2" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-warning">
                    <div class="card-block p-b-0">
                        <div class="btn-group pull-left">
                           
                        </div>
                        <h4 class="m-b-0">{{$publishers}}</h4>
                        {{-- <h4 class="m-b-0">{{\app\Models\Publisher::count()}}</h4> --}}
                        <p>عدد دور النشر</p>
                    </div>
                    <div class="chart-wrapper" style="height:70px;">
                        <canvas id="card-chart3" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-danger">
                    <div class="card-block p-b-0">
                        <div class="btn-group pull-left">
                          
                           
                        </div>
                        <h4 class="m-b-0">{{$users}}</h4>
                        <p>عدد المستخدمين</p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart4" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

        </div>
        <!--/row-->
    </div>

</div>
<!--/.container-fluid-->


</main>

@endsection