@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
                                    <h4 class="page-title">All Collection Ledger</h4>
                                    
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Collection Ledger</a></li>
                                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Back</li>
                                    </ol>

                                </div>
@endsection

@section('content')
             
<div class="col-sm-6">
                                
                                

                            
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">All Collection Ledger</h4>
                                    <div class="form-group">
                                            
                                            

    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="session_Commission" class="col-lg-3 col-form-label">Payment Type</label>
                                                            <div class="col-lg-5">
                                                                <select id="session_Commission_Type" name="session_Commission_Type" class="form-control">
                                                                    <option value="">--BANK--</option>
                                                                    <option value="AE">BANK</option>
                                                                    <option value="VI">OTHERS</option>
                                                                    
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="session_Commission" class="col-lg-3 col-form-label">Status</label>
                                                            <div class="col-lg-5">
                                                                <select id="session_Commission_Type" name="session_Commission_Type" class="form-control">
                                                                    <option value="">--ACTIVE--</option>
                                                                    <option value="AE">ACTIVE</option>
                                                                    <option value="VI">INACTIVE</option>
                                                                    
                                                                </select>

                                                            </div>

                                                            <button type="save" class="btn btn-primary waves-effect waves-light"> Show
                                                            </button>
                                                        </div>
                                                    </div>
                                         
                                <div>         
                                    <div class="table-rep-plugin">
                                    
                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                         
                                        

                                        <table id="tech-companies-1" class="table table-striped" >

                                        <th style="text-align:center"><h6>PAYMENT RECEIVING FROM (LENA HAI)</h6></th>
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            
                                            <thead>
                                               
                                            <tr>
                                                    <th>Collection Name</th>
                                                    <th>Contact</th>
                                                    <th>Open. Bal.</th>
                                                    <th>Curr. Bal.</th>
                                                    <th>Cls. Bal.</th>
                                                    
                                            </tr>
                                            </thead>
                                                
                                                <tr>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                </tr>
                                            
                                                <tr>
                                                
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                        
                                    </div>


                                    <div class="table-rep-plugin">
                                    
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                     
                                    

                                    <table id="tech-companies-1" class="table table-striped" >

                                    <th style="text-align:center"><h6>PAYMENT PAID FROM (DENA HAI)</h6></th>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        
                                        <thead>
                                           
                                        <tr>
                                                <th>Agent Name</th>
                                                <th>Contact</th>
                                                <th>Open. Bal.</th>
                                                <th>Curr. Bal.</th>
                                                <th>Cls. Bal.</th>
                                                
                                        </tr>
                                        </thead>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                               
                                            </tr>
                                        
                                            <tr>
                                            
                                            </tbody>
                                        </table>
                                       
                                    </div>
                                    
                                </div>


    
                                </div>
                                
                            </div>
                        </div> <!-- end col -->
           <!-- end col -->
                    </div>                 


@endsection

@section('script')
@endsection