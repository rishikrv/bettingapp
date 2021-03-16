@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Create New Agent</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Matches Detail</a></li>
        <li class="breadcrumb-item"><a href="agent.php">Add Matches Detail</a></li>
        <li class="agent-detail">Back</li>
    </ol>
</div>
@endsection

@section('content')

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                </div>
            </div>

            <form action="add-m-data" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Add Match</h4>
                                <fieldset>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="m_name" class="col-lg-3 col-form-label">Match Name</label>
                                                <div class="col-lg-5">
                                                    <input id="m_name" name="m_name" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="m_date" class="col-lg-3 col-form-label">Date</label>
                                                <div class="col-lg-5">
                                                    <input id="m_date" name="m_date" type="date" class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="m_time" class="col-lg-3 col-form-label">Time</label>
                                                <div class="col-lg-5">
                                                    <input id="m_time" name="m_time" type="time" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="m_id" class="col-lg-3 col-form-label">Match Id</label>
                                                <div class="col-lg-5">
                                                    <input id="m_id" name="m_id" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="team_max" class="col-lg-3 col-form-label">Team Market Max</label>
                                                <div class="col-lg-5">
                                                    <input id="team_max" name="team_max" type="number" value= "100000"  class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="session_max" class="col-lg-3 col-form-label">Session Max</label>
                                                <div class="col-lg-5">
                                                    <input id="session_max" name="session_max" type="number" value= "50000" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </fieldset>


                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src=//code.jquery.com/jquery-3.5.1.min.js integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=anonymous>
    </script>


</body>
@endsection