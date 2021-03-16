<?php
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('index');
// });

Route::group(['middleware' => ['auth']], function() {


Route::get('/index', function () {
    return view('index');
})->name('admin')->middleware('admin');

Route::get('/ledger-dashboard', function () {
    return view('ledger-dashboard');
});
Route::get('/my-ledger', function () {
    return view('my-ledger');
});
Route::get('/master-ledger', function () {
    return view('master-ledger');
});
Route::get('/super-master-ledger', function () {
    return view('super-master-ledger');
});
Route::get('/setting-dashboard', function () {
    return view('setting-dashboard');
});
Route::get('/change-password', function () {
    return view('change-password');
});

Route::get('/agent-ledger', function () {
    return view('agent-ledger');
});

Route::get('/super-agent-ledger', function () {
    return view('super-agent-ledger');
});

Route::get('/client-ledger', function () {
    return view('client-ledger');
});

Route::get('/all-collection-ledger', function () {
    return view('all-collection-ledger');
});


Route::get('/add-matches','App\Http\Controllers\MatchViewController@addmatches');
Route::get('/add-matches-data','App\Http\Controllers\MatchViewController@addmatchesdata');
Route::post('/add-m-data','App\Http\Controllers\MatchViewController@addmatchpost');



Route::get('/sport-dashboard', function () {
    return view('sport-dashboard');
});

//*******debits */
Route::get('/debit-card-client', function () {
    return view('debit-card-client');
});
Route::get('/debit-card-agent', function () {
    return view('debit-card-agent');
});

Route::get('/debit-card-superagent', function () {
    return view('debit-card-superagent');
});

Route::get('/debit-card-master', function () {
    return view('debit-card-master');
});

Route::get('/debit-card-supermaster', function () {
    return view('debit-card-supermaster');
});

//sport detail
Route::get('/sport-detail','App\Http\Controllers\MatchViewController@sportsdetail');
Route::get('sport-detail-report/{mid}','App\Http\Controllers\MatchViewController@sportsdetailreport');


//secure-code-report
Route::get('/secure-code-report', function () {
    return view('secure-code-report');
});
Route::get('logout','App\Http\Controllers\Controller@logout');

// Route::get('/logout', function () {
//     return view('logout');
// });
//****client */
Route::get('client-details','App\Http\Controllers\ClientViewController@show');
Route::get('/client-detail', function () {
    return view('client-detail');
});
Route::get('client-detail/{id}','App\Http\Controllers\ClientViewController@clientModifyStatus');
Route::get('client-agent','App\Http\Controllers\AgentViewController@showCName');
Route::post('client-create','App\Http\Controllers\ClientViewController@store');
Route::get('client-create/{id}','App\Http\Controllers\ClientViewController@getAgents');
Route::get('/client-create', function () {
    return view('client-create');
});
// Route::get('/rishi','App\Http\Controllers\ClientViewController@updateByCodeFunction');
Route::get('client-mod/{id}','App\Http\Controllers\ClientViewController@showData');
// Route::get('/client-modify', function () {
//     return view('client-modify');
// });
Route::post('/client-mod/new','App\Http\Controllers\ClientViewController@updateByCodeFunction');


//*****Agent */
Route::get('agent-details','App\Http\Controllers\AgentViewController@show');
Route::get('/agent-detail', function () {
    return view('agent-detail');
});
Route::get('agent-detail/{id}','App\Http\Controllers\AgentViewController@agentModifyStatus');
Route::get('/email-inbox', function () {
    return view('email-inbox');
});
Route::post('email-inbox','App\Http\Controllers\AgentViewController@agentStoreFunction');
Route::get('email-inbox','App\Http\Controllers\SuperAgentViewController@showSuperAgentsName1');
Route::get('email-inbox/{id}','App\Http\Controllers\AgentViewController@getSuperAgents');
Route::post('modify-agent','App\Http\Controllers\AgentViewController@modifyAgent');
Route::get('modify-agent/{id}','App\Http\Controllers\AgentViewController@getSuperAgents');
Route::get('modify-agent/{id}','App\Http\Controllers\AgentViewController@showData');
Route::get('/modify-agent', function () {
    return view('modify-agent');
});
//******Super Agent */
Route::get('superagent-detail','App\Http\Controllers\SuperAgentViewController@showSuperAgent');
Route::get('/superagent-details', function () {
    return view('superagent-details');
});
Route::get('superagent-detail/{id}','App\Http\Controllers\SuperAgentViewController@modifyStatus');

Route::get('/superagent-create', function () {
    return view('superagent-create');
});
Route::post('superagent-create','App\Http\Controllers\SuperAgentViewController@superAgentStoreFunction');
Route::get('superagent-create','App\Http\Controllers\MasterViewController@showMastersName');
Route::get('superagent-create/{id}','App\Http\Controllers\SuperAgentViewController@getMasters');
Route::get('/superagent-modify', function () {
    return view('superagent-modify');
});
Route::post('superagent-modify','App\Http\Controllers\SuperAgentViewController@modifySuperAgent');
Route::get('superagent-modify/{id}','App\Http\Controllers\SuperAgentViewController@showSuperAgentData');

//************ MASTER */
Route::get('master-details','App\Http\Controllers\MasterViewController@showMasters');
Route::get('/master-detail', function () {
    return view('/master-detail');
});
Route::get('master-detail/{id}','App\Http\Controllers\MasterViewController@masterModifyStatus');


Route::get('/master-create', function () {
    return view('master-create');
});
Route::post('/master-create','App\Http\Controllers\MasterViewController@masterStoreFunction');
Route::get('master-create','App\Http\Controllers\SuperMasterController@showSuperMastersName');
Route::get('master-create/{id}','App\Http\Controllers\MasterViewController@getSuperMasters');
Route::post('master-modify','App\Http\Controllers\MasterViewController@modifyMaster');
Route::get('master-modify/{id}','App\Http\Controllers\MasterViewController@showMasterData');
Route::get('/master-modify', function () {
    return view('master-modify');
});

//*************** Super Master */
Route::get('/supermaster-details','App\Http\Controllers\SuperMasterController@superMastershow');
Route::get('/supermaster-detail', function () {
    return view('/supermaster-detail');
});
Route::get('/supermaster-create', function () {
    return view('supermaster-create');
});
Route::post('/supermaster-create','App\Http\Controllers\SuperMasterController@superMasterStoreFunction');
Route::post('supermaster-modify','App\Http\Controllers\SuperMasterController@modifySuperMaster');
Route::get('/super_master-modify', function () {
    return view('super_master-modify');
});


Route::get('/match/{mid}','App\Http\Controllers\MatchViewController@matchbetable');
Route::post('/match/insertmatchrec','App\Http\Controllers\MatchViewController@insertmatch');


Route::get('/match-betting/{mid}','App\Http\Controllers\MatchViewController@createbetting');
Route::post('/match-betting/match-betting-add','App\Http\Controllers\MatchViewController@addsessionedata');
Route::post('/match-betting/match-betting-update','App\Http\Controllers\MatchViewController@addsessionedataupdate');
Route::post('tabledit/action', 'App\Http\Controllers\MatchViewController@actionsession')->name('tabledit.actionsession');
Route::post('/match-betting/match-add','App\Http\Controllers\MatchViewController@addmatchdata');
Route::post('tabledit/action1', 'App\Http\Controllers\MatchViewController@actionmatch')->name('tabledit.actionmatch');


// userside


Route::get('/usertm', function () {
    return view('usertm');
});
Route::get('/userindex', function () {
    return view('userindex');
});

Route::get('/userinplay','App\Http\Controllers\MatchViewController@matchdisplay');

Route::get('/userupcomming', function () {
    return view('userupcomming');
});
Route::get('/userupcomming','App\Http\Controllers\MatchViewController@matchupcomming');

Route::get('/usercompletegames','App\Http\Controllers\MatchViewController@matchcompleted');

Route::get('/usermyledger','App\Http\Controllers\MatchViewController@matchreportable');
Route::get('/usercompmatch/{mid}','App\Http\Controllers\MatchViewController@compmatchrepor');

});

//************** FirstPage */
Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('auth.pages-login');

});