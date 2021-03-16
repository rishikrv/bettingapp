@extends('layouts.master')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}" />
@endsection

@section('breadcrumb')
<div class="col-sm-6">
                                    <h4 class="page-title">Login Report</h4>

                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Report</a></li>
                                        <li class="breadcrumb-item">Login Report</a></li>
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
                                        <h4 class="mt-0 header-title">Login Report</h4>
                                       
                            
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                            
                                                    <label for="code" class="col-lg-3 col-form-label">Code</label>
                                                            <div class="col-lg-5">
                                                                <input id="code" name="code" type="text" class="form-control">
                                                            </div>
                                            
                                                </div>
                                            </div>
                                        </div>
                                           
                                                
                                    

                                            
                                                
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Show
                                                    </button>
                                                    
                                                
                                            
                                           
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
            
            
 </body>                                      
@endsection

