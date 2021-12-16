
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
                            <li class="breadcrumb-item active"> عرض الاخبار
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
                                <h4 class="card-title">الاخبار </h4>
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
                            <!-- @if(Session::has('successd'))
                            <div class="alert alert-success text-center" role="alert">
                                {{Session::get('successd')}}
                              </div>
                            @endif

                            @if(Session::has('error'))
                            <div class="alert alert-danger text-center" role="alert">
                                {{Session::get('error')}}
                              </div>
                            @endif
                             -->
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table display nowrap table-striped scroll-horizontal table-bordered">
                                        <thead>
                                        <tr>
                                            <th> #</th>
                                            <th> الخبر</th>
                                            <th>الصور</th>
                                        </tr>
                                        </thead>
                                        
                                        <tbody>
                                @foreach( $post as $val)
                                                <tr>
                                                    <td>{{$val->id}} </td>
                                                    <td>{{$val->bodypost}} </td>
                                                    <!-- this save images ooook -->
                                                <td><img width="50" height="60" src="{{asset('images/news/'.$val->photo)}}"></td>

                                                   <!-- v this code show video on database okkkkkkkkk-->
                                                    <!-- <td>
                         <video width="130" height="80" controls autoplay>
    <source src="{{asset('images/news/'.$val->photo)}}" type="video/mp4">
    <source src="{{asset('images/news/'.$val->photo)}}" type="video/ogg">
    Your browser does not support the video tag!
                                                    </video> </td> -->
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
