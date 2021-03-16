@extends('layouts.master')

@section('css')

<!-- ION Slider -->
<link href="{{ URL::asset('plugins/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="mt-0 header-title text-center p-3 mb-2 bg-success text-white">LEEWARD NEED 146 RUN FROM 183
                    BALLS</h3>
                <div class="table-responsive">
                    <table class="table table-hover table-sm m-0">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="Card">
                                        <p>
                                            <span id="LocalPlayer">D THOMAS (3)</span><br>
                                            <span id="VisitorPlayer">N KUMAR (33)*</span><br>
                                            BOWLER : <span id="Status"></span><br>
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="Card">
                                        <p>
                                            <span id="LocalTeam">JAMAICA 220/10 (48.5)</span><br>
                                            <span id="VisitorTeam">LEEWARD 75/3 (19.3)</span><br>
                                            6 BALLS : <span id="RecentBall">0 0 0 1 W 3</span><br>
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="Card">
                                        <p>
                                            <span id="Image"><img src="http://www.98hub.in/vendor/images/RAIN.png"
                                                    width="53" height="60"></span>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="p-3 mb-2 bg-info text-white">
                                <th>TEAM MARKET
                                    <p>Max : 100000</p>
                                </th>
                                <th>LAGAI
                                </th>
                                <th>KHAI
                                </th>
                            </tr>
                            <tr>
                                <td>LEEWARD : <span style="color: #2b2bf5;margin: 10px">0</span></td>
                                <td><input type="button" value="0.00" class="btn btn-light">
                                </td>
                                <td> <input type="button" name="FRate1" id="FRate1" value="0.00" class="btn btn-light">
                                </td>
                            </tr>
                            <tr>
                                <td>JAMAICA : <span style="color: #2b2bf5;margin: 10px">0</span></td>
                                <td><input type="button" value="0.00" class="btn btn-light">
                                </td>
                                <td> <input type="button" name="FRate1" id="FRate1" value="0.00" class="btn btn-light">
                                </td>
                            </tr>
                            <tr class="p-3 mb-2 bg-info text-white">
                                <th>SESSION
                                    <p>Max : 50000</p>
                                </th>
                                <th>NOT
                                </th>
                                <th>YES
                                </th>
                            </tr>
                            <tr>
                                <td><input type="button" name="Session1" id="Session1" value="20 OVER RUN LEEWARD"
                                        class="btn btn-light"></td>
                                <td><input type="button" value="0.00" class="btn btn-light"><br>
                                    <input type="button" value="0.00" class="btn btn-light" readonly="" disabled="">
                                </td>
                                <td><input type="button" value="0.00" class="btn btn-light"><br>
                                    <input type="button" value="0.00" class="btn btn-light" readonly="" disabled="">
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr class="p-3 mb-2 bg-warning text-dark">

                                <td>AMOUNT
                                </td>
                                <td>
                                    <input type="number" class="form-control" list="AmountList" autocomplete="OFF">
                                </td>
                                <td>
                                    <form>
                                        <div class="form-row">
                                            <div class="col">
                                                <input type="text" size="4" class="form-control" maxlength="3"
                                                    readonly="" autocomplete="OFF">
                                            </div>
                                            <div class="col">
                                                <input name="cmdDone" type="button" class="btn btn-light" id="cmdDone"
                                                    onclick="SubmitBit()" value="Done" disabled="">
                                            </div>
                                        </div>
                                    </form>


                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div> -->
<!-- 
<div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-body">
            <input type="text" id="range_07">
        </div>
        </div>
    </div>
</div> -->

