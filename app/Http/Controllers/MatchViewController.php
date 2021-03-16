<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MatchViewController extends Controller
{
    public function matchbetable($mid)
    {
        $uid =   ucfirst(Auth()->user()->id);
        $code_id = ucfirst(Auth()->user()->email);

        


        // echo $uid;
        $matchtable = DB::select("SELECT * FROM bet_match where c_id = '" . $code_id . "' AND m_id = '" . $mid . "' AND session_name is NULL ");
        $matchsesstable = DB::select("SELECT * FROM bet_match where c_id = '" . $code_id . "' AND m_id = '" . $mid . "' AND session_name is NOT NULL ");

        // return view('stud_view',['users'=>$users]);


        $client_curr = DB::select('select client_curr_limit from clients where client_code = :client_code', ['client_code' => $code_id]);

        $sess_pm = DB::select("SELECT (SUM(`t_credit`)-SUM(`t_debit`)) as ses_pm FROM transaction_rep WHERE c_id = '". $code_id ."' AND m_id = 814 ");

        return view('usermatch', ['matchtable' => $matchtable, 'matchsesstable' => $matchsesstable, 'client_curr' => $client_curr, 'sess_pm'=>$sess_pm]);
    }


    public function insertmatch(Request $request)
    {

        $m_rate = $request->input('rate');
        $m_mode = $request->input('mode');
        $m_id = $request->input('match_code');
        $team = $request->input('team');
        $m_amount = $request->input('amount');
        $s_id = $request->input('sid');
        $run = $request->input('run');
        $session_name = $request->input('sessionme');
        // $u_id = $request->input('uid');

        $code_id = ucfirst(Auth()->user()->email);
        // $uu_id = ucfirst(Auth()->user()->id);

        $uu_id =  DB::select('SELECT clients.id FROM clients INNER JOIN users ON clients.client_code=users.email where users.email = :client_code', ['client_code' => $code_id]);
        
        $u_id = $uu_id[0]->id;


        $results = DB::select('select client_curr_limit from clients where client_code = :client_code', ['client_code' => $code_id]);
        // var_dump($results);
        $balance = $results[0]->client_curr_limit - $m_amount;
        if ($results[0]->client_curr_limit >= $m_amount) {
            DB::insert('insert into bet_match (c_id, u_id, m_id, sb_id, session_name, m_rate, m_amount, run, m_mode, team  ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$code_id, $u_id, $m_id, $s_id, $session_name, $m_rate, $m_amount, $run, $m_mode, $team]);
            DB::insert('insert into transaction_rep (u_id, c_id, initial_bal, t_debit, t_credit, t_balance, m_id, m_name, remark  ) values(?, ?, ?, ?, ?, ?, ?, ?, ?)', [$u_id, $code_id, $results[0]->client_curr_limit, $m_amount, '', $balance, $m_id, '', '']);
            DB::update('update clients set client_curr_limit = ? where client_code = ?', [$balance, $code_id]);

            return redirect('match/'.$m_id.'?matchid='.$m_id.'');

            echo "insertedddd";
        }
    }

    public function matchreportable()
    {
        $uid =   ucfirst(Auth()->user()->email);
        // echo $uid;
        $matchreptable = DB::select("SELECT * FROM client_ledger where c_id = '" . $uid . "' ");

        // return view('stud_view',['users'=>$users]);
        return view('usermyledger', ['matchreptable' => $matchreptable]);
    }

    //completematch report
    public function compmatchrepor($mid)
    {
        $uid =   ucfirst(Auth()->user()->email);
        // echo $uid;
        $matchtable = DB::select("SELECT * FROM bet_match where c_id = '" . $uid . "' AND m_id = '" . $mid . "' AND session_name is NULL ");
        $matchsesstable = DB::select("SELECT * FROM bet_match where c_id = '" . $uid . "' AND m_id = '" . $mid . "' AND session_name is NOT NULL ");


        
        // return view('stud_view',['users'=>$users]);
        return view('usercompmatch', ['matchtable' => $matchtable, 'matchsesstable' => $matchsesstable]);
    }

    //ongoingmatch display
    public function matchdisplay()
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;
        $matchtable = DB::select("SELECT * FROM matches_table WHERE status = 1 ");

        // return view('stud_view',['users'=>$users]);
        return view('userinplay', ['matchtable' => $matchtable]);
    }

    //upcomming display
    public function matchupcomming()
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;
        $matchtable = DB::select("SELECT * FROM matches_table WHERE status = 0 ");

        // return view('stud_view',['users'=>$users]);
        return view('userupcomming', ['matchtable' => $matchtable]);
    }

    //upcomming display
    public function matchcompleted()
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;
        $matchtable = DB::select("SELECT * FROM matches_table WHERE status = 2 ");

        // return view('stud_view',['users'=>$users]);
        return view('usercompletegames', ['matchtable' => $matchtable]);
    }




    //add matches
    public function addmatches()
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;
        $matchtable = DB::select("SELECT * FROM matches_table ");

        // return view('stud_view',['users'=>$users]);
        return view('add-matches', ['matchtable' => $matchtable]);
    }



    public function sportsdetail()
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;
        $matchtable = DB::select("SELECT * FROM matches_table ");

        // return view('stud_view',['users'=>$users]);
        return view('sport-detail', ['matchtable' => $matchtable]);
    }

    //match plus-rep
    public function sportsdetailreport($mid)
    {
      $uid =   ucfirst(Auth()->user()->id);
      $matchtable = DB::select("SELECT * FROM matches_table WHERE m_id = '" . $mid . "'");
     $agents = DB:: table('agent_pm')->join('clients','clients.id','=','agent_pm.u_id')->select('clients.client_name as Name',DB::raw("sum(agent_pm.s_amount) as Session_Amount"),DB::raw("sum(agent_pm.m_amount) as Match_Amount"),DB::raw("sum(agent_pm.match_com) as Match_Com"),DB::raw("sum(agent_pm.session_com) as Session_Com"),DB::raw("sum(agent_pm.net_amt) as Net_amt"),DB::raw("sum(agent_pm.share_amt) as Share_amt"),DB::raw("sum(agent_pm.mob_share) as mob_share"),DB::raw("sum(agent_pm.t_final) as t_final"))
     ->where('agent_pm.m_id', $mid)
     ->groupBy('agent_pm.u_id')->get();
     $superagent = DB:: table('superagent_pm')->join('clients','clients.id','=','superagent_pm.u_id')->select('clients.client_name as Name',DB::raw("sum(superagent_pm.s_amount) as Session_Amount"),DB::raw("sum(superagent_pm.m_amount) as Match_Amount"),DB::raw("sum(superagent_pm.match_com) as Match_Com"),DB::raw("sum(superagent_pm.session_com) as Session_Com"),DB::raw("sum(superagent_pm.net_amt) as Net_amt"),DB::raw("sum(superagent_pm.share_amt) as Share_amt"),DB::raw("sum(superagent_pm.mob_share) as mob_share"),DB::raw("sum(superagent_pm.t_final) as t_final"))
     ->where('superagent_pm.m_id', $mid)
     ->groupBy('superagent_pm.u_id')->get();
     $master = DB:: table('master_pm')->join('clients','clients.id','=','master_pm.u_id')->select('clients.client_name as Name',DB::raw("sum(master_pm.s_amount) as Session_Amount"),DB::raw("sum(master_pm.m_amount) as Match_Amount"),DB::raw("sum(master_pm.match_com) as Match_Com"),DB::raw("sum(master_pm.session_com) as Session_Com"),DB::raw("sum(master_pm.net_amt) as Net_amt"),DB::raw("sum(master_pm.share_amt) as Share_amt"),DB::raw("sum(master_pm.mob_share) as mob_share"),DB::raw("sum(master_pm.t_final) as t_final"))
     ->where('master_pm.m_id', $mid)
     ->groupBy('master_pm.u_id')->get();
     $supermaster = DB:: table('supermaster_pm')->join('clients','clients.id','=','supermaster_pm.u_id')->select('clients.client_name as Name',DB::raw("sum(supermaster_pm.s_amount) as Session_Amount"),DB::raw("sum(supermaster_pm.m_amount) as Match_Amount"),DB::raw("sum(supermaster_pm.match_com) as Match_Com"),DB::raw("sum(supermaster_pm.session_com) as Session_Com"),DB::raw("sum(supermaster_pm.net_amt) as Net_amt"),DB::raw("sum(supermaster_pm.share_amt) as Share_amt"),DB::raw("sum(supermaster_pm.mob_share) as mob_share"),DB::raw("sum(supermaster_pm.t_final) as t_final"))
     ->where('supermaster_pm.m_id', $mid)
     ->groupBy('supermaster_pm.u_id')->get();
      
         return view('sport-detail-report',['matchtable' => $matchtable,  'agents' =>  $agents, 'superagent'=> $superagent,'master'=>$master,'supermaster' => $supermaster]);
    
     }





    //add matches
    public function addmatchesdata()
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;
        $matchtable = DB::select("SELECT * FROM matches_table ");

        // return view('stud_view',['users'=>$users]);
        return view('add-matches-data');
    }

    //add matches
    public function addmatchpost(Request $request)
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;

        $m_name = $request->input('m_name');
        $m_date = $request->input('m_date');
        $m_time = $request->input('m_time');
        $m_id = $request->input('m_id');
        $team_market_max = $request->input('team_max');
        $session_max = $request->input('session_max');
        DB::insert('insert into matches_table (m_name, m_date, m_time, won_by, status, m_id, team_market_max, session_max  ) values(?, ?, ?, ?, ?, ?, ?, ?)', [$m_name, $m_date, $m_time, '', 0,  $m_id, $team_market_max, $session_max]);
        // return view('stud_view',['users'=>$users]);
        return redirect('add-matches');
    }


    //matchbetting session creation

    public function createbetting($mid)
    {
        $uid =   ucfirst(Auth()->user()->id);

        // echo $uid;
        $matchtable = DB::select("SELECT * FROM admin_bet_session WHERE MatchCode = '" . $mid . "'  ");
        $match = DB::select("SELECT * FROM admin_bet_match WHERE MatchCode = '" . $mid . "'  ");


        return view('match-betting', ['matchtable' => $matchtable,'mid'=> $mid,'match'=>$match]);
    }



    public function addsessionedata(Request $request)
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;

        $m_id = $request->input('m_id');

        $s_name = $request->input('session_name');
        $not_run = $request->input('not_run');
        $not_rate = $request->input('not_rate');
        $yes_run = $request->input('yes_run');
        $yes_rate = $request->input('yes_rate');
        $d_decl = $request->input('d_decl');

        DB::insert('insert into admin_bet_session (MatchCode, SessionName, NRun, NRate, YRun, YRate  ) values(?, ?, ?, ?, ?, ?)', [$m_id, $s_name, $not_run, $not_rate, $yes_run, $yes_rate]);
        // return view('stud_view',['users'=>$users]);
        return redirect('match-betting/'.$m_id.'');
    }

    public function addsessionedataupdate(Request $request)
    {
        $uid =   ucfirst(Auth()->user()->id);
        // echo $uid;

        $id = $request->input('id');

        $d_decl = $request->input('d_decl');

        DB::update('update admin_bet_session set decl = ? where id = ?', [$d_decl, $id]);
        // return view('stud_view',['users'=>$users]);
        return redirect('add-matches');
    }
    //    Update Data from Editable table
    public function actionsession(Request $request)
      {if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				
    				'NRun'		            =>	$request->not_run,
    				'NRate'		            =>	$request->not_rate,
                    'YRun'		            =>	$request->yes_run,
                    'YRate'		            =>	$request->yes_rate,
                    'decl'		            =>	$request->decl,
                    'SessionLockStatus'     => $request->MatchLockStatus,
                    'Status'                => $request->Status

    			);
    			DB::table('admin_bet_session')
    				->where('id', $request->id)
    				->update($data);
    		}
    		if($request->action == 'delete')
    		{
    			DB::table('admin_bet_session')
    				->where('id', $request->id)
    				->delete();
    		}
    		return response()->json($request);
    	}
      
    
    }


    //    Add Match Data
    public function addmatchdata(Request $request){
        $uid = ucfirst(Auth()->user()->id);
        $m_id= $request->input('m_id');

        $team_name = $request->input('team1');
        $team1_lagai = $request->input('team1_lagai');
        $team1_khai = $request->input('team1_khai');
     
        DB::insert('insert into admin_bet_match (MatchCode, MatchBitDateTime, FavTeam, LRate, KRate  ) values(?, ?, ?, ?, ?)', [ $m_id, '' , $team_name, $team1_lagai, $team1_khai]);
           // return view('stud_view',['users'=>$users]);
           return redirect('match-betting/'.$m_id.'');

    }
    




    // Update Match Details
    public function actionmatch(Request $request){
        {if($request->ajax())
            {
                if($request->action == 'edit')
                {
                    $data = array(
                        'FavTeam'	            =>	$request->team1,
                        'LRate'		=>	$request->team1_lagai,
                        'KRate'		=>	$request->team1_khai,
                        'MatchLockStatus'		        =>	$request->team2,
                        'StatusM'		=>	$request->team2_lagai,
                        'decl'		=>	$request->team2_khai,
                    );
                    DB::table('admin_bet_match')
                        ->where('id', $request->id)
                        ->update($data);
                }
                if($request->action == 'delete')
                {
                    DB::table('admin_bet_match')
                        ->where('id', $request->id)
                        ->delete();
                }
                return response()->json($request);
            }
        }

    }
}
