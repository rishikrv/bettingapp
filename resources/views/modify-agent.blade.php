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
    <form action="modify-agent" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $d['id'] }}">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Super Agent</label>
                                            <div class="col-sm-6">
                                                <select id="getid" name="super_agent_name" class="form-control">
                                                <option value="" >Select</option>
                                                <option id="id" value="{{ $d['super_agent_id'] }}"  > {{ $d['super_agent_id'] }} </option>
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
                                                <input id="code" name="agent_code" value="{{ $d['agent_code'] }}" type="text"  placeholder="A129" class="form-control" readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>                       
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name" class="col-lg-6 col-form-label">Name</label>
                                            <div class="col-lg-6">
                                                <input id="name" name="agent_name" value="{{ $d['agent_name'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                               </div>    
                            </div>  

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="reference" class="col-lg-6 col-form-label">Reference</label>
                                            <div class="col-lg-6">
                                                <input id="reference" name="agent_reference" value="{{ $d['agent_reference'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>   
                            </div>                   
                                              
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="contact" class="col-lg-6 col-form-label">Contact No.</label>
                                            <div class="col-lg-6">
                                                <input id="contact" name="agent_contact_num" value="{{ $d['agent_contact_num'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                            </div>                       
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="password" class="col-lg-6 col-form-label">Password</label>
                                            <div class="col-lg-6">
                                                <input id="password" name="agent_password" value="{{ $d['agent_password'] }}" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                            </div>                    
                                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label">Auto Limit</label>
                                            <div class="col-sm-6">
                                                <select name="agent_auto_limit" value="{{ $d['agent_auto_limit'] }}" class="form-control">
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
                                                <select name="agent_flate_share" value="{{ $d['agent_flate_share'] }}" class="form-control">
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
                                                <select name="agent_status" value="{{ $d['agent_status'] }}" class="form-control">
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
                                    <h5>Agent Share On Client</h5>
                                    <div class="form-group row">
                                            <label for="share3" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="share3" name="agent_share" value="{{ $d['agent_share'] }}" type="text" class="form-control" >
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>My Share</h5>
                                        <div class="form-group row">
                                            <label for="share2" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="super_agent_share" name="super_agent_share" type="text" class="form-control" readonly>
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
                                                    <input id="share3" name="agent_mob_share" value="{{ $d['agent_mob_share'] }}" type="text" class="form-control" >
                                                </div>
                                        </div>
                                </div>

                                <div class="col-md-6">
                                    <h5>My Mobile Share</h5>
                                        <div class="form-group row">
                                            <label for="share4" class="col-lg-6 col-form-label">Share %</label>
                                                <div class="col-lg-6">
                                                    <input id="super_agent_mob_share" name="super_agent_mob_share"  type="text" class="form-control" readonly>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Agent Commission</h5>
                                                        <div class="form-group row">
                                                            <label for="Commission_Type" class="col-lg-3 col-form-label">Session Commission Type</label>
                                                                <div class="col-lg-5">
                                                                    <select id="Commission_Type" name="agent_com_type" value="{{ $d['agent_com_type'] }}" class="form-control">
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
                                                                    <input id="super_agent_com_type" name="super_agent_com_type" class="form-control" readonly>
                                                                        
                                                                </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="match_Commission" class="col-lg-3 col-form-label">Match Commisssion</label>
                                                            <div class="col-lg-5">
                                                                <input id="match_Commission" name="agent_match_com" value="{{ $d['agent_match_com'] }}" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="match_Commission" class="col-lg-3 col-form-label">Match Commission</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_agent_match_com" name="super_agent_match_com"  type="text" class="form-control" readonly>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="session_Commission" class="col-lg-3 col-form-label">Session Commision</label>
                                                            <div class="col-lg-5">
                                                                <input id="session_Commission" name="agent_sess_com" value="{{ $d['agent_sess_com'] }}" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="session_Commission" class="col-lg-3 col-form-label">Session Commission</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_agent_sess_com" name="super_agent_sess_com" type="text" class="form-control" readonly>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>                            
                                    <h5> Super Agent Commission & Share On Agent</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="super_agent_share" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_share" name="super_agent_share"  type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="super_agent_share" class="col-lg-6 col-form-label">Share %</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_share" name="super_agent_share" type="text" class="form-control" readonly> 
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="super_agent_match_com" class="col-lg-6 col-form-label">Match Commisssion</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_match_com" name="super_agent_match_com" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="super_agent_match_com" class="col-lg-6 col-form-label">Match Commission</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_match_com" name="super_agent_match_com" type="text" class="form-control" placeholder="2.00" readonly>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="super_agent_sess_com" class="col-lg-6 col-form-label">Session Commision</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_sess_com" name="super_agent_sess_com" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="super_agent_sess_com" class="col-lg-6 col-form-label">Session Commission</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_sess_com" name="super_agent_sess_com" type="text" class="form-control" placeholder="3.00" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="super_agent_mob_share" class="col-lg-6 col-form-label">Mobile Share %</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_mob_share" name="super_agent_mob_share" type="text" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="super_agent_mob_share1" class="col-lg-6 col-form-label">Mobile Share%</label>
                                            <div class="col-lg-6">
                                                <input id="super_agent_mob_share" name="super_agent_mob_share" type="text" class="form-control" placeholder="100.00" readonly>
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

    <script
            src=//code.jquery.com/jquery-3.5.1.min.js
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin=anonymous>
        </script>

    <script type=text/javascript>
        
        alert("hello1");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $(document).ready(function(){
            $("#getid").change(function(){              
                var agentId =   $('#getid').val();            
                 if(agentId > 0)
                {
                     fetchRecords(agentId);
                }
            
            });
        });
      function fetchRecords(id)
      {
        alert(id);
                $.ajax({
                url:'modify-agent/'+id,
                type:'get',
                dataType:'json',
                success: function (data)
                {
                    // var_dump(data);
                   console.log(data[0].super_agent_share);
                    $("#super_agent_share").val(data[0].super_agent_share);
                    $("#super_agent_mob_share").val(data[0].super_agent_mob_share);
                    $("#super_agent_com_type").val(data[0].super_agent_com_type);
                    $("#super_agent_match_com").val(data[0].super_agent_match_com);
                    $("#super_agent_sess_com").val(data[0].super_agent_sess_com);   
                }
          });       
      }
      </script>         
  </body>                                     
@endsection

