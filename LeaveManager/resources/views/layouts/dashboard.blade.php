@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('content')

<section class="section">

   <!-- Card Section --> 
  <!-- 
      <div class="card">
      
      <div class="card-body">
        <h4 class="card-title">Bienvenu dans ton dashboard</h4>
        <p class="card-text" style="font-size: 17px">vérifier les nouveautés depuis votre dernière visite.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <img class="img-fluid" src="{{URL::to('assets/images/OnPc.png')}}" alt="Card image cap" style="margin-left: 700px ;margin-top: -130px ;width: 22%;">
      </div>
    </div>
  -->

    <div class="col-13 grid-margin stretch-card">
      <div class="card corona-gradient-card">
        <div class="card-body py-0 px-0 px-sm-3">
          <div class="row align-items-center">

            <div class="col-5 col-sm-7 col-xl-8 p-4">
              <h4 class="mb-1 mb-sm-0">Bienvenu dans ton dashboard, {{Auth::user()->name}} </h4>
              <p class="mb-0 font-weight-normal d-none d-sm-block" style="font-size: 17px">Vérifier les nouveautés depuis votre dernière visite.</p>
            </div>
            <div class="col-4 col-sm-3 col-xl-2">
              <img src="{{URL::to('assets/images/OnPc.png')}}" class="gradient-corona-img img-fluid" style="margin-left: 120px;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Nb Employés</h4>
            </div>
            <div class="card-body">
              {{$personnels}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Absences</h4>
            </div>
            <div class="card-body">
              {{$absence}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Reports</h4>
            </div>
            <div class="card-body">
              1,201
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-circle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Online Users</h4>
            </div>
            <div class="card-body">
              47
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card Section --> 
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Pie Chart</h4>
        </div>
        <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <canvas id="myChart4" style="display: block; height: 176px; width: 353px;" width="441" height="220" class="chartjs-render-monitor"></canvas>
        </div>
      </div>
    </div>  

    

      </section>

@endsection