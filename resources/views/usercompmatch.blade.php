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



<input id="rate" name="rate" type="hidden" value="">
<input id="mode" name="mode" type="hidden" value="">
<input id="match_code" name="match_code" type="hidden" value="764">
<input id="team" name="team" type="hidden" value="">
<input id="amount" name="amount" type="hidden" value="">
<input id="sid" name="sid" type="hidden" value="">
<input id="run" name="run" type="hidden" value="">
</form>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td valign="top">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td align="left" valign="top">

                                <table width="100%" border="0" bgcolor="#FF471A" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td height="35" align="center" class="TeamCombo">
                                                <p style="color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:13px;font-weight:bold;">566 BRISBANE HEAT V ADELAIDE STRIKERS (BBL T-20) 2020-12-23 00:00:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="padding-top:5px;">
                                <p class="price-btn price-btn-blue popup-with-zoom-anim" style="background-color:#3b394a;color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:15px;font-weight:bold;">
                                    Match Bet(s) Won By : ADELAIDE</p>

                                <table width="100%" border="0" cellpadding="2" cellspacing="2" id="MyBets">
                                    <tbody>
                                        <tr>
                                            <td colspan="6" align="center">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25" align="right" valign="middle" bgcolor="#888399" class="FontTextWhite10px"> Rate
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#888399" class="FontTextWhite10px">
                                                Amount
                                            </td>
                                            <td align="center" valign="middle" bgcolor="#888399" class="FontTextWhite10px">
                                                Mode
                                            </td>
                                            <td align="center" valign="middle" bgcolor="#888399" class="FontTextWhite10px">
                                                Team
                                            </td>
                                            <td align="right" valign="middle" bgcolor="#888399" class="FontTextWhite10px">BRISBANE</td>
                                            <td align="right" valign="middle" bgcolor="#888399" class="FontTextWhite10px">ADELAIDE
                                            </td>
                                        </tr>

                                        <tr bgcolor="#FFF">

                                            @foreach ($matchtable as $matchdata)
                                        <tr>
                                            <td height="25" align="right" class="FontText">{{ $matchdata->m_rate}}</td>
                                            <td align="right" class="FontText">{{ $matchdata->m_amount }}</td>
                                            <td align="center" class="FontText">{{ $matchdata->m_mode }}</td>
                                            <td align="center" class="FontText">{{ $matchdata->team }}</td>
                                        </tr>
                                        @endforeach
                                        </tr>


                        </tr>
                        <tr bgcolor="#FFF">
                            <td height="25" colspan="6" align="center" class="FontText" style="color:#00F;">You Won -160/- Coins.</td>


                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td align="center" valign="bottom">&nbsp;</td>
        </tr>
        <tr>
            <td align="center" valign="top" style="padding-top:5px;">
                <p class="price-btn price-btn-blue popup-with-zoom-anim" style="background-color:#3b394a;color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:15px;font-weight:bold;">
                    Session Bet(s)</p>
                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                    <tbody>
                        <tr>
                            <td colspan="5">
                            </td>
                        </tr>
                        <tr>
                            <td height="25" align="left" bgcolor="#888399" class="FontTextWhite10px">
                                Session
                            </td>
                            <td align="right" valign="middle" bgcolor="#888399" class="FontTextWhite10px">
                                Rate
                            </td>
                            <td align="right" valign="middle" bgcolor="#888399" class="FontTextWhite10px">
                                Amount
                            </td>
                            <td align="right" bgcolor="#888399" class="FontTextWhite10px">Runs</td>
                            <td align="center" bgcolor="#888399" class="FontTextWhite10px"> Mode</td>
                            <td align="center" bgcolor="#888399" class="FontTextWhite10px"> Dec</td>

                        </tr>
                        <tr bgcolor="#FFF">
                            @foreach ($matchsesstable as $matchsesstable)
                        <tr>
                            <td height="20" align="left" class="FontText">{{ $matchsesstable->session_name }}</td>
                            <td align="right" class="FontText">{{ $matchsesstable->m_rate }}</td>
                            <td align="right" class="FontText">{{ $matchsesstable->m_amount }}</td>
                            <td align="right" class="FontText">{{ $matchsesstable->run }}</td>
                            <td align="center" class="FontText">{{ $matchsesstable->m_mode }}</td>
                            <td align="center" class="FontText">{{ $matchsesstable->decl }}</td>
                        </tr>
                        @endforeach



                        <tr bgcolor="#FFF">
                            <td height="25" colspan="6" align="center" class="FontText" style="color:#F00;">You Lost -2500.</td>
                        </tr>
                    </tbody>
                </table>

            </td>
        </tr>
        <tr>
            <td valign="top">&nbsp;</td>
        </tr>

        <tr>
            <td valign="top" align="center">
                <p class="price-btn price-btn-blue popup-with-zoom-anim" style="background-color:#3b394a;color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:15px;font-weight:bold;">
                    Match Session Plus Minus</p>
            </td>
        </tr>
        <tr bgcolor="#FFF">
            <td height="25" colspan="6" align="center" class="FontText" style="color:#F00;">You Lost -2340 Coins.</td>
        </tr>
        <tr>
            <td valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" align="center">
                <p class="price-btn price-btn-blue popup-with-zoom-anim" style="background-color:#3b394a;color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:15px;font-weight:bold;">
                    My Commission</p>
            </td>
        </tr>
        <tr bgcolor="#FFF">
            <td height="25" colspan="6" align="center" class="FontText" style="color:#00F;">0</td>
        </tr>
        <tr>
            <td valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" align="center">
                <p class="price-btn price-btn-blue popup-with-zoom-anim" style="background-color:#3b394a;color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:15px;font-weight:bold;">
                    Amount After Comm.</p>
            </td>
        </tr>
        <tr bgcolor="#FFF">
            <td height="25" colspan="6" align="center" class="FontText" style="color:#F00;">You Lost -2340 Coins.</td>
        </tr>
        <tr>
            <td valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" align="center">
                <p class="price-btn price-btn-blue popup-with-zoom-anim" style="background-color:#3b394a;color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:15px;font-weight:bold;">
                    Mob. App. Charges</p>
            </td>
        </tr>
        <tr bgcolor="#FFF">
            <td height="25" colspan="6" align="center" class="FontText" style="color:#F00;">You
                Lost 0 Coins.
            </td>
        </tr>

        <tr>
            <td valign="top">&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" align="center">
                <p class="price-btn price-btn-blue popup-with-zoom-anim" style="background-color:#3b394a;color:#FFF;font-family:Verdana, Geneva, sans-serif;font-size:15px;font-weight:bold;">
                    Net Plus Minus</p>
            </td>
        </tr>
        <tr bgcolor="#FFF">
            <td height="25" colspan="6" align="center" class="FontText" style="color:#F00;">You Lost -2340 Coins.</td>
        </tr>
        <tr>
            <td valign="top"></td>
        </tr>
    </tbody>
</table>
</td>

</tr>
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
<script src="{{ URL::asset('plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/rangeslider-init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
@endsection