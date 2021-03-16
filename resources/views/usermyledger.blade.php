@extends('layouts.user')

@section('css')

<!-- ION Slider -->
<link href="{{ URL::asset('plugins/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
@endsection



@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="mt-0 header-title text-center p-3 mb-2 cm-re text-white"> MY LEDGER</h3>
                <table class="table table-hover table-sm m-0 p-2 mb-3">
                    <tbody>
                        <tr class=" cm-re3 text-white p-2 mb-3">
                            <td>MATCH NAME</td>
                            <td>WON BY</td>
                            <td>WON</td>
                            <td>LOST</td>
                            <td>BALANCE </td>

                        </tr>
                    


                        @foreach ($matchreptable as $matchdatar)
                      
                       
    
                        <tr>
                            <td >{{ $matchdatar->m_name }}</td>
                            <td >{{ $matchdatar->won_by }}</td>
                            <td> @if(($matchdatar->won - $matchdatar->lost) >0)             
                             {{$matchdatar->won - $matchdatar->lost }}
                               @endif</td>
                               <td> @if(($matchdatar->won - $matchdatar->lost) <0)             
                             {{$matchdatar->won - $matchdatar->lost }}
                               @endif</td>
                            <td >{{ $matchdatar->balance }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ URL::asset('plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/rangeslider-init.js') }}"></script>
@endsection