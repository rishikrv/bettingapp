@extends('layouts.master')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}" />
@endsection

@section('breadcrumb')
<div class="col-sm-6">
                                    <h4 class="page-title">Super Agent Ledger</h4>

                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ledger</a></li>
                                        <li class="breadcrumb-item"><a href="agent.php">Super Agent Ledger</a></li>
                                        <li class="breadcrumb-item active"><a href="#">Back</li>
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
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Super Agent Ledger</h4>
                                       
                                            
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                   

                                                    <div class="form-group row">
                                                            <label for="session_Commission_Type" class="col-lg-3 col-form-label">Client</label>
                                                            <div class="col-lg-5">
                                                                <select id="session_Commission_Type" name="session_Commission_Type" class="form-control">
                                                                    <option value="">--Please Select--</option>
                                                                    <option value="AE">select1</option>
                                                                    <option value="VI">select2</option>
                                                                    <option value="MC">select3</option>
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    

                                                        <div class="form-group row">
                                                            <label for="session_Commission_Type" class="col-lg-3 col-form-label">Collection</label>
                                                            <div class="col-lg-5">
                                                                <select id="session_Commission_Type" name="session_Commission_Type" class="form-control">
                                                                    <option value="">--Please Select--</option>
                                                                    <option value="AE">CASH A/C</option>
                                                                    <option value="VI">CASH A/C</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="match_Commission" class="col-lg-3 col-form-label">Date</label>
                                                            <div class="col-lg-5">
                                                                <input id="match_Commission" name="match_Commission" type="Date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="match_Commission" class="col-lg-3 col-form-label">Amount</label>
                                                            <div class="col-lg-5">
                                                                <input id="match_Commission" name="match_Commission" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="session_Commission" class="col-lg-3 col-form-label">Payment Type</label>
                                                            <div class="col-lg-5">
                                                                <select id="session_Commission_Type" name="session_Commission_Type" class="form-control">
                                                                    <option value="">--Payment Type--</option>
                                                                    <option value="AE">PAYMENT-DENA</option>
                                                                    <option value="VI">PAYMENT-LENA</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="session_Commission" class="col-lg-3 col-form-label">Remark</label>
                                                            <div class="col-lg-5">
                                                                <input id="session_Commission" name="session_Commission" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="session_Commission" class="col-lg-3 col-form-label">Payment Mode</label>
                                                            <div class="col-lg-5">
                                                                <select id="session_Commission_Type" name="session_Commission_Type" class="form-control">
                                                                    <option value="">--Payment Mode--</option>
                                                                    <option value="AE">CASH</option>
                                                                    <option value="VI">BANK</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Save
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                        Cancel
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
            
            
 </body>                                      
@endsection

