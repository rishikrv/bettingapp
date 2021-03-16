@extends('layouts.master')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Dashboard </h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">General Information</li>
    </ol>
</div>
@endsection

@section('content')
<div>
    <div class="col-sm-6">

        <div class="float-right d-none d-md-block">
            <div class="dropdown">
                <!-- <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="mdi mdi-settings mr-2"></i> Settings
        </button> -->
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- 
<div class="row">
    <div class="col-xl-2 col-md-2">
        <div class="project-item">
            <div class="overlay-container">
                <img src="{{ URL ::asset('assets\images\gallery\user.png')}}" alt="img" width="120" class="img-fluid">
                <h5 class="text-center">Admin</h5>
            </div>
        </div>

    </div>



    <div class="col-xl-2 col-md-2">
        <div class="project-item">
            <div class="overlay-container">
                <a href="ledger-dashboard"><img src="{{ URL ::asset('assets\images\gallery\ledger.png')}}" alt="" width="120" class="img-fluid"></a>
                <h5>Ledger</h5>


            </div>
        </div>
    </div>
  

    <div class="col-xl-2 col-md-3">

        <div class="project-item">
            <div class="overlay-container">
                <a href="sport-dashboard"><img src="{{ URL ::asset('assets\images\gallery\betting.png')}}" alt="img" width="120" class="img-fluid"></a>

                <h5>Sports Bettings</h5>


            </div>
        </div>
    </div>

    <div class="col-xl-2 col-md-2">
        <div class="project-item">
            <div class="overlay-container">
                <a href="setting-dashboard"><img src="{{ URL ::asset('assets\images\gallery\settings.png')}}" alt="" width="120" class="img-fluid"></a>
                <h5>Settings</h5>


            </div>
        </div>

    </div>
      <div class="project-item">
        <div class="overlay-container">
            <a href="/logout"><img src="{{ URL ::asset('assets\images\gallery\log-out.png')}}" alt="img" width="120" class="img-fluid">
                <h5 class="text-center">Logout</h5>


        </div>
    </div>

</div> -->
<!-- end row -->
<div class="row">

@if((ucfirst(Auth()->user()->role))==1)
    <div class="col-xl-3 col-md-6">
    <a href="add-matches"> <div class="card mini-stat db-inplay text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mr-4">
                        <lottie-player src="https://assets10.lottiefiles.com/datafiles/IOWV5QiqktxWjrL/data.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">Match Settings</h4>
                </div>
            </div>
        </div>
        </a>
    </div>
    @endif
    <div class="col-xl-3 col-md-6">
    <a href="ledger-dashboard"><div class="card mini-stat  db-myledger text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mr-4">
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_wvntgftp.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">My Ledger</h4>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6">
    <a href="sport-dashboard"> <div class="card mini-stat db-comp text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mr-4">
                        <!-- <img src="{{ URL::asset('assets/images/services-icon/01.png') }}" alt=""> -->
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_sE2Em1.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">Sports Bettings</h4>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6">
    <a href="setting-dashboard"> <div class="card mini-stat bg-danger text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mr-4">
                        <!-- <img src="{{ URL::asset('assets/images/services-icon/01.png') }}" alt=""> -->
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_jujCzv.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">Settings</h4>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6">
    <a href="logout"> <div class="card mini-stat db-myledger text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mr-4">
                        <!-- <img src="{{ URL::asset('assets/images/services-icon/01.png') }}" alt=""> -->
                        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_0fwl68.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">Logout</h4>
                </div>
            </div>
        </div>
        </a>
    </div>

</div>

<!-- end row -->
@endsection



@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection