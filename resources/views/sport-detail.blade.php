@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Sport Details</h4>
    <p>Display Sport Details Like Match & Position etc.</p>

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

                <h4 class="mt-0 header-title">Sport Details</h4>
                <div class="form-group">



                </div>


                <div class="table-rep-plugin">

                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">


                                <thead>
                                    <tr>
                                        <th></th>
                                        <!-- <th>SNo.</th>
                                        <th>Code</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Time</th>
                                        <th>Match Type</th>
                                        <th>Declare</th>
                                        <th>Won By</th>
                                        <th>Plus Minus</th> -->


                                        <!-- <th></th> -->
                                        <th>SNo.</th>
                                        <th>Match Id</th>
                                        <th>Match Name</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Won By</th>
                                        <th>Status</th>
                                        <th>Team Market Max</th>
                                        <th>Session Max</th>


                                    </tr>
                                </thead>

                                <tbody>
                                @foreach ($matchtable as $matchdata)
                                    <tr>
                                        <th>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </button>

                                                <div class="dropdown-menu" class="btn btn-info btn-lg">
                                                    <a href="#"><button class="dropdown-item" type="button"><i class="fas fa-edit"></i> Match & Session Position</button></a>
                                                    <a href="sport-detail-report/{{ $matchdata->m_id }}"><button class="dropdown-item" type="button"><i class="fas fa-trash"></i> Match & Session Plus Minus</button></a>
                                                    <!-- <button class="dropdown-item" type="button"> <i class="fas fa-ban"></i> Match & Session Plus Minus</button> -->
                                                    <button class="dropdown-item" type="button"> <i class="fas fa-ban"></i> Display Match & Session Bets</button>
                                                    <button class="dropdown-item" type="button"> <i class="fas fa-ban"></i> Display Match Bets</button>
                                                    <button class="dropdown-item" type="button"> <i class="fas fa-ban"></i> Display Session Bets</button>

                                                </div>
                                            </div>

                                        </th>
                                        <td>{{ $matchdata->id }}</td>
                                        <td>{{ $matchdata->m_id }}</td>
                                        <td>{{ $matchdata->m_name }}</td>
                                        <td>{{ $matchdata->m_date }}</td>
                                        <td>{{ $matchdata->m_time }}</td>
                                        <td>{{ $matchdata->won_by }}</td>
                                        <td>{{ $matchdata->status }}</td>
                                        <td>{{ $matchdata->team_market_max }}</td>
                                        <td>{{ $matchdata->session_max }}</td>
                                    </tr>

                                    <tr>
                                    @endforeach
                                </tbody>
                            </table>

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