<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\ClientsModel;
use App\Models\UserModel;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Hash;

class ClientViewController extends Controller
{
    public function store(Request $request)
    {
        $code   =   Helper::IDgenerater(new ClientsModel, 'client_code', 5, 'CL');
        $rules = array(
            "agent_id"              =>  'required',
            "client_name"           =>  'required',
            'password'              =>  'required|min:6',
            'reference'             =>  'required|string',
            'client_curr_limit'     =>  'required',
            'client_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'client_share'          =>  'required',
            'client_mob_share'      =>  'required',
            'client_com_type'       =>  'required|string',
            'client_match_com'      =>  'required',
            'client_sess_com'       =>  'required'
        );

        $validator  =   Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $clients = new ClientsModel;
            $clients->agent_id                  =   $request->agent_id;
            $clients->client_code               =   $code;
            $clients->client_name               =   $request->client_name;
            $clients->reference                 =   $request->reference;
            $clients->client_curr_limit         =   $request->client_curr_limit;
            $clients->client_contact_num        =   $request->client_contact_num;
            $clients->password                  =   $request->password;
            $clients->client_share              =   $request->client_share;
            $clients->client_mob_share          =   $request->client_mob_share;
            $clients->client_com_type           =   $request->client_com_type;
            $clients->client_match_com          =   $request->client_match_com;
            $clients->client_sess_com           =   $request->client_sess_com;
            $clients->save();


            $users = new UserModel;
            $users->name                        =   $request->client_name;
            $users->email                       =   $code;
            $users->password                    =   Hash::make($request->password);
            $users->role                        =   6;
            $users->user_code                   =   $code;

            $users->save();


            $agentid = $request->agent_id;
            $finalbal = $request->agent_curr_limit - $request->client_curr_limit;
            DB::update('update agents set agent_curr_limit = ? where id = ?', [$finalbal, $agentid]);


            return redirect('client-details');
        }
    }

    public function updateByCodeFunction(Request $request)
    {
        // var_dump("hello");
        // return view('client-modify');

        $rules = array(
            "agent_id"              =>  'required',
            "client_name"           =>  'required',
            'password'              =>  'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'reference'             =>  'required|string',
            'client_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'client_share'          =>  'required',
            'client_mob_share'      =>  'required',
            'client_com_type'       =>  'required|string',
            'client_match_com'      =>  'required',
            'client_sess_com'       =>  'required',
            'client_flate_share'    =>  'required|string',
            'client_auto_limit'     =>  'required|string',
            'client_status'         =>  'required|string'
        );

        $validator  =   Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $clients = new ClientsModel;
            $clients->agent_id                  =   $request->agent_id;
            $clients->client_code               =   $request->client_code;
            $clients->client_name               =   $request->client_name;
            $clients->reference                 =   $request->reference;
            $clients->client_contact_num        =   $request->client_contact_num;
            $clients->password                  =   $request->password;
            $clients->client_share              =   $request->client_share;
            $clients->client_mob_share          =   $request->client_mob_share;
            $clients->client_com_type           =   $request->client_com_type;
            $clients->client_match_com          =   $request->client_match_com;
            $clients->client_sess_com           =   $request->client_sess_com;
            $clients->client_flate_share        =   $request->client_flate_share;
            $clients->client_auto_limit         =   $request->client_auto_limit;
            $clients->client_status             =   $request->client_status;

            $clients->save();
            return redirect('client-details');
        }
    }

    public function show()
    {
        $clnt = DB::table('clients')
            ->join('agents', 'clients.agent_id', '=', 'agents.id')
            ->select('clients.*', 'agents.agent_name')
            ->get();

        return view('client-detail', compact('clnt'));
    }

    // AJAX REQUEST for agent-create
    public function getAgents(Request $request)
    {
        $id = 0;
        if (isset($request->id)) {
            $id = $request->id;
        }
        $ag = DB::table('agents')
            ->select('agent_curr_limit', 'agent_share', 'agent_mob_share', 'agent_com_type', 'agent_match_com', 'agent_sess_com')
            ->where('id', $id)
            ->get();

        echo json_encode($ag);
        exit;
    }

    public function showData($id)
    {
        $dataCl   =   DB::table('clients')
            ->join('agents', 'clients.agent_id', '=', 'agents.id')
            ->where('clients.id', $id)
            ->select('clients.*', 'agents.agent_name', 'agents.agent_curr_limit', 'agents.agent_share', 'agents.agent_mob_share', 'agents.agent_com_type', 'agents.agent_match_com', 'agents.agent_sess_com')
            ->get();
        return view('client-modify', compact('dataCl'));
    }
    public function clientModifyStatus($id)
    {
        $data   =   ClientsModel::find($id);

        if ($data->client_status == "Active")
            $data->client_status    =   "Inactive";
        $data->save();

        return redirect('client-details');
    }
}
