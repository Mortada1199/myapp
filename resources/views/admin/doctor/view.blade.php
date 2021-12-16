
@extends('layouts.dashbord')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> الاطباء </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> عرض الاطباء
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
                                <h4 class="card-title">بيانات المرشدين </h4>
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

                            @if(Session::has('error'))
                            <div class="alert alert-danger text-center" role="alert">
                                {{Session::get('error')}}
                              </div>
                            @endif
                            
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table display nowrap table-striped scroll-horizontal table-bordered">
                                        <thead>
                                        <tr>
                                            <th> #</th>
                                            <th> الاسم</th>
                                            <th>التخصص</th>
                                            <th>العنوان</th>
                                            {{-- <th>كلمة السر</th> --}}
                                            <th>الإجراءات</th>
                                        </tr>
                                        </thead>
                                        
                                        <tbody>
                                @foreach( $doctors as $val)
                                                <tr>
                                                    <td>{{$val->id}} </td>
                                                    <td>{{$val->name}} </td>
                                                    <td>{{$val->special}}</td>
                                                    <td>{{$val->addrees}} </td>
                                                   {{-- // <td>{{$val->name}}</td> --}}

                                                    <td>
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <a href="{{route('admin.edit',$val->id)}}"
                                                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                                                            <!-- </div> -->
                                                            <!-- {{-- <button type="button"
                                                                    value=""

                                                                    onclick=""
                                                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                                    data-toggle="modal"
                                                                    data-target="#rotateInUpRight">
                                                                    حذف
                                                            </button> --}} -->

                                                            <!-- <div class="btn-group" role="group"
                                                            aria-label="Basic example"> -->
                                                               <a href="{{route('doctor.delete',$val->id)}}"
                                                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
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
