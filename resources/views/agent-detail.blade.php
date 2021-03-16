@extends('layouts.master')

@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Agent Details</h4>
        <p>Create, Modify, Delete and Display Super Agent details</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Master Details</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Agent Details</a></li>
                <li class="breadcrumb-item active">Back</li>
            </ol>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Agent Details</h4>
                    <div class="form-group">
                        <a href="email-inbox" class="waves-effect">
                        <button class="btn btn-xs btn-primary"><span class="ion ion-md-add"></span>Create</button></a>
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report Details</button>
                        
                    </div>
                                         
                <div class="table-rep-plugin">
                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>SNo.</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Super Agent</th>
                                        <th>Contact</th>
                                        <th>Limit</th>                                   
                                        <th>Share</th>
                                        <th>Mobile Share</th> 
                                        <th>Session commission</th>
                                        <th>Match Commission</th>   
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($agnts as $Ag)
                                  
                                                <tr>
                                                    <th>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            </button>
                                                            <div class="dropdown-menu"  class="btn btn-info btn-lg">   
                                                                <button class="dropdown-item" type="button"><i class="fas fa-edit"></i> 
                                                                <a href= {{ "modify-agent/".$Ag->id }}> Edit </a></button>  
                                                                <button class="dropdown-item" type="button"> <i class="fas fa-ban"></i> 
                                                                <a href= {{ "agent-detail/".$Ag->id }}>Inactive </a></button>
                                                                <button class="dropdown-item" type="button">Agent Limit</button>
                                                                <button class="dropdown-item" type="button">Send Login Details</button>
                                                            </div>
                                                        </div>                      
                                                    </th>

                                          
                                                    <td>{{$Ag->id}}</td>
                                                    <td>{{$Ag->agent_code}}</td>
                                                    <td>{{$Ag->agent_name}}</td>
                                                    <td>{{$Ag->super_agent_name}}</td>
                                                    <td>{{$Ag->agent_contact_num}}</td>
                                                    <td>{{$Ag->agent_curr_limit}}</td>                                                       
                                                    <td>{{$Ag->agent_share}}</td> 
                                                    <td>{{$Ag->agent_mob_share}}</td>
                                                    <td>{{$Ag->agent_sess_com}}</td>
                                                    <td>{{$Ag->agent_match_com}}</td>                                                  
                                                    <td>{{$Ag->agent_status}}</td>
                                                   
                                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </table>                                      
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection

