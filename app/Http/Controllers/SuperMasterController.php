<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\SuperMasterModel;
use App\Helpers\Helper;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class SuperMasterController extends Controller
{
    public function superMasterStoreFunction(Request $request)
    {
        $code   =   Helper::IDgenerater(new SuperMasterModel,'super_master_code',5,'SM');
        $rules=array(
            'admin_id'                    =>  'required',
            'super_master_name'             =>  'required',
            'super_master_password'         =>  'required|min:6',
            'super_master_reference'        =>  'required|string',
            'super_master_curr_limit'       =>  'required',
            'super_master_contact_num'      =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'super_master_share'            =>  'required',
            'super_master_mob_share'        =>  'required',
            'super_master_com_type'         =>  'required|string',
            'super_master_match_com'        =>  'required',
            'super_master_sess_com'         =>  'required'            
            );

            $validator  =   Validator::make($request->all() , $rules);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }
            else
            {
                $Smaster = new SuperMasterModel;
                $Smaster->admin_id                      =  1 ;
                $Smaster->super_master_code               =   $code;
                $Smaster->super_master_name               =   $request->super_master_name;                
                $Smaster->super_master_reference          =   $request->super_master_reference;
                $Smaster->super_master_curr_limit         =   $request->super_master_curr_limit;                
                $Smaster->super_master_contact_num        =   $request->super_master_contact_num;
                $Smaster->super_master_password           =   $request->super_master_password;
                $Smaster->super_master_share              =   $request->super_master_share;
                $Smaster->super_master_mob_share          =   $request->super_master_mob_share;
                $Smaster->super_master_com_type           =   $request->super_master_com_type;
                $Smaster->super_master_match_com          =   $request->super_master_match_com;
                $Smaster->super_master_sess_com           =   $request->super_master_sess_com;
                
                $Smaster->save();

                $users = new UserModel;
                $users->name                        =   $request->super_master_name;
                $users->email                       =   $code;
                $users->password                    =   Hash::make($request->super_master_password);
                $users->role                        =   2;
                $users->user_code                   =   $code;
                $users->save();


                return redirect('supermaster-details');
            }   
    }

    public function modifySuperMaster(Request $request)
    {
        $rules=array(
            'admin_name'                  =>  'required',
            'super_master_name'           =>  'required',
            'super_master_password'       =>  'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'super_master_reference'      =>  'required|string',
            'super_master_curr_limit'     =>  'required',
            'super_master_contact_num'    =>  'required|min:10|max:12|regex:/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/',
            'super_master_share'          =>  'required',
            'super_master_mob_share'      =>  'required',
            'super_master_com_type'       =>  'required|string',
            'super_master_match_com'      =>  'required',
            'super_master_sess_com'       =>  'required',      
            'super_master_share'          =>  'required|string',
            'super_master_auto_limit'     =>  'required|string',
            'super_master_status'         =>  'required|string'
            );

            $validator  =   Validator::make($request->all() , $rules);
            if($validator->fails()){
                return response()->json($validator->errors(),400);
            }

            else
            {
                    $update                                  =   SuperMasterModel::find($request->id);   
                    $update->admin_name                      =   $request->admin_name;
                    $update->super_master_code               =   $request->super_master_code;
                    $update->super_master_name               =   $request->super_master_name;                
                    $update->super_master_reference          =   $request->super_master_reference;                
                    $update->super_master_contact_num        =   $request->super_master_contact_num;
                    $update->super_master_password           =   $request->super_master_password;
                    $update->super_master_share              =   $request->super_master_share;
                    $update->super_master_mob_share          =   $request->super_master_mob_share;
                    $update->super_master_com_type           =   $request->super_master_com_type;
                    $update->super_master_match_com          =   $request->super_master_match_com;
                    $update->super_master_sess_com           =   $request->super_master_sess_com; 
                    $update->super_master_flate_share        =   $request->super_master_flate_share;
                    $update->super_master_auto_limit         =   $request->super_master_auto_limit;
                    $update->super_master_status             =   $request->super_master_status;

                    $update->save();
                    return redirect('supermaster-details');
     
            } 
    }

    public function superMastershow(){
        $superMasters = SuperMasterModel::all();
        return view('supermaster-detail', compact('superMasters'));
    }


    //*********** SuperMaster Name for Master Create page in DROPDOWN */
    public function showSuperMastersName(){
        $SMName = SuperMasterModel::all();
        return view('master-create', compact('SMName'));
    }   
}
