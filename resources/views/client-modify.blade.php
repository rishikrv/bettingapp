@extends('layouts.master')
@section('content')

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Modify Client</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master Details</a></li>
                        <li class="breadcrumb-item"><a href="agent.php">Agent Details</a></li>
                        <li class="breadcrumb-item"><a href="create-new-agent"> Modify Agent </a></li>
                        <li class="breadcrumb-item active">Back</li>
                    </ol>
                </div>
            </div>
        </div>
        <form action="/client-mod/new" method="POST">

            @csrf
            @foreach($dataCl as $data)
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <fieldset>

                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input id="getdata" name="agent_id" class="form-control" value="{{ $data->agent_id }}" type="text" readonly hidden>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Agent</label>
                                            <div class="col-sm-6">
                                                <input id="getdata" name="agent_name" class="form-control" value="{{ $data->agent_name }}" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="code" class="col-lg-6 scol-form-label">Code</label>
                                            <div class="col-lg-6">
                                                <input id="client_code" name="client_code" value="{{ $data->client_code }}" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-lg-6 col-form-label">Name</label>
                                            <div class="col-lg-6">
                                                <input id="client_name" name="client_name" value="{{ $data->client_name }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="reference" class="col-lg-6 col-form-label">Reference</label>
                                            <div class="col-lg-6">
                                                <input id="reference" name="reference" value="{{ $data->reference }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="contact" class="col-lg-6 col-form-label">Contact No.</label>
                                            <div class="col-lg-6">
                                                <input id="client_contact_num" name="client_contact_num" value="{{ $data->client_contact_num }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="password" class="col-lg-6 col-form-label">Password</label>
                                            <div class="col-lg-6">
                                                <input id="password" name="password" value="{{ $data->password }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Auto Limit</label>
                                            <div class="col-sm-6">
                                                <select name="client_auto_limit" value="{{ $data->client_auto_limit }}" class="form-control">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Flate Share</label>
                                            <div class="col-sm-6">
                                                <select name="client_flate_share" value="{{ $data->client_flate_share }}" class="form-control">
                                                    <option value="Active">Yes</option>
                                                    <option value="Inactive">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Status</label>
                                            <div class="col-sm-6">
                                                <select name="client_status" value="{{ $data->client_status }}" class="form-control">
                                                    <option value="Active">Active</option>
                                                    <option value="inactive">InActive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Client Share On Client</h5>
                                        <div class="form-group row">
                                            <label for="share3" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="client_share" name="client_share" value="{{ $data->client_share }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>My Share</h5>
                                        <div class="form-group row">
                                            <label for="share2" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="agent_share" name="agent_share" value="{{ $data->agent_share }}" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Agent Mobile Share</h5>
                                        <div class="form-group row">
                                            <label for="share3" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="client_mob_share" name="client_mob_share" value="{{ $data->client_mob_share }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h5>My Mobile Share</h5>
                                        <div class="form-group row">
                                            <label for="share4" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="agent_mob_share" name="agent_mob_share" value="{{ $data->agent_mob_share }}" type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Client Commission</h5>
                                        <div class="form-group row">
                                            <label for="Commission_Type" class="col-lg-3 col-form-label">Session Commission Type</label>
                                            <div class="col-lg-5">
                                                <select id="Commission_Type" name="client_com_type" value="{{ $data->client_com_type }}" class="form-control">
                                                    <option value="">--Please Select--</option>
                                                    <option value="No Commission">No Commission</option>
                                                    <option value="Only On Minus">Only On Minus</option>
                                                    <option value="Bet By Bet">Bet By Bet</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>My Commission</h5>
                                        <div class="form-group row">
                                            <label for="Commission_Type" class="col-lg-3 col-form-label">Session Commission Type</label>
                                            <div class="col-lg-5">
                                                <input id="Commission_Type" name="agent_com_type" value="{{ $data->agent_com_type }}" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="match_Commission" class="col-lg-3 col-form-label">Match Commisssion</label>
                                            <div class="col-lg-5">
                                                <input id="match_Commission" name="client_match_com" value="{{ $data->client_match_com }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="match_Commission" class="col-lg-3 col-form-label">Match Commission</label>
                                            <div class="col-lg-5">
                                                <input id="agent_match_com" name="agent_match_com" value="{{ $data->agent_match_com }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="session_Commission" class="col-lg-3 col-form-label">Session Commision</label>
                                            <div class="col-lg-5">
                                                <input id="session_Commission" name="client_sess_com" value="{{ $data->client_sess_com }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="session_Commission" class="col-lg-3 col-form-label">Session Commission</label>
                                            <div class="col-lg-5">
                                                <input id="agent_sess_com" name="agent_sess_com" value="{{ $data->agent_sess_com }}" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <h5> Super Agent Commission & Share On Agent</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="share5" class="col-lg-6 col-form-label">Share %</label>
                                        <div class="col-lg-6">
                                            <input id="agent_share" name="agent_share" class="form-control" value="{{ $data->agent_share }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="share4" class="col-lg-6 col-form-label">Share %</label>
                                        <div class="col-lg-6">
                                            <input id="agent_share" name="agent_share" value="{{ $data->agent_share }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="match_Commission" class="col-lg-6 col-form-label">Match Commisssion</label>
                                        <div class="col-lg-6">
                                            <input id="agent_match_com" name="agent_match_com" value="{{ $data->agent_match_com }}" type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="match_Commission" class="col-lg-6 col-form-label">Match Commission</label>
                                        <div class="col-lg-6">
                                            <input id="agent_match_com" name="agent_match_com" value="{{ $data->agent_match_com }}" type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="session_Commission" class="col-lg-6 col-form-label">Session Commision</label>
                                        <div class="col-lg-6">
                                            <input id="agent_sess_com" name="agent_sess_com" value="{{ $data->agent_sess_com }}" type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="session_Commission" class="col-lg-6 col-form-label">Session Commission</label>
                                        <div class="col-lg-6">
                                            <input id="agent_sess_com" name="agent_sess_com" value="{{ $data->agent_sess_com }}" type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="Mobile_Share" class="col-lg-6 col-form-label">Mobile Share %</label>
                                        <div class="col-lg-6">
                                            <input id="client_mob_share" name="client_mob_share" value="{{ $data->client_mob_share }}" type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="Mobile_Share1" class="col-lg-6 col-form-label">Mobile Share%</label>
                                        <div class="col-lg-6">
                                            <input id="client_mob_share" name="client_mob_share" value="{{ $data->client_mob_share }}" type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                            <div class="form-group">
                                <div>
                                    <button type="save" class="btn btn-primary waves-effect waves-light">
                                        Update
                                    </button>

                                    <button type="cancel" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </form>
</body>
@endsection