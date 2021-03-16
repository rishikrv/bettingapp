@extends('layouts.user')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection



@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
    <a href="userinplay"> <div class="card mini-stat db-inplay text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mr-4">
                        <!-- <img src="{{ URL::asset('assets/images/services-icon/01.png') }}" alt=""> -->
                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_cflyho6s.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">In Play</h4>
                </div>
                <!-- <div class="pt-2">
                    <div class="float-right">
                        <a href="inplay" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6">
    <a href="userupcomming"> <div class="card mini-stat bg-danger text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mr-4">
                        <!-- <img src="{{ URL::asset('assets/images/services-icon/01.png') }}" alt=""> -->
                        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_Xy53hC.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">Upcoming</h4>
                </div>
                <!-- <div class="pt-2">
                    <div class="float-right">
                        
                    </div>
                </div> -->
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6">
    <a href="usercompletegames"> <div class="card mini-stat db-comp text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mr-4">
                        <!-- <img src="{{ URL::asset('assets/images/services-icon/01.png') }}" alt=""> -->
                        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_iV1uOa.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">Complete Games</h4>
                </div>
                <div class="pt-2">
                    <!-- <div class="float-right">
                        <a href="completegames" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6">
    <a href="usermyledger">   <div class="card mini-stat db-myledger text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left  mr-4">
                        <!-- <img src="{{ URL::asset('assets/images/services-icon/01.png') }}" alt=""> -->
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_wvntgftp.json"
                            background="transparent" speed="1" style="width: 100px; height: 100px;" loop autoplay>
                        </lottie-player>
                    </div>
                    <h4 class="font-500">My Ledger</h4>
                </div>
                <!-- <div class="pt-2">
                    <div class="float-right">
                        <a href="inplay" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
        </a>
    </div>


</div>




<!-- end row -->
@endsection

@section('script')
<!--Chartist Chart-->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection