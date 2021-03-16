@extends('layouts.master')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}" />
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Create New Super Master</h4>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);"> Super Master Details</a></li>
        <li class="breadcrumb-item"><a href="agent.php"> Super Master Details</a></li>
        <li class="breadcrumb-item"><a href="create-new-agent"> Create New  Super Master </a></li>
        <li class="breadcrumb-item active">Back</li>
    </ol>

</div>
@endsection

@section('content')

<body>

    <!-- Begin page -->



    <!-- end row -->



    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <form action="supermaster-create" method="POST">

                <div class="card-body">
                    <h4 class="mt-0 header-title">Create New Super Master</h4>

                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Admin</label>
                                    <div class="col-sm-5">
                                        <select name="admin_id" class="form-control">
                                            <option>Select</option>
                                            <option>Admin</option>
                                            
                                        </select>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="code" class="col-lg-3 col-form-label">Code</label>
                                    <div class="col-lg-5">
                                        <input id="code" name="super_master_code" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3 col-form-label">Name</label>
                                    <div class="col-lg-5">
                                        <input id="super_master_name" name="super_master_name" type="super_master_name" class="form-control">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="reference" class="col-lg-3 col-form-label">Reference</label>
                                    <div class="col-lg-5">
                                        <input id="super_master_reference" name="super_master_reference" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="current_Limit" class="col-lg-3 col-form-label">Current limit</label>
                                    <div class="col-lg-5">
                                        <input id="current_Limit" name="super_master_curr_limit" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>


       
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="contact" class="col-lg-3 col-form-label">Contact No.</label>
                                    <div class="col-lg-5">
                                        <input id="super_master_contact_num" name="super_master_contact_num" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="password" class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-5">
                                        <input id="password" name="super_master_password" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Super Master Share</h5>

                                <div class="form-group row">

                                    <label for="share2" class="col-lg-3 col-form-label">Share %</label>
                                    <div class="col-lg-5">
                                        <input id="share2" name="super_master_share" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                          

                        </div>

                    </fieldset>

                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Super Master Mobile Share</h5>

                                <div class="form-group row">

                                    <label for="share2" class="col-lg-3 col-form-label">Share %</label>
                                    <div class="col-lg-5">
                                        <input id="super_master_mob_share" name="super_master_mob_share" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                          

                        </div>

                    </fieldset>

                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Super Master Commission</h5>

                                <div class="form-group row">
                                    <label for="session_Commission_Type" class="col-lg-3 col-form-label">Session Commission Type</label>
                                    <div class="col-lg-5">
                                        <select id="super_master_com_type" name="super_master_com_type" class="form-control">
                                            <option value="">--Please Select--</option>
                                            <option value="No Commission">No Commission</option>
                                            <option value="Only On Minus">Only On Minus</option>
                                            <option value="Bet By Bet">Bet By Bet</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="match_Commission" class="col-lg-3 col-form-label">Match Commisssion</label>
                                    <div class="col-lg-5">
                                        <input id="match_Commission" name="super_master_match_com" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="session_Commission" class="col-lg-3 col-form-label">Session Commision</label>
                                    <div class="col-lg-5">
                                        <input id="session_Commission" name="super_master_sess_com" type="text" class="form-control">
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
                </form>
            </div>
        </div>
    </div>
 
    <!-- end row -->


</body>
@endsection