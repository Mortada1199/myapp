@extends('layouts.dashbord')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href=""> المرشدين </a>
                            </li>
                            <li class="breadcrumb-item active">إضافة مرشد
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> إضافة مرشد </h4>
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
                            {{-- @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors') --}}
                        @if (Session::has('success'))
                        <div class="alert alert-success text-center" role="alert">
                             {{Session::get('success')}}
                            </div>
                            @endif
                            <br>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i>  بيانات المرشد </h4>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> اسم المرشد </label>
                                                        <input type="text" value="" id="name"
                                                               class="form-control"
                                                               placeholder="ادخل اسم المرشد  "
                                                               name="name">

                                                               @error('name')
                                                               <small class="form-text text-danger"> {{$message}} </small>
                                                               @enderror

                                                        {{-- <span class="text-danger"> </span> --}}
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  التخصص </label>
                                                        <input type="text" value="" id="name"
                                                               class="form-control"
                                                               placeholder="ادخل اسم التخصص  "
                                                               name="special">

                                                               @error('special')
                                                               <small class="form-text text-danger">{{$message}}</small>
                                                               @enderror

                                                        {{-- <span class="text-danger"> </span> --}}
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> العنوان </label>
                                                        <input type="text" value="" id="name"
                                                               class="form-control"
                                                               placeholder="ادخل عنوان المرشد     "
                                                               name="addrees">

                                                               @error('addrees')
                                                               <small class="form-text text-danger">{{$message}}</small>
                                                               @enderror
                                                        {{-- <span class="text-danger"> </span> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> الرقم السري </label>
                                                        <input type="text" value="" id="name"
                                                               class="form-control"
                                                               placeholder="ادخل الرقم السري     "
                                                               name="password">
                                                               @error('password')
                                                               <small class="form-text text-danger">{{$message}}</small>
                                                               @enderror
                                                        {{-- <span class="text-danger"> </span> --}}
                                                    </div>
                                                </div>

                                            </div>


                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>


@endsection