<!-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-sm m-0">
                        <tbody>
                            <tr class="p-3 mb-2 bg-danger text-white">
                                <td>
                                    Sr.
                                </td>
                                <td> Rate</td>
                                <td>Amount
                                </td>
                                <td> Mode
                                </td>
                                <td>Team</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-sm m-0">
                        <tbody>
                            <tr>
                                <td>Sr.</td>
                                <td>Session</td>
                                <td>Rate</td>
                                <td>Amount</td>
                                <td>Run</td>
                                <td>Mode</td>
                                <td>Dec</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->


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
                                            <td colspan="3" align="center" class="TeamCombo" bgcolor="#52b5e1">
                                                <h5 id="match_status"></h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="35%" height="35" align="center" class="TeamCombo">
                                                <div class="ScoreCard">
                                                    <p>
                                                        <span id="LocalPlayer"></span><br>
                                                        <span id="VisitorPlayer"></span><br>
                                                        BOWLER : <span id="Status_bowl"></span><br>
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
                                                        <img id="Image" src="img/photo1.jpg" width="53" height="60">
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

                                <table id="MatchBets" width="100%" border="0" cellpadding="2" cellspacing="2">
                                    <thead>
                                        <tr>
                                            <th width="46%" height="35" align="center" bgcolor="#52b5e1" style="vertical-align:middle">TEAM MARKET
                                                <p>Max : 200000</p>
                                            </th>
                                            <th width="22%" align="center" bgcolor="#52b5e1" style="vertical-align:middle">LAGAI
                                            </th>
                                            <th width="22%" align="center" bgcolor="#52b5e1" style="vertical-align:middle">KHAI
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="team1" height="35" align="center" bgcolor="#FFF"> : <span style="color: #2b2bf5;margin: 10px">0</span></td>
                                            <td align="center" bgcolor="#FFF" style="vertical-align:middle"><button id="FRate1" type="button" value="0.00" class="btn btn-primary btn-sm">
                                            </td>
                                            <td align="center" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00"> <button type="button" name="FRate2" id="FRate2" value="0.00" class="btn btn-secondary btn-sm"></td>
                                        </tr>
                                        <tr>
                                            <td id="team2" height="35" align="center" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle"> : <span style="color: #2b2bf5;margin: 10px">0</span></td>
                                            <td align="center" bgcolor="#FFF" style="vertical-align:middle"><button type="button" id="FRate3" value="0.00" class="btn btn-primary btn-sm"></td>
                                            <td align="center" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00"> <button type="button" name="FRate4" id="FRate4" value="0.00" class="btn btn-secondary btn-sm"></td>
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
                                <table width="100%" border="0" cellpadding="0" cellspacing="2" id="sessionTable">
                                    <thead>
                                        <tr>
                                            <th width="46%" height="20px" align="center" bgcolor="#52b5e1" style="vertical-align:middle">SESSION
                                                <p>Max : 75000</p>
                                            </th>
                                            <th width="22%" align="center" bgcolor="#52b5e1" style="vertical-align:middle">NOT
                                            </th>
                                            <th width="22%" align="center" bgcolor="#52b5e1" style="vertical-align:middle">YES
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                            <td height="35" align="center"  bgcolor="#FFF"
                                                class="textTeamHead" style="color:#00F;"><h6></h6></td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#00F;"><input type="button" value="118.00"
                                                    onclick="sendsession(2005,'NO',1.00,118.00)" class="btn btn-secondary btn-sm"><br>
                                                <p>1.00</p>
                                            </td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#0000ff;"><input type="button" value="119.00"
                                                    onclick="sendsession(2005,'YES',1.00,119.00)"
                                                    class="btn btn-primary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35" align="center"  bgcolor="#FFF"
                                                class="textTeamHead" style="color:#00F;"><h6></h6></td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#00F;"><input type="button" value="127.00"
                                                    onclick="sendsession(2000,'NO',1.00,127.00)" class="btn btn-secondary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#0000ff;"><input type="button" value="128.00"
                                                    onclick="sendsession(2000,'YES',1.00,128.00)"
                                                    class="btn btn-primary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35" align="center"  bgcolor="#FFF"
                                                class="textTeamHead" style="color:#00F;"><h6></h6></td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#00F;"><input type="button" value="0.00"
                                                    onclick="sendsession(2001,'NO',0.00,0.00)" class="btn btn-secondary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#0000ff;"><input type="button" value="0.00"
                                                    onclick="sendsession(2001,'YES',0.00,0.00)" class="btn btn-primary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35" align="center"  bgcolor="#FFF"
                                                class="textTeamHead" style="color:#00F;"><h6></h6></td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#00F;"><input type="button" value="0.00"
                                                    onclick="sendsession(1987,'NO',0.00,0.00)" class="btn btn-secondary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#0000ff;"><input type="button" value="0.00"
                                                    onclick="sendsession(1987,'YES',0.00,0.00)" class="btn btn-primary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="35" align="center"  bgcolor="#FFF"
                                                class="textTeamHead" style="color:#00F;"><h6></h6></td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#00F;"><input type="button" value="0.00"
                                                    onclick="sendsession(2002,'NO',0.00,0.00)" class="btn btn-secondary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                            <td align="center"  bgcolor="#FFF" class="textTeamHead"
                                                style="color:#0000ff;"><input type="button" value="0.00"
                                                    onclick="sendsession(2002,'YES',0.00,0.00)" class="btn btn-primary btn-sm"><br>
                                                    <p>1.00</p>
                                            </td>
                                        </tr>
                                    </tbody> -->


                                </table>

                            </td>

                        </tr>
                        <tr>
                            <td align="left" valign="top">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" id="PlaceBet">
                                    <tbody>
                                        <tr>
                                            <td height="35" align="center" bgcolor="#00FFFF" class="FontTextBlue" style="vertical-align:middle">AMOUNT
                                            </td>
                                            <td align="center" bgcolor="#00FFFF" style="vertical-align:middle">
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
                                            <td align="center" bgcolor="#00FFFF" style="vertical-align:middle"><input type="text" class="AmountTime" id="AmountTime" size="4" maxlength="3" readonly="" autocomplete="OFF"></td>
                                            <td align="center" bgcolor="#00FFFF" style="vertical-align:middle"><input name="cmdDone" type="button" class="FontTextBlue" id="cmdDone" onclick="SubmitBit()" value="Done" disabled="">
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
<table width="100%" border="0" cellspacing="2" cellpadding="0">
    <tbody>
        <tr>
            <td>
                <table width="100%" border="0" cellpadding="2" cellspacing="2" id="MyBets">
                    <tbody>
                        <tr>
                            <td height="25" align="center" bgcolor="#52b5e1">
                                Sr.
                            </td>
                            <td align="right" bgcolor="#52b5e1">Rate</td>
                            <td align="right" bgcolor="#52b5e1">Amount</td>
                            <td align="center" bgcolor="#52b5e1">Mode</td>
                            <td align="left" bgcolor="#52b5e1">Team</td>
                        </tr>
                        <tr>
                            <td height="25" align="center">
                                Sr.
                            </td>
                            <td align="right">Rate</td>
                            <td align="right">Amount</td>
                            <td align="center">Mode</td>
                            <td align="left">Team</td>
                        </tr>



                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<table width="100%" border="0" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <td height="25" align="center" bgcolor="#52b5e1">Sr.</td>
            <td align="left" bgcolor="#52b5e1">Session</td>
            <td align="right" bgcolor="#52b5e1">Rate</td>
            <td align="right" bgcolor="#52b5e1">Amount</td>
            <td align="right" bgcolor="#52b5e1">Run</td>
            <td align="center" bgcolor="#52b5e1">Mode</td>
            <td align="center" bgcolor="#52b5e1">Dec</td>
        </tr>
        <tr>
            <td height="25" align="center">
                <p>1.</p>
            </td>
            <td align="left">Session</td>
            <td align="right">Rate</td>
            <td align="right">Amount</td>
            <td align="right">Run</td>
            <td align="center">Mode</td>
            <td align="center">Dec</td>
        </tr>
    </thead>
    <tbody>

    </tbody>

