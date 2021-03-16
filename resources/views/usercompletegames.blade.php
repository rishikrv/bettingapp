@extends('layouts.user')

@section('css')
@endsection



@section('content')

<div class="row">
    
    @foreach ($matchtable as $matchdata)
    <div class="col-md-4">
        <div class="card card-body text-center ">
            <h3 class="card-title font-16 mt-0">{{ $matchdata->m_name}}</h3>
            <p class="card-text text-wrap">Date : {{ $matchdata->m_date}} </p>
            <p class="card-text text-wrap">Time : {{ $matchdata->m_time}}</p>
            <p class="card-text text-wrap">Match Bets : 0</p>
            <p class="">Session Bets : 0</p>
            <p class="">Declared : Yes</p>
            <p class="card-text">Won By : {{ $matchdata->won_by}}</p>
            <a href="usercompmatch/{{ $matchdata->m_id}}" class="btn btn-warning waves-effect waves-light">Summary</a>


        </div>
    </div>
    @endforeach
</div>
<!-- end row -->

<!-- <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-body">
                                    <h4 class="card-title font-16 mt-0">Special title treatment</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-warning waves-effect waves-light">Go somewhere</a>
                                </div>
                            </div>
        
                            <div class="col-lg-4 ">
                                <div class="card card-body text-center">
                                    <h4 class="card-title font-16 mt-0">Special title treatment</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-warning waves-effect waves-light">Go somewhere</a>
                                </div>
                            </div>
        
                            <div class="col-lg-4">
                                <div class="card card-body text-right">
                                    <h4 class="card-title font-16 mt-0">Special title treatment</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-warning waves-effect waves-light">Go somewhere</a>
                                </div>
                            </div>
                        </div> -->
<!-- end row -->



<!-- end row -->
@endsection

@section('script')
@endsection