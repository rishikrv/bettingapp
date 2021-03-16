@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Add Match</h4>
    <p>Add Update upcomming Match & data.</p>

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
                    <a href="#" class="waves-effect">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="ion ion-md-add"></span> Add Match Session</button></a>
                    <a href="#" class="waves-effect">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg1"><span class="ion ion-md-add"></span> Add Match</button></a>
                </div>
                

                <!--  Modal content for the above example -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">


                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Session</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">

                                <form action="match-betting-add" method="POST">

                                    <div class="form-group row">
                                        <label for="m_id" class="col-sm-2 col-form-label">Match Id</label>
                                        <div class="col-sm-10">
                                            <input id="m_id" name="m_id" value="{{$mid}}" type="text" class="form-control" readonly>

                                        </div>
                                    </div>





                                    <div class="form-group row">
                                        <label for="session_name" class="col-sm-2 col-form-label">Session Name</label>
                                        <div class="col-sm-10">
                                            <input id="session_name" name="session_name" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="not_run" class="col-sm-2 col-form-label">Not Run</label>
                                        <div class="col-sm-10">
                                            <input id="not_run" name="not_run" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="not_rate" class="col-sm-2 col-form-label">Not Rate</label>
                                        <div class="col-sm-10">
                                            <input id="not_rate" name="not_rate" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="yes_run" class="col-sm-2 col-form-label">Yes Run</label>
                                        <div class="col-sm-10">
                                            <input id="yes_run" name="yes_run" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="yes_rate" class="col-sm-2 col-form-label">Yes Rate</label>
                                        <div class="col-sm-10">
                                            <input id="yes_rate" name="yes_rate" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                        <label for="d_decl" class="col-sm-2 col-form-label">Decl</label>
                                        <div class="col-sm-10">
                                            <input id="d_decl" name="d_decl" type="text" class="form-control">

                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>

                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Modal for add match -->
                <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">


                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Match</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">

                                <form action="match-add" method="POST">

                                    <div class="form-group row">
                                        <label for="m_id" class="col-sm-2 col-form-label">Match Id</label>
                                        <div class="col-sm-10">
                                            <input id="m_id" name="m_id" value="{{$mid}}" type="text" class="form-control" readonly>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="team_name" class="col-sm-2 col-form-label">Team Name</label>
                                        <div class="col-sm-10">
                                            <input id="team1" name="team1" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="team1_lagai" class="col-sm-2 col-form-label">Lagai</label>
                                        <div class="col-sm-10">
                                            <input id="team1_lagai" name="team1_lagai" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="team1_khai" class="col-sm-2 col-form-label">Khai</label>
                                        <div class="col-sm-10">
                                            <input id="team1_khai" name="team1_khai" type="text" class="form-control">

                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="team2_name" class="col-sm-2 col-form-label">Team2 Name</label>
                                        <div class="col-sm-10">
                                            <input id="team2" name="team2" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="team2_lagai" class="col-sm-2 col-form-label">Team2 Lagai</label>
                                        <div class="col-sm-10">
                                            <input id="team2_lagai" name="team2_lagai" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="team2_khai" class="col-sm-2 col-form-label">Team2 Khai</label>
                                        <div class="col-sm-10">
                                            <input id="team2_khai" name="team2_khai" type="text" class="form-control">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="d_decl" class="col-sm-2 col-form-label">Decl</label>
                                        <div class="col-sm-10">
                                            <input id="d_decl" name="d_decl" type="text" class="form-control">

                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>

                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!-- End Modal for Add Match -->

                <div class="table-rep-plugin">

                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                        <caption>Session Details</caption>
                            <table id="editable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Session Name</th>
                                        <th>Not Run</th>
                                        <th>Not Rate</th>
                                        <th>Yes Run</th>
                                        <th>Yes Rate</th>
                                        <th>Match Lock Status (Yes/No)</th>
                                        <th>Status (0/1)</th>
                                        <th>Decl</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matchtable as $matchdata)
                                    <tr>
                                    <td>{{ $matchdata->id }}</td>

                                        <td>{{ $matchdata->	SessionName }}</td>
                                        <td>{{ $matchdata->NRun }}</td>
                                        <td>{{ $matchdata->NRate }}</td>
                                        <td>{{ $matchdata->YRun }}</td>
                                        <td>{{ $matchdata->YRate }}</td>
                                        <td>{{ $matchdata->SessionLockStatus }}</td>
                                        <td>{{ $matchdata->Status }}</td>
                                        <td>{{ $matchdata->decl }}</td>
                                       
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>

                </div>

                <!-- Table For Match Listing -->
                <div class="table-rep-plugin">

                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                        <caption>Match Details</caption>
                            <table id="matches" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Team Name</th>
                                        <th>Lagai</th>
                                        <th>Khai</th>
                                        <th>Match Lock Status (Yes/No)</th>
                                        <th>Status (0/1)</th>
                                        <th>Decl</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($match as $match)
                                    <tr>
                                    <td>{{ $match->id }}</td>

                                        <td>{{ $match->FavTeam }}</td>
                                        <td>{{ $match->LRate }}</td>
                                        <td>{{ $match->KRate }}</td>
                                        <td>{{ $match->MatchLockStatus }}</td>
                                        <td>{{ $match->StatusM }}</td>
                                        <td>{{ $match->decl }}</td>

                                      
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
<script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   
   
// for session 
  $('#editable').Tabledit({
    url:'{{ route("tabledit.actionsession") }}',
    dataType:"json",
    columns:{
      identifier:[0, 'id'],
      editable:[ [2, 'not_run'], [3, 'not_rate'],[4, 'yes_run'],[5, 'yes_rate'] ,[6,'MatchLockStatus'],[7,'Status'],[8,'decl']],
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
    {
      if(data.action == 'delete')
      {
        $('#'+data.id).remove();
      }
    }
    },
  });
//   for match
$('#matches').Tabledit({
    url:'{{ route("tabledit.actionmatch") }}',
    dataType:"json",
    columns:{
      identifier:[0, 'id'],
      editable:[[1, 'team1'], [2, 'team1_lagai'], [3, 'team1_khai'],[4, 'team2'],[5, 'team2_lagai'] ,[6,'team2_khai'],[7,'decl']],
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
    {
      if(data.action == 'delete')
      {
        $('#'+data.id).remove();
      }
    }
    },
  });
 

});  
</script>
@endsection