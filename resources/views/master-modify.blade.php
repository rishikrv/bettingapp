@extends('layouts.master')
@section('content')
<body>
        <div class="content">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Modify Agent</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Master Details</a></li>
                                <li class="breadcrumb-item"><a href="agent.php">Agent Details</a></li>
                                <li class="breadcrumb-item"><a href="create-new-agent"> Modify Agent </a></li>
                                <li class="breadcrumb-item active">Back</li>
                            </ol>
                    </div>
                </div>
            </div>
    <form action="/master-modify" method="POST">
    @csrf
    <input type="hidden" name="master_id" value="{{ $data['master_id'] }}">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Super Master</label>
                                            <div class="col-sm-6">
                                                <select name="super_master_name" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="{{ $data['super_master_name'] }}"> {{ $data['super_master_name'] }} </option>
                                                   
                                                </select>
                                            </div>
                                    </div>
                                </div>
                            </div>                       
                                          
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="code" class="col-lg-6 scol-form-label">Code</label>
                                            <div class="col-lg-6">
                                                <input id="master_code" name="master_code" value="{{ $data['master_code'] }}" type="text"  class="form-control" readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>                       
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-lg-6 col-form-label">Name</label>
                                            <div class="col-lg-6">
                                                <input id="master_name" name="master_name" value="{{ $data['master_name'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                               </div>    
                            </div>  

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="reference" class="col-lg-6 col-form-label">Reference</label>
                                            <div class="col-lg-6">
                                                <input id="master_reference" name="master_reference" value="{{ $data['master_reference'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>   
                            </div>                   
                                              
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="contact" class="col-lg-6 col-form-label">Contact No.</label>
                                            <div class="col-lg-6">
                                                <input id="master_contact" name="master_contact_num" value="{{ $data['master_contact_num'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                            </div>                       
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="password" class="col-lg-6 col-form-label">Password</label>
                                            <div class="col-lg-6">
                                                <input id="master_password" name="master_password" value="{{ $data['master_password'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                            </div>                    
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Auto Limit</label>
                                            <div class="col-sm-6">
                                                <select name="master_auto_limit" value="{{ $data['master_auto_limit'] }}" class="form-control">
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
                                                <select name="master_flate_share" value="{{ $data['master_flate_share'] }}" class="form-control">
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
                                                <select name="master_status" value="{{ $data['master_status'] }}" class="form-control">
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">InActive</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>       
                            </div>                          
                                                                          

                        </fieldset>
                        
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Master Share On Client</h5>
                                    <div class="form-group row">
                                            <label for="share3" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="master_share" name="master_share" value="{{ $data['master_share'] }}" type="text" class="form-control" >
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>My Share</h5>
                                        <div class="form-group row">
                                            <label for="share2" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="super_master_share" name="super_master_share" value="{{ $data['super_master_share'] }}" type="text" class="form-control" placeholder="30.00" readonly>
                                                </div>
                                        </div>
                                </div>
                            </div>
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Master Mobile Share</h5>
                                        <div class="form-group row">
                                            <label for="share3" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="master_mob_share" name="master_mob_share" value="{{ $data['master_mob_share'] }}" type="text" class="form-control" >
                                                </div>
                                        </div>
                                </div>

                                <div class="col-md-6">
                                    <h5>My Mobile Share</h5>
                                        <div class="form-group row">
                                            <label for="share4" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="super_master_mob_share" name="super_master_mob_share"  value="{{ $data['super_master_mob_share'] }}" type="text" class="form-control" placeholder="100.00" readonly>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Master Commission</h5>
                                                        <div class="form-group row">
                                                            <label for="Commission_Type" class="col-lg-3 col-form-label">Session Commission Type</label>
                                                                <div class="col-lg-5">
                                                                    <select id="master_com_type" name="master_com_type" value="{{ $data['master_com_type'] }}" class="form-control">
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
                                                                    <select id="super_master_com_type" name="super_master_com_type" value="{{ $data['super_master_com_type'] }}" class="form-control">
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
                                                                <input id="master_match_com" name="master_match_com" value="{{ $data['master_match_com'] }}" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="match_Commission" class="col-lg-3 col-form-label">Match Commission</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_master_match_com" name="super_master_match_com" value="{{ $data['super_master_match_com'] }}" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="session_Commission" class="col-lg-3 col-form-label">Session Commision</label>
                                                            <div class="col-lg-5">
                                                                <input id="master_sess_com" name="master_sess_com" value="{{ $data['master_sess_com'] }}" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="session_Commission" class="col-lg-3 col-form-label">Session Commission</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_master_sess_com" name="super_master_sess_com" value="{{ $data['super_master_sess_com'] }}" type="text" class="form-control">
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
                                                <input id="share5" name="share5"  type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="share4" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="share4" name="share4" type="text" class="form-control" placeholder="30.00" readonly> 
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="match_Commission" class="col-lg-6 col-form-label">Match Commisssion</label>
                                            <div class="col-lg-6">
                                                <input id="match_Commission" name="match_Commission" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="match_Commission" class="col-lg-6 col-form-label">Match Commission</label>
                                            <div class="col-lg-6">
                                                <input id="match_Commission" name="match_Commission" type="text" class="form-control" placeholder="2.00" readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="session_Commission" class="col-lg-6 col-form-label">Session Commision</label>
                                            <div class="col-lg-6">
                                                <input id="session_Commission" name="session_Commission" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="session_Commission" class="col-lg-6 col-form-label">Session Commission</label>
                                            <div class="col-lg-6">
                                                <input id="session_Commission" name="session_Commission" type="text" class="form-control" placeholder="3.00" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="Mobile_Share" class="col-lg-6 col-form-label">Mobile Share %</label>
                                            <div class="col-lg-6">
                                                <input id="Mobile_Share" name="Mobile_Share" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="Mobile_Share1" class="col-lg-6 col-form-label">Mobile Share%</label>
                                            <div class="col-lg-6">
                                                <input id="Mobile_Share1" name="Mobile_Share1" type="text" class="form-control" placeholder="100.00" readonly>
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
    </form>                  
  </body>                                     
@endsection

