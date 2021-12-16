@extends('layouts.dashbord')
@section('content')
 

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> الرئيسية </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> التقارير
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->

            
 
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-blue">
                    <div class="inner">
                        <h3> {{App\Models\Post::count()}} </h3>
                        <p> Number of News </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-green">
                    <div class="inner">
                        <h3> {{App\Models\Benificary::count()}}</h3>
                        <p> Number of Benificary </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-orange">
                    <div class="inner">
                        <h3> {{App\Models\Doctor::count()}}</h3>
                        <p> Number of doctors </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-box bg-red">
                    <div class="inner">
                        <h3> {{App\Models\AnimalContent::count()}}</h3>
                        <p>  Number of AnimalContent</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<canvas id="myChart" style="width:1129px;max-width:inherit;height:333px;"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

 
<script>
var xValues = ["Chats", "Doctors", "Benificary", "News", "Animals"];
var yValues = [{{App\Models\AnimalContent::count()}},{{App\Models\Doctor::count()}},{{App\Models\Benificary::count()}} , {{App\Models\Post::count()}}, {{App\Models\Animal::count()}}];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Daily Report"
    }
  }
});
</script>


            
            </div>
    </div>
</div>


@endsection

