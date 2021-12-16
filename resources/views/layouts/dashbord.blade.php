<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>  @yield('title') </title>
    <link rel="apple-touch-icon" href="{{asset('admin/images/ico/logo.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/images/ico/logo.jpg')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="admin/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/css/extensions/timedropper.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/style-rtl.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css-rtl/report.css')}}">
    <!-- END Custom CSS-->

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns"    data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->

<!-- Begin Header -->
<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                    class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="">

                        <img class="brand-logo" alt="admin logo" src= "/admin/images/logo/logoo.png">

                        <h3 class="brand-text"> Livestock </h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                        class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#">
                        <i class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                {{-- <span class="mr-1">مرجبا
                  <span
                      class="user-name text-bold-700">  مرتضى </span>
                </span> --}}

                  <span class="avatar avatar-online">
                  <img class="brand-logo" style = "height:40px;" src="/admin/images/logo/logoo.png" alt= "Livestock" ></span>
                              {{-- هنا الاستخدام حق الشعار صورة ولا كلام وولا اي شي --}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href=""><i
                            class="ft-user"></i> تعديل الملف الشحصي </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('exit')}}"><i class="ft-power"></i> تسجيل
                                الخروج</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
<!--End  Header -->

<!-- Begin SideBar-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{route('admin.home')}}"><i class="la la-mouse-pointer"></i><span
                class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>



            <li class="nav-item"><a href=""><i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main">المرشدين </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Doctor::count()}}</span>
            </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.view')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.create')}}" data-i18n="nav.dash.crypto">أضافة
                         مرشد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main">الرعاة </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Benificary::count()}}</span>
            </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('binfit.view')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-plus"></i>
                <span class="menu-title" data-i18n="nav.dash.main">الاخبار </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\Post::count()}}</span>
            </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('news.create')}}" data-i18n="nav.dash.crypto">أضافة
                         خبر </a>
                    </li>

                    <li><a class="menu-item" href="{{route('news.show')}}" data-i18n="nav.dash.crypto">عرض
                         الاخبار </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> محتويات الالبان  </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\MilkContent::count()}}</span>
            </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('milk.create')}}" data-i18n="nav.dash.crypto">أضافة
                         محتوي </a>
                    </li>

                    <li><a class="menu-item" href="{{route('milk.view')}}" data-i18n="nav.dash.crypto">عرض
                        محتوي </a>
                    </li>

                </ul>
            </li>




            <li class="nav-item"><a href=""><i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> محتويات الحيوانات  </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\AnimalContent::count()}}</span>
            </a>
                <ul class="menu-content">
                    <li ><a class="menu-item" href="{{route('animal.create')}}"
                                          data-i18n="nav.dash.ecommerce"> أضافة المحتوي </a>
                    </li>
                    <li><a class="menu-item" href="{{route('animal.view')}}" data-i18n="nav.dash.crypto">عرض
                         محتوي </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-home"></i>
                <span class="menu-title" data-i18n="nav.dash.main">عرض التقارير </span>
                 <span
                    class="badge badge badge-info badge-pill float-right mr-2">1</span>
            </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('news.report')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>

                </ul>
            </li>


        </ul>
    </div>
</div>
            <div class="py-4">
                @yield('content')
            </main>
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; {{date('Y')}} <a  href=""
                    target="_blank">murtada abd algalil</a> </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block"> done <i class="ft-heart pink"></i></span>
    </p>
</footer>


<!-- BEGIN VENDOR JS-->
<script src="{{asset('admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('admin/vendors/js/tables/datatable/datatables.min.js')}}"
type="text/javascript"></script>
<script src="{{asset('admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->

<script src="{{asset('admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="admin/js/scripts/pages/dashboard-crypto.js" type="text/javascript"></script>


<script src="{{asset('admin/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{asset('admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/core/Chart.min.js')}}" type="text/javascript"></script>

<script>
    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians6').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true,setCurrentTime: false
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</body>
</html>