</table>





<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <table id="myTable" class="table table-hover table-sm m-0">
                        <tbody>
                            <tr class="p-3 mb-2 bg-info text-white">
                                <th>SESSION
                                    <p>Max : 50000</p>
                                </th>
                                <th>NOT
                                </th>
                                <th>YES
                                </th>
                            </tr>
                            <tr>
                                <td><input type="button" name="Session1" id="Session1" value="20 OVER RUN LEEWARD" class="btn btn-light"></td>
                                <td><input type="button" value="0.00" class="btn btn-light"><br>
                                    <input type="button" value="0.00" class="btn btn-light" readonly="" disabled="">
                                </td>
                                <td><input type="button" value="0.00" class="btn btn-light"><br>
                                    <input type="button" value="0.00" class="btn btn-light" readonly="" disabled="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover table-sm m-0">
                        <tbody>
                            <tr class="p-3 mb-2 bg-warning text-dark">

                                <td>AMOUNT
                                </td>
                                <td>
                                    <input type="number" class="form-control" list="AmountList" autocomplete="OFF">
                                </td>
                                <td>
                                    <form>
                                        <div class="form-row">
                                            <div class="col">
                                                <input type="text" size="4" class="form-control" maxlength="3" readonly="" autocomplete="OFF">
                                            </div>
                                            <div class="col">
                                                <input name="cmdDone" type="button" class="btn btn-light" id="cmdDone" onclick="SubmitBit()" value="Done" disabled="">
                                            </div>
                                        </div>
                                    </form>


                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <input type="text" id="range_07">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-sm m-0">
                        <tbody>
                            <tr class="p-3 mb-2 bg-danger text-white">
                                <td>
                                    Sr.
                                </td>
                                <td> Rate</td>
                                <td>Amount
                                </td>
                                <td> Mode
                                </td>
                                <td>Team</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-sm m-0">
                        <tbody>
                            <tr>
                                <td>Sr.</td>
                                <td>Session</td>
                                <td>Rate</td>
                                <td>Amount</td>
                                <td>Run</td>
                                <td>Mode</td>
                                <td>Dec</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ URL::asset('plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/rangeslider-init.js') }}"></script>
<script>
    setInterval(function() {
        console.log("print this once every 3 second");
        // $.getJSON('http://207.180.200.148:1213/api/v2/757', function(data) {
        //     console.log(data);

        //     var text = `Date: ${data.date}<br>
        //                 Time: ${data.time}<br>
        //                 Unix time: ${data.milliseconds_since_epoch}`


        //     $(".mypanel").html(text);
        // });
        fetch('http://207.180.200.148:1213/api/v2/764')
            .then(res => res.json())
            .then((out) => {
                let imgurl = `http://www.98hub.in/vendor/${out.Score_Board[0].url}`;
                // console.log(imgurl)
                let str1 = out.Score_Board[0].PlayerRun + ")";
                let str2 = out.Score_Board[1].PlayerRun + ")"

                if (out.Score_Board[0].PlayerName == out.Score_Board[0].Striker) {
                    str1 = out.Score_Board[0].PlayerRun + ")*";
                } else {
                    str2 = out.Score_Board[1].PlayerRun + ")*";
                }


                let batteam1 = out.Score_Board[0].FavTeam;
                let batteam2 = out.Score_Board[1].FavTeam;

                console.log(batteam1, batteam2)
                if (out.Score_Board[0].FavTeam == out.Score_Board[0].LocalTeam) {
                    batteam1 = "BATTING: " + batteam1;
                } else {
                    batteam2 = "BATTING: " + batteam2;
                }

                // console.log('Output: ', out.Score_Board[0].MsgStatus);


                $(document).ready(function() {
                    $("#match_status").text(out.Score_Board[0].MsgStatus);
                    $("#LocalPlayer").text(out.Score_Board[0].PlayerName + " " + "(" + str1);
                    $("#VisitorPlayer").text(out.Score_Board[1].PlayerName + " " + "(" + str2);
                    $("#Status_bowl").text(out.Score_Board[0].ScoreStatus);
                    document.getElementById('Image').src = imgurl;
                    $("#LocalTeam").text(batteam1 + " " + out.Score_Board[0].LocalScore + " (" + out.Score_Board[0].LocalStat + ")");
                    $("#VisitorTeam").text(batteam2 + " " + out.Score_Board[1].LocalScore + " (" + out.Score_Board[1].LocalStat + ")");
                    $("#RecentBall").text(out.Score_Board[0].RecentBall);
                    $("#team1").text(out.Score_Board[0].FavTeam + ": 0");
                    $("#team2").text(out.Score_Board[1].FavTeam + ": 0");
                    // $("#FRate1").text(out.Match_ODDS[0].LRate);
                    // $("#FRate2").text(out.Match_ODDS[0].KRate);
                    // $("#FRate3").text(out.Match_ODDS[1].LRate);
                    // $("#FRate4").text(out.Match_ODDS[1].KRate);
                    document.getElementById('FRate1').textContent = out.Match_ODDS[0].KRate;
                    document.getElementById('FRate2').textContent = out.Match_ODDS[0].LRate;
                    document.getElementById('FRate3').textContent = out.Match_ODDS[1].KRate;
                    document.getElementById('FRate4').textContent = out.Match_ODDS[1].LRate;
                    console.log(out.Match_ODDS[0].KRate)

                    for (let i = 0; i < out.Fancy_ODDS.length; i++) {
                        // console.log(out.Match_ODDS[1].KRate);
                        console.log(out.Fancy_ODDS[i]);
                        var table = document.getElementById("myTable");
                        var row = table.insertRow(1);
                        var cell1 = row.Cell(0);
                        var cell2 = row.Cell(1);
                        var cell3 = row.insertCell(2);

                        cell1.innerHTML = "NEW CELL224";
                        cell2.innerHTML = "NEW CELL2";
                        cell3.innerHTML = "NEW CELL2jh";

                    }


                });


            }).catch(err => console.error(err));
    }, 2000); //run this thang every 3 seconds


    function DisplayDataSession(response) {

        $('#sessionTable tbody').empty();

        $.each(response, function(index, data) {

            console.log("duniya madarchid hai", response);
            var $tr = $('<tr>').append(
                $('<td height="35" align="center" valign="middle" bgcolor="#FFF" class="textTeamHead"\n' +
                    '                                        style="color:#00F;"><input type="button" name="Session1" id="Session1"\n' +
                    '                                                                   value="' + data.SessionName + '" class="ButtonSess"/></td>'),
                $('<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead"\n' +
                    '    style="color:#00F;"><input type="button" value="' + data.NRun + '" onclick="sendsession(' + data.id + ',\'NO\',' + data.NRate + ',' + data.NRun + ')" class="ButtonNRun"/><br>\n' +
                    '    <input type="button"  value="' + data.NRate + '" class="ButtonNRate" readonly disabled/>\n' +
                    '</td>'),
                $('<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead"\n' +
                    '    style="color:#0000ff;"><input type="button"  value="' + data.YRun + '" onclick="sendsession(' + data.id + ',\'YES\',' + data.YRate + ',' + data.YRun + ')" class="ButtonYRun"/><br>\n' +
                    '    <input type="button" value="' + data.YRate + '" class="ButtonYRate" readonly disabled/>\n' +
                    '</td>'),
            ).appendTo('#sessionTable tbody');
        });
        if (dis) {
            $("#sessionTable :input").prop("disabled", true);

        }

    }
</script>
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

        let url = 'http://207.180.200.148:1213/api/v2/764';
        $.get(url, function(data, status) {

            if (status === 'success') {
                setMatchbets(data.Match_ODDS)
                DisplayDataScore(data.Score_Board)
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
                    $('<td height="35" align="center" valign="middle" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle">').html(row.FavTeam + ' : ' + team1span),
                    $('<td align="center" valign="middle" bgcolor="#FFF" style="vertical-align:middle">').html('<input type="button" value="' + row.KRate + '" class="ButtonYRun" onclick="betClick(\'' + row.FavTeam + '\',\'K\',\'' + row.KRate + '\',' + row.id + ')" />'),
                    $('<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00">').html(' <input type="button" name="FRate1" id="FRate1" value="' + row.LRate + '" class="ButtonL"  onclick="betClick(\'' + row.FavTeam + '\',\'L\',\'' + row.LRate + '\',' + row.id + ')"/>'),
                ).appendTo('#MatchBets tbody');
            } else if (tempI === 2) {
                var $tr = $('<tr>').append(
                    $('<td height="35" align="center" valign="middle" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle">').html(row.FavTeam + ' : ' + team2span),
                    $('<td align="center" valign="middle" bgcolor="#FFF" style="vertical-align:middle">').html('<input type="button" value="' + row.KRate + '" class="ButtonYRun" onclick="betClick(\'' + row.FavTeam + '\',\'K\',\'' + row.KRate + '\',' + row.id + ')" />'),
                    $('<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00">').html(' <input type="button" name="FRate1" id="FRate1" value="' + row.LRate + '" class="ButtonL"  onclick="betClick(\'' + row.FavTeam + '\',\'L\',\'' + row.LRate + '\',' + row.id + ')"/>'),
                ).appendTo('#MatchBets tbody');
            } else {
                var $tr = $('<tr>').append(
                    $('<td height="35" align="center" valign="middle" bgcolor="#FFF" class="FontTextBlue" style="vertical-align:middle">').text(row.FavTeam),
                    $('<td align="center" valign="middle" bgcolor="#FFF" style="vertical-align:middle">').html('<input type="button" value="' + row.KRate + '" class="ButtonYRun" onclick="betClick(\'' + row.FavTeam + '\',\'K\',\'' + row.KRate + '\',' + row.id + ')" />'),
                    $('<td align="center" valign="middle" bgcolor="#FFF" class="textTeamHead" style="vertical-align:middle;color:#F00">').html(' <input type="button" name="FRate1" id="FRate1" value="' + row.LRate + '" class="ButtonL"  onclick="betClick(\'' + row.FavTeam + '\',\'L\',\'' + row.LRate + '\',' + row.id + ')"/>'),
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
            myForm.prop('action', 'http://www.98hub.in/odmsBet');
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
        $('#amount').val(MatchAmount.val());


        if (MatchAmount.val() >= 100) {
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
                    $("#LocalTeam").text(data.FavTeam + " " + data.LocalScore + " " + "(" + parseFloat(data.LocalStat) + ")");
                    var SPlayer = data.Striker;
                    var LPlayer = data.PlayerName;
                    if (LPlayer == SPlayer)
                        var LS = "*";
                    else
                        var LS = "";

                    $("#LocalPlayer").text(data.PlayerName + " " + "(" + data.PlayerRun + ")" + LS);
                }
                if (SB == 1) {
                    $("#VisitorTeam").text(data.FavTeam + " " + data.LocalScore + " " + "(" + parseFloat(data.LocalStat) + ")");

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
                $("#Image").html("<img src='http://www.98hub.in/vendor/images/blank.jpg' width='53' height='60' />");
            } else {
                $("#Image").html("<img src='http://www.98hub.in/vendor/" + data.url + "' width='53' height='60' />");
            }
        });
    }




    function check(run, rate) {

        if (run <= 0 || rate <= 0) {
            return 'Not Find any run or rate ';
        }
        return true;
    }

    function sendsession(id, mode, rate, run) {


        let checkD = check(run, rate)

        if (checkD === true) {
            dis = true;
            myForm.prop('action', 'http://www.98hub.in/odmsBett/sesBet');
            $('#sid').val(id);
            $('#mode').val(mode)
            $('#rate').val(rate);
            $('#run').val(run)
            MatchAmount.attr('readonly', false)
            console.log(id, mode, rate, run);
            timerFuntion();

        } else {
</script>

@endsection

@section('script')
<script src="{{ URL::asset('plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/rangeslider-init.js') }}"></script>
@endsection