
@extends('layouts.dashbord')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> منتجات الالبان </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> منتجات الالبان
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">جميع البيانات الموجودة </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            {{-- @include('admin.includes.alerts.success') --}}
                            {{-- @include('admin.includes.alerts.errors') --}}
                            
                            @if(Session::has('successd'))
                        <div class="alert alert-success text-center" role="alert">
                             {{Session::get('successd')}}
                             </div>
                                @endif

                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table
                                        class="table display nowrap table-striped scroll-horizontal table-bordered ">
                                        <thead>

                                        <tr>
                                            <th> #</th>
                                             <th> الاسم</th>
                                            <th> النص</th>
                                            <th>الفيديو</th>
                                            <th>الإجراءات</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach( $milkconte as $val)
                                                <tr>
                                                    <td> {{$val->id}} </td>
                                                    <td> {{$val->catogre}}</td>
                                                    <td> {{$val->description}} </td>
                                                    <td>
                                                        <video width="130" height="80" controls autoplay>
                                                    <source src="{{asset('images/videoss/'.$val->video)}}" type="video/mp4">
                                                    <source src="{{asset('images/videoss/'.$val->video)}}" type="video/ogg">
                                                    Your browser does not support the video tag!
                                                    </video>
                                                </td>

                                                    <td>
                <div class="btn-group" role="group"  aria-label="Basic example">
     <a href="{{route('milk.edit',$val->id)}}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                        </div>
                                                       
                                                    </td>
                                                </tr>


                                                @endforeach
                                        </tbody>
                                    </table>
                                    <div class="justify-content-center d-flex">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
