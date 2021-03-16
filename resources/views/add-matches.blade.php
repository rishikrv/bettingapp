@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Add Match</h4>
    <p>Add Udate upcomming Match & data.</p>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Matches Detail</a></li>
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
                        <a href="add-matches-data" class="waves-effect">
                        <button class="btn btn-xs btn-primary"><span class="ion ion-md-add"></span> Add Match</button></a>                        
                    </div>
                <div class="table-rep-plugin">

                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>SNo.</th>
                                        <th>Match Name</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Won By</th>
                                        <th>Status</th>
                                        <th>Match Id</th>
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
                                                <a href="/match-betting/{{ $matchdata->m_id }}"><button class="dropdown-item" type="button"><i class="fas fa-edit"></i> Add match betting</button></a>
                                                    <a href="#"><button class="dropdown-item" type="button"><i class="fas fa-edit"></i> Edit match detail</button></a>
                                                    <button class="dropdown-item" type="button"> <i class="fas fa-ban"></i> Delete match</button>

                                                </div>
                                            </div>

                                        </th>
                                        <td>{{ $matchdata->id }}</td>
                                        <td>{{ $matchdata->m_name }}</td>
                                        <td>{{ $matchdata->m_date }}</td>
                                        <td>{{ $matchdata->m_time }}</td>
                                        <td>{{ $matchdata->won_by }}</td>
                                        <td>{{ $matchdata->status }}</td>
                                        <td>{{ $matchdata->m_id }}</td>
                                        <td>{{ $matchdata->team_market_max }}</td>
                                        <td>{{ $matchdata->session_max }}</td>


                                    </tr>
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