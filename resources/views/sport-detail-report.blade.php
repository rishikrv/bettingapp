@extends('layouts.master-blank')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Match & Session Plus Minus Report Selection Match Code : 767
    </h4>
    <p>MATCH CODE : (767) MASTER AGENT & SUPER AGENT & AGENT & CLIENT OF KARACHI KINGS V LAHORE QALANDARS (PSL T-20)
    </p>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Sport's Betting</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Sport Details</a></li>
        <li class="breadcrumb-item active">Back</li>
    </ol>

</div>
@endsection

@section('content')

<div class="col-sm-6">




</div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @foreach ($matchtable as $matchdata)
                <h4 class="page-title">Match & Session Plus Minus Report Selection Match Code : {{ $matchdata->m_id }}
                </h4>
                <p>MATCH CODE : ({{ $matchdata->m_id }}) MASTER AGENT & SUPER AGENT & AGENT & CLIENT OF {{ $matchdata->m_name }}
                </p>
                <!-- <h4 class="mt-0 header-title">Sport Details</h4> -->
                <div class="form-group">

                    @endforeach

                </div>


                <div class="table-rep-plugin">

                    <div class="table-responsive mb-0" data-pattern="priority-columns" style="background-color: #EAF4FF;">

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>ADMIN</th>
                                    <th>SUPER MASTER</th>
                                    <th>MASTER</th>
                                    <th>SUPER AGENT</th>
                                </tr>
                            </thead>
                        </table>


                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>AGENT</th>

                                </tr>
                            </thead>

                            <td>
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                    <thead>
                                        <tr>
                                            <th colspan="11" style="text-align: center; ">AGENT PLUS MINUS</th>
                                            <th colspan="11" style="text-align: center;"> SUPER AGENT PLUS MINUS</th>
                                            <td colspan="11" style="text-align: center;">MASTER PLUS MINUS</td>
                                            <td colspan="11" style="text-align: center;"> SUPER MASTER PLUS MINUS</td>
                                            <!-- <td colspan="11" style="text-align: center;">Admin</td> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- agent -->
                                            <th>CLIENT</th>
                                            <th>M AMT</th>
                                            <th>SESS.</th>
                                            <th>TOT. AMT</th>
                                            <th>M. COM</th>
                                            <th>S. COM</th>
                                            <th>TOL. COM</th>
                                            <th>NET AMT</th>
                                            <th>SHR AMT</th>
                                            <th>MOB. APP</th>
                                            <th>FINAL</th>
                                            <!-- superagent -->
                                            <th>M AMT</th>
                                            <th>SESS.</th>
                                            <th>TOT. AMT</th>
                                            <th>M. COM</th>
                                            <th>S. COM</th>
                                            <th>TOL. COM</th>
                                            <th>NET AMT</th>
                                            <th>SHR AMT</th>
                                            <th>MOB. APP</th>
                                            <th>FINAL</th>
                                            <!-- master -->
                                            <th>M AMT</th>
                                            <th>SESS.</th>
                                            <th>TOT. AMT</th>
                                            <th>M. COM</th>
                                            <th>S. COM</th>
                                            <th>TOL. COM</th>
                                            <th>NET AMT</th>
                                            <th>SHR AMT</th>
                                            <th>MOB. APP</th>
                                            <th>FINAL</th>
                                            <!-- supermaster -->
                                            <th>M AMT</th>
                                            <th>SESS.</th>
                                            <th>TOT. AMT</th>
                                            <th>M. COM</th>
                                            <th>S. COM</th>
                                            <th>TOL. COM</th>
                                            <th>NET AMT</th>
                                            <th>SHR AMT</th>
                                            <th>MOB. APP</th>
                                            <th>FINAL</th>
                                            <!-- admin -->
                                            <!-- <th>M AMT</th>
                                            <th>SESS.</th>
                                            <th>TOT. AMT</th>
                                            <th>M. COM</th>
                                            <th>S. COM</th>
                                            <th>TOL. COM</th>
                                            <th>NET AMT</th>
                                            <th>SHR AMT</th>
                                            <th>MOB. APP</th>
                                            <th>FINAL</th> -->
                                        </tr>
                                        <tr>
                                            @foreach ( $agents as  $agents) 
                                                <td>{{ $agents->Name }}</td>
                                                <td>{{ $agents->Match_Amount }}</td>
                                                <td>{{ $agents->Session_Amount }}</td>
                                                <td>{{$agents->Match_Amount + $agents->Session_Amount }}</td>
                                                <td>{{$agents->Match_Com }}</td>
                                                <td>{{$agents->Session_Com }}</td>
                                                <td>{{$agents->Match_Com + $agents->Session_Com }}</td>
                                                <td>{{$agents->Net_amt }}</td>
                                                <td>{{$agents->Share_amt }}</td>
                                                <td>{{$agents->mob_share }}</td>
                                                <td>{{$agents->t_final }}</td>
                                            @endforeach
                                            @foreach ( $superagent as  $superagent)
                                                <td>{{ $superagent->Match_Amount }}</td>
                                                <td>{{ $superagent->Session_Amount }}</td>
                                                <td>{{$superagent->Match_Amount + $agents->Session_Amount }}</td>
                                                <td>{{$superagent->Match_Com }}</td>
                                                <td>{{$superagent->Session_Com }}</td>
                                                <td>{{$superagent->Match_Com + $agents->Session_Com }}</td>
                                                <td>{{$superagent->Net_amt }}</td>
                                                <td>{{$superagent->Share_amt }}</td>
                                                <td>{{$superagent->mob_share }}</td>
                                                <td>{{$superagent->t_final }}</td>
                                            @endforeach
                                            @foreach ( $master as  $master)
                                                <td>{{ $master->Match_Amount }}</td>
                                                <td>{{ $master->Session_Amount }}</td>
                                                <td>{{$master->Match_Amount + $agents->Session_Amount }}</td>
                                                <td>{{$master->Match_Com }}</td>
                                                <td>{{$master->Session_Com }}</td>
                                                <td>{{$master->Match_Com + $agents->Session_Com }}</td>
                                                <td>{{$master->Net_amt }}</td>
                                                <td>{{$master->Share_amt }}</td>
                                                <td>{{$master->mob_share }}</td>
                                                <td>{{$master->t_final }}</td>
                                            @endforeach
                                            @foreach ( $supermaster as  $supermaster)
                                                <td>{{ $supermaster->Match_Amount }}</td>
                                                <td>{{ $supermaster->Session_Amount }}</td>
                                                <td>{{$supermaster->Match_Amount + $agents->Session_Amount }}</td>
                                                <td>{{$supermaster->Match_Com }}</td>
                                                <td>{{$supermaster->Session_Com }}</td>
                                                <td>{{$supermaster->Match_Com + $agents->Session_Com }}</td>
                                                <td>{{$supermaster->Net_amt }}</td>
                                                <td>{{$supermaster->Share_amt }}</td>
                                                <td>{{$supermaster->mob_share }}</td>
                                                <td>{{$supermaster->t_final }}</td>
                                            @endforeach

                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                           
                        </table>
                        <!-- <table id="tech-companies-1" class="table table-striped"> -->
                    </div>

                </div>

            </div>
        </div>
    </div> <!-- end col -->
    <!-- end col -->
</div>


@endsection

@section('script')
@endsection