@extends('layouts.master')




@section('content')

<body>
    
        <!-- Begin page -->
    
           <div class="content">
            <div class="container-fluid">
               
                        <!-- end row -->
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                    <h4 class="page-title">Modify Super Master</h4>

                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master Details</a></li>
                                        <li class="breadcrumb-item"><a href="agent.php">Agent Details</a></li>
                                        <li class="breadcrumb-item"><a href="create-new-agent"> Modify Agent </a></li>

                                        <li class="breadcrumb-item active">Back</li>
                                    </ol>

                                </div>
                                
                               
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Create New Super Master</h4>
                                       
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Admin</label>
                                            <div class="col-sm-6">
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
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
                                                                <input id="code" name="code" type="text"  placeholder="A129" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                        
                                                

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="name" class="col-lg-6 col-form-label">Name</label>
                                                            <div class="col-lg-6">
                                                                <input id="name" name="name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="reference" class="col-lg-6 col-form-label">Reference</label>
                                                            <div class="col-lg-6">
                                                                <input id="reference" name="reference" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
        
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="contact" class="col-lg-6 col-form-label">Contact No.</label>
                                                            <div class="col-lg-6">
                                                                <input id="contact" name="contact" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="password" class="col-lg-6 col-form-label">Password</label>
                                                            <div class="col-lg-6">
                                                                <input id="password" name="password" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Auto Limit</label>
                                            <div class="col-sm-6">
                                                <select class="form-control">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                                      
                                                    </div>
                                                   
                                                </div>      <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Flat Share</label>
                                            <div class="col-sm-6">
                                                <select class="form-control">
                                                    <option>Yes</option>
                                                    <option>No</option>
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
                                                <select class="form-control">
                                                    <option>Active</option>
                                                    <option>InActive</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                                      
                                                    </div>
                                                   
                                                </div>

                                            </fieldset>
                                            <fieldset>
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <h5>Supermaster Share On Master</h5>

                                                        <div class="form-group row">
                                                            <label for="share1" class="col-lg-6 col-form-label">Share %</label>
                                                            <div class="col-lg-6">
                                                                <input id="share1" name="share1" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                    <h5>My Share</h5>

                                                        <div class="form-group row">

                                                            <label for="share2" class="col-lg-6 col-form-label">Share %</label>
                                                            <div class="col-lg-6">
                                                                <input id="share2" name="share2" type="text" class="form-control" placeholder="30.00" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <h5>Super Master Mobile Share</h5>

                                                        <div class="form-group row">
                                                            <label for="share3" class="col-lg-6 col-form-label">Share %</label>
                                                            <div class="col-lg-6">
                                                                <input id="share3" name="share3" type="text" class="form-control" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <h5>My Mobile Share</h5>

                                                        <div class="form-group row">

                                                            <label for="share4" class="col-lg-6 col-form-label">Share %</label>
                                                            <div class="col-lg-6">
                                                                <input id="share4" name="share4" type="text" class="form-control" placeholder="100.00" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <!-- <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="share3" class="col-lg-3 col-form-label">Share %</label>
                                                            <div class="col-lg-5">
                                                                <input id="share3" name="share3" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="share4" class="col-lg-3 col-form-label">Share %</label>
                                                            <div class="col-lg-5">
                                                                <input id="share4" name="share4" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
        
        
                                            </fieldset>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <h5>Super Master Commission </h5>

                                                    
                                                    </div>
                                                    <div class="col-md-6">
                                                    <h5>My Commission </h5>

                                                        
                                                    </div>
                                    
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
                                                </div>
                                                <h5> Admin Commission & Share On Super Master</h5>

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
                                                        Save
                                                    </button>
                                                    <button type="cancel" class="btn btn-secondary waves-effect m-l-5">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                           
                            
  </body>                                     
@endsection

