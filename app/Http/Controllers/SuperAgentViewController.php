<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\SuperAgModel;
use App\Models\UserModel;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Hash;

class SuperAgentViewController extends Controller
{
    public function superAgentStoreFunction(Request $request)
    {
        $code   =   Helper::IDgenerater(new SuperAgModel,'super_agent_code',5,'SA');
        
        $rules=array(
            'master_id'                  =>  'required',
            'super_agent_name'           =>  'required',
            'super_agent_password'       =>  'required|min:6',
            'super_agent_reference'      =>  'required|string',
            'super_agent_curr_limit'     =>  'required',
            'super_agent_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'super_agent_share'          =>  'required',
            'super_agent_mob_share'      =>  'required',
            'super_agent_com_type'       =>  'required|string',
            'super_agent_match_com'      =>  'required',
            'super_agent_sess_com'       =>  'required'            
            );

            $validator  =   Validator::make($request->all() , $rules);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }
            else
            {
                $sAgents = new SuperAgModel;
                $sAgents->master_id                      =   $request->master_id;
                $sAgents->super_agent_code               =   $code;
                $sAgents->super_agent_name               =   $request->super_agent_name;                
                $sAgents->super_agent_reference          =   $request->super_agent_reference;
                $sAgents->super_agent_curr_limit         =   $request->super_agent_curr_limit;                
                $sAgents->super_agent_contact_num        =   $request->super_agent_contact_num;
                $sAgents->super_agent_password           =   $request->super_agent_password;
                $sAgents->super_agent_share              =   $request->super_agent_share;
                $sAgents->super_agent_mob_share          =   $request->super_agent_mob_share;
                $sAgents->super_agent_com_type           =   $request->super_agent_com_type;
                $sAgents->super_agent_match_com          =   $request->super_agent_match_com;
                $sAgents->super_agent_sess_com           =   $request->super_agent_sess_com;
                
                $sAgents->save();

                $users = new UserModel;
                $users->name                        =   $request->super_agent_name;
                $users->email                       =   $code;
                $users->password                    =   Hash::make($request->super_agent_password);
                $users->role                        =   4;
                $users->user_code                   =   $code;
                $users->save();

                $masterid = $request->master_id;
                $finalbal = $request->master_curr_limit - $request->super_agent_curr_limit;
                DB::update('update masters set master_curr_limit = ? where id = ?', [$finalbal, $masterid]);

                return redirect('superagent-detail');
                
            }   
    }


    public function modifySuperAgent(Request $request)
    {
        
        $rules=array(
            'master_id'                  =>  'required',
            'super_agent_name'           =>  'required',
            'super_agent_password'       =>  'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'super_agent_reference'      =>  'required|string',
            'super_agent_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'super_agent_share'          =>  'required',
            'super_agent_mob_share'      =>  'required',
            'super_agent_com_type'       =>  'required|string',
            'super_agent_match_com'      =>  'required',
            'super_agent_sess_com'       =>  'required',           
            'super_agent_flate_share'    =>  'required|string',
            'super_agent_auto_limit'     =>  'required|string',
            'super_agent_status'         =>  'required|string'
            );

            $validator  =   Validator::make($request->all() , $rules);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }

            else
            {
                $sAgents    =    SuperAgModel::find($request->id);
        
                $sAgents->master_id                      =   $request->master_name;
                $sAgents->super_agent_code               =   $request->super_agent_code;
                $sAgents->super_agent_name               =   $request->super_agent_name;                
                $sAgents->super_agent_reference          =   $request->super_agent_reference;          
                $sAgents->super_agent_contact_num        =   $request->super_agent_contact_num;
                $sAgents->super_agent_password           =   $request->super_agent_password;
                $sAgents->super_agent_share              =   $request->super_agent_share;
                $sAgents->super_agent_mob_share          =   $request->super_agent_mob_share;
                $sAgents->super_agent_com_type           =   $request->super_agent_com_type;
                $sAgents->super_agent_match_com          =   $request->super_agent_match_com;
                $sAgents->super_agent_sess_com           =   $request->super_agent_sess_com;
                $sAgents->super_agent_flate_share        =   $request->super_agent_flate_share;
                $sAgents->super_agent_auto_limit         =   $request->super_agent_auto_limit;
                $sAgents->super_agent_status             =   $request->super_agent_status;

                $sAgents->save();
                return redirect('superagent-detail');

            } 
    }

    public function showSuperAgent(){
        $sagents = DB::table('super_agents')
                    ->join('masters','super_agents.master_id','=','masters.id')
                    ->select('super_agents.*','masters.master_name')
                    ->get();
        return view('superagent-detail', compact('sagents'));
    }
    
    public function showSuperAgentsName1(){
        $sAgName = SuperAgModel::all();
        return view('email-inbox', compact('sAgName'));
    }
  
    public function showSuperAgentData($id)
    {
        $data   =   SuperAgModel::find($id);
        return view('superagent-modify' , ['data'=>$data]);
    }
    ## AJAX REQUEST
    public function getMasters(Request $request)
    {
        $id=0;
        if(isset($request->id)){
            $id=$request->id;
        }
            $Sag = DB::table('masters')
            ->select('master_curr_limit', 'master_share' , 'master_mob_share' , 'master_com_type','master_match_com','master_sess_com')
            ->where('id',$id)
            ->get();
                  
        echo json_encode($Sag);
        exit;
    }  

    public function modifyStatus($id)
    {
        $data   =   SuperAgModel::find($id);
        $data->super_agent_status   =   "Inactive";
        $data->save();
        return redirect('superagent-detail');

    }
   
}
