@extends('layouts.master')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}" />
@endsection

@section('breadcrumb')
<div class="col-sm-6">
                                    <h4 class="page-title">Change Password</h4>

                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">Setting</a></li>
                                        <li class="breadcrumb-item">Change Password</a></li>
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
                                        <h4 class="mt-0 header-title">Change Password</h4>
                                       
                                   <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                            
                                                    <label for="code" class="col-lg-3 col-form-label">Old Password</label>
                                                            <div class="col-lg-5">
                                                                <input id="code" name="code" type="text" class="form-control">
                                                            </div>
                                            
                                                </div>
                                            </div>
                                        </div>
                                        
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="code" class="col-lg-3 col-form-label">New Password</label>
                                                            <div class="col-lg-5">
                                                                <input id="code" name="code" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                               
                                               
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="name" class="col-lg-3 col-form-label">Confirm Password</label>
                                                            <div class="col-lg-5">
                                                                <input id="name" name="name" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                    </fieldset>

                                            <div class="form-group">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Change password
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

