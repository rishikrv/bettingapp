@extends('layouts.master')
@section('content')
<body>
        <div class="content">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Modify Super Agent</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Master Details</a></li>
                                <li class="breadcrumb-item"><a href="agent.php">Agent Details</a></li>
                                <li class="breadcrumb-item"><a href="create-new-agent"> Modify Agent </a></li>
                                <li class="breadcrumb-item active">Back</li>
                            </ol>
                    </div>
                </div>
            </div>
<form action="/superagent-modify" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $data['id'] }}">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Master</label>
                                            <div class="col-sm-6">
                                            <select id="getid" name="master_name" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="{{ $data['master_name'] }}"> {{ $data['master_name'] }} </option>                                                   
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
                                                <input id="super_agent_code" name="super_agent_code" value="{{ $data['super_agent_code'] }}" type="text" class="form-control" readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>                       
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-lg-6 col-form-label">Name</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_name" name="super_agent_name" value="{{ $data['super_agent_name'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                               </div>    
                            </div>  

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="reference" class="col-lg-6 col-form-label">Reference</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_reference" name="super_agent_reference" value="{{ $data['super_agent_reference'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>   
                            </div>                   
                                              
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="contact" class="col-lg-6 col-form-label">Contact No.</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_contact_num" name="super_agent_contact_num" value="{{ $data['super_agent_contact_num'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                            </div>                       
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="password" class="col-lg-6 col-form-label">Password</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_password" name="super_agent_password" value="{{ $data['super_agent_password'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                            </div>                    
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Auto Limit</label>
                                            <div class="col-sm-6">
                                                <select name="super_agent_auto_limit" value="{{ $data['super_agent_auto_limit'] }}" class="form-control">
                                                    <option value="Yes" >Yes</option>
                                                    <option value="No" >No</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>       
                            </div>                          
                                                    
                                                   
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Flat Share</label>
                                            <div class="col-sm-6">
                                                <select  name="super_agent_flate_share" value="{{ $data['super_agent_flate_share'] }}" class="form-control">
                                                    <option value="Yes" >Yes</option>
                                                    <option value="No" >No</option>
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
                                                <select name="super_agent_status" value="{{ $data['super_agent_status'] }}" class="form-control">
                                                    <option value="Active" >Active</option>
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
                                    <h5>Super Agent Share On Agent</h5>
                                        <div class="form-group row">
                                            <label for="share3" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="super_agent_share" name="super_agent_share" value="{{ $data['super_agent_share'] }}" type="text" class="form-control" >
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>My Share</h5>
                                        <div class="form-group row">
                                            <label for="share2" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="master_share"name="master_share" value="{{ $data['master_share'] }}" type="text" class="form-control" readonly>
                                                </div>
                                        </div>
                                </div>
                            </div>
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Super Agent Mobile Share</h5>
                                        <div class="form-group row">
                                            <label for="share3" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="super_agent_mob_share" name="super_agent_mob_share" value="{{ $data['super_agent_mob_share'] }}" type="text" class="form-control" >
                                                </div>
                                        </div>
                                </div>

                                <div class="col-md-6">
                                    <h5>My Mobile Share</h5>
                                        <div class="form-group row">
                                            <label for="share4" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="share4" name="master_mob_share" value="{{ $data['master_mob_share'] }}" type="text" class="form-control" readonly>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                                    <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Super Agent Commission</h5>
                                                        <div class="form-group row">
                                                            <label for="Commission_Type" class="col-lg-3 col-form-label">Session Commission Type</label>
                                                                <div class="col-lg-5">
                                                                    <select id="super_agent_com_type" name="super_agent_com_type" value="{{ $data['super_agent_com_type'] }}" class="form-control">
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
                                                                    <select id="master_com_type" name="master_com_type" value="{{ $data['master_com_type'] }}" class="form-control">
                                                                        <option value="">--Please Select--</option>
                                                                        <option value="No Commission">No Commission</option>
                                                                        <option value="Only On Minus">Only On Minus</option>
                                                                        <option value="Bet By Bet">Bet By Bet</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                </div>
                                            </div>

                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                  
                                </div>
                                <div class="col-md-6">
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="match_Commission" class="col-lg-6 col-form-label">Match Commisssion</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_match_com" name="super_agent_match_com" value="{{ $data['super_agent_match_com'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>                        

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="match_Commission" class="col-lg-6 col-form-label">Match Commission</label>
                                            <div class="col-lg-6">
                                                <input id="master_match_com" name="master_match_com" value="{{ $data['master_match_com'] }}" type="text" class="form-control"  readonly>
                                            </div>
                                    </div>
                                </div>                   
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="session_Commission" class="col-lg-6 col-form-label">Session Commision</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_sess_com" name="super_agent_sess_com" value="{{ $data['super_agent_sess_com'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="session_Commission" class="col-lg-6 col-form-label">Session Commission</label>
                                            <div class="col-lg-6">
                                                <input id="master_sess_com" name="master_sess_com" value="{{ $data['master_sess_com'] }}" type="text" class="form-control" readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <h5> Super Agent Commission & Share On Agent</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="share5" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="share5" name="share5" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="share4" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="share4" name="share4" type="text" class="form-control" readonly> 
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
                                                <input id="match_Commission" name="match_Commission" type="text" class="form-control"  readonly>
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
                                                <input id="session_Commission" name="session_Commission" type="text" class="form-control"  readonly>
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
                                                <input id="Mobile_Share1" name="Mobile_Share1" type="text" class="form-control"  readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                            <div class="form-group">
                                <div>
                                    <button type="save" class="btn btn-primary waves-effect waves-light">
                                        Save
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

