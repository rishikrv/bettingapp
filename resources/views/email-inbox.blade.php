@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h4 class="page-title">Create  New Agent</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Master Details</a></li>
                                            <li class="breadcrumb-item"><a href="agent.php">Super Agent Details</a></li>
                                            <li class="breadcrumb-item"><a href="create-new-agent"> Create New Agent </a></li>
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
               
        <form action="email-inbox" method="POST">
         @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Create New Agent</h4>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Super Agent</label>
                                                        <div class="col-sm-5">
                                                        <select id="getid" name="super_agent_id" value="super_agent_id" class="form-control">
                                                            <option value="" >Select</option>
                                                                @foreach($sAgName as $Sag)
                                                                    <option id="id" value="{{ $Sag->id }}">
                                                                            {{ $Sag->super_agent_name }} 
                                                                    </option>
                                                                @endforeach
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
                                                                <input id="code" name="agent_code" type="text" class="form-control" readonly>
                                                            </div>
                                                    </div>
                                                </div>   
                                            </div>
                                               
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="name" class="col-lg-3 col-form-label">Name</label>
                                                            <div class="col-lg-5">
                                                                <input id="name" name="agent_name" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                                <h5>My Limit</h5>       
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="reference" class="col-lg-3 col-form-label">Reference</label>
                                                            <div class="col-lg-5">
                                                                <input id="reference" name="agent_reference" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>   
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="current_Limit" class="col-lg-3 col-form-label">Current limit</label>
                                                            <div class="col-lg-5">
                                                                <input id="agent_current_Limit" name="agent_curr_limit" type="number" class="form-control" min="1" max="10000000"/>
                                                            </div>
                                                    </div>
                                                </div>
                                            <!-- </div>
                                            <div class="row"> -->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="rem_Limit" class="col-lg-3 col-form-label">Rem Limit</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_agent_rem_limit" name="super_agent_curr_limit" type="number" class="form-control" readonly>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="contact" class="col-lg-3 col-form-label">Contact No.</label>
                                                            <div class="col-lg-5">
                                                                <input id="contact" name="agent_contact_num" type="number" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="password" class="col-lg-3 col-form-label">Password</label>
                                                            <div class="col-lg-5">
                                                                <input id="password" name="agent_password" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>        
                                        </fieldset>
                                            
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Agent Share</h5>
                                                        <div class="form-group row">
                                                            <label for="share2" class="col-lg-3 col-form-label">Share %</label>
                                                                <div class="col-lg-5">
                                                                    <input id="agent_share" name="agent_share"  type="number" class="form-control" min="1" max="50" />
                                                                    
                                                                </div>
                                                        </div>
                                                </div>
                                            <!-- </div>

                                            <div class="row"> -->
                                                <div class="col-md-6">
                                                    <h5>My Share</h5>
                                                        <div class="form-group row">
                                                            <label for="share2" class="col-lg-3 col-form-label">Share %</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_agent_share" name="super_agent_share" type="number" class="form-control" readonly/>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>                                                       
                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Agent Mobile Share</h5>
                                                        <div class="form-group row">
                                                            <label for="share2" class="col-lg-3 col-form-label">Mobile Share %</label>
                                                                <div class="col-lg-5">
                                                                    <input id="agent_mob_share" name="agent_mob_share" type="number" class="form-control" min="0" max="50"/>
                                                                </div>
                                                        </div>
                                                </div>
                                            <!-- </div>
                                            <div class="row"> -->
                                                <div class="col-md-6">
                                                    <h5>My Mobile Share</h5>
                                                        <div class="form-group row">
                                                            <label for="share2" class="col-lg-3 col-form-label">Mobile Share %</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_agent_mob_share" name="super_agent_mob_share"  type="number" class="form-control" readonly/>
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
                                                                    <select id="agent_com_type" name="agent_com_type" class="form-control">
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
                                                                    <input id="super_agent_com_type" name="super_agent_com_type"  class="form-control">
                                                                       
                                                                </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="match_Commission" class="col-lg-3 col-form-label">Match Commisssion</label>
                                                            <div class="col-lg-5">
                                                                <input id="agent_match_com" name="agent_match_com" type="number" class="form-control" min="0" max="50"/>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="match_Commission" class="col-lg-3 col-form-label">Match Commission</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_agent_match_com" name="super_agent_match_com"  type="number" class="form-control"/>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="session_Commission" class="col-lg-3 col-form-label">Session Commision</label>
                                                            <div class="col-lg-5">
                                                                <input id="agent_sess_com" name="agent_sess_com" type="number" class="form-control" min="0" max="50"/>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="session_Commission" class="col-lg-3 col-form-label">Session Commission</label>
                                                            <div class="col-lg-5">
                                                                <input id="super_agent_sess_com" name="super_agent_sess_com"  type="number" class="form-control"/>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <div>
                                                <button type="submit" onclick="myFunction()" class="btn btn-primary waves-effect waves-light">
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

        <script
            src=//code.jquery.com/jquery-3.5.1.min.js
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin=anonymous>
        </script>

    <script type=text/javascript>
        
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
                $.ajax({
                url:'email-inbox/'+id,
                type:'get',
                dataType:'json',
                success: function (data)
                {
                    // var_dump(data);
                //    console.log(data[0].super_agent_curr_limit);
                    $('#super_agent_rem_limit').val(data[0].super_agent_curr_limit);
                    $("#super_agent_share").val(data[0].super_agent_share);
                    $("#super_agent_mob_share").val(data[0].super_agent_mob_share);
                    $("#super_agent_com_type").val(data[0].super_agent_com_type);
                    $("#super_agent_match_com").val(data[0].super_agent_match_com);
                    $("#super_agent_sess_com").val(data[0].super_agent_sess_com);   
                }
          });       
      }
      </script>
        <script> 
        function myFunction() {
                var superShare = document.getElementById("super_agent_rem_limit").value;
                document.getElementById("agent_current_Limit").max  =  superShare;

                var superShare = document.getElementById("super_agent_share").value;
                document.getElementById("agent_share").max  =  superShare;

                var superMobShare = document.getElementById("super_agent_mob_share").value;
                document.getElementById("agent_mob_share").max  =  superMobShare;

                var superMatchCom = document.getElementById("super_agent_match_com").value;
                document.getElementById("agent_match_com").max  =  superMatchCom;

                var superSessCom = document.getElementById("super_agent_sess_com").value;
                document.getElementById("agent_sess_com").max  =  superSessCom; 
        }
        </script>
</body>                               
@endsection

