@extends('layouts.master')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
                                    <h4 class="page-title">Sport's Betting</h4>
                                    
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Sport's Betting</a></li>
                                        <li class="breadcrumb-item active"><a href="index">Back</li>
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
</div>

<div class="row" >
<div class="col-xl-2 col-md-2">
<div class="project-item">
    <div class="overlay-container">
    <a href="sport-detail"><img src="{{ URL ::asset('assets\images\gallery\user.png')}}" alt="img" width="120" class="img-fluid"></a>
            <h5 class="text-center">Sports Details</h5>
    </div>
</div>

</div>

<div class="col-xl-2 col-md-2">
<div class="project-item">
    <div class="overlay-container">
    <a href="index"><img src="{{ URL ::asset('assets\images\gallery\back.png')}}" alt="" width="120" class="img-fluid"></a>
        <h5 class="text-center">Back</h5>
            
        
    </div>
</div>
</div>

</div>


           
@endsection

@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection