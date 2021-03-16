@extends('layouts.user')

@section('css')

<!-- ION Slider -->
<link href="{{ URL::asset('plugins/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!---start-wrap---->
<!---  End Header ----->





<!----- Content ------------->
<!-- 
    <div class="menu" id="menu" align="center">
        <ul class="nav">
            <li class="active"><a href="/game/inplay">BACK TO IN PLAY GAMES</a></li>
        </ul>
    </div> -->



<form method="POST" action="insertmatchrec" accept-charset="UTF-8" id="myForm">
    <input name="uid" type="hidden" value={{ ucfirst(Auth()->user()->id) }}>
    <input id="rate" name="rate" type="hidden" value="">
    <input id="mode" name="mode" type="hidden" value="">
    <input id="match_code" name="match_code" type="hidden" value={{ app('request')->input('matchid') }}>
    <input id="team" name="team" type="hidden" value="">
    <input id="amount" name="amount" type="hidden" value="">
    <input id="sid" name="sid" type="hidden" value="">
    <input id="run" name="run" type="hidden" value="">
    <input id="sessionme" name="sessionme" type="hidden" value="">

</form>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td valign="top">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td align="left" valign="top">

                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>

                                        <tr>

                                            <td colspan="3" align="center" class="TeamCombo" bgcolor="#EF4156">
                                                <h5 >{{ ucfirst(Auth()->user()->email) }} {{ ucfirst(Auth()->user()->name) }} </h5>
                                               
                                             
                                                <h6 >Coin: {{$client_curr[0]->client_curr_limit }} </h6>
                                                

                                                <h6 > Session P/M:  {{$sess_pm[0]->ses_pm }} </h6>

                                            </td>

                                        </tr>

                                        <td colspan="3" align="center" class="TeamCombo" bgcolor="#52b5e1">
                                            <h5 id="ScoreMsg"></h5>
                                        </td>

                        </tr>
                        <tr>
                            <td width="35%" height="35" align="center" class="TeamCombo">
                                <div class="ScoreCard">
                                    <p>
                                        <span id="LocalPlayer"></span><br>
                                        <span id="VisitorPlayer"></span><br>
                                        BOWLER : <span id="Status"></span><br>
                                    </p>
                                </div>
                            </td>
                            <td width="45%" height="35" align="center" class="TeamCombo">
                                <div class="ScoreCard">
                                    <p>
                                        <span id="LocalTeam"></span><br>
                                        <span id="VisitorTeam"></span><br>
                                        6 BALLS : <span id="RecentBall"></span><br>
                                    </p>
                                </div>
                            </td>
                            <td width="20%" height="35" align="center" class="TeamCombo">
                                <div class="ScoreCard">
                                    <p>
                                        <span id="Image"><img src="" width="53" height="60"></span>
                                    </p>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </td>
        </tr>
        <tr>
            <td align="left" valign="top">

                <table id="MatchBets" width="100%" border="0" cellpadding="4" cellspacing="4">
                    <thead>
                        <tr>
                            <th width="46%" height="35" align="center" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px" style="vertical-align:middle">TEAM MARKET
                                <p>Max : 200000</p>
                            </th>
                            <th width="22%" align="center" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px" style="vertical-align:middle">LAGAI
                            </th>
                            <th width="22%" align="center" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px" style="vertical-align:middle">KHAI
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td height="35" align="center" valign="middle" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle">LIONS : <span style="color: #2b2bf5;margin: 10px"> </span></td>
                            <td align="center" valign="middle" bgcolor="#FFF" style="vertical-align:middle"><input type="button" value="0.00" class="ButtonYRun" onclick="betClick('LIONS','K','0.00',203)"></td>
                            <td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00"> <input type="button" name="FRate1" id="FRate1" value="0.00" class="ButtonL" onclick="betClick('LIONS','L','0.00',203)"></td>
                        </tr>
                        <tr>
                            <td height="35" align="center" valign="middle" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle">WARRIORS : <span style="color: #2b2bf5;margin: 10px"> </span></td>
                            <td align="center" valign="middle" bgcolor="#FFF" style="vertical-align:middle"><input type="button" value="0.00" class="ButtonYRun" onclick="betClick('WARRIORS','K','0.00',204)">
                            </td>
                            <td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00"> <input type="button" name="FRate1" id="FRate1" value="0.00" class="ButtonL" onclick="betClick('WARRIORS','L','0.00',204)"></td>
                        </tr>
                    </tbody>


                </table>

            </td>
        </tr>
        <tr>
            <td align="center" valign="bottom" bgcolor="#FFFFFF"></td>
        </tr>
        <tr>
            <td align="left" valign="top">
                <table width="100%" border="0" cellpadding="1" cellspacing="4" id="sessionTable">
                    <thead>
                        <tr>
                            <th width="46%" height="35" align="center" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px" style="vertical-align:middle">SESSION
                                <p>Max : 100000</p>
                            </th>
                            <th width="22%" align="center" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px" style="vertical-align:middle">NOT
                            </th>
                            <th width="22%" align="center" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px" style="vertical-align:middle">YES
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td height="35" align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="color:#00F;"><input type="button" name="Session1" id="Session1" value="T BAVUMA RUN LIONS" class="ButtonSess"></td>
                            <td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="color:#00F;"><input type="button" value="0.00" onclick="sendsession(2099,'NO',0.00,0.00)" class="ButtonNRun"><br>
                                <input type="button" value="0.00" class="ButtonNRate" readonly="" disabled="">
                            </td>
                            <td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="color:#0000ff;"><input type="button" value="0.00" onclick="sendsession(2099,'YES',0.00,0.00)" class="ButtonYRun"><br>
                                <input type="button" value="0.00" class="ButtonYRate" readonly="" disabled="">
                            </td>
                        </tr>
                    </tbody>


                </table>

            </td>

        </tr>
        <tr>
            <td align="left" valign="top">
                <table width="100%" border="0" cellpadding="4" cellspacing="4" id="PlaceBet">
                    <tbody>
                        <tr>
                            <td height="35" align="center" valign="middle" bgcolor="#00FFFF" class="FontTextBlue" style="vertical-align:middle">AMOUNT
                            </td>
                            <td align="center" valign="middle" bgcolor="#00FFFF" style="vertical-align:middle">
                                <input type="number" list="AmountList" class="MatchAmount" id="MatchAmount" onkeypress="return isNumber(event)" size="10" maxlength="7" readonly="" autocomplete="OFF">
                                <datalist id="AmountList">
                                    <option value="500"></option>
                                    <option value="1000"></option>
                                    <option value="1500"></option>
                                    <option value="2000"></option>
                                    <option value="2500"></option>
                                    <option value="3000"></option>
                                    <option value="3500"></option>
                                    <option value="4000"></option>
                                    <option value="4500"></option>
                                    <option value="5000"></option>
                                    <option value="10000"></option>
                                    <option value="15000"></option>
                                    <option value="20000"></option>
                                    <option value="25000"></option>
                                    <option value="30000"></option>
                                    <option value="35000"></option>
                                    <option value="40000"></option>
                                    <option value="45000"></option>
                                    <option value="50000"></option>
                                    <option value="100000"></option>
                                    <option value="150000"></option>
                                    <option value="200000"></option>
                                    <option value="250000"></option>
                                    <option value="300000"></option>
                                    <option value="350000"></option>
                                    <option value="400000"></option>
                                    <option value="450000"></option>
                                    <option value="500000"></option>
                                </datalist>
                            </td>
                            <td align="center" valign="middle" bgcolor="#00FFFF" style="vertical-align:middle"><input type="text" class="AmountTime" id="AmountTime" size="4" maxlength="3" readonly="" autocomplete="OFF"></td>
                            <td align="center" valign="middle" bgcolor="#00FFFF" style="vertical-align:middle"><input name="cmdDone" type="button" class="FontTextBlue" id="cmdDone" onclick="SubmitBit()" value="Done" disabled="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td valign="top">


            </td>
        </tr>
    </tbody>
