<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\AgentsModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Helper;

class AgentViewController extends Controller
{
    public function agentStoreFunction(Request $request)
    {
        $code   =   Helper::IDgenerater(new AgentsModel,'agent_code',5,'AG');
        $rules=array(
            'super_agent_id'       =>  'required',
            'agent_name'           =>  'required',
            'agent_password'       =>  'required|min:6',
            'agent_reference'      =>  'required|string',
            'agent_curr_limit'     =>  'required',
            'agent_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'agent_share'          =>  'required',
            'agent_mob_share'      =>  'required',
            'agent_com_type'       =>  'required|string',
            'agent_match_com'      =>  'required',
            'agent_sess_com'       =>  'required'            
            );

            $validator  =   Validator::make($request->all() , $rules);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }
            else
            {
                $agents = new AgentsModel;
                $agents->super_agent_id           =   $request->super_agent_id;
                $agents->agent_code               =   $code;
                $agents->agent_name               =   $request->agent_name;                
                $agents->agent_reference          =   $request->agent_reference;
                $agents->agent_curr_limit         =   $request->agent_curr_limit;                
                $agents->agent_contact_num        =   $request->agent_contact_num;
                $agents->agent_password           =   $request->agent_password;
                $agents->agent_share              =   $request->agent_share;
                $agents->agent_mob_share          =   $request->agent_mob_share;
                $agents->agent_com_type           =   $request->agent_com_type;
                $agents->agent_match_com          =   $request->agent_match_com;
                $agents->agent_sess_com           =   $request->agent_sess_com;
                $agents->save();


                $users = new UserModel;
                $users->name                        =   $request->agent_name;
                $users->email                       =   $code;
                $users->password                    =   Hash::make($request->agent_password);
                $users->role                        =   5;
                $users->user_code                   =   $code;
                $users->save();

                $superagentid = $request->super_agent_id;
                $finalbal = $request->super_agent_curr_limit - $request->agent_curr_limit;
                DB::update('update super_agents set super_agent_curr_limit = ? where id = ?', [$finalbal, $superagentid]);

                
                return redirect('agent-details');

            }   
    }

    public function modifyAgent(Request $request)
    {
        echo "<script>";
        echo "alert('hello');";
        echo "</script>";
        $rules=array(
            'super_agent_id'     =>  'required',
            'agent_name'           =>  'required',
            'agent_password'       =>  'required|min:6',
            'agent_reference'      =>  'required|string',
            'agent_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'agent_share'          =>  'required',
            'agent_mob_share'      =>  'required',
            'agent_com_type'       =>  'required|string',
            'agent_match_com'      =>  'required',
            'agent_sess_com'       =>  'required',
            'agent_flate_share'    =>  'required|string',
            'agent_auto_limit'     =>  'required|string',
            'agent_status'         =>  'required|string'
            );

            $validator  =   Validator::make($request->all() , $rules);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }

            else
            {
                $update    =    AgentsModel::find($request->id);   
                    $update->super_agent_id           =   $request->super_agent_id;
                    $update->agent_code               =   $request->agent_code;
                    $update->agent_name               =   $request->agent_name;                
                    $update->agent_reference          =   $request->agent_reference;                
                    $update->agent_contact_num        =   $request->agent_contact_num;
                    $update->agent_password           =   $request->agent_password;
                    $update->agent_share              =   $request->agent_share;
                    $update->agent_mob_share          =   $request->agent_mob_share;
                    $update->agent_com_type           =   $request->agent_com_type;
                    $update->agent_match_com          =   $request->agent_match_com;
                    $update->agent_sess_com           =   $request->agent_sess_com; 
                    $update->agent_flate_share        =   $request->agent_flate_share;
                    $update->agent_auto_limit         =   $request->agent_auto_limit;
                    $update->agent_status             =   $request->agent_status;

                    $update->save();
                    return redirect('agent-details');
     
            } 
    }
    public function showCName(){
        $clientName = AgentsModel::all();
        // var_dump($clientName);
        return view('client-create', compact('clientName'));
    }    
    
    public function show(){
        $agnts =   DB::table('agents')
                    ->join('super_agents','agents.super_agent_id','=','super_agents.id')
                    ->select('agents.*','super_agents.super_agent_name')
                    ->get();
                    // var_dump($agnts);
                return view('agent-detail', compact('agnts'));
                
    }

    public function showData($id)
    {
        
        $d   =   AgentsModel::find($id);
        return view('modify-agent' , ['d'=>$d]);
    }

    // AJAX REQUEST for agent-create
    public function getSuperAgents(Request $request)
    {
        $id=0;
        if(isset($request->id)){
            $id=$request->id;
        }
            $ag = DB::table('super_agents')
            ->select('super_agent_curr_limit', 'super_agent_share' , 'super_agent_mob_share' , 'super_agent_com_type','super_agent_match_com','super_agent_sess_com')
            ->where('id',$id)
            ->get();
            
        echo json_encode($ag);
        exit;
    } 
    
    public function agentModifyStatus($id)
    {
        $data   =   AgentsModel::find($id);
        $data->agent_status   =   "Inactive";
        $data->save();
        return redirect('agent-details');
    }
   
}
