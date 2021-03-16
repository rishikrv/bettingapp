<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\MasterModel;
use App\Helpers\Helper;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class MasterViewController extends Controller
{
    public function masterStoreFunction(Request $request)
    {
        $code   =   Helper::IDgenerater(new MasterModel,'master_code',5,'MS');
        $rules=array(
            'super_master_id'       =>  'required',
            'master_name'           =>  'required',
            'master_password'       =>  'required|min:6',
            'master_reference'      =>  'required|string',
            'master_curr_limit'     =>  'required',
            'master_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'master_share'          =>  'required',
            'master_mob_share'      =>  'required',
            'master_com_type'       =>  'required|string',
            'master_match_com'      =>  'required',
            'master_sess_com'       =>  'required'            
            );

            $validator  =   Validator::make($request->all() , $rules);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }
            else
            {
                $master = new MasterModel;
                $master->super_master_id           =   $request->super_master_id ;
                $master->master_code               =   $code;
                $master->master_name               =   $request->master_name;                
                $master->master_reference          =   $request->master_reference;
                $master->master_curr_limit         =   $request->master_curr_limit;                
                $master->master_contact_num        =   $request->master_contact_num;
                $master->master_password           =   $request->master_password;
                $master->master_share              =   $request->master_share;
                $master->master_mob_share          =   $request->master_mob_share;
                $master->master_com_type           =   $request->master_com_type;
                $master->master_match_com          =   $request->master_match_com;
                $master->master_sess_com           =   $request->master_sess_com;
                
                $master->save();

                $users = new UserModel;
                $users->name                        =   $request->master_name;
                $users->email                       =   $code;
                $users->password                    =   Hash::make($request->master_password);
                $users->role                        =   3;
                $users->user_code                   =   $code;
                $users->save();

                $supermasterid = $request->super_master_id;
                $finalbal = $request->super_master_curr_limit - $request->master_curr_limit;
                DB::update('update super_masters set super_master_curr_limit = ? where id = ?', [$finalbal, $supermasterid]);


                return redirect('master-details');
                
            }   
    }
    


    public function modifyMaster(Request $request)
    {
        
        $rules=array(
            'super_master_id'       =>  'required',
            'master_name'           =>  'required',
            'master_password'       =>  'required|min:6',
            'master_reference'      =>  'required|string',
            'master_curr_limit'     =>  'required|integer',
            'master_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'master_share'          =>  'required',
            'master_mob_share'      =>  'required',
            'master_com_type'       =>  'required|string',
            'master_match_com'      =>  'required|integer',
            'master_sess_com'       =>  'required|integer',  
            'master_share'          =>  'required|string',
            'master_auto_limit'     =>  'required|string',
            'master_status'         =>  'required|string'
            );

            $validator  =   Validator::make($request->all() , $rules);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }

            else
            {
                    $update    =    MasterModel::find($request->id);   
                    $update->super_master_id           =   $request->super_master_id;
                    $update->master_code               =   $request->master_code;
                    $update->master_name               =   $request->master_name;                
                    $update->master_reference          =   $request->master_reference;                
                    $update->master_contact_num        =   $request->master_contact_num;
                    $update->master_password           =   $request->master_password;
                    $update->master_share              =   $request->master_share;
                    $update->master_mob_share          =   $request->master_mob_share;
                    $update->master_com_type           =   $request->master_com_type;
                    $update->master_match_com          =   $request->master_match_com;
                    $update->master_sess_com           =   $request->master_sess_com; 
                    $update->master_flate_share        =   $request->master_flate_share;
                    $update->master_auto_limit         =   $request->master_auto_limit;
                    $update->master_status             =   $request->master_status;

                    $update->save();
                    return redirect('master-details');
       
            } 
    }

    public function showMasters(){
        $master = DB::table('masters')
                ->join('super_masters','masters.super_master_id','=','super_masters.id')
                ->select('masters.*','super_masters.super_master_name')
                ->get();
                // var_dump($master);
                return view('master-detail', compact('master'));
    }

    public function showMasterData($id)
    {
        $data   =   MasterModel::find($id);
        return view('master-modify' , ['data'=>$data]);
    }

 //AJAX REQUEST for superAgent-create
 public function getSuperMasters(Request $request)
 {
     $id=0;
     if(isset($request->id)){
         $id=$request->id;
     }
         
         $sm = DB::table('super_masters')
                ->select('super_master_curr_limit', 'super_master_share' , 'super_master_mob_share' , 'super_master_com_type','super_master_match_com','super_master_sess_com')
                ->where('id',$id)
                ->get();
        //  var_dump($sm);
            echo json_encode($sm);
            exit;
 }

 //**************** Master Name for SuperAgent Create page DROPDOWN  */ 
    public function showMastersName(){
        $MsName = MasterModel::all();
        return view('superagent-create', compact('MsName'));
    }    

    public function masterModifyStatus($id)
    {
        $data   =   MasterModel::find($id);
        $data->master_status   =   'Inactive';
        $data->save();
        return redirect('master-details');
    }

    
   


}