</table>
</td>

</tr>
</tbody>
</table>
<br>
<table width="100%" border="0" cellspacing="4" cellpadding="4">

</table>

<table width="100%" border="0" cellspacing="4" cellpadding="4">


</table>

<br>

<table width="100%" border="0" cellspacing="4" cellpadding="4">
    <tbody>
        <tr>
            <td>
                <table width="100%" border="0" cellpadding="4" cellspacing="4" id="MyBets">
                    <tbody>
                        <tr>
                            <td height="25" align="center" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px">
                                Sr.
                            </td>
                            <td align="right" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px"> Rate</td>
                            <td align="right" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px">Amount</td>
                            <td align="center" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px"> Mode</td>
                            <td align="left" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px">Team</td>
                        </tr>
                        @foreach ($matchtable as $matchdata)
                        <tr>
                            <td align="center" valign="middle" class="FontTextWhite10px">{{ $matchdata->id }}</td>
                            <td align="right" valign="middle" class="FontTextWhite10px">{{ $matchdata->m_rate }}</td>
                            <td align="right" valign="middle" class="FontTextWhite10px">{{ $matchdata->m_amount }}</td>
                            <td align="center" valign="middle" class="FontTextWhite10px">{{ $matchdata->m_mode }}</td>
                            <td align="left" valign="middle" class="FontTextWhite10px">{{ $matchdata->team }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<br>
<table width="100%" border="0" cellspacing="4" cellpadding="4">
    <thead>
        <tr>
            <td height="25" align="center" bgcolor="#52b5e1" class="FontTextWhite10px">Sr.</td>
            <td align="left" bgcolor="#52b5e1" class="FontTextWhite10px">Session</td>
            <td align="right" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px">Rate</td>
            <td align="right" valign="middle" bgcolor="#52b5e1" class="FontTextWhite10px">Amount</td>
            <td align="right" bgcolor="#52b5e1" class="FontTextWhite10px">Run</td>
            <td align="center" bgcolor="#52b5e1" class="FontTextWhite10px">Mode</td>
            <td align="center" bgcolor="#52b5e1" class="FontTextWhite10px">Dec</td>
        </tr>

        @foreach ($matchsesstable as $matchsesstable)
        <tr>
            <td height="25" align="center" class="FontTextWhite10px">{{ $matchsesstable->id }}</td>
            <td align="left" valign="middle" class="FontTextWhite10px">{{ $matchsesstable->session_name }}</td>
            <td align="right" valign="middle" class="FontTextWhite10px">{{ $matchsesstable->m_rate }}</td>
            <td align="right" valign="middle" class="FontTextWhite10px">{{ $matchsesstable->m_amount }}</td>
            <td align="right" valign="middle" class="FontTextWhite10px">{{ $matchsesstable->run }}</td>
            <td align="center" valign="middle" class="FontTextWhite10px">{{ $matchsesstable->m_mode }}</td>
            <td align="center" valign="middle" class="FontTextWhite10px">{{ $matchsesstable->decl }}</td>
        </tr>
        @endforeach

    </thead>
    <tbody>

    </tbody>

</table>
<br>
<div class="menu" id="menu" align="center">
    <ul class="nav">
        <li class="active"><a href="/game/inplay">BACK TO IN PLAY GAMES</a></li>
    </ul>
</div>






</div>
<!----- End Content ------------->










</body>

</html>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/rangeslider-init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>
    var Rate = null;
    var Team = null;
    var Mode = null;
    var myForm = $('#myForm');
    var MatchAmount = $('#MatchAmount');
    var CmdDone = $('#cmdDone');
    CmdDone.prop('disabled', true);


    let dis = false;
    $(document).ready(function() {
        getData();
    });

    function getData() {
        // console.log("page",window.location.href);
        mid = (window.location.href).split("=")[1];
        let url = 'http://207.180.200.148:1213/api/v2/' + mid;
        let url1 = 'http://ezmata.com/11bett/maal.php?m_id='+ mid;
        console.log("url  ==  ", url);
        $.get(url, function(data, status) {

            if (status === 'success') {
               // setMatchbets(data.Match_ODDS)
                DisplayDataScore(data.Score_Board)
               // DisplayDataSession(data.Fancy_ODDS)
            }
            setTimeout(function() {
                getData();
            }, 1000)
        });
        $.get(url1, function(data, status) {

if (status === 'success') {
    setMatchbets(data.Match_ODDS)
    //DisplayDataScore(data.Score_Board)
    DisplayDataSession(data.Fancy_ODDS)
}
setTimeout(function() {
    getData();
}, 1000)
});
    }


    function setMatchbets(data) {


        $('#MatchBets tbody').empty();

        var colorMinus = '#ff2525';
        var colorPlus = '#2b2bf5';

        var team1 = 0;
        var team2 = 0;
        var team1span = null;
        var team2span = null;
        if (team1 < 0) {
            team1span = '<span style="color: ' + colorMinus + ';margin: 10px">0</span>';
        } else {
            team1span = '<span style="color: ' + colorPlus + ';margin: 10px">0</span>';
        }
        if (team2 < 0) {
            team2span = '<span style="color: ' + colorMinus + ';margin: 10px">0</span>';
        } else {
            team2span = '<span style="color: ' + colorPlus + ';margin: 10px">0</span>';
        }

        var tempI = 1;
        $.each(data, function(index, row) {

            if (tempI === 1) {
                var $tr = $('<tr>').append(
                    $(
                        '<td height="35" align="center" valign="middle" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle">')
                    .html(row.FavTeam + ' : ' + team1span),
                    $('<td align="center" valign="middle" bgcolor="#FFF" style="vertical-align:middle">').html(
                        '<input type="button" value="' + row.KRate +
                        '" class="btn btn-primary btn-sm" onclick="betClick(\'' + row.FavTeam + '\',\'K\',\'' + row.KRate +
                        '\',' + row.id + ')" />'),
                    $(
                        '<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00">')
                    .html(' <input type="button" name="FRate1" id="FRate1" value="' + row.LRate +
                        '" class="btn btn-secondary btn-sm"  onclick="betClick(\'' + row.FavTeam + '\',\'L\',\'' + row.LRate +
                        '\',' + row.id + ')"/>'
                    ),
                ).appendTo('#MatchBets tbody');
            } else if (tempI === 2) {
                var $tr = $('<tr>').append(
                    $(
                        '<td height="35" align="center" valign="middle" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle">')
                    .html(row.FavTeam + ' : ' + team2span),
                    $('<td align="center" valign="middle" bgcolor="#FFF" style="vertical-align:middle">').html(
                        '<input type="button" value="' + row.KRate +
                        '" class="btn btn-primary btn-sm" onclick="betClick(\'' + row.FavTeam + '\',\'K\',\'' + row.KRate +
                        '\',' + row.id + ')" />'),
                    $(
                        '<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00">')
                    .html(' <input type="button" name="FRate1" id="FRate1" value="' + row.LRate +
                        '" class="btn btn-secondary btn-sm"  onclick="betClick(\'' + row.FavTeam + '\',\'L\',\'' + row.LRate +
                        '\',' + row.id + ')"/>'
                    ),
                ).appendTo('#MatchBets tbody');
            } else {
                var $tr = $('<tr>').append(
                    $(
                        '<td height="35" align="center" valign="middle" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle">')
                    .text(row.FavTeam),
                    $('<td align="center" valign="middle" bgcolor="#FFF" style="vertical-align:middle">').html(
                        '<input type="button" value="' + row.KRate +
                        '" class="btn btn-primary btn-sm" onclick="betClick(\'' + row.FavTeam + '\',\'K\',\'' + row.KRate +
                        '\',' + row.id + ')" />'),
                    $(
                        '<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00">')
                    .html(' <input type="button" name="FRate1" id="FRate1" value="' + row.LRate +
                        '" class="btn btn-secondary btn-sm"  onclick="betClick(\'' + row.FavTeam + '\',\'L\',\'' + row.LRate +
                        '\',' + row.id + ')"/>'
                    ),
                ).appendTo('#MatchBets tbody');
            }
            tempI++;


        })
        if (dis) {
            $("#MatchBets :input").prop("disabled", true);

        }
    }

    function betClick(team, mode, rate, id) {


        let checkD = check(run, rate)
        if (checkD === true) {
            dis = true;
            // myForm.prop('action', 'http://www.98hub.in/odmsBet');
            $('#rate').val(rate);
            $('#mode').val(mode);
            $('#team').val(team);
            $('#sid').val(id);
            MatchAmount.attr('readonly', false)
            MatchAmount.focus();
            console.log(team, mode, rate);
            timerFuntion();
        } else {
            alert(checkD)
        }


    }

    const timeStart = 8;

    function task(i) {
        setTimeout(function() {
            $('#AmountTime').val((timeStart - i));
            if (i === 8) {
                dis = false;
                MatchAmount.val('');
                MatchAmount.prop('disabled', true)
                CmdDone.prop('disabled', true)
            }
        }, 1000 * i);
    }


    function timerFuntion() {
        var i = 0;

        MatchAmount.prop('disabled', false)
        MatchAmount.focus();
        CmdDone.prop('disabled', false)
        while (i <= timeStart) {
            task(i);
            i++;

        }

    }

    function SubmitBit() {

        console.log("jsygsgvsgvsgtvsgvsgsb");

        $('#amount').val(MatchAmount.val());


        if (MatchAmount.val() >= 0) {
            CmdDone.prop('disabled', true)
            myForm.submit();
        } else {
            alert('Bet Amount Less Than 100');
        }

    }


    function DisplayDataScore(response) {
        var data = response;

        // if (response == "")
        //     location.replace("./TC.php");
        var SB = 0;
        $.each(response, function(index, data) {
            if (data.FavTeam != "" && data.FavTeam != " ") {
                if (SB == 0) {
                    $("#LocalTeam").text(data.FavTeam + " " + data.LocalScore + " " + "(" + parseFloat(data
                        .LocalStat) + ")");
                    var SPlayer = data.Striker;
                    var LPlayer = data.PlayerName;
                    if (LPlayer == SPlayer)
                        var LS = "*";
                    else
                        var LS = "";

                    $("#LocalPlayer").text(data.PlayerName + " " + "(" + data.PlayerRun + ")" + LS);
                }
                if (SB == 1) {
                    $("#VisitorTeam").text(data.FavTeam + " " + data.LocalScore + " " + "(" + parseFloat(data
                        .LocalStat) + ")");

                    var SPlayer = data.Striker;
                    var VPlayer = data.PlayerName;
                    if (VPlayer == SPlayer)
                        var VS = "*";
                    else
                        var VS = "";

                    $("#VisitorPlayer").text(data.PlayerName + " " + "(" + data.PlayerRun + ")" + VS);
                }
                SB++;
            }
            $("#Status").text(data.ScoreStatus);
            $("#RecentBall").text(data.RecentBall);
            $("#ScoreMsg").text(data.MsgStatus);

            if (data.url == "" || data.url == " ") {
                $("#Image").html(
                    "<img src='http://www.98hub.in/vendor/images/blank.jpg' width='53' height='60' />");
            } else {
                $("#Image").html("<img src='http://www.98hub.in/vendor/" + data.url +
                    "' width='53' height='60' />");
            }
        });
    }
    let shu={};
    function DisplayDataSession(response) {

        $('#sessionTable tbody').empty();

        $.each(response, function(index, data) {
            shu[data.id]=data.SessionName;

            var $tr = $('<tr>').append(
                $('<td height="35" align="center" valign="middle" bgcolor="#FFF" class="textTeamHead"\n' +
                    'style="color:#00F;"><input type="Button" name="Session1"  id="Session1"\n' +
                    'value="' + data
                    .SessionName + '" class="ButtonNRat"/></td>'),
                $('<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead"\n' +
                    '    style="color:#00F;"><input type="button" value="' + data.NRun +
                    '" onclick="sendsession(' + data.id + ',\'NO\',' + data.NRate + ',' + data.NRun +
                    ')" class="btn btn-secondary btn-sm"/><br>\n' +
                    '    <input type="button"  value="' + data.NRate +
                    '" class="ButtonNRate" readonly disabled/>\n' +
                    '</td>'),
                $('<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead"\n' +
                    '    style="color:#0000ff;"><input type="button"  value="' + data.YRun +
                    '" onclick="sendsession(' + data.id + ',\'YES\',' + data.YRate + ',' + data.YRun +
                    ')" class="btn btn-primary btn-sm"/><br>\n' +
                    '    <input type="button" value="' + data.YRate +
                    '" class="ButtonYRate" readonly disabled/>\n' +
                    '</td>'),
            ).appendTo('#sessionTable tbody');
        });
        if (dis) {
            $("#sessionTable :input").prop("disabled", true);

        }

    }


    function check(run, rate) {

        if (run <= 0 || rate <= 0) {
            return 'Not Find any run or rate ';
        }
        return true;
    }

    function sendsession(id, mode, rate, run) {
        var session = shu[id];


        let checkD = check(run, rate)

        if (checkD === true) {
            dis = true;
            // myForm.prop('action', 'http://www.98hub.in/odmsBett/sesBet');
            $('#sid').val(id);
            $('#mode').val(mode)
            $('#rate').val(rate);
            $('#run').val(run)
            $('#sessionme').val(session);
            MatchAmount.attr('readonly', false)

            console.log(id, mode, rate, run, shu[id]);
            timerFuntion();

        } else {
            alert(checkD);
        }


    }

   
</script>

@endsection