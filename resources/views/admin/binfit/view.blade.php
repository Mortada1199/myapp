
@extends('layouts.dashbord')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> الرعاة </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{('admin.home')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> الرعاة
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
                                <h4 class="card-title">جميع الرعاة في الموقع </h4>
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
                                    <table
                                        class="table display nowrap table-striped table-bordered scroll-horizontal">
                                        <thead>
                                        <tr>
                                            <th> #</th>
                                            <th>الاسم</th>
                                            <th>الرقم السري</th>
                                            <th>رقم الهاتف</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach( $benfic as $val)
                                                <tr>
                                                    <td>{{$val->id}} </td>
                                                    <td>{{$val->name}} </td>
                                                    <td>{{$val->password}}</td>
                                                    <td>{{$val->phone}} </td>
                                                    <td>
                                                        {{-- <div class="btn-group" role="group"
                                                             aria-label="Basic example">

                                                            <button type="button"
                                                                    value=""
                                                                    onclick=""
                                                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                                    data-toggle="modal"
                                                                    data-target="#rotateInUpRight">
                                                                حذف
                                                            </button>
                                                        </div> --}}
                                                            <div class="btn-group" role="group"
                                                            aria-label="Basic example">
                                                               <a href="{{route('binfit.delete',$val->id)}}"
                                                                class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
                                                        </div>

                                                        @endforeach
                                                    </td>
                                                </tr>



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
