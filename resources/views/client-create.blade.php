

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
            
                <form action="client-create" method="POST">
                @csrf
                
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Create New Client</h4>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Agent</label>
                                                            <div class="col-sm-5">

                                                                <select id="getdata" name="agent_id" value="agent_id" class="form-control">
                                                                    <option value="" >Select</option>
                                                                        @foreach($clientName as $Cname)   
                                                                            <option id="id" value="{{ $Cname->id }}" >                                           
                                                                                {{ $Cname->agent_name }} 
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
                                                                <input id="code" name="client_code" type="text" class="form-control" readonly>
                                                            </div>
                                                    </div>
                                                </div>   
                                            </div>
                                               
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="name" class="col-lg-3 col-form-label">Name</label>
                                                            <div class="col-lg-5">
                                                                <input id="name" name="client_name" type="text" class="form-control">
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
                                                                <input id="reference" name="reference" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>   
                                            </div>


                                        <div id="div_refresh">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="current_Limit" class="col-lg-3 col-form-label">Current limit</label>
                                                            <div class="col-lg-5">
                                                                <input id="current_Limit" name="client_curr_limit" type="number" class="form-control" min="1" max="100000000"/>
                                                            </div>
                                                    </div>
                                                </div>
                                           
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="rem_Limit" class="col-lg-3 col-form-label">Rem Limit</label>
                                                            <div class="col-lg-5">
                                                                <input id="agent_rem_limit" name="agent_curr_limit"  type="text" class="form-control" readonly >
                                                            
                        
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="contact" class="col-lg-3 col-form-label">Contact No.</label>
                                                            <div class="col-lg-5">
                                                                <input id="contact" name="client_contact_num" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="password" class="col-lg-3 col-form-label">Password</label>
                                                            <div class="col-lg-5">
                                                                <input id="password" name="password" type="text" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>        
                                        </fieldset>
                                            
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Client Share</h5>
                                                        <div class="form-group row">
                                                            <label for="share2" class="col-lg-3 col-form-label">Share %</label>
                                                                <div class="col-lg-5">
                                                                    <input id="client_share" name="client_share" type="number" class="form-control"  min="0" max="50"/>
                                                                </div>
                                                        </div>
                                                </div>
                                          
                                                <div class="col-md-6">
                                                    <h5>My Share</h5>
                                                        <div class="form-group row">
                                                            <label for="share2" class="col-lg-3 col-form-label">Share %</label>
                                                            <div class="col-lg-5">
                                                                <input id="agent_share" name="agent_share" type="number" class="form-control" readonly/>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>                                                       
                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Client Mobile Share</h5>
                                                        <div class="form-group row">
                                                            <label for="share2" class="col-lg-3 col-form-label">Mobile Share %</label>
                                                                <div class="col-lg-5">
                                                                    <input id="client_mob_share" name="client_mob_share" type="number" class="form-control"  min="0" max="50"/>
                                                                </div>
                                                        </div>
                                                </div>
                                            
                                                <div class="col-md-6">
                                                    <h5>My Mobile Share</h5>
                                                        <div class="form-group row">
                                                            <label for="share2" class="col-lg-3 col-form-label">Mobile Share %</label>
                                                            <div class="col-lg-5">
                                                                <input id="agent_mob_share" name="agent_mob_share" type="number" class="form-control" readonly/>
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
                                                                    <select id="session_Commission_Type" name="client_com_type" class="form-control">
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
                                                            <label for="session_Commission_Type" class="col-lg-3 col-form-label">Session Commission Type</label>
                                                                <div class="col-lg-5">
                                                                    <input id="agent_com_type" name="agent_com_type" class="form-control" readonly>
                                                                        
                                                                </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="match_Commission" class="col-lg-3 col-form-label">Match Commisssion</label>
                                                            <div class="col-lg-5">
                                                                <input id="client_match_com" name="client_match_com" type="number" class="form-control"  min="0" max="50"/>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="match_Commission" class="col-lg-3 col-form-label">Match Commission</label>
                                                            <div class="col-lg-5">
                                                                <input id="agent_match_com" name="agent_match_com"  type="number" class="form-control" readonly/>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="session_Commission" class="col-lg-3 col-form-label">Session Commision</label>
                                                            <div class="col-lg-5">
                                                                <input id="client_sess_com" name="client_sess_com" type="number" class="form-control"  min="0" max="50"/>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label for="session_Commission" class="col-lg-3 col-form-label">Session Commission</label>
                                                            <div class="col-lg-5">
                                                                <input id="agent_sess_com" name="agent_sess_com"  type="number" class="form-control" readonly/>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                </div>
                                 
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

            $("#getdata").change(function(){              
                var agentId =   $('#getdata').val();                             
                 if(agentId > 0)
                {
                     fetchRecords(agentId);
                }           
            });
        });
      function fetchRecords(id)
      {
                $.ajax({
                url:'client-create/'+id,
                type:'get',
                dataType:'json',
                success: function (data)
                {
                    // var_dump(data);
                //    console.log(data[0].agent_curr_limit);
                    $('#agent_rem_limit').val(data[0].agent_curr_limit);
                    $("#agent_share").val(data[0].agent_share);
                    $("#agent_mob_share").val(data[0].agent_mob_share);
                    $("#agent_com_type").val(data[0].agent_com_type);
                    $("#agent_match_com").val(data[0].agent_match_com);
                    $("#agent_sess_com").val(data[0].agent_sess_com);   
                }
            
          });
          
      }
      </script>
       <script> 
        function myFunction() {
                var superShare = document.getElementById("agent_rem_limit").value;
                document.getElementById("current_Limit").max  =  superShare;

                var superShare = document.getElementById("agent_share").value;
                document.getElementById("client_share").max  =  superShare;

                var superMobShare = document.getElementById("agent_mob_share").value;
                document.getElementById("client_mob_share").max  =  superMobShare;

                var superMatchCom = document.getElementById("agent_match_com").value;
                document.getElementById("client_match_com").max  =  superMatchCom;

                var superSessCom = document.getElementById("agent_sess_com").value;
                document.getElementById("client_sess_com").max  =  superSessCom; 
        }
        </script>
    </body>                                      
@endsection